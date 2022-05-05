<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Faker\Factory;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNewsByCategory(int $cat_id)
    {   
        $news = $this->getNews();
        $newsByCategory = [];

        $index = 0;
        foreach ($news as $key => $value) {

            if ($key == 'category_id' && intval($value) == $cat_id) {
                $newsByCategory[] = $news[$index];
            }
            
            $index++;
        }
            
        return $newsByCategory;    
    }

    public function getCategories()
    {   
        $faker = Factory::create();
        
        return [
            1 => $faker->text(15),
            2 => $faker->text(15),
            3 => $faker->text(15),
            4 => $faker->text(15),
            5 => $faker->text(15),
        ];
    }

    public function getNews(int $id=null)
    {   
        $news = [];
        $faker = Factory::create();
        
        if($id)
        {
            return [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'image' => $faker->imageUrl($width=150, $height=100),
                'description' => $faker->text(150),
                'created_at' => now('Europe/Moscow'),
            ];
        }

        $cat_id = 0;
        for ($i=0; $i < 25; $i++) { 
            if($i % 5 == 0) $cat_id+=1;
            $id = $i+1;
            $news[] = [
                'id' => $id,
                'category_id' => $cat_id,
                'title' => $faker->jobTitle(),
                'image' => $faker->imageUrl($width=150, $height=100),
                'description' => $faker->text(150),
                'created_at' => now('Europe/Moscow'),
            ];
        }
        return $news;
    }
}
