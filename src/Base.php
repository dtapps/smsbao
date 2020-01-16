<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace SmsBao;

/**
 * 中间件
 */
class Base extends Client
{
    /**
     * 接口Api
     * @var string
     */
    protected $url = 'http://api.smsbao.com/';

    /**
     * 官方错误码
     * @var array
     */
    protected $statusStr = [
        "0" => "0",
        "-1" => "参数不全",
        "-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
        "30" => "密码错误",
        "40" => "账号不存在",
        "41" => "余额不足",
        "42" => "帐户已过期",
        "43" => "IP地址限制",
        "50" => "内容含有敏感词",
        "51" => "手机号码不正确"
    ];
}
