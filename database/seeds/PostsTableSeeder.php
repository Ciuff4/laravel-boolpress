<?php
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {
            $new_post= new Post;
            $new_post->title= $faker->word(50);
            $new_post->description= $faker->text(50);
            $new_post->slug= Post::slugGenerator($new_post->title) ;
            $new_post->save();
        };
    }
}
