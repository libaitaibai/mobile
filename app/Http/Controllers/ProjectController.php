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
    const rongxingMaster = 'https://www.rongxingzhileng.cn';
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
        preg_match_all('/<video.*?src="(.*?)".*?>/is',$ProjectDetail->content,$video);

        //视频的地址替换
        if(!empty($video[1])){
            $content = $ProjectDetail->content;
            foreach ($video[1] as $key => $val){
                $video_path = self::rongxingMaster.$val;
                $content = str_replace($val,$video_path,$content);
            }
            $ProjectDetail->content = $content;
        }

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