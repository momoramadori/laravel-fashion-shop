<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clothes;

class ClothesController extends Controller
{
    public function index() {
        $clothes = Clothes::all();
        $data = [
            'clothes' => $clothes
        ];
        return view('home', $data);
    }
}
