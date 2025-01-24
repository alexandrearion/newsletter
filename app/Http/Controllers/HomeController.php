<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function store(NewsletterRequest $request)
    {
        Newsletter::create($request->all());
    }
}
