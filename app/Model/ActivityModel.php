<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ActivityModel extends Model
{
    /**
     * 与模型关联的表名
     *
     * @var string
     */

    protected $table = 'activity';
    protected $primaryKey='activity_id';
    /**
     * 指示模型是否自动维护时间戳
     *
     * @var bool
     */
    //批量添加
    protected $guarded = [];
    public $timestamps = false;
    /**
     * 模型的连接名称
     *
     * @var string
     */
    protected $connection = 'shixun_2_ku';
    //如果你需要自定义存储时间戳的字段名，
    //可以在模型中设置 CREATED_AT 和 UPDATED_AT 常量的值来实现：
//    const CREATED_AT = 'creation_date';
//    const UPDATED_AT = 'last_update';
}
