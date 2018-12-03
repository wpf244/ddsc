<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-03
 * Time: 14:33
 */

namespace app\admin\controller;

use app\admin\model\GoodsType;

class Goods extends BaseAdmin
{
    private $model = "";
    public function _initialize()
    {
        parent::_initialize();
        $this->model = new GoodsType();
    }
    public function goods_type()
    {
        $list = $this->model->getTypelist();
        
        $this->assign("list",$list);
        
        return $this->fetch();
    }
    public function save_type()
    {
        $data=\input('post.');
        if(!\is_string(\input('image'))){
            $data['type_image']=\uploads('image');
        }
        $re=$this->model->save_type($data);
        if($re){
            $this->success("添加成功",\url('goods_type'));
        }else{
            $this->error("添加失败");
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}