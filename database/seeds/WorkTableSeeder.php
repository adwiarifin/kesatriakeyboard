<?php

use Illuminate\Database\Seeder;
use App\Work;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $work = new Work();
        $work->name = "Lorem Ipsum";
        $work->slug = str_slug("Lorem Ipsum");
        $work->image = "/img/work1.jpg";
        $work->platform = "Web";
        $work->framework = "Laravel";
        $work->description = "<p>Suspendisse bibendum nisi eget ligula lobortis tincidunt. In ut sapien quis nisl blandit vestibulum nec hendrerit justo. Ut rhoncus, erat id dictum suscipit, diam metus laoreet orci, vel imperdiet velit orci a mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque dignissim orci quis pharetra. Aliquam erat volutpat. Donec a semper mi. Donec ac efficitur ante. Nunc a erat sit amet diam rhoncus scelerisque.</p>";
        $work->save();
    }
}
