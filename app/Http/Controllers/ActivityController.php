<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;

class ActivityController extends Controller
{

    public function show()
    {
        $activity = Activity::with('category')->inRandomOrder()->first();
        return view('activity.show',['activity' => $activity]);
    }
}
