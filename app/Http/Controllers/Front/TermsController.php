<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TermsController extends Controller
{

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return view('front.terms');
    }
}
