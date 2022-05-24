
// A. 전역변수의 위치에 이미지객체 생성
var imgPlayer = new Image()
imgPlayer.src="./images/bazzi.png"

var x = 200, y = 250 // 이미지 중심 좌표
var w = 40 , h = 40 // 이미지의 절반 너비와 높이

var dx=1 , dy=1 // 이미지의 변화량 - 캐릭터가 벽에 닿으면 튕겨지도록 하기 위해 1 , -1 로 ~~


// 캔버스는 픽셀값임 !!!!!!!!!!!!!!
// 그래서 이미지 낭비가 아니라 그냥 화소에 색깔 점 찍는거임 !!!!!!!!!

// 배경 만들기
var imgBack = new Image()
imgBack.src="./images/bg.png"
var bg_x=0 

// body 요소 문서가 load 완료되면 실행 될 수수
function loded(){
    canvas = document.getElementById('c1') //전역으로 만들었당 ~
    context = canvas.getContext('2d')

    // 역할을 분리해서 코딩 ㄱㄱ

    runGame()

    // 일정 시간마다 특정함수를 반복 수행하는 window 객체
    window.setInterval(  runGame  , 10) // 10ms마다 . . . 1초에 100장
}

function runGame(){
    // 게임이 시작되면 -> 움직이기 , 그리기 기능이 필요
    moveAll()
    drawAll() // 그리기
}

//모든 화면에 그려지는 작업은 이 함수에서 . . . 
function drawAll(){
  // context.drawImage(imgBack, bg_x,400,500)
   // context.drawImage(imgBack, bg_x+400,400,500)
    context.drawImage(imgPlayer,x-w,y-h,w*2,h*2)


    
}
//모든 움직이는 (좌표를 바꾸는) 작업은 이 함수에서
function moveAll(){
    // 내 player 이미지 좌표를 변경함.
    x += dx
    y += dy

    // 내 플레이어가 벽에 닿으면 . . 반대로 튕기기
    if(x > 400 -w || x<= w ) dx = -dx
    if(y > 500 -h || y<= h ) dy = -dy

    // 배경 이미지 좌표 변경
    bg_x -=1
    if(bg_x <= -400) bg_x = 0



}

function keydown(){
    var keycode = window.event.keycode
    switch(keycode){
        case 37 : //LEFT
                dx = -1
                break
        case 38 : //UP
                dy = -1
                break
        case 39 :   //RIGTH
                dx = 1
                break
        case 40 :   //DOWN
                dy = 1
                break
        default : dx = 1
                  dy = 1

    }

}

function keyup(){
var keycode = window.event.keyCode
if(keycode >= 37 && keycode <= 40){
    dx = 0
    dy = 0
}
}