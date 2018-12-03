<?php
namespace app\admin\controller;

class User extends BaseAdmin
{
    //总代理
    public function index()
    {
        $phone=\input('phone');
        if($phone){
            $map['phone']=array("like",'%'.$phone.'%');
            $map['level']=3;
        }else{
            $phone="";
            $map['level']=3;
        }
        $this->assign("phone",$phone);
        $list=db("user")->order("uid desc")->where($map)->paginate(10,false,['query'=>request()->param()]);
        //初始返积分
        $score=db('score')->where('id=1')->find()['integ'];
        foreach($list as $k=>$v){
            $integf=$v['integf'];//本账户 每日返分比例
            $bili=($score+$integf)/1000;//总返积分比例
            $integs=number_format($bili*$v['integ_zong'],2);//返积分数=比例*总积分 保留两位小数
            if($v['integz'] != 0){
                $v['integ_f']=$integs;
            }else{
                $v['integ_f']=$v['integf'];
            }
            $list[$k]=$v;
        }

        $this->assign("list",$list);
        
        $page=$list->render();
        $this->assign("page",$page);
        
        return \view('index');
    }
    //经销商
    public function index_j()
    {
        $phone=\input('phone');
        if($phone){
            $map['phone']=array("like",'%'.$phone.'%');
            $map['level']=2;
        }else{
            $phone="";
            $map['level']=2;
        }
        $this->assign("phone",$phone);
        $list=db("user")->order("uid desc")->where($map)->paginate(10,false,['query'=>request()->param()]);
        //初始返积分
        $score=db('score')->where('id=1')->find()['integ'];
        foreach($list as $k=>$v){
            if($v['integz'] != 0){
                $v['integ_f']=($score+$v['integf']);
            }else{
                $v['integ_f']=$v['integf'];
            }
            $list[$k]=$v;
        }

        $this->assign("list",$list);

        $page=$list->render();
        $this->assign("page",$page);

        return \view('index_j');
    }
    //普通会员
    public function index_p()
    {
        $phone=\input('phone');
        if($phone){
            $map['phone']=array("like",'%'.$phone.'%');
            $map['level']=1;
        }else{
            $phone="";
            $map['level']=1;
        }
        $this->assign("phone",$phone);
        $list=db("user")->order("uid desc")->where($map)->paginate(10,false,['query'=>request()->param()]);
        //初始返积分
        $score=db('score')->where('id=1')->find()['integ'];
        foreach($list as $k=>$v){
            if($v['integz'] != 0){
                $v['integ_f']=($score+$v['integf']);
            }else{
                $v['integ_f']=$v['integf'];
            }
            $list[$k]=$v;
        }

        $this->assign("list",$list);

        $page=$list->render();
        $this->assign("page",$page);

        return \view('index_p');
    }
    //增加用户待返积分
    public function add_integz()
    {
       if($this->request->isAjax()){
           $uid=\input('id');
           $integz=\input("integz");
           $re=db("user")->where("uid=$uid")->find();
           if($re){
               $res=db("user")->where("uid=$uid")->setInc("integz",$integz);
               db("user")->where("uid=$uid")->setInc("integ_zong",$integz);
               $data['uid']=$uid;
               $data['type']="系统赠送待返积分".$integz;
               $data['integ']=$integz;
               $data['time']=\time();
               $data['status']=1;
               db("ji_log")->insert($data);
               if($res){
                   echo '1';
               }else{
                   echo '2';
               }
           }else{
               echo '3';
           }
       }else{
           echo '0';
       }
       
    }
    /*//增加用户每日释放积分
    public function add_integf()
    {
        if($this->request->isAjax()){
            $uid=\input('id');
            $integz=\input("integz");
            $re=db("user")->where("uid=$uid")->find();
            if($re){
                $res=db("user")->where("uid=$uid")->setInc("integf",$integz);
                db("user")->where("uid=$uid")->setInc("integ_zong",$integz);
                if($res){
                    echo '1';
                }else{
                    echo '2';
                }
            }else{
                echo '3';
            }
        }else{
            echo '0';
        }
         
    }*/
    //增加用户可用积分
    public function add_integ()
    {
        if($this->request->isAjax()){
            $uid=\input('id');
            $integz=\input("integz");
            $re=db("user")->where("uid=$uid")->find();
            if($re){
                $res=db("user")->where("uid=$uid")->setInc("integ",$integz);
                 
                $data['uid']=$uid;
                $data['type']="系统赠送积分".$integz;
                $data['integ']=$integz;
                $data['time']=\time();
                $data['status']=1;
                db("ji_log")->insert($data);
                if($res){
                    echo '1';
                }else{
                    echo '2';
                }
            }else{
                echo '3';
            }
        }else{
            echo '0';
        }
         
    }

    //减少用户待返积分
    public function min_integz()
    {
        if($this->request->isAjax()){
            $uid=\input('id');
            $integz=\input("integz");
            $re=db("user")->where("uid=$uid")->find();
            if($re){
                $res=db("user")->where("uid=$uid")->setDec("integ_zong",$integz);
                db("user")->where("uid=$uid")->setDec("integ_zong",$integz);

                $data['uid']=$uid;
                $data['type']="系统扣除待返积分".$integz;
                $data['integ']=$integz;
                $data['time']=\time();
                $data['status']=1;
                db("ji_log")->insert($data);
                if($res){
                    echo '1';
                }else{
                    echo '2';
                }
            }else{
                echo '3';
            }
        }else{
            echo '0';
        }

    }
    /*//减少用户每日释放积分
    public function min_integf()
    {
        if($this->request->isAjax()){
            $uid=\input('id');
            $integz=\input("integz");
            $re=db("user")->where("uid=$uid")->find();
            if($re){
                $res=db("user")->where("uid=$uid")->setDec("integf",$integz);
                db("user")->where("uid=$uid")->setDec("integ_zong",$integz);
                if($res){
                    echo '1';
                }else{
                    echo '2';
                }
            }else{
                echo '3';
            }
        }else{
            echo '0';
        }

    }*/
    //减少用户可用积分
    public function min_integ()
    {
        if($this->request->isAjax()){
            $uid=\input('id');
            $integz=\input("integz");
            $re=db("user")->where("uid=$uid")->find();
            if($re){
                $res=db("user")->where("uid=$uid")->setDec("integ",$integz);

                $data['uid']=$uid;
                $data['type']="系统扣除积分".$integz;
                $data['integ']=$integz;
                $data['time']=\time();
                $data['status']=1;
                db("ji_log")->insert($data);
                if($res){
                    echo '1';
                }else{
                    echo '2';
                }
            }else{
                echo '3';
            }
        }else{
            echo '0';
        }

    }


    //积分明细
    public function detail()
    {
        $id=\input('id');
        $list=db("ji_log")->where("uid=$id")->order("id desc")->paginate(10,false,['query'=>request()->param()]);
        $this->assign("list",$list);
        
        $page=$list->render();
        $this->assign("page",$page);
        
        return \view('detail');
    }
    //下级代理
    public function lister()
    {
        $phone=\input('phone');
        if($phone){
            $map['phone']=array("like",'%'.$phone.'%');
        }else{
            $phone="";
            $map=[];
        }
        $this->assign("phone",$phone);
        $id=\input('id');
        $list=db("user")->order("uid desc")->where("fid=$id")->where($map)->paginate(10,false,['query'=>request()->param()]);
        $this->assign("list",$list);
        
        $page=$list->render();
        $this->assign("page",$page);
        
        return \view("lister");
    }
    //删除会员
    public function delete()
    {
        $id=\input('id');
        $re=db("user")->where("uid=$id")->find();
        if($re){
            $del=db("user")->where("uid=$id")->delete();
            $car=db("car")->where("uid=$id")->select();
            if($car){
                $del_car=db("car")->where("uid=$id")->delete();
            }
            $car_dd=db("car_dd")->where("uid=$id")->select();
            if($car_dd){
                $del_car_dd=db("car_dd")->where("uid=$id")->delete();
            }
            $this->redirect('index');
        }else{
            $this->redirect('index');
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
}