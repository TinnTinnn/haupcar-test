<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AppController extends Controller
{
    public function index() : View
    {
        return view('index');
    }

    public function create() : View
    {
        return view('create');
    }

    public function store(Request $request)
    {
        return view('store');
    }

    public function show($id)
    {
        return view('show');
    }

    public function edit()
    {
        return view('edit');
    }

    public function update(Request $request, $id)
    {
        return view('update');
    }

    public function destroy($id)
    {
        return view('destroy');
    }
}
