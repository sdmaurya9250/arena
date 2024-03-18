<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;amp">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<style>
	




.sectionClass {
  padding: 20px 0px 50px 0px;
  position: relative;
  display: block;
}

.fullWidth {
  width: 100% !important;
  display: table;
  float: none;
  padding: 0;
  min-height: 1px;
  
  position: relative;
}


.sectiontitle {
  background-position: center;
  margin: 30px 0 0px;
  text-align: center;
  min-height: 20px;
}

.sectiontitle h2 {
  font-size: 30px;
  color: #222;
  margin-bottom: 0px;
  padding-right: 10px;
  padding-left: 10px;
}


.headerLine {
  width: 160px;
  height: 2px;
  display: inline-block;
  background: #101F2E;
}


.projectFactsWrap{
    display: flex;
  margin-top: 30px;
  flex-direction: row;
  flex-wrap: wrap;
}


#projectFacts .fullWidth{
  padding: 0;
}

.projectFactsWrap .item{
  width: 25%;
  height: 100%;
  padding: 50px 0px;
  text-align: center;
}

.projectFactsWrap .item:nth-child(1){
  background: rgb(16, 31, 46);
}

.projectFactsWrap .item:nth-child(2){
  background: rgb(18, 34, 51);
}

.projectFactsWrap .item:nth-child(3){
  background: rgb(21, 38, 56);
}

.projectFactsWrap .item:nth-child(4){
  background: rgb(23, 44, 66);
}

.projectFactsWrap .item p.number{
  font-size: 40px;
  padding: 0;
  font-weight: bold;
}

.projectFactsWrap .item p{
  color: rgba(255, 255, 255, 0.8);
  font-size: 18px;
  margin: 0;
  padding: 10px;
  font-family: 'Open Sans';
}


.projectFactsWrap .item span{
  width: 60px;
  background: rgba(255, 255, 255, 0.8);
  height: 2px;
  display: block;
  margin: 0 auto;
}


.projectFactsWrap .item i{
  vertical-align: middle;
  font-size: 50px;
  color: rgba(255, 255, 255, 0.8);
}


.projectFactsWrap .item:hover i, .projectFactsWrap .item:hover p{
  color: white;
}

.projectFactsWrap .item:hover span{
  background: white;
}

@media (max-width: 786px){
  .projectFactsWrap .item {
     flex: 0 0 50%;
  }
}

/* AUTHOR LINK */


footer{
  z-index: 100;
  padding-top: 50px;
  padding-bottom: 50px;
  width: 100%;
  bottom: 0;
  left: 0;
}

footer p {
color: rgba(255, 255, 255, 0.8);
  font-size: 16px;
  opacity: 0;
  font-family: 'Open Sans';
  width: 100%;
    word-wrap: break-word;
  line-height: 25px;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  margin: 0;
  -webkit-transition: all 250ms ease;
  -moz-transition: all 250ms ease;
  transition: all 250ms ease;
}

footer .authorWindow a{
  color: white;
  text-decoration: none;
}

footer p strong {
    color: rgba(255, 255, 255, 0.9);
}

.about-me-img {
  width: 120px;
  height: 120px;
  left: 10px;
  /* bottom: 30px; */
  position: relative;
  border-radius: 100px;
}


.about-me-img img {
}


.authorWindow{
  width: 600px;
  background: #75439a;
  padding: 22px 20px 22px 20px;
  border-radius: 5px;
  overflow: hidden;
}

.authorWindowWrapper{
  display: none;
  left: 110px;
  top: 0;
  padding-left: 25px;
  position: absolute;
}





.trans{
  opacity: 1;
  -webkit-transform: translateX(0px);
  transform: translateX(0px);
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  transition: all 500ms ease;
}

@media screen and (max-width: 768px) {
    .authorWindow{
         width: 210px;
    }

    .authorWindowWrapper{
             bottom: -170px;
  margin-bottom: 20px;
    }

    footer p{
          font-size: 14px;
    }
}



	</style>

<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="26" style="visibility: visible;">
                <i class="fa fa-calendar-plus-o"></i>
                <p id="number1" class="number">26</p>
                <span></span>
                <p>YEAR OF EXPERIENCE</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="450000" style="visibility: visible;">
                <i class="fa fa-line-chart"></i>
                <p id="number2" class="number">450000</p>
                <span></span>
                <p>TRAINED STUDENTS</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="18" style="visibility: visible;">
                <i class="fa fa-map-marker"></i>
                <p id="number3" class="number">18+</p>
                <span></span>
                <p>PRESENT IN COUNTRIES</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="4.50000" style="visibility: visible;">
                <i class="fa fa-trophy"></i>
                <p id="" class="number">4.5</p>
                <span></span>
                <p>RATING</p>
            </div>
        </div>
    </div>
</div>

<script>
	
	$.fn.jQuerySimpleCounter = function( options ) {
	    var settings = $.extend({
	        start:  0,
	        end:    10000,
	        easing: 'swing',
	        duration: 10000,
	        complete: ''
	    }, options );

	    var thisElement = $(this);

	    $({count: settings.start}).animate({count: settings.end}, {
			duration: settings.duration,
			easing: settings.easing,
			step: function() {
				var mathCount = Math.ceil(this.count);
				thisElement.text(mathCount);
			},
			complete: settings.complete
		});
	};


$('#number1').jQuerySimpleCounter({end: 26,duration: 9000});
$('#number2').jQuerySimpleCounter({end: 450010,duration: 4500});
$('#number3').jQuerySimpleCounter({end: 18,duration: 2000});
$('#number4').jQuerySimpleCounter({end: 4.5,duration: 4.5});



  	/* AUTHOR LINK */
     $('.about-me-img').hover(function(){
            $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
        }, function(){
            $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
        });
  
	</script>