<?php
// +---------------------------------------------------------------------
// | cms
// +---------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +---------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +---------------------------------------------------------------------
// | Author: drkj
// +---------------------------------------------------------------------
namespace cmf\behavior;

use think\Lang;
use think\Request;

class HomeLangBehavior
{

    // 行为扩展的执行入口必须是run
    public function run()
    {
        $request = Request::instance();

        $langSet = $request->langset();

        // 加载应用前台通用语言包
        $apps = cmf_scan_dir(APP_PATH . '*', GLOB_ONLYDIR);
        foreach ($apps as $app) {
            Lang::load([
                APP_PATH . $app . DS . 'lang' . DS . $langSet . DS . 'home' . EXT,
            ]);
        }

    }
}