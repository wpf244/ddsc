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
        $list_one=db('type')->where("pid=0")->select();
        if(!empty($list_one)){
            foreach($list_one as $k => $v){
                 $list_one[$k]['level']=1;
                 $list_two=db("type")->where("pid={$v['type_id']}")->select();
                 
                 if(!empty($list_two)){
                     foreach($list_two as $kk => $vv){
                         $list_two[$kk]['level']=2;
                         $list_three=db('type')->where("pid={$vv['type_id']}")->select();
                         
                         foreach($list_three as $kkk => $vvv){
                             $list_three[$kkk]['level']=3;
                         }
                         $list_two[$kk]['list_three']=$list_three;
                     }
                    
                 }
                 $list_one[$k]['list_two']=$list_two;
                 
            }
        }
      //  var_dump($list_one);exit;
        $this->assign("list_one",$list_one);
        return $this->fetch();
    }

    public function add_type()
    {
        $list=db('type')->where("fid=0")->select();
        foreach($list as $k => $v){
            $list[$k]['lists']=db('type')->where("fid={$v['type_id']}")->select();
        }
        $this->assign("list",$list);
        return $this->fetch();
    }
    public function save_type()
    {
        $data=\input('post.');
        if(!\is_string(\input('image'))){
            $data['type_image']=\uploads('image');
        }
        if(\input('status')){
            $data['status']=1;
        }else{
            $data['status']=0;
        }
        $re=$this->model->save_type($data);
        if($re){
            $this->success("添加成功",\url('goods_type'));
        }else{
            $this->error("添加失败");
        }
    }
    public function save_types()
    {
        $content=request()->post("content","");
        $arr=json_decode($content,true);
        foreach ($arr as $category){
            $category_info_arr = json_decode($category, true);            
            $data['pid']=$category_info_arr['pid'];
            $data['type_name']=$category_info_arr['categoryName'];
            $data['type_sort']=$category_info_arr['sort'];
            $re=db("type")->insert($data);
        }
        
        if($re){
            $this->success("添加成功");
        }else{
            $this->error("添加失败");
        }
    }
    public function usave_types()
    {
       
        $type_id=\input('fieldid');
        $type_name=input("fieldname");
        $type_val=\input("fieldvalue");
        $data["$type_name"]=$type_val;
        $res=db("type")->where("type_id=$type_id")->update($data);
        if($res){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }

    }
    public function lister()
    {
        $list=\db('goods')->order('g_sort asc')->paginate(10);

        $page=$list->render();

        $this->assign("list",$list);
        $this->assign("page",$page);
        
        return $this->fetch();
    }
    public function add()
    {
        $res=db("type")->select();
        $this->assign("res",$res);

        return $this->fetch();
    }
    public function save()
    {
        var_dump(input('post.'));
    }
    public function uploadimg()
    {
        $file = request()->file('images');
        // 移动到框架应用根目录/public/uploads 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        
        if($info){
            // 成功上传后 获取上传信息
            $data['response'] = $info->getSaveName();
            return json($data);
            
            //图片上传成功，以下可对数据库操作
            // ......
            
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }
    
    
    
    
    
    
    
    
    
    
}