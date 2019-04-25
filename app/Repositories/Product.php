<?php
/**
 * Created by PhpStorm.
 * User: lanchongyang
 * Date: 2018/10/18
 * Time: 11:35
 */

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Project;

class Product extends  BaseRepository
{
    /**
     * 每页显示数据的多少
     */
    public $size = 6;

    /**
     * 获得产品或者工程列表信息
     */
    public function getDetail(int $type, $have = true, int $page = 1):array
    {
        $project = DB::table('project')
                    ->where("type",$type)
                    ->where("public",1)
                    ->where("status",'>',0)
                    ->orderBy('projectid','desc')
                    ->paginate($this->size,['*'],'page',$page)->toArray();

        $have ? $count = DB::table('project')
                    ->where("type",$type)
                    ->where("public",1)
                    ->where("status",'>',0)
                    ->count()
        :$count = 1;

        return compact('project','count');
    }

    /*
     * 获得产品或者工程单个信息
     */
    public function getOneDetail($projectid)
    {
        if(empty($projectid)){
            return [];
        }

        $data = DB::table('projectdetail')
            ->where("status",'>',0)
            ->where("projectid",$projectid)
            ->first();
        return $data;
    }
}