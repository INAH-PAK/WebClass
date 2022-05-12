<?php
    header('Content-Type: text/html; charset=utf-8');

    //form 요소로 전달된 파일은 족ㅁ 특별한 방식으로 전달됨
    //실제 파일 데이터를 별도의 임시공간에 저장됨
    // 이 php 로 전달되는 ㄷ것은 파일의 데이터가 아니라 파일을 설명하는 데이터가 엄
    // 뭔소리/
    // 이미지는 개커가꿍
    // 이미지는 한 픽셀 당 jpg는 24bit, png 32bit 니까 총 240,000 비트라 치면, 이 이미지의 내용물만 졸라큰데
    // 이 이걸 설명해 둔 택배의 송장같은 메타데이터 !
    // 이 메타 데이타는 배열로 저장되어있음

    // 이 배열엔 총 5가지로 저장되어 있음

    //    'name'        'type'        'size'                    'tmp_name'                    'error'
    // '원본파일이름'  ' 확장자(타입)'   '파일사이즈'    '이 창고(임시저장소)에 저장된 폴더경로 '    '에러정보'

    $file=$_FILES['aaa'];  // 파일이 여러개일 수 도 있으니까 그 중 하나인 내가 name으로 설정한 aaa 를 읽어옴.

    // 이 파일의 식별자는 !!! 은 정해져 있음 
    $srcName = $file['name'];
    $type = $file['type'];
    $size = $file['size'];
    $tmpName = $file['tmp_name'];
    $error = $file['error'];

    echo "$srcName<br>";
    echo "$type<br>";
    echo "$size<br>";
    echo "$tmpName<br>";
    echo "$error<br>";

    $dstName = "./" . date("YmdHis") .$srcName ;

    // 임시 저장소에 있는 파일을 내가 영구적으로 저장하기 위해 무브!!
    move_uploaded_file($tmpName, $dstName); // 




?>