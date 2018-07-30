<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9
 * Time: 21:49
 */

namespace Smartbro\Controllers;


use App\Http\Controllers\Controller;

class CustomController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function courses(){
        return view(_get_frontend_theme_path('pages.courses'),$this->dataForView);
    }
    public function learn(){
        return view(_get_frontend_theme_path('pages.learn'),$this->dataForView);
    }
    public function term(){
        return view(_get_frontend_theme_path('pages.404'),$this->dataForView);
    }
}