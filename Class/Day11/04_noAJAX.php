<?php

    header('Content-Type:text/html; Charset=utf-8'); // html에서 글씨로 보냈잖아? 그래서 여기서 text 형식으로 받겠다고 쓴거.

    //form 요소를 이용하여 GET 방식으로 전달된 데이터 방식
    // name속성으로 보낸것들
    $name = $_GET['name'];
    $email = $_GET['email'];

    //이걸 화면에 찍기 ㄱㄱ
    echo "$name 님이 등록하셨습니다 : $email";

    //보고옴?
    // 결국 form 요소를 사용하면 ~~~.html 페이지가 ~~~.php 로 완전 페이지 전환되어 기존 html 사라짐.
    // 돌아올 방법은 echo 시길때 <> 태그문을 사용해서 기존 html을 모두 다시 echo로 씀..

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    // 이런 식으로 다 씀...
    // 그래서 

    // 큰따옴표를 작은 따옴표로. . . 다 바꾸기...
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>No Ajax</title>
    </head>
    <body>
        <!--  옛날 Ajax 사용 안할때의 예시. -->
        <!-- 서버에서 데이터를 보내려면 form 요소 사용. -->
        <h3>회원가입 페이지</h3>
        <form action='./04_noAJAX.php' method='get'>
    
            <input type='text' name='name' placeholder='이름을 입력하세요' >
            <input type='text' name='email'placeholder='이메일을 입력하세요' >
    
            <!--  네트워크 통신의 기본 원라 : ​‌‌‍⁡⁣⁣⁢이 서밋버튼을 누르면 아예 .php 파일로 넘어가고 이전 페이지는⁡​  -->
            <!--  아예  사라짐 ​‌‌‍⁡⁢⁣⁢이걸 보안한게 𝗔𝗷𝗮𝘅 !!!⁡​ -->
            <input type='submit' value='회원가입' >
    
        </form>
    
        <hr>
    
        <textarea  id='ta' cols='30' rows='3'>$name 님이 등록하셨습니다 : $email</textarea>
    </body>
    </html>";

    // 미쳤다 이렇게 함..

    // 아니면

?>

<!-- 찐 개발자들은 이렇게 짬 . PHP 영역 밖에 있으면 그냥 echo 함.. -->

<hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>No Ajax</title>
</head>
<body>
    <!--  옛날 Ajax 사용 안할때의 예시. -->
    <!-- 서버에서 데이터를 보내려면 form 요소 사용. -->
    <h3>회원가입 페이지</h3>
    <form action="./04_noAJAX.php" method="get">

        <input type="text" name="name" placeholder="이름을 입력하세요" >
        <input type="text" name="email"placeholder="이메일을 입력하세요" >

        <!--  네트워크 통신의 기본 원라 : ​‌‌‍⁡⁣⁣⁢이 서밋버튼을 누르면 아예 .php 파일로 넘어가고 이전 페이지는⁡​  -->
        <!--  아예  사라짐 ​‌‌‍⁡⁢⁣⁢이걸 보안한게 𝗔𝗷𝗮𝘅 !!!⁡​ -->
        <input type="submit" value="회원가입" >

    </form>

    <hr>

    <textarea  id="ta" cols="30" rows="3"><?php echo "$name 님이 등록하셨습니다 : $email"; ?></textarea>
</body>
</html>
