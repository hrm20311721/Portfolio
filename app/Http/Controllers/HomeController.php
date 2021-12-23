<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Portfolio;

class HomeController extends Controller
{
    public function index(Skill $skill, Portfolio $portfolio)
    {
        $skills['front'] = $skill->front();
        $skills['back'] = $skill->back();
        $skills['others'] = $skill->others();
        $portfolios = Portfolio::all();

        return view('home',['skills' => $skills, 'portfolios' => $portfolios]);
    }
}
