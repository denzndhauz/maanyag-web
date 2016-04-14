'use strict';

$(document).ready(function() {
	var float = '<div class="row">'+
					'<div class="col-md-12">'+
						'<div class="alert alert-info panel-header">'+
							'<a href="#" class="close" data-dismiss="alert">&times;</a>'+
							'<center><b>BOOK NOW!</b>'+
							'<button class="btn btn-default" data-toggle="modal" data-target="#booking">CLICK HERE</button></center>'+
						'</div>'+
					'</div>'+
				'</div>';

	setTimeout(function() {
		$('.float-menu').html(float);
	},1000)

	//scrolling effect when scrolling down 60px
	$(window).scroll(function() {
		if($(this).scrollTop() > 60) {
			$(".nav-eff").css("webkit-transition", ".5s");
			$(".nav-eff").css("background", "white");
			$(".nav-eff a").css("color", "#0c6815");
			$(".navbar").css("border","1px solid #CCC");

			//box-shadow effect
			$(".nav-eff").css("-webkit-box-shadow", "0px 9px 65px -1px rgba(0,0,0,0.75)");
			$(".nav-eff").css("-moz-box-shadow", "0px 9px 65px -1px rgba(0,0,0,0.75)");
			$(".nav-eff").css("box-shadow", "0px 9px 65px -1px rgba(0,0,0,0.75)");

			//box-shadow effect
			$(".logo-bg").css("-webkit-box-shadow", "0px 9px 65px -1px rgba(0,0,0,0.75)");
			$(".logo-bg").css("-moz-box-shadow", "0px 9px 65px -1px rgba(0,0,0,0.75)");
			$(".logo-bg").css("box-shadow", "0px 9px 65px -1px rgba(0,0,0,0.75)");

		} else if($(this).scrollTop() < 60) {
			$(".nav-eff").css("background", "background: rgba(9, 0, 0, 0.5)");
			$(".nav-eff a").css("color", "white");
			$(".navbar").css("border","none");

			// remove box-shadow effect
			$(".nav-eff").css("-webkit-box-shadow", "none");
			$(".nav-eff").css("-moz-box-shadow", "none");
			$(".nav-eff").css("box-shadow", "none");

			// remove box-shadow effect
			$(".logo-bg").css("-webkit-box-shadow", "none");
			$(".logo-bg").css("-moz-box-shadow", "none");
			$(".logo-bg").css("box-shadow", "none");
		}
	});
	
});

