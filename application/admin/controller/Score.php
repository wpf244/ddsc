<?php
namespace app\admin\controller;

class Score extends BaseAdmin
{
    public function lister()
    {
        $re=db("score")->where("id=1")->find();
        $this->assign("re",$re);
        return view('lister');
    }
    public function save()
    {
        $data['integ']=input('integ');
        $res=db("score")->where("id=1")->update($data);
        if($res){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    public function index()
    {
        $re=db("integ")->where("id=1")->find();
        $this->assign("re",$re);
        return view('index');
    }
    public function saves()
    {
        $data=input('post.');
        $res=db("integ")->where("id=1")->update($data);
        if($res){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    public function add()
    {
        $re=db("score")->where("id=2")->find();
        $this->assign("re",$re);
        return view('add');
    }
    public function savea()
    {
        $data['integ']=input('integ');
        $res=db("score")->where("id=2")->update($data);
        if($res){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    public function ratio()
    {
        $re=db("score")->where("id=3")->find();
        $this->assign("re",$re);
        return view('ratio');
    }
    public function saver()
    {
        $data['integ']=input('integ');
        $res=db("score")->where("id=3")->update($data);
        if($res){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}