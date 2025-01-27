<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function screen1()
    {
        $result = Animal::query()->paginate(20);

        return view('screen1', ['result' => $result]);
    }
}
