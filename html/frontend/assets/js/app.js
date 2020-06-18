$(document).ready(function(){
});
$(window).load(function(){
	setTimeout(function(){
		document.getElementById("myoffice_loading").style.animation = "loaderlogo 0.3s linear 0s 1 alternate forwards running";
		document.getElementById("myoffice_loading_containre").style.animation = "loaderlogo_conti 0.3s linear 0.5s 1 alternate forwards running";
		$('body').removeClass('scrollapply');
		$(window).scrollTop(0);
	}, 1000);
	setTimeout(function(){
		call_scrollmagic();
	}, 1800);
});
$(document).ready(function(){
});

/* Sticky Header Scroll Effect */
callscroll();
$(window).scroll(function(){
	callscroll();
});
function callscroll(){
	if($(window).scrollTop() > 50) {
		$('header').addClass('header_scroll');
	} else {
		$('header').removeClass('header_scroll');
	}
}



function call_scrollmagic(){
	var controller = new ScrollMagic.Controller();
	var revealElements = $(".animation_part");
	for (var i=0; i<revealElements.length; i++) {
		new ScrollMagic.Scene({
			triggerElement: revealElements[i],
			offset:50,
			triggerHook:"onEnter"
		})
		.setClassToggle(revealElements[i], "visible")
		.addTo(controller);
	}
}










function call_scrollmagic_test(){
	// var controller = new ScrollMagic.Controller();
	// var revealElements = $(".animation_part");
	// for (var i=0; i<revealElements.length; i++) {
	// 	new ScrollMagic.Scene({
	// 		triggerElement: revealElements[i],
	// 		offset:0,
	// 		triggerHook:"onEnter"
	// 	})
	// 	.setClassToggle(revealElements[i], "visible")
	// 	.addTo(controller);
	// }

	

	// var controller = new ScrollMagic.Controller();
	// var scene = new ScrollMagic.Scene();
	// // Add Scene to ScrollMagic Controller
	// controller.addScene([
	//   scene1,
	//   // scene2,
	//   // scene3
	// ]);

	// var scene1 = new ScrollMagic.Scene({
	//   triggerElement: '.animation_part',
	//   offset:0,
	//   triggerHook:"onEnter"
	// })
	// .setClassToggle("animation_part", "visible")
	// .addTo(controller); // Add Scene to ScrollMagic Controller


	// var controller = new ScrollMagic.Controller();
	// var revealElements = document.getElementsByClassName("animation_part");
	// for (var i=0; i<revealElements.length; i++) {
	// 	new ScrollMagic.Scene({
	// 		triggerElement: revealElements[i],
	// 		offset:0,
	// 		triggerHook:"onEnter"
	// 	})
	// 	.setClassToggle(revealElements[i], "visible") 
	// 	// .addIndicators({name: "digit_left " + (i+1) })
	// 	.addTo(controller);
	// }


}



$('.tlit_hero_img').tilt({
    maxTilt:2
});
$('.small_image_tilt').tilt({
    maxTilt:20
});