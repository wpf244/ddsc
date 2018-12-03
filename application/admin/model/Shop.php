<?php
/**

* 朵朵科技

* 官方网址 www.dd371.com

*  ===============

* @date: 2018年11月30日 下午3:41:53

* @author: Administrator

*/
namespace app\admin\model;

use think\Model;

class Shop extends Model
{
    protected $table = "ddsc_shop";
    /**
    
    * 添加店铺
    
    * @date: 2018年11月30日 下午3:42:01
    
    * @author: Administrator
    
    * @param: $data array
    
    * @return:
    
    */
    public function addShop($data)
    {
        $re=$this->insert($data);
        
        return $re;
    }
    /**
    
    * 获取店铺列表
    
    * @date: 2018年11月30日 下午4:40:16
    
    * @author: Administrator
    
    * @param: variable
    
    * @return:$data
    
    */
    public function getList()
    {
        $list = $this->order('shop_sort asc')->paginate(10,false,['query'=>request()->param()]);
        
        $page=$list->render();
        
        $data['page']=$page;
        $data['list']=$list;
        
        
        return $data;
    }
  /**
      
      * 修改状态
      
      * @date: 2018年11月30日下午5:45:36
      
      * @author: echo
      
      * @param: 
      
      * @return:
      
      */
    public function change_status($id)
    {
        $re= $this->where("shop_id=$id")->find();
        if($re){
            if($re['shop_status'] == 0){
                $res=$this->where("shop_id=$id")->update(['shop_status'=>1]);
            }
            if($re['shop_status'] == 1){
                $res=$this->where("shop_id=$id")->update(['shop_status'=>0]);
            }
            return $res;
        }else{
            return false;
        }
    }
    /**
        
        * 修改店铺推荐
        
        * @date: 2018年12月3日上午9:17:21
        
        * @author: echo
        
        * @param: 
        
        * @return:
        
        */
    public function change_groom($id)
    {
        $re= $this->where("shop_id=$id")->find();
        if($re){
            if($re['shop_groom'] == 0){
                $res=$this->where("shop_id=$id")->update(['shop_groom'=>1]);
            }
            if($re['shop_groom'] == 1){
                $res=$this->where("shop_id=$id")->update(['shop_groom'=>0]);
            }
            return $res;
        }else{
            return false;
        }
    }
    /**
        
        * 获取店铺详情
        
        * @date: 2018年12月3日上午9:22:26
        
        * @author: echo
        
        * @param: 
        
        * @return:
        
        */
    public function get_shop($id)
    {
        $re=$this->where("shop_id=$id")->find();
        if($re){
            return $re;
        }else{
            return false;
        }
    }
    /**
        
        * 保存修改
        
        * @date: 2018年12月3日上午10:19:23
        
        * @author: echo
        
        * @param: 
        
        * @return:
        
        */
    public function update_shop($id,$data)
    {
        $res=$this->where("shop_id=$id")->update($data);
        return $res;
    }
    /**
        
        * 排序
        
        * @date: 2018年12月3日上午11:11:59
        
        * @author: echo
        
        * @param: 
        
        * @return:
        
        */
    public function sort_shop($data)
    {
        foreach ($data as $id => $sort){
           $res = $this->where(array('shop_id' => $id ))->setField('shop_sort' , $sort);
        }
        return $res;
    }
    
    
    
    
    
 
    
    
    
    
    
    
    
    
    
    
}