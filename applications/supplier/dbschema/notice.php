<?php

// +----------------------------------------------------------------------
// | VMCSHOP [V M-Commerce Shop]
// +----------------------------------------------------------------------
// | Copyright (c) vmcshop.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.vmcshop.com/licensed)
// +----------------------------------------------------------------------
// | Author: Shanghai ChenShang Software Technology Co., Ltd.
// +----------------------------------------------------------------------


$db['notice'] = array(
    'columns' => array(
        'notice_id' => array(
            'type' => 'number',
            'required' => true,
            'label' => 'ID' ,
            'pkey' => true,
            'extra' => 'auto_increment',
        ) ,
        'title' => array(
            'type' => 'varchar(255)',
            'required' => true,
            'label' => '标题' ,
            'searchtype' => 'has',
            'filtertype' => 'yes',
            'in_list' => true,
            'default_in_list' => true,
            'is_title' => true,
        ) ,
        'anthor' => array(
            'type' => 'table:users@desktop',
            'label' => '作者' ,
            'is_title' => true,
        ) ,
        'content' => array(
            'type' => 'html',
            'required' => true,
            'label' => '内容' ,
        ) ,
        'pubtime' => array(
            'type' => 'time',
            'label' => '发布时间' ,
            'filtertype' => 'yes',
            'in_list' => true,
            'default_in_list' => true,
        ) ,
        'last_modify' => array(
            'type' => 'last_modify',
            'label' => '更新时间' ,
            'in_list' => true,
            'default_in_list' => true,
        ) ,
        'ispub' => array(
            'type' => 'bool',
            'required' => true,
            'default' => 'false',
            'label' => '是否发布' ,
            'in_list' => true,
            'filtertype' => 'yes',
            'filterdefault' => false,
            'default_in_list' => true,
        ) ,
        'istop' => array(
            'type' => 'bool',
            'required' => true,
            'default' => 'false',
            'label' => '是否置顶' ,
            'in_list' => true,
            'filtertype' => 'yes',
            'filterdefault' => false,
            'default_in_list' => true,
        ) ,

    ) ,
    'comment' => '供应商通知' ,
);
