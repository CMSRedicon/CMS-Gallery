<?php
namespace Redicon\CMS_Gallery\Database\Seeds;
use Illuminate\Database\Seeder;
use Redicon\CMS_Gallery\App\Models\ArticlesCategories;

class ArticlesCategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticlesCategories::create([
            'position' => 1
        ]);
        ArticlesCategories::create([
            'position' => 2
        ]);
    }
}
