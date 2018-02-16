<?php

use Illuminate\Database\Seeder;
use App\BlogPost;
use App\BLogCategory;

class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user = App\User::find(1);

		$category = new BlogCategory();
		$category->name = 'Uncategorized';
		$category->save();

        $post = new BLogPost();
        $post->title = "Lorem Ipsum";
        $post->slug = str_slug("Lorem Ipsum");
        $post->image = '/img/work1.jpg';
        $post->body = "<p>Suspendisse bibendum nisi eget ligula lobortis tincidunt. In ut sapien quis nisl blandit vestibulum nec hendrerit justo. Ut rhoncus, erat id dictum suscipit, diam metus laoreet orci, vel imperdiet velit orci a mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque dignissim orci quis pharetra. Aliquam erat volutpat. Donec a semper mi. Donec ac efficitur ante. Nunc a erat sit amet diam rhoncus scelerisque.</p>";
        $post->published_at = now();
        $post->category()->associate($category);
        $post->user()->associate($user);
        $post->save();

        $post = new BLogPost();
        $post->title = "Cat Ipsum";
        $post->slug = str_slug("Cat Ipsum");
        $post->image = '/img/work2.jpg';
        $post->body = "<p>Kitten kitty tiger bombay for american bobtail. Russian blue himalayan devonshire rex yet grimalkin. American shorthair norwegian forest singapura but egyptian mau abyssinian . Russian blue munchkin for savannah, mouser and jaguar and scottish fold. Singapura tiger but grimalkin bobcat. Cheetah turkish angora. American bobtail lynx. Lion bombay.</p>";
        $post->published_at = now();
        $post->category()->associate($category);
        $post->user()->associate($user);
        $post->save();
    }
}
