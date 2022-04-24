<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function create(TodoRequest $request)
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function update()
    {
        $items =Todo::all();
        return view('index', ['items' => $items]);
    }
    public function delete()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }

}
