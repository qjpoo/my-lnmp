<?php
/**
 * UploadController.php
 *
 * Created by PhpStorm.
 * @author: longqiuhong<longqiuhong@meiyue.me>
 * @ComputerAccount:costa92
 * createTime: 2019/2/15 11:10 AM
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */

namespace App\Http\Controllers\Admin;


use App\Services\UploadService;

class UploadController extends BaseController
{
    public $service;

    public function __construct()
    {
        $this->service = new UploadService();
    }

    public function index()
    {
        $this->service->image();
    }
}