/*
// 모바일 웹 주소창 숨기기
window.addEventListener('load', function() {
  // body의 height를 살짝 늘리는 코드
  document.body.style.height = (document.documentElement.clientHeight + 5) + 'px';
  // scroll를 제어 하는 코드
  setTimeout(scrollTo, 0, 0, 1);
}, false);
*/

// onload 이벤트
window.onload = function() {
    setTimeout(function() {
        window.scrollTo(0, 1);}, 100);
};

// addEventListener 이벤트
window.addEventListener('load', function(){
    setTimeout(scrollTo, 1);
}, false);


