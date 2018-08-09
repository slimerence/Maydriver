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
        $this->dataForView['pageTitle'] = '陪练课程与价格';
        $this->dataForView['metaKeywords'] = '陪练课程与价格';
        $this->dataForView['metaDescription'] = '陪练课程与价格';
        return view(_get_frontend_theme_path('pages.courses'),$this->dataForView);
    }
    public function learn(){
        $this->dataForView['pageTitle'] = '路考知识';
        $this->dataForView['metaKeywords'] = '路考知识';
        $this->dataForView['metaDescription'] = '路考知识';
        return view(_get_frontend_theme_path('pages.learn'),$this->dataForView);
    }
    public function term(){
        $this->dataForView['pageTitle'] = 'Terms';
        $this->dataForView['metaKeywords'] = 'Terms and condition';
        $this->dataForView['metaDescription'] = 'Terms and condition';
        return view(_get_frontend_theme_path('pages.terms'),$this->dataForView);
    }
}