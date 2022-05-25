// 04_webWorker.html 에서 워커가 할 일
var num = 0
// while(true){
//     num++
//     //드로읻이드와 똑같게 워커는 UI 변경 불가

//     //값을 변경하고 싶뉴면 , main  Thread  쪽ㅇ로 출력하고 싶은가값을 전달
//     postMessage(n)
//     //반복문 사용하면 너무 빨라서 숫자값 완전히 보기 어려움
// }

function fff(){
    num++
    postMessage(num)
    setTimeout( fff , 500 )
}

fff()
