<?php
/**
 * MenuController.php
 *
 * Created by PhpStorm.
 * @author: longqiuhong<longqiuhong@meiyue.me>
 * @ComputerAccount:costa92
 * createTime: 2019/1/27 8:56 PM
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */

namespace App\Http\Controllers\Admin;


use App\Http\Requests\MenuCreateRequest;
use App\Models\Menus;
use Illuminate\Http\Request;

class MenuController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['title'] = '博客菜单';

        return $this->view('index' , compact('data' , $data));
    }

    /**
     *
     */
    public function create()
    {
        $data['title'] = '博客菜单添加';

        return $this->view('create' , compact('data' , $data));

    }

    public function store(MenuCreateRequest $request)
    {
        $menu = new Menus();
        $menu->name = $request->name;
        $menu->link = $request->link;
        $menu->save();
    }
}