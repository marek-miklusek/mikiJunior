<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function change($locale)
    {
        App::setLocale($locale);

        session()->put('locale', $locale);

        return redirect('/');
    }
}
