<?php

namespace HiuAuthSDK\Http\Controllers\Index;

use Illuminate\Http\Request;
use HiuAuthSDK\Http\Controllers\Controller;
use Services\Users\UserService;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        print $this->user()->getMailAddress();


        return view('welcome');
    }
}
