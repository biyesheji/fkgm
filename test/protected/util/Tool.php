<?php
/**
* 	工具函数
*	john
*	3-24
*/
class Tool
{
	// 仅生成存放名称,不转移图片,避免因其他字段出错,而重复有多张图片存在
    public static function createImageSaveName($name, $type){
        $imageMime = array(
            'image/gif',
            'image/jpeg',
            'image/bmp',
            'image/png',
            //需要时添加...
        );
        if(!in_array($type, $imageMime)){
            return array(
                'code' => 0,
                'msg' => '图片mime类型不存在!',
            );
        }else{
            //获取图片后缀
            $arr_tmp_ext = explode('.', $name);
            $imageExt = end($arr_tmp_ext);
            //以当前时间命名此图片，避免重复
            $name = time() . uniqid() . '.' . $imageExt;

            return $name;
        }
    }
    // 转移图片
    public static function moveImageToTargetPath($name, $tmp_name, $width = 50,$height = 50,$postion = 'uploadFile'){
        //创建存放路径
        if (!file_exists(Yii::app()->request->baseUrl . 'images/' . $postion.'/'.date('Y-m-d',time()))) {
            mkdir(Yii::app()->request->baseUrl . 'images/' . $postion.'/'.date('Y-m-d',time()));
        }
        $path = Yii::app()->request->baseUrl . 'images/' . $postion.'/'.date('Y-m-d',time()). '/' . $name;
        //图片处理
        // Yii::import('application.extensions.image.Image');
        // $image = new Image($tmp_name);
        // $image->resize($width, $height)->rotate(45)->quality(75)->sharpen(20);
        // $image->render();
        // $image = Yii::app()->image->load($tmp_name);
        // $image->resize($width, $height)->rotate(0)->quality(100)->sharpen(20);
        // $image->save($path);
        $result = move_uploaded_file($tmp_name, $path);
        if($result){
            return '/'.$path;
        }else{
            return false;
        }
    }
/**
*   视频上传函数
*
*/
public static function createVideoSaveName($name, $type){
    $videoMime = array(
        'video/x-flv',
        'application/octet-stream',
        //需要时添加...
    );
    if(!in_array($type, $videoMime)){
        return false;
    }else{
        //获取视频后缀
        $arr_tmp_ext = explode('.', $name);
        $imageExt = end($arr_tmp_ext);
        //以当前时间命名此图片，避免重复
        $name = time() . uniqid() . '.' . $imageExt;
        return $name;
    }
}

 public static function moveVideoToTargetPath($name, $tmp_name, $width = 50,$height = 50,$postion = 'uploadFile'){
    //创建存放路径
    // echo Yii::app()->request->baseUrl . '/videos/' . $postion.'/'.date('Y-m-d',time());die();
    if (!file_exists(Yii::app()->request->baseUrl . 'videos/' . $postion.'/'.date('Y-m-d',time()))) {
        mkdir(Yii::app()->request->baseUrl . 'videos/' . $postion.'/'.date('Y-m-d',time()));
    }
    $path = Yii::app()->request->baseUrl . 'videos/' . $postion.'/'.date('Y-m-d',time()). '/' . $name;
    $result = move_uploaded_file($tmp_name, $path);
    if($result){
        return '/'.$path;
    }else{
        return false;
    }
}
}
?>