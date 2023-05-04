<?php
$ip = $_SERVER['REMOTE_ADDR'];
$browser= htmlspecialchars ($_SERVER['HTTP_USER_AGENT']);
$dateTime = date('Y/m/d G:i:s');
?>
<script>
  alert("3 saniyde paneldesiniz...");
</script>
<style>
#deneme-alani{
cursor: url(resim/imlec.png);  /* İmlecimizin resmini belirlediğimiz kısım. */
}@import url("https://fonts.googleapis.com/css?family=Russo+One&display=swap");

*,
*:before,
*:after {
  box-sizing: border-box;
}

body,
html {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

body {
  font-family: "Russo One", sans-serif;
}

:root {
  --glitch-width: 100vw;
  --glitch-height: 100vh;
  --gap-horizontal: 10px;
  --gap-vertical: 5px;
  --color-title: #fff;
  --time-anim: 4s;
  --delay-anim: 2s;
  --blend-mode-1: none;
  --blend-mode-2: none;
  --blend-mode-3: none;
  --blend-mode-4: overlay;
  --blend-mode-5: overlay;
  --blend-color-1: transparent;
  --blend-color-2: transparent;
  --blend-color-3: transparent;
  --blend-color-4: #e98e1e;
  --blend-color-5: #3f51b5;
}

.credit {
    position: absolute;
    z-index: 100;
    bottom: 0;
  left: 20px;
    color: #fff;
    font-weight: normal;
    font-size: 12px;
  opacity: 0.5;

  strong {
    font-weight: normal;
  }

  a {
    color: #ff0;
  }
}

.glitch-demo {
  position: relative;
  height: 100vh;
}

.title {
  font-size: 42px;
  line-height: normal;
  background: -webkit-linear-gradient(#ffeb01, #ff0101);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
  position: absolute;
  text-transform: uppercase;
  top: 50%;
  transform: translateY(-50%);
  padding: 0 20px;
  margin: 0;
  left: 0;
  right: 0;
  z-index: 1;
  text-align: center;
  animation-name: glitch-anim-text;
  animation-duration: var(--time-anim);
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  animation-delay: calc(var(--delay-anim) + var(--time-anim) * 0.2);

  @media only screen and (min-width: 768px) {
    font-size: 60px
  }

  @media only screen and (min-width: 992px) {
    font-size: 80px
  }

  @media only screen and (min-width: 1170px) {
    font-size: 100px
  }
}

.glitch {
  position: absolute;
  top: 0;
  left: 0;
  width: var(--glitch-width);
  height: var(--glitch-height);
  overflow: hidden;
}

.glitch__img {
  position: absolute;
  top: calc(-1 * var(--gap-vertical));
  left: calc(-1 * var(--gap-horizontal));
  width: calc(100% + var(--gap-horizontal) * 2);
  height: calc(100% + var(--gap-vertical) * 2);
  background: url("https://images2.alphacoders.com/100/1002619.png")
    no-repeat 50% 0;
  background-color: var(--blend-color-1);
  background-size: cover;
  transform: translate3d(0, 0, 0);
  background-blend-mode: var(--blend-mode-1);
}

.glitch__img:nth-child(n + 2) {
  opacity: 0;
}

.glitch__img:nth-child(n + 2) {
  animation-duration: var(--time-anim);
  animation-delay: var(--delay-anim);
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

.glitch__img:nth-child(2) {
  background-color: var(--blend-color-2);
  background-blend-mode: var(--blend-mode-2);
  animation-name: glitch-anim-1;
}

.glitch__img:nth-child(3) {
  background-color: var(--blend-color-3);
  background-blend-mode: var(--blend-mode-3);
  animation-name: glitch-anim-2;
}

.glitch__img:nth-child(4) {
  background-color: var(--blend-color-4);
  background-blend-mode: var(--blend-mode-4);
  animation-name: glitch-anim-3;
}

.glitch__img:nth-child(5) {
  background-color: var(--blend-color-5);
  background-blend-mode: var(--blend-mode-5);
  animation-name: glitch-anim-flash;
}

// Animations
@keyframes glitch-anim-1 {
  0% {
    opacity: 1;
    transform: translate3d(var(--gap-horizontal), 0, 0);
    clip-path: polygon(0 2%, 100% 2%, 100% 5%, 0 5%);
  }
  2% {
    clip-path: polygon(0 15%, 100% 15%, 100% 15%, 0 15%);
  }
  4% {
    clip-path: polygon(0 10%, 100% 10%, 100% 20%, 0 20%);
  }
  6% {
    -webkit-clip-path: polygon(0 1%, 100% 1%, 100% 2%, 0 2%);
    clip-path: polygon(0 1%, 100% 1%, 100% 2%, 0 2%);
  }
  8% {
    -webkit-clip-path: polygon(0 33%, 100% 33%, 100% 33%, 0 33%);
    clip-path: polygon(0 33%, 100% 33%, 100% 33%, 0 33%);
  }
  10% {
    -webkit-clip-path: polygon(0 44%, 100% 44%, 100% 44%, 0 44%);
    clip-path: polygon(0 44%, 100% 44%, 100% 44%, 0 44%);
  }
  12% {
    -webkit-clip-path: polygon(0 50%, 100% 50%, 100% 20%, 0 20%);
    clip-path: polygon(0 50%, 100% 50%, 100% 20%, 0 20%);
  }
  14% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 70%, 0 70%);
    clip-path: polygon(0 70%, 100% 70%, 100% 70%, 0 70%);
  }
  16% {
    -webkit-clip-path: polygon(0 80%, 100% 80%, 100% 80%, 0 80%);
    clip-path: polygon(0 80%, 100% 80%, 100% 80%, 0 80%);
  }
  18% {
    -webkit-clip-path: polygon(0 50%, 100% 50%, 100% 55%, 0 55%);
    clip-path: polygon(0 50%, 100% 50%, 100% 55%, 0 55%);
  }
  20% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 80%, 0 80%);
    clip-path: polygon(0 70%, 100% 70%, 100% 80%, 0 80%);
  }
  21.9% {
    opacity: 1;
    transform: translate3d(var(--gap-horizontal), 0, 0);
  }
  22%,
  100% {
    opacity: 0;
    transform: translate3d(0, 0, 0);
    -webkit-clip-path: polygon(0 0, 0 0, 0 0, 0 0);
    clip-path: polygon(0 0, 0 0, 0 0, 0 0);
  }
}

@keyframes glitch-anim-2 {
  0% {
    opacity: 1;
    transform: translate3d(calc(-1 * var(--gap-horizontal)), 0, 0);
    -webkit-clip-path: polygon(0 25%, 100% 25%, 100% 30%, 0 30%);
    clip-path: polygon(0 25%, 100% 25%, 100% 30%, 0 30%);
  }
  3% {
    -webkit-clip-path: polygon(0 3%, 100% 3%, 100% 3%, 0 3%);
    clip-path: polygon(0 3%, 100% 3%, 100% 3%, 0 3%);
  }
  5% {
    -webkit-clip-path: polygon(0 5%, 100% 5%, 100% 20%, 0 20%);
    clip-path: polygon(0 5%, 100% 5%, 100% 20%, 0 20%);
  }
  7% {
    -webkit-clip-path: polygon(0 20%, 100% 20%, 100% 20%, 0 20%);
    clip-path: polygon(0 20%, 100% 20%, 100% 20%, 0 20%);
  }
  9% {
    -webkit-clip-path: polygon(0 40%, 100% 40%, 100% 40%, 0 40%);
    clip-path: polygon(0 40%, 100% 40%, 100% 40%, 0 40%);
  }
  11% {
    -webkit-clip-path: polygon(0 52%, 100% 52%, 100% 59%, 0 59%);
    clip-path: polygon(0 52%, 100% 52%, 100% 59%, 0 59%);
  }
  13% {
    -webkit-clip-path: polygon(0 60%, 100% 60%, 100% 60%, 0 60%);
    clip-path: polygon(0 60%, 100% 60%, 100% 60%, 0 60%);
  }
  15% {
    -webkit-clip-path: polygon(0 75%, 100% 75%, 100% 75%, 0 75%);
    clip-path: polygon(0 75%, 100% 75%, 100% 75%, 0 75%);
  }
  17% {
    -webkit-clip-path: polygon(0 65%, 100% 65%, 100% 40%, 0 40%);
    clip-path: polygon(0 65%, 100% 65%, 100% 40%, 0 40%);
  }
  19% {
    -webkit-clip-path: polygon(0 45%, 100% 45%, 100% 50%, 0 50%);
    clip-path: polygon(0 45%, 100% 45%, 100% 50%, 0 50%);
  }
  20% {
    -webkit-clip-path: polygon(0 14%, 100% 14%, 100% 33%, 0 33%);
    clip-path: polygon(0 14%, 100% 14%, 100% 33%, 0 33%);
  }
  21.9% {
    opacity: 1;
    transform: translate3d(calc(-1 * var(--gap-horizontal)), 0, 0);
  }
  22%,
  100% {
    opacity: 0;
    transform: translate3d(0, 0, 0);
    -webkit-clip-path: polygon(0 0, 0 0, 0 0, 0 0);
    clip-path: polygon(0 0, 0 0, 0 0, 0 0);
  }
}

@keyframes glitch-anim-3 {
  0% {
    opacity: 1;
    transform: translate3d(0, calc(-1 * var(--gap-vertical)), 0)
      scale3d(-1, -1, 1);
    -webkit-clip-path: polygon(0 1%, 100% 1%, 100% 3%, 0 3%);
    clip-path: polygon(0 1%, 100% 1%, 100% 3%, 0 3%);
  }
  1.5% {
    -webkit-clip-path: polygon(0 10%, 100% 10%, 100% 9%, 0 9%);
    clip-path: polygon(0 10%, 100% 10%, 100% 9%, 0 9%);
  }
  2% {
    -webkit-clip-path: polygon(0 5%, 100% 5%, 100% 6%, 0 6%);
    clip-path: polygon(0 5%, 100% 5%, 100% 6%, 0 6%);
  }
  2.5% {
    -webkit-clip-path: polygon(0 20%, 100% 20%, 100% 20%, 0 20%);
    clip-path: polygon(0 20%, 100% 20%, 100% 20%, 0 20%);
  }
  3% {
    -webkit-clip-path: polygon(0 10%, 100% 10%, 100% 10%, 0 10%);
    clip-path: polygon(0 10%, 100% 10%, 100% 10%, 0 10%);
  }
  5% {
    -webkit-clip-path: polygon(0 30%, 100% 30%, 100% 25%, 0 25%);
    clip-path: polygon(0 30%, 100% 30%, 100% 25%, 0 25%);
  }
  5.5% {
    -webkit-clip-path: polygon(0 15%, 100% 15%, 100% 16%, 0 16%);
    clip-path: polygon(0 15%, 100% 15%, 100% 16%, 0 16%);
  }
  7% {
    -webkit-clip-path: polygon(0 40%, 100% 40%, 100% 39%, 0 39%);
    clip-path: polygon(0 40%, 100% 40%, 100% 39%, 0 39%);
  }
  8% {
    -webkit-clip-path: polygon(0 20%, 100% 20%, 100% 21%, 0 21%);
    clip-path: polygon(0 20%, 100% 20%, 100% 21%, 0 21%);
  }
  9% {
    -webkit-clip-path: polygon(0 60%, 100% 60%, 100% 55%, 0 55%);
    clip-path: polygon(0 60%, 100% 60%, 100% 55%, 0 55%);
  }
  10.5% {
    -webkit-clip-path: polygon(0 30%, 100% 30%, 100% 31%, 0 31%);
    clip-path: polygon(0 30%, 100% 30%, 100% 31%, 0 31%);
  }
  11% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 69%, 0 69%);
    clip-path: polygon(0 70%, 100% 70%, 100% 69%, 0 69%);
  }
  13% {
    -webkit-clip-path: polygon(0 40%, 100% 40%, 100% 41%, 0 41%);
    clip-path: polygon(0 40%, 100% 40%, 100% 41%, 0 41%);
  }
  14% {
    -webkit-clip-path: polygon(0 80%, 100% 80%, 100% 75%, 0 75%);
    clip-path: polygon(0 80%, 100% 80%, 100% 75%, 0 75%);
  }
  14.5% {
    -webkit-clip-path: polygon(0 50%, 100% 50%, 100% 51%, 0 51%);
    clip-path: polygon(0 50%, 100% 50%, 100% 51%, 0 51%);
  }
  15% {
    -webkit-clip-path: polygon(0 90%, 100% 90%, 100% 90%, 0 90%);
    clip-path: polygon(0 90%, 100% 90%, 100% 90%, 0 90%);
  }
  16% {
    -webkit-clip-path: polygon(0 60%, 100% 60%, 100% 60%, 0 60%);
    clip-path: polygon(0 60%, 100% 60%, 100% 60%, 0 60%);
  }
  18% {
    -webkit-clip-path: polygon(0 100%, 100% 100%, 100% 99%, 0 99%);
    clip-path: polygon(0 100%, 100% 100%, 100% 99%, 0 99%);
  }
  20% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 71%, 0 71%);
    clip-path: polygon(0 70%, 100% 70%, 100% 71%, 0 71%);
  }
  21.9% {
    opacity: 1;
    transform: translate3d(0, calc(-1 * var(--gap-vertical)), 0)
      scale3d(-1, -1, 1);
  }
  22%,
  100% {
    opacity: 0;
    transform: translate3d(0, 0, 0);
    -webkit-clip-path: polygon(0 0, 0 0, 0 0, 0 0);
    clip-path: polygon(0 0, 0 0, 0 0, 0 0);
  }
}

@keyframes glitch-anim-text {
  0% {
    transform: translate3d(calc(-1 * var(--gap-horizontal)), 0, 0)
      scale3d(-1, -1, 1);
    clip-path: polygon(0 20%, 100% 20%, 100% 21%, 0 21%);
  }
  2% {
    clip-path: polygon(0 33%, 100% 33%, 100% 33%, 0 33%);
  }
  4% {
    clip-path: polygon(0 44%, 100% 44%, 100% 44%, 0 44%);
  }
  5% {
    clip-path: polygon(0 50%, 100% 50%, 100% 20%, 0 20%);
  }
  6% {
    clip-path: polygon(0 70%, 100% 70%, 100% 70%, 0 70%);
  }
  7% {
    clip-path: polygon(0 80%, 100% 80%, 100% 80%, 0 80%);
  }
  8% {
    clip-path: polygon(0 50%, 100% 50%, 100% 55%, 0 55%);
  }
  9% {
    clip-path: polygon(0 70%, 100% 70%, 100% 80%, 0 80%);
  }
  9.9% {
    transform: translate3d(calc(-1 * var(--gap-horizontal)), 0, 0)
      scale3d(-1, -1, 1);
  }
  10%,
  100% {
    transform: translate3d(0, 0, 0) scale3d(1, 1, 1);
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
  }
}

/* Flash */
@keyframes glitch-anim-flash {
  0%,
  5% {
    opacity: 0.2;
    transform: translate3d(var(--gap-horizontal), var(--gap-vertical), 0);
  }
  5.5%,
  100% {
    opacity: 0;
    transform: translate3d(0, 0, 0);
  }
}
</style>
<div class="glitch-demo">
  <div class="glitch">
    <div class="glitch__img"></div>
    <div class="glitch__img"></div>
    <div class="glitch__img"></div>
    <div class="glitch__img"></div>
    <div class="glitch__img"></div>
  </div>
  <h2 class="title">LUKA CODER ADMİN PANEL </h2>
  <meta http-equiv="refresh" content="3;URL=panel.php"/>

</div>

<div class="credit">

</div>
