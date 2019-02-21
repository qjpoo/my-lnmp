<?php
/**
 * index.php
 *
 * @author YangHui<yanghui@meiyue.me>
 * @version 0.1
 * @createtime 2018/10/16 上午11:00
 * @copyright Copyright (c) 深圳市美约时代. (http://www.meiyue.me)
 */
//var_dump(date("Y-m-d H:i:s"));

//phpinfo();

try {
    $PDO = new PDO('mysql:host=172.21.0.3;dbname=blog', 'root', '123456');
    $result = $PDO->query('select * from menu');
    $row = $result->fetch(PDO::FETCH_ASSOC);
    print_r($row);

    // 关闭mysqi连接
    $PDO = null;
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}