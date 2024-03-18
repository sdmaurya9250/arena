<style>


.section-header {
    /* display: block; */
    /* margin-top: 20px; */
    position: relative;
    text-align: center;

}
.section-header h1 {
    /* color: #212121; */
    display: inline-block;
    font-size: 36px;
    font-weight: 700;
    line-height: 26px;
    /* padding: 0 0 4px; */
    position: relative;
    z-index: 2;
}
.section-header h1:after {
    position: absolute;
    display: block;
    width: auto;
    height: 3px;
    bottom: 0;
    left: 20%;
    right: 20%;
    border-radius: 1px;
    content: "";
    z-index: 1;
    background: #e6e9ec;
}
section {
    /* padding-bottom: 10px; */
    overflow: hidden;
    position: relative;
}

.micro-slider {
    height: 100%;
    margin: 10px 0;
    position: relative;
    width: 100%;
}
.micro-slider.fullwidth {
    /* height: 480px; */
    /* margin: 64px 0; */
}
.micro-slider.fullwidth .slider-item {
    height: 780px;
    line-height: 480px;
    width: 100%
}
.slider-wrapper {
    overflow: hidden;
    position: relative;
    transform-style: preserve-3d;
    transform-origin: 0 50%;
}
.slider-item {
    /* background: #FFF; */
    /* box-shadow: 0 1px 3px rgba(0,0,0,.06), 0 1px 2px rgba(0,0,0,.12); */
    /* color: #FFF; */
    display: none;
    font-size: 72px;
    /* height: 320px; */
    /* line-height: 320px; */
    left: 0;
    position: absolute;
    text-align: center;
    top: -70px;
	/* bottom: 10px; */
    width: 420px;
    cursor: pointer;
}
/*
.slider-item:not(.active) {cursor: pointer;}
*/
.indicators {
    bottom: 0px;
    left: 50%;
    list-style-type: none;
    margin: 0 0 0 -77px;
    padding: 0;
    position: absolute;
}
.indicators li {
    color: #fff;
    float: left;
    height: 16px;
    margin-right: 8px;
    text-align: center;
    width: 16px;
}
.indicators li:last-child {margin: 0;}
.indicators a {
    background: #FFF;
    border-radius: 8px;
    border: 1px solid #E6E9EC;
    color: #FFF;
    display: inline-block;
    height: 16px;
    width: 16px;
}
	</style>


<!--
MICRO-SLIDER with Autoplay + Hover Pause
Powered by:
Micro-Slider JS by LGSE https://github.com/lgse/micro-slider
Hammer JS gesture library
https://github.com/hammerjs/hammer.js
-->

<body id="micro-slider">
  <section>
    
  
	
   
    <div class="micro-slider">
    <div class="slider-item s1" data-href="https://codepen.io/sukma-budi" data-target="_blank">
		<img src="images/uploads/2020/3D-GAME-ART-DESIGN-300x280.png" alt="Thumb11" style="width:100%" loading="lazy">
	<p style="background-color:red; position:relative;top:-80px;">hello</p>
	</div>
	<div class="slider-item s2" data-href="https://github.com/lgse/micro-slider" data-target="_blank"><img src="images/uploads/2020/ANIMATION-PRIME-1-300x280.png" alt="Thumb11" style="width:100%" loading="lazy"></div>
      <div class="slider-item s3" data-href="https://hammerjs.github.io/" data-target="_blank"><img src="images/uploads/2020/ANIMATION-PRIME-1-300x280.png" alt="Thumb11" style="width:100%" loading="lazy"></div>
      <div class="slider-item s4" data-href="#" data-target="_blank"><img src="images/uploads/2020/ANIMATION-PRIME-1-300x280.png" alt="Thumb11" style="width:100%" loading="lazy"></div>
      <div class="slider-item s5" data-href="#" data-target="_blank"><img src="images/uploads/2020/ANIMATION-PRIME-1-300x280.png" alt="Thumb11" style="width:100%" loading="lazy"></div>
      <div class="slider-item s6" data-href="#" data-target="_blank"><img src="images/uploads/2020/ANIMATION-PRIME-1-300x280.png" alt="Thumb11" style="width:100%" loading="lazy"></div>
    </div>
  </section>

<script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
</body>
<script>
	/*
CDN:
Micro-Slider JS by LGSE
https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js
Hammer JS gesture library
https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js
*/

document.addEventListener('DOMContentLoaded', () => {
  
  //===== MICRO-SLIDER begin
	const __ms = document.querySelector('.micro-slider');
  const __msSlider = new MicroSlider(__ms, { indicators: true, indicatorText: '' });
  const hammer = new Hammer(__ms);
	const __msTimer = 1000;
  let __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
    
  //detect mouseenter event
	__ms.onmouseenter = function(e) {
    clearInterval(__msAutoplay); 
    console.log(e.type + ' mouse detected');
  }
  
  //detect mouseleave event
	__ms.onmouseleave = function(e) {
    clearInterval(__msAutoplay); 
    __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
    console.log(e.type + ' mouse detected');
  }
  
  //detect mouseclick event
	__ms.onclick = function(e) {
    clearInterval(__msAutoplay); 
    console.log(e.type + ' mouse detected');
  }
  
  //detect gesture tap event with hammer js library
  hammer.on('tap', function(e) {
    clearInterval(__msAutoplay);
    console.log(e.type + ' gesture detected');
  });
  
  //detect gesture swipe event with hammer js library
  hammer.on('swipe', function(e) {
    clearInterval(__msAutoplay); 
    __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
    console.log(e.type + ' gesture detected');
  });

  let slideLink = document.querySelectorAll('.slider-item');
  if (slideLink && slideLink !== null && slideLink.length > 0){
    slideLink.forEach( el => el.addEventListener('click', e => {
      e.preventDefault();
      let href = el.dataset.href;
      let target = el.dataset.target;
      if (href !== '#') window.open(href, target);
    }));
  }
  
  //===== MICRO-SLIDER end
  
});
</script>