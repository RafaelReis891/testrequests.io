<?php

#$_POST["json"] = '{"uuid":"mkgs5ds1fs5sdfss", UserInfo:{"name":"rafa", "wallet":"0xFE4C4B0a7C8e4393Cd396a69E4A7411953F35d82", "avatar":"https://aurora.meuavatar.com/12s21212d.json"}, Treasure:{"Token":"mb_0112022", "name":"Mother board", "rare":"no"} }';


if (isset($_POST['json'])) {
    $myjson = $_POST['json'];
    echo $myjson;
}
else
{
    echo 'error';
}
?>