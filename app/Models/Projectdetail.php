<?php
/**
 * Created by PhpStorm.
 * User: lanchongyang
 * Date: 2018/10/18
 * Time: 11:39
 */

namespace App\Models;

class Projectdetail extends BaseModel
{
    /**
     * 主键
     *
     * @Id()
     * @Column(name="id", type=Types::INT)
     * $var null|int
     */
    private $id;

    /**
     * 公司简介
     *
     * @Column(name="company", type="string")
     * @var string
     */
    private $company;

    /**
     * 详细内容
     *
     * @Column(name="content", type="text")
     * @var string
     */
    private $content;

    /**
     * 照片地址
     *
     * @Column(name="image", type="string")
     * @var string
     */
    private $image;

    /**
     * 项目主键
     *
     * @Column(name="projectid", type="string")
     * @var string
     */
    private $projectid;

    /**
     * 时间显示
     *
     * @Column(name="time", type="string")
     * @var string
     */
    private $time;

    /**
     * 名称
     *
     * @Column(name="title", type="string")
     * @var string
     */
    private $title;

    /**
     * 状态
     *
     * @Column(name="id", type=Types::INT)
     * $var null|int
     */
    private $status;

    /**
     * 与模型关联的数据表。
     * @var string
     */
    protected $table = 'projectdetail';

    /**
     * 执行模型是否自动维护时间戳.
     * @var bool
     */
    public $timestamps = false;

    public $primaryKey = 'id';



}