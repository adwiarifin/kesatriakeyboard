<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Social;
use App\Profile;
use Analytics;
use Carbon\Carbon;
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
        if(is_null($user->profile)){
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
        if(!is_null($file)){
            $path = $file->store('public/files');
            $profile->image = $path;
            $profile->save();
        }

        // update social
        $sid = array();
        foreach($request->socials as $id => $link){
            if(!empty($link)){
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
        //retrieve visitors and pageview data for the current day and the last seven days
        $startDate = Carbon::now()->subDays(7);
        $endDate = Carbon::now();
        $period = Period::create($startDate, $endDate);

        //$vpUnique = Analytics::fetchVisitorsAndPageViews($period);
        $vpUnique = Analytics::fetchTotalVisitorsAndPageViews($period);
        //$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        //$analyticsData = Analytics::fetchMostVisitedPages(Period::days(7));
        //$analyticsData = Analytics::fetchTopReferrers(Period::days(7));
        $userTypes = Analytics::fetchUserTypes(Period::days(7));
        //$analyticsData = Analytics::fetchTopBrowsers(Period::days(7));
        //return $period;
        //dd($userTypes);

        $labels = array();
        $date = clone $startDate;
        while($date < $endDate){
            $labels[] = $date->day;
            $date->addDay();
        }

        $visitorsUnique = collect([0, 0, 0, 0, 0, 0, 0, 0]);
        $pageViewsUnique = collect([0, 0, 0, 0, 0, 0, 0, 0]);
        foreach($vpUnique as $vp){
            $date = $vp['date'];
            $index = $date->day - $startDate->day;
            $visitorsUnique[$index] += $vp['visitors'];
            $pageViewsUnique[$index] += $vp['pageViews'];
        }

        // $visitors = collect([$visitorsTotal, $visitorsUnique]);
        // $pageViews = collect([$pageViewsTotal, $pageViewsUnique]);
        //dd($vpUnique);

    	return view('admin.dashboard.index', compact('labels', 'pageViewsUnique', 'visitorsUnique', 'userTypes'));
    }

    public function default()
    {
        return view('admin.default');
    }
}
