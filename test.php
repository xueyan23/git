<?php 
/*
 * @Date: 2022-02-10 13:26:33
 * @LastEditors: 曾學彥
 * @LastEditTime: 2022-02-10 14:25:55
 */
echo 'hi hi hi';
echo 'yuri hiiiii';
exit();
echo '123123';
out('123');
out('321');
function out(string $msg){
    echo $msg; 
}

function add(int $aa,int $bb){
    echo $aa + $bb; 
}

add(1,1);