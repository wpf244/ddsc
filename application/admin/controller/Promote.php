<?php
namespace app\admin\controller;

class Promote extends BaseAdmin
{
    public function index()
    {
        $key=input('key');
        if($key){
           $map["username|idcode|phone"]=array('like','%'.$key.'%'); 
        }else{
            $map=[];
        }
        
        $list=db("promote")->where("status=0")->where($map)->order("pid desc")->paginate(20,false,['query'=>request()->param()]);
        $this->assign("list",$list);
        $page=$list->render();
        $this->assign("page",$page);
        return view('index');
    }
    public function detail()
    {
        $id=input('id');
        $re=db("promote")->where("pid=$id")->find();
        $this->assign("re",$re);
        return view('detail');
    }
    public function adopt()
    {
        $id=input('id');
        $re=db("promote")->where("pid=$id")->find();
        if($re){
            if($re['status'] == 0){
               $data['ttime']=\time();
               $data['status']=1;
               $res=db("promote")->where("pid=$id")->update($data);
               $uid=$re['u_id'];
               $reu=db("user")->where("uid=$uid")->find();
               $level=\input('levle');
               if($reu){
                   $reus=db("user")->where("uid=$uid")->setField("level",$level);
               }
               $this->redirect('index');
            }else{
                $this->redirect('index');
            }
        }else{
            $this->redirect('index');
        }
    }
    public function reject()
    {
        $pid=\input('pid');
        $re=db("promote")->where("pid=$pid")->find();
        if($re){
            if($re['status'] == 0){
                $data['reject']=\input('reject');
                $data['status']=2;
                $res=db("promote")->where("pid=$pid")->update($data);
                if($res){
                    $this->success("操作成功",\url('index'));
                }else{
                    $this->error("操作失败",\url('index'));
                }
            }else{
                $this->error("系统繁忙，请稍后再试",\url('index'));
            }
        }else{
            $this->error("系统繁忙，请稍后再试",\url('index'));
        }
    }
    public function lister()
    {
        $key=input('key');
        if($key){
            $map["username|idcode|phone"]=array('like','%'.$key.'%');
        }else{
            $map=[];
        }
        
        $list=db("promote")->where("status=1")->where($map)->order("pid desc")->paginate(20,false,['query'=>request()->param()]);
        $this->assign("list",$list);
        $page=$list->render();
        $this->assign("page",$page);
        return \view('lister');
    }
    public function delete()
    {
        $id=\input('id');
        $re=db("promote")->where("pid=$id")->find();
        if($re){
            $del=db("promote")->where("pid=$id")->delete();
            $this->redirect("lister");
        }else{
            $this->redirect("lister");
        }
    }
    public function listerb()
    {
        $key=input('key');
        if($key){
            $map["username|idcode|phone"]=array('like','%'.$key.'%');
        }else{
            $map=[];
        }
        
        $list=db("promote")->where("status=2")->where($map)->order("pid desc")->paginate(20,false,['query'=>request()->param()]);
        $this->assign("list",$list);
        $page=$list->render();
        $this->assign("page",$page);
        return \view('listerb');
    }
    public function deleteb()
    {
        $id=\input('id');
        $re=db("promote")->where("pid=$id")->find();
        if($re){
            $del=db("promote")->where("pid=$id")->delete();
            $this->redirect("listerb");
        }else{
            $this->redirect("listerb");
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}