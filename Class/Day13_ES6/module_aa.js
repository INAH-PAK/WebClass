function show(){
    // document.write("show!!")
    const e = document.createElement('p')
    e.textContent = "show !!"
    document.body.appendChild(e)
}

// 이 show() 함수를 다른 js에서 import 하려면 반드시 이 곡에서푸풀해야 함
// 이 문서안에 (하나의 .js) 안에 여러개의 익스포트가 필요하지만 그 중에 하나는 바드시 expot여야 함
export default show

// default가 아닌export addHeadingElementToBody //error [ export 디폴트는 한대만 간능 ]
// 함수를 익스포트 할 때는 함수를 만들때 익스포ㅡ 해야 함 == 만들면서 기폴트 해야 함.
export function addHeadingElementToBody(text){
    const h = document.createElement('h3')
    h.textContent = text
    document.body.appendChild(h)
}


// 변수나 상수도 익스퐅
export let name = "dd"
export let age = 88
