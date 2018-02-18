<?php

use Illuminate\Database\Seeder;
use App\Social;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1 = new Social();
        $s1->provider = 'Facebook';
        $s1->icon = 'facebook-square';
        $s1->save();

        $s2 = new Social();
        $s2->provider = 'Twitter';
        $s2->icon = 'twitter-square';
        $s2->save();

        $s3 = new Social();
        $s3->provider = 'Google+';
        $s3->icon = 'google-plus-square';
        $s3->save();

        $s4 = new Social();
        $s4->provider = 'Github';
        $s4->icon = 'github-square';
        $s4->save();

        $s5 = new Social();
        $s5->provider = 'Free Code Camp';
        $s5->icon = 'free-code-camp';
        $s5->save();

        $s6 = new Social();
        $s6->provider = 'Youtube';
        $s6->icon = 'youtube-square';
        $s6->save();
    }
}
