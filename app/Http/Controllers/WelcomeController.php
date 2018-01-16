<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
    public function index()
    {
        $languages = [
            'Perl',
            'PHP',
            'Python',
        ];
        Log::debug($languages);
        debugbar()->error('This is a testing: Something is definitely going wrong.');

        return view('welcome.index');
    }
}
