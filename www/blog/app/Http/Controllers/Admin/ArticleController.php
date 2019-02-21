<?php
/**
 * ArticleController.php
 *
 * Created by PhpStorm.
 * @author: longqiuhong<longqiuhong@meiyue.me>
 * @ComputerAccount:costa92
 * createTime: 2019/2/15 10:43 AM
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */

namespace App\Http\Controllers\Admin;


class ArticleController extends BaseController
{
    public function index()
    {
        $data['title'] = '文章列表';

        return $this->view('index' , compact('data' , $data));
    }

    public function create()
    {
        $data['title'] = '文章添加';

        return $this->view('create' , compact('data' , $data));
    }
}