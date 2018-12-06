<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 删除图片
 */
function deleteImg($oldImg){
    if($oldImg != ''){
        $path = ROOT_PATH . 'public' . DS .$oldImg;
        if ($path != ROOT_PATH . 'public' . DS) {
            if(is_file($path) == true) {
                unlink($path);
            }
        }
    }
}
/**
 * 上传图片
 * **/
function uploads($image){
    $file = request()->file("$image");
    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
    $pa=$info->getSaveName();
    $path=str_replace("\\", "/", $pa);
    $paths='/uploads/'.$path;
    $images=\think\Image::open(ROOT_PATH.'/public'.$paths);
    $images->save(ROOT_PATH.'/public'.$paths,null,60,true);

    return $paths;
}
/**
 * 检测目录读写权限
 * @param unknown $dir_path
 */
function check_dir_iswritable($dir_path) {
    // 目录路径
	$dir_path = str_replace("\\", "/", $dir_path);
	// 是否可写
	$is_writale = 1;
	// 判断是否是目录
    if(!is_dir($dir_path)){ 
		$is_writale=0; 
		return $is_writale; 
	}else{ 
	    $fp = fopen("$dir_path/test.txt", 'w');
        if($fp) {
            fclose($fp);
            unlink("$dir_path/test.txt");
            $writeable = 1; 
        } else {
            $writeable = 0;
        }
	} 
	return $is_writale;
}