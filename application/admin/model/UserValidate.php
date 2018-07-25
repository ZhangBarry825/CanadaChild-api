<?php
/**
 * Created by PhpStorm.
 * User:  barry
 * Email: 530027054@qq.com
 * Date:  2018/7/20
 * Time:  15:32
 */

namespace app\admin\model;


use think\Validate;

class UserValidate extends Validate
{
    protected $rule=[
        ['username','require','账号必须'],
        ['password','require','密码必须'],

    ];
    protected $scene = [
        'login' => ['username','password'],
    ];
}