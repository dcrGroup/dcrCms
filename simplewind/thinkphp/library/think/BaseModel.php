<?php
// +----------------------------------------------------------------------
// | cms
// +----------------------------------------------------------------------
// | Author: drcj <18676619895@163.com>
// +----------------------------------------------------------------------
namespace think;

class AdminModel extends Model
{

    protected $type = [
        'more' => 'array',
    ];

    public function getOne($where, $order = '')
    {
        if ($order) {
            $orderArr = explode(' ', $order);
            $orderField = $orderArr[0];
            $orderField = isset($orderArr[1]) ? $orderArr[1] : 'ASC';
            $result   = $this->where($where)->order("list_order", "ASC")->select();
        } else {
            $result   = $this->where($where)->order("list_order", "ASC")->select();
        }
        return $result;
    }

}