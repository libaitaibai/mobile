<?php
/**
 * Created by PhpStorm.
 * User: lanchongyang
 * Date: 2018/10/18
 * Time: 15:45
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
//    const rongxing = 'https://www.rongxingzhileng.cn';
    const rongxing = 'http://www.coldrongxing.com/rongxing';
    /**
     * 项目展示
     */
    public function project(Request $request,$pid)
    {
        $projectid = $pid;
        if(empty($projectid)){
            throw new \Exception('参数错误!');
        }

        //查询详细数据
        $ProjectDetail = $this->getRepository('product')->getOneDetail($projectid);

        //照片处理
        preg_match_all('/<img.*?src="(.*?)".*?>/is',$ProjectDetail->image,$array);
        $imsges = array_map(function($val){
            return self::rongxing.$val;
        },$array[1]);
        $ProjectDetail->images = $imsges;

        return view('rongxing/product/projectDetail',compact('ProjectDetail'));
    }

    /**
     * 产品展示
     */
    public function product(Request $request,$pid)
    {
        $projectid = $pid;
        if(empty($projectid)){
            throw new \Exception('参数错误!');
        }

        //查询详细数据
        $productDetail = $this->getRepository('product')->getOneDetail($projectid);

        return view('rongxing/product/productDetail',compact('productDetail'));
    }
}