<?php

namespace App\Http\Controllers\Admin;

use Analytics;
use App\Social;
use App\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Analytics\Period;

class AdminController extends Controller
{
    public function index()
    {
        return redirect('/admin/dashboard');
    }

    public function profile()
    {
        $user = auth()->user();
        $socials = Social::all();
        return view('admin.profile.edit', compact('user', 'socials'));
    }

    public function patchProfile(Request $request)
    {
        // get current user
        $user = auth()->user();

        // update user
        $user->name = $request->name;
        $user->save();

        // update profile
        if (is_null($user->profile)) {
            $profile = new Profile();
            $profile->user_id = $user->id;
        } else {
            $profile = $user->profile;
        }
        $profile->site = $request->site;
        $profile->bio = $request->bio;
        $profile->save();

        // update image
        $file = $request->file('image');
        if (!is_null($file)) {
            $path = $file->store('public/files');
            $profile->image = $path;
            $profile->save();
        }

        // update social
        $sid = array();
        foreach ($request->socials as $id => $link) {
            if (!empty($link)) {
                $sid[$id] = array('link' => $link);
            }
        }
        $user->socials()->sync($sid);

        // info
        session()->flash('message', 'Profile has been updated');

        // redirect
        return redirect('/admin/profile');
    }

    public function dashboard()
    {
        $period = Period::days(7);
        $vpUnique = Analytics::fetchTotalVisitorsAndPageViews($period);
        $userTypes = Analytics::fetchUserTypes($period);
        $mostVisitedPages = Analytics::fetchMostVisitedPages($period);
        $topReferrers = Analytics::fetchTopReferrers($period);
        $topBrowsers = Analytics::fetchTopBrowsers($period);
        //return $period;


        $response = Analytics::performQuery($period, 'ga:sessions', [
            'dimensions' => 'ga:countryIsoCode,ga:country',
            'sort' => '-ga:sessions'
        ]);
        $topCountryVisitor = collect($response['rows'] ?? [])->map(function (array $row) {
            return [
                'iso_code' => $row[0],
                'country' => $row[1],
                'sessions' => (int) $row[2],
            ];
        });

        $iso_code = $topCountryVisitor->pluck('iso_code');
        $sessions = $topCountryVisitor->pluck('sessions');
        $vectorMap = $iso_code->combine($sessions);
        //dd($iso_code->combine($sessions)->toJson());

        $response = Analytics::performQuery($period, 'ga:sessions', [
            'dimensions' => 'ga:operatingSystem',
            'sort' => '-ga:sessions'
        ]);
        $topOperatingSystems = collect($response['rows'] ?? [])->map(function (array $row) {
            return [
                'os' => $row[0],
                'sessions' => (int) $row[1]
            ];
        });

        return view(
            'admin.dashboard.index',
            compact(
                'vpUnique',
                'userTypes',
                'mostVisitedPages',
                'topReferrers',
                'topBrowsers',
                'vectorMap',
                'topOperatingSystems'
            )
        );
    }

    public function default()
    {
        return view('admin.default');
    }
}
