<?php
// +----------------------------------------------------------------------
// | cms
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: drkj
// +----------------------------------------------------------------------
namespace plugins\demo\controller; //Demo插件英文名，改成你的插件英文就行了
use cmf\controller\PluginRestBaseController;
use plugins\Demo\Model\PluginDemoModel;
use think\Db;

class ApiIndexController extends PluginRestBaseController
{

    public function index()
    {
        $this->success('success', ['hello' => 'hello ThinkCMF!']);
    }

}
