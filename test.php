<?php 
/*
 * @Date: 2022-02-10 13:26:33
 * @LastEditors: 曾學彥
 * @LastEditTime: 2022-02-10 14:27:29
 */
echo 'hi hi hi';
echo 'yuri hiiiii';
exit();
echo '123123';
out('123');
out('321');



add(1,1);
add(2,2);
out('321');

see();





function out(string $msg){
    echo $msg; 
}

function add(int $aa,int $bb){
    echo $aa + $bb; 
}

function see(){
    echo 'aaaaa'; 
}