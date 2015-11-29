<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('posts_tags')->truncate();

		$arrayPost = $arrayTag = array();

		if (Schema::hasTable('posts') && Schema::hasTable('tags')) {
			for ($i = 0 ; $i <= 20 ; $i++) {
				do {
					$posts = Post::all()->lists('id')->toArray();
					$arrayPost[$i] = $posts[array_rand($posts)];
				} while (!in_array($arrayPost[$i], $arrayPost));

				do {
					$tags = Tag::all()->lists('id')->toArray();
					$arrayTag[$i] = $tags[array_rand($tags)];
				} while (!in_array($arrayTag[$i], $arrayTag));
			}

			for ($i = 0 ; $i <= 20 ; $i++) {
				DB::table('posts_tags')->insert(['post_id' => $arrayPost[$i], 'tag_id' => $arrayTag[$i]]);
			}
		}
	}
}
