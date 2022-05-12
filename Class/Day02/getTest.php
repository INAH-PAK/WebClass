<?php
        header('Content-Type:text/html; charset=utf-8'); // 아 얘가 에코시키는게 html 이구나

        // form 요소를 통해 GET방식으로 전달된 값ㄷㄹ을 받기  $title,$massege -> 내가 전달받은거 넣을 변수
        // $_GET['title'], $_GET['msg'] 여기가 html의 폼의 name 식별자랑 똑같아야 함.
        $title = $_GET['title'];
        $massege = $_GET['msg'];

        // html형식으로 에코시키기.
        echo "<h2>$title</h2>";
        echo "<h2>$massege</h2>";


?>