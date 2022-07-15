<?php
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['recipe', 'travel', 'news','sport', 'psychology'];
        foreach ($data as $category) {
            $new_category= new Category;
            $new_category->name= $category;
            $new_category->slug= Str::slug($new_category->name . '_');
            $new_category->save();
        }
    }
}
