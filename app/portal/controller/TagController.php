<?php
// +----------------------------------------------------------------------
// | cms
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author:drkj <18676619895@163.com> <18676619895@163.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use app\portal\model\PortalTagModel;

class TagController extends HomeBaseController
{
    public function index()
    {
        $id             = $this->request->param('id');

        $portalTagModel = new PortalTagModel();

        if(is_numeric($id)){
            $tag = $portalTagModel->where('id', $id)->where('status', 1)->find();
        }else{
            $tag = $portalTagModel->where('name', $id)->where('status', 1)->find();
        }


        if (empty($tag)) {
            abort(404, '标签不存在!');
        }

        $this->assign('tag', $tag);

        return $this->fetch('/tag');
    }

}
