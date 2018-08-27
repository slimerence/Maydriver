<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9
 * Time: 21:49
 */

namespace Smartbro\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Models\Page;

class CustomController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function courses(){
        $this->dataForView['pageTitle'] = '澳洲考驾照 | 澳洲学车';
        $this->dataForView['metaKeywords'] = '澳洲考驾照 | 澳洲学车';
        $this->dataForView['metaDescription'] = '墨尔本首发驾校为学员提供可负担的高质量的陪练课程套餐，为学员在澳洲学车以及考驾照保驾护航。更多详细澳洲学车信息，请致电：0421279588。';
        return view(_get_frontend_theme_path('pages.courses'),$this->dataForView);
    }
    public function learn(){
        $this->dataForView['pageTitle'] = '墨尔本驾校 | 学车';
        $this->dataForView['metaKeywords'] = '墨尔本驾校 | 学车';
        $this->dataForView['metaDescription'] = '墨尔本首发驾校为学员提供专业学车培训和练习。学车之前需要先了解澳洲驾照考试的基本信息，以便帮助学校更好的了解考试。本驾校为学员精心挑选学习内容以及道路知识练习。Sofa墨尔本驾校，您的伴考好伙伴。';
        return view(_get_frontend_theme_path('pages.learn'),$this->dataForView);
    }
    public function term(){
        $this->dataForView['pageTitle'] = 'Terms';
        $this->dataForView['metaKeywords'] = 'Terms and condition';
        $this->dataForView['metaDescription'] = 'Terms and condition';
        return view(_get_frontend_theme_path('pages.terms'),$this->dataForView);
    }
    /**
     * News 页面
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function news(Request $request){
        $news = Page::where('type',Page::$TYPE_NEWS)->orderBy('updated_at','desc')->paginate(20);
        $this->dataForView['news'] = $news;
        $this->dataForView['pageTitle'] = '墨尔本练车 | 华人驾校';
        $this->dataForView['metaKeywords'] = '墨尔本练车 | 华人驾校';
        $this->dataForView['metaDescription'] = '墨尔本首发驾校帮助众多学员成功考取澳洲驾照。墨尔本专业华人驾校为学院提供优质练车训练和服务。这里是部分墨尔本练车路考结果展示，更多信息请致电：0421279588。';
        return view(_get_frontend_theme_path('templates.news_list'), $this->dataForView);
    }

}