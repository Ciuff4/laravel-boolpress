<?php
use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['Spring','Summer','Autumn','Winter','All Seasons'];
        foreach ($data as $tag) {
            $new_tag= new Tag;
            $new_tag->name=$tag;
            $new_tag->slug=Str::slug($tag, '_');
            $new_tag->save();
        };
    }
}
