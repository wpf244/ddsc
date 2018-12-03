<?php
use think\Route;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/*****************************************************************************************************设置后台登录模块**********************************************************************************/
//检测后台系统模块
     if(ADMIN_MODULE != 'admin')
    {
        Route::group(ADMIN_MODULE,function(){
            Route::rule(':controller/:action','admin/:controller/:action');
            Route::rule(':controller','admin/:controller/index');
            Route::rule('','admin/index/index');
          
        });
        Route::group('admin',function(){
            Route::rule(':controller/:action','shop/:controller/:action');
            Route::rule(':controller','shop/:controller/index');
            Route::rule('','shop/index/index');
        
        });
    }
