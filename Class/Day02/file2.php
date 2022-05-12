<?php

$files = $_FILES['bbb'];

// $_FILES['bbb'] 는 배열임. 근데 파일이 여러개잖아?
echo count($files);  //5 -> 파일 갯수랑 상관 없이 5 나옴
echo $file[0]['name'];


// 자 원래 파일들은 임시저장소에 이렇게 저장되어 있음.
    //    'name'        'type'        'size'                    'tmp_name'                    'error'
    // '원본파일이름'  ' 확장자(타입)'   '파일사이즈'    '이 창고(임시저장소)에 저장된 폴더경로 '    '에러정보'

    //파일 4개 추가했다? 그럼 이렇게 됨.
    // files['name'][0]
    // files['name'][1] 
    // files['name'][2]  
    // files['name'][3] 
    // 이렇게 원래 칸안에 배열이 생김 !

    //선택된 파일의 갯수를 알려면 
    $num = count($files['name']);

    
    for($i=0; $i< $num; $i++){
        $srcName = $files['name'][$i];
        $size = $files['size'][$i];
        $tmpName = $files['tmp_name'][$i];

        echo "$srcName<br>";
        echo "$size<br>";
        echo "$size<br>";
        echo "$tmpName<br>";


        $dstName = "./image/" . date("YmdHis") . $srcName ;
        move_uploaded_file($tmpName, $dstName); 
        
        echo "<img src = '$dstName'>";

        
        echo "=================================<br>";
    }



?>