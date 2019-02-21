<?php
/**
 * MenuRepository.php
 *
 * Created by PhpStorm.
 * @author: longqiuhong<longqiuhong@meiyue.me>
 * @ComputerAccount:costa92
 * createTime: 2019/2/1 9:29 PM
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */

namespace App\Repositories;


use App\Models\Menus;

class MenuRepository extends BaseRepository
{
    protected $model;

    public function __construct(Menus $menus)
    {
        $this->model = new $menus;
    }
}