<?php
namespace app\admin\model;

use think\Db;
use think\Model;

class GoodsType extends Model
{
    
    public function getTypelist()
    {
        $res=Db::name('type')->select();
        
        return $res;
    }
    public function save_type($data,$id="")
    {
        if(empty($id)){
            $re=\db('type')->insert($data);
            return $re;
        }else{
            
        }
    }
}
