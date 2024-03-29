<?php

/**
 * Copyright    [HDPHP框架] (C)2011-2012 houdunwang.com ,Inc.
 * Licensed     www.apache.org/licenses/LICENSE-2.0
 * Encoding     UTF-8
 * Version      $Id: indexControl.Tool.php   2012-12-5
 * @author      向军  houdunwangxj@gmail.com
 * Link         www.hdphp.com
 */
class IndexControl extends AuthControl
{
    function index()
    {
        header('Content-type:text/html;charset=utf-8');
        go('Rbac/index');
    }

    //删除缓存文件
    function delcache()
    {
        $temp = Q('temp', null, 'trim');
        if ($temp && is_dir($temp)) {
            foreach (glob($temp . '/*') as $d)
                Dir::del($d);
        }
        $url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->success('缓存目录已经全部删除成功', $url);
    }

}