<?php
/**
 * Upload.php
 *
 * Created by PhpStorm.
 * @author: longqiuhong<longqiuhong@meiyue.me>
 * @ComputerAccount:costa92
 * createTime: 2019/2/15 11:33 AM
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */

namespace App\Services;


use Illuminate\Support\Facades\Storage;

class UploadService extends BaseService
{
    public function image()
    {
        $drive = Storage::drive('oss');

        $image = "11/22/33/7125_yangxiansen.jpg";

        dump($drive->write("/test2.txt", "111222"));
    }
}