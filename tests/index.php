<?php
/**
 * Created by PhpStorm.
 * User: me@rikyliu.com
 * Date: 2017-06-26
 * Time: 13:49
 */


require './../src/Requests/BaseRo.php';
require './../vendor/autoload.php';

use Riky\Requests\BaseRo;

var_dump((new BaseRo())->toArray());
