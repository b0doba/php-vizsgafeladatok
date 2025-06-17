<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Activity;
use App\Models\Category;

class CategoryController extends Controller
{


    public function show(Category $category)
    {
        $categ = Category::findOrFail($category->id);

        $activity = $categ->activity()->inRandomOrder()->first();

        return view('category.show',['activity' => $activity]);

    }

}
