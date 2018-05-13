<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/10
 * Time: 18:13
 */

echo"zhupengjun<br/>";

echo $title;

?>

<table border="1">
    <tr>
        <td>编号</td>
        <td>姓名</td>
        <td>邮箱</td>
    </tr>
    <?php foreach($list as $val):?>
        <tr>
            <td><?=$val['id']?></td>
            <td><?=$val['name']?></td>
            <td><?=$val['email']?></td>
        </tr>
    <?php endforeach;?>
</table>
