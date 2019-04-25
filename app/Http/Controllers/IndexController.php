<?php
/**
 * Created by PhpStorm.
 * User: lanchongyang
 * Date: 2018/10/17
 * Time: 18:39
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class IndexController extends Controller
{
    //产品
    const product = 2;

    //项目工程
    const projects = 1;

//    const rongxing = 'https://www.rongxingzhileng.cn';
    const rongxing = 'http://www.coldrongxing.com/rongxing';

    /**
     * 主页面
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //产品
        $product = $this->changeData(self::product, false)['data'];
        //项目工程
        $projects = $this->changeData(self::projects, false)['data'];
        //新闻
        $news = array_slice($product,0,3);

        return view('rongxing/index/index',['product'=>$product,'projects'=>$projects,'news'=>$news]);
    }

    /**
     * 关于我们
     * @return array
     */
    public function about()
    {
        return view('rongxing/index/about');
    }

    /**
     * 荣誉资质
     */
    public function honor()
    {
        return view('rongxing/index/honor');
    }

    /**
     * 联系我们
     */
    public function contact()
    {
        return view('rongxing/index/contact');
    }

    /**
     * 产品展示页面
     */
    public function product(Request $request)
    {
        $page = $request->input('page',1);

        //产品
        $product = $this->changeData(self::product, true,$page);
        $count = $product['count'];
        $product = $product['data'];
        //分页类
        $paginator = $this->page($product,$count,$page);

        return view('rongxing/product/productList',compact('product','count','paginator'));
    }

    /**
     * 工程项目页面
     */
    public function projects(Request $request)
    {
        $page = $request->input('page',1);

        //产品
        $projects = $this->changeData(self::projects, true,$page);
        $count = $projects['count'];
        $projects = $projects['data'];
        //分页类
        $paginator = $this->page($projects,$count,$page);

        return view('rongxing/product/projectsList',compact('projects','count','paginator'));
    }

    /**
     * 改变展示页面的值
     */
    private function changeData($type, $have=true ,$page = 1)
    {
        $return = $this->getRepository('product')->getDetail($type,$have,$page);

        //查询工程信息
        $data = $return['project']['data'];
        //处理照片信息
        array_walk($data,function($val){
            preg_match_all('/<img.*?src="(.*?)".*?>/is',$val->thumbnail,$array);
            $val->showImage = self::rongxing.$array[1][0];
        });

        return ['data' => $data,'count' => $return['count']];
    }

    /**
     * 分页类
     * @param $items
     * @param $total
     * @param int $currentPage
     * @return LengthAwarePaginator
     */
    private function page($items, $total, $currentPage = 1)
    {
        $size = $this->getRepository('product')->size;

        $paginator =new LengthAwarePaginator($items, $total, $size, $currentPage, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);

        return $paginator;
    }

}