<?php
/**

* 朵朵科技

* 官方网址 www.dd371.com

*  ===============

* @date: 2018年11月29日 上午11:53:05

* @author: Administrator

*/
namespace app\admin\controller;

use app\admin\model\Shop;

class Shops extends BaseAdmin
{
   
    
    public function lister()
    {
        $shop = new Shop();
        
        $list = $shop->getList();
        $this->assign("list",$list['list']);
        $this->assign("page",$list['page']);
        

        return $this->fetch();
    }
    public function add()
    {
        return $this->fetch();
    }
    public function save()
    {
        $data=\input('post.');
        if(!\is_string(\input('shop_logo_index'))){
            $data['shop_logo_index']=\uploads('shop_logo_index');
        }
        if(!\is_string(\input('shop_logo'))){
            $data['shop_logo']=\uploads('shop_logo');
        }
        if(!\is_string(\input('shop_image'))){
            $data['shop_image']=\uploads('shop_image');
        }
        if(input('shop_status')){
            $data['shop_status']=1;
        }
        if(\input('shop_groom')){
            $data['shop_groom']=1;
        }
        $data['shop_time']=\time();
        $shop= new Shop();
        $re=$shop->addShop($data);
        
        $arr['admin']=\session('username');
        $arr['type']="添加店铺";
        
        $this->logs->add_logs($arr);
        
        if($re){
            $this->success("保存成功");
        }else{
            $this->error("保存失败");
        }
        
    }
    public function change()
    {
        $shop=new Shop();
        $id=\input('id');
        $res=$shop->change_status($id);
        if($res){
            echo '1';
        }else{
            echo '0';
        }
    }
    public function changes()
    {
        $id=\input('id');
        $shop=new Shop();
        
        $res=$shop->change_groom($id);
        if($res){
            echo '1';
        }else{
            echo '0';
        }
    }
    public function modifys()
    {
        $id=\input('id');
        $shop=new Shop();
        
        $re=$shop->get_shop($id);
        $this->assign("re",$re);
        
        return $this->fetch();
    }
    public function usave()
    {
        $shop=new Shop();
        $id=\input('shop_id');
        
        $re=$shop->get_shop($id);
        if($re){
            $data=\input('post.');
            if(!\is_string(\input('shop_logo_index'))){
                $data['shop_logo_index']=\uploads('shop_logo_index');
            }else{
                $data['shop_logo_index']=$re['shop_logo_index'];
            }
            if(!\is_string(\input('shop_logo'))){
                $data['shop_logo']=\uploads('shop_logo');
            }else{
                $data['shop_logo']=$re['shop_logo'];
            }
            if(!\is_string(\input('shop_image'))){
                $data['shop_image']=\uploads('shop_image');
            }else{
                $data['shop_image']=$re['shop_image'];
            }
            if(input('shop_status')){
                $data['shop_status']=1;
            }else{
                $data['shop_status']=0;
            }
            if(\input('shop_groom')){
                $data['shop_groom']=1;
            }else{
                $data['shop_groom']=0;
            }
            
            $res=$shop->update_shop($id, $data);
            if($res){
                $this->success("修改成功",\url('lister'));
            }else{
                $this->error('修改失败');
            }
        }else{
            $this->error('参数错误',url('lister'));
        }
    }
    public function sort(){
        $data=input('post.');
       
        $shop = new Shop();
        
        $res = $shop -> sort_shop($data);
        
        $this->redirect('lister');
    }

    
    
    
    
    
    
    
    
}