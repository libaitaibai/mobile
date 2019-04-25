<?php
/**
 * Created by PhpStorm.
 * User: lanchongyang
 * Date: 2018/10/18
 * Time: 11:38
 */

namespace App\Models;

class Project extends BaseModel
{
    /**
     * 主键ID
     *
     * @Id()
     * @Column(name="projectid", type=Types::INT)
     * $var null|int
     */
    private $projectid;

    /**
     * 简单描述
     *
     * @Column(name="description", type="string")
     * @var string
     */
    private $description;

    /**
     * 发布判断
     *
     * @Column(name="public", type="string")
     * @var string
     */
    private $public;

    /**
     * 照片地址
     *
     * @Column(name="small", type="string")
     * @var string
     */
    private $small;

    /**
     * 缩略图地址
     *
     * @Column(name="thumbnail", type="string")
     * @var string
     */
    private $thumbnail;

    /**
     * 发布时间
     *
     * @Column(name="time", type="string")
     * @var string
     */
    private $time;

    /**
     * 内容
     *
     * @Column(name="title", type="string")
     * @var string
     */
    private $title;

    /**
     * 类型
     *
     * @Column(name="type", type=Types::INT)
     * @var int
     */
    private $type;

    /**
     * 状态
     *
     * @Column(name="status", type=Types::INT)
     * @var int
     */
    private $status;


    /**
     * 与模型关联的数据表。
     * @var string
     */
    protected $table = 'project';

    /**
     * 执行模型是否自动维护时间戳.
     * @var bool
     */
    public $timestamps = false;

    public $primaryKey = 'projectid';
}