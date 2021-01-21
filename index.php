<?php
require_once "head.php";
?>
<link rel="stylesheet" href="CSS/index.css">
<script src="JS/index.js" defer></script>

<section class="section-title con-min-width">
  <h1 class="con">
    <span><i class="far fa-hand-point-up"></i></span>
    <span>
      Upload content</span>
  </h1>
</section>

<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="article-list-box__title">Day1</h1>
          <div class="article-list-box__reg-date">2020-01-12 12:12:14</div>
          <div class="article-list-box__writer">
            <span>이상훈</span>
            <span>
              <svg viewBox="0 0 264 280" width="100">
                <use xlink:href="#acatar-1"></use>
              </svg>
            </span>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template">
# 변수 개요
- 변수 :변수는 데이터를 담기 위한 메모리 공간을 의미한다 쉽게 생각하면, 어떤 값을 담기 위한 상자나 그릇이라고 비유할 수 있
- var : 변수를 선어 추가로 동시에 값을 초기화
  let : 블록 범위 지역 변수를 선언 추가로 동시에 값을 초기화
  const : 블록 범위 읽기 전용 상수를 선언
- ex) // var 변수 이름;
 // var 변수 이름 = 할당할 값;
- 자식 컨텐츠로 자바스크립트를 넣어서 사용할 수 있다.
  
# 변수
```html
var sum; // 변수 sum을 선언. undifined
var a = 3; // 변수 a를 선언함과 동시에 3을 a에 할당
var b, c, d;
var e = 1,
     f = 2,
    g = 3; // 여러 변수를 한 번에 선언 및 초기화 가능
```
  
# 1.변수 사용
```javascript
var x;
console.log(x); // ➡ undefined
x = 5;
console.log(x); // ➡ 5
```
  
# 2.실습
```codepen
https://codepen.io/jangka44/embed/XWjxbgy?height=300&theme-id=light&default-tab=js,result&editable=true
```
                  </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>

        <li>
          <h1 class="article-list-box__title">Day2</h1>
          <div class="article-list-box__reg-date">2020-01-12 12:12:14</div>

          <div class="article-list-box__writer">
            <span>이상훈</span>
            <span>
              <svg viewBox="0 0 264 280" width="100">
                <use xlink:href="#acatar-1"></use>
              </svg>
            </span>
          </div>

          <div class="article-list-box__body">
            <script type="text/x-template">
# 태그
```codepen
https://codepen.io/jangka44/embed/NWROGrL?height=265&theme-id=light&default-tab=html,result&editable=true
```
                  </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
        <li>
          <h1 class="article-list-box__title">Day3</h1>
          <div class="article-list-box__reg-date">2020-01-12 12:12:14</div>

          <div class="article-list-box__writer">
            <span>이상훈</span>
            <span>
              <svg viewBox="0 0 264 280" width="100">
                <use xlink:href="#acatar-1"></use>
              </svg>
            </span>
          </div>

          <div class="article-list-box__body">
            <script type="text/x-template">
# 토글 사이드 바
```youtube
BcEKYGaCjHw
```
                  </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php
require_once "foot.php";
?>