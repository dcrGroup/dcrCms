<?php
// +----------------------------------------------------------------------
// | cms
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: drkj < 18676619895@163.com >
// +----------------------------------------------------------------------
namespace app\admin\validate;

use think\Validate;

class RouteValidate extends Validate
{
    protected $rule = [
        'url'      => 'require',
        'full_url' => 'require',
    ];

    protected $message = [
        'url.require'      => '显示网址不能为空',
        'full_url.require' => '原始网址不能为空',
    ];

}