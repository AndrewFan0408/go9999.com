<?php
/**
 * CNAEF
 *
 * 报名页面。
 *
 * @version 1.0.1
 *
 * @include
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

if (!defined('FILE_PREFIX')) include "../error-forbidden.php";

class Join extends Safe
{
    function __construct()
    {
        $params = func_get_args()[0];

        $params['header']['pageName'] ='join';

        $params['nav'] = array(
            'showHomeMenu' => true,
            'showJoinMenu' => false
        );

        $params['body'] = array();
        $params['body_file'] = 'join';


        $params['footer'] = [
            'showFriendLinks' => true,
            'currentYear'     => date('Y')
        ];

        new Template($params);
    }
}