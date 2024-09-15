<?php
namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\travel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('home', [
            'trains' => $trains,
        ]);
    }

    public function page()
    {
        return view('page');
        $travel = travel::all();

        return view('page', [
            'travels' => $travels,
        ]);
    }
}