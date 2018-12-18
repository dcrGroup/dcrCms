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

class LinkValidate extends Validate
{
    protected $rule = [
        'name' => 'require',
        'url'  => 'require',
    ];

    protected $message = [
        'name.require' => '名称不能为空',
        'url.require'  => '链接地址不能为空',
    ];

}