<?php
/**
 * Helpers.php
 *
 * Created by PhpStorm.
 * @author: longqiuhong<longqiuhong@meiyue.me>
 * @ComputerAccount:costa92
 * createTime: 2019/1/26 8:08 PM
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */

namespace App\Traits;


trait Helpers
{
    /**
     * 获取分组名字
     * @return string
     */
    public function getPrefix()
    {
        $request = $route = app('router')->getCurrentRoute();
        $prefix = $request->action['prefix'];

        return $prefix ? trim($prefix , "/") : 'home';
    }

    /**
     * @param $view
     * @param array $data
     * @param array $mergeData
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($view , $data = [] , $mergeData = [])
    {
        $view = $this->getPrefix() . '.' . $view;

        return view($view , $data , $mergeData);
    }
}