<?php
/**
 * User: dengyun
 * Date: 2018/3/30 23:03
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];

    protected $message = [
        'code' => 'Code 缺失'
    ];
}