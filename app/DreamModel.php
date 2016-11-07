<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DreamModel extends Model
{
	//表名
    protected $table = 'dream';
    //数据库字段
    protected $fillable = [
        'ID',
        'Group',
        'Title',
        'Detail',
        'Url'
    ];
    //没有管理时间戳
    public $timestamps = false;
    //定义主键
    protected $primaryKey = 'ID';





}
