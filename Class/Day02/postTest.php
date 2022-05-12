<?php
    header('Contene-Type:text/html charset=uft-8');


    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $gender = $_POST['rg'];
    $message = $_POST['msg'];
    $brand = $_POST['brand'];

    // textarea 안에 작성한 글 중에 줄바꿈 문자는 \n 을 사용 함.
    //.. 그래서 \n 을 <br> 로 자동변환 해주는 애
    nl2br($message);

    echo " 보이니 $id <br> ";
    echo "$pw <br> ";
    echo "$gender <br> ";
    echo "$message <br> ";
    echo "$brand <br> ";

    // 과일
    $fruits = $_POST['fruits'];
    // 이 $fruits는 배열임 !
    echo $fruits[0];
    //php 언어에서 배열의 갯수를 알 수 있는 함수
    $num = count($fruits);

    for($i=0; $i< $num; $i++){
        echo $fruits[$i]. ",";
    }



?>