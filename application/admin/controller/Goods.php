<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-03
 * Time: 14:33
 */

namespace app\admin\controller;

class Goods extends BaseAdmin
{
    public function goods_type()
    {
        return $this->fetch();
    }
}