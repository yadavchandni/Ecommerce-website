<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/contact-page.css">



	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

</head>


<body>

	<?php

	include('header.php');
	?>

	<section class="iq-features">

            <div class="container">

               <div class="row align-items-center">

                  <div class="col-lg-3 col-md-12"></div>

                  <div class="col-lg-6 col-md-12">

                     <div class="holderCircle">

                        <div class="round"></div>

                        <div class="dotCircle">

                           <span class="itemDot active itemDot1" data-tab="1">

                           <i class="fa fa-clock-o"></i>

                           <span class="forActive"></span>

                           </span>

                           <span class="itemDot itemDot2" data-tab="2">

                           <i class="fa fa-comments"></i>

                           <span class="forActive"></span>

                           </span>

                           <span class="itemDot itemDot3" data-tab="3">


                           <i class="fa fa-user"></i>

                           <span class="forActive"></span>
                           </span>

                           <span class="itemDot itemDot4" data-tab="4">

                           <i class="fa fa-tags"></i>

                           <span class="forActive"></span>
                           </span>

                           <span class="itemDot itemDot5" data-tab="5">

                           <i class="fa fa-upload"></i>
                           <span class="forActive"></span>
                           </span>

                           <span class="itemDot itemDot6" data-tab="6">

                           <i class="fa fa-briefcase"></i>
                           <span class="forActive"></span>
                           </span>

                        </div>

                        <div class="contentCircle">

                           <div class="CirItem title-box active CirItem1">

                              <h2 class="title"><span>Automate</span></h2>

                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-clock-o"></i>
                           </div>


                           <div class="CirItem title-box CirItem2">
                              <h2 class="title"><span>Chat </span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-comments"></i>
                           </div>


                           <div class="CirItem title-box CirItem3">
                              <h2 class="title"><span>Responses</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-user"></i>
                           </div>


                           <div class="CirItem title-box CirItem4">
                              <h2 class="title"><span>Tags</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-tags"></i>
                           </div>


                           <div class="CirItem title-box CirItem5">
                              <h2 class="title"><span>Sharing</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-upload"></i>
                           </div>


                           <div class="CirItem title-box CirItem6">
                              <h2 class="title"><span>Support</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-briefcase">
                              	
                              </i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-12"></div>

               </div>

            </div>

            <div>
	
				<h3 style="font-family: center">contact no:

					<br>
					<h1>96-52-84-51-10</h1>
				</h3>
			</div>
			
        </section>


        <!-- javascript file  -->

<script type="text/javascript">
	

	let i=2;

	
	$(document).ready(function(){
		var radius = 200;
		var fields = $('.itemDot');
		var container = $('.dotCircle');
		var width = container.width();
 radius = width/2.5;
 
		 var height = container.height();
		var angle = 0, step = (2*Math.PI) / fields.length;
		fields.each(function() {
			var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
			var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
			if(window.console) {
				console.log($(this).text(), x, y);
			}
			
			$(this).css({
				left: x + 'px',
				top: y + 'px'
			});
			angle += step;
		});
		
		
		$('.itemDot').click(function(){
			
			var dataTab= $(this).data("tab");
			$('.itemDot').removeClass('active');
			$(this).addClass('active');
			$('.CirItem').removeClass('active');
			$( '.CirItem'+ dataTab).addClass('active');
			i=dataTab;
			
			$('.dotCircle').css({
				"transform":"rotate("+(360-(i-1)*36)+"deg)",
				"transition":"2s"
			});
			$('.itemDot').css({
				"transform":"rotate("+((i-1)*36)+"deg)",
				"transition":"1s"
			});
			
			
		});
		
		setInterval(function(){
			var dataTab= $('.itemDot.active').data("tab");
			if(dataTab>6||i>6){
			dataTab=1;
			i=1;
			}
			$('.itemDot').removeClass('active');
			$('[data-tab="'+i+'"]').addClass('active');
			$('.CirItem').removeClass('active');
			$( '.CirItem'+i).addClass('active');
			i++;
			
			
			$('.dotCircle').css({
				"transform":"rotate("+(360-(i-2)*36)+"deg)",
				"transition":"2s"
			});
			$('.itemDot').css({
				"transform":"rotate("+((i-2)*36)+"deg)",
				"transition":"1s"
			});
			
			}, 2000);
		
	});



</script>




</body>
</html>