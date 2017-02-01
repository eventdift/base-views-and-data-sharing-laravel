<?php

namespace App\Http\viewComposers;

use Illuminate\View\View;

use App\brand;
use App\characters;
use App\product;
use App\category;

class layoutComposer{

    public function compose(View $view){
        $brands = brand::all();
        $characters = characters::all();
        $categories = category::all();
        $view->with([
            'categories' => $categories,
            'brands' => $brands,
            'characters' => $characters
            ]);
    }

}

