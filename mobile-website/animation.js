$(document).ready(function(){
	$(".menu").click(function(){
		$(this).toggleClass("open");
        $(".slidemenu").toggle(250);
        $(".introText").toggleClass("fadeIntrotext", (3000) );  
	});
    
    $(".dayOne").click(function(){
        $(".programmeItems").slideToggle(250);
        $(".tableOne").toggle();
        $(".tableOneTitle").toggle(500);
        $(".daysMenu").toggle(450);
    })
    $(".dayTwo").click(function(){
        $(".programmeItems").slideToggle(250);
        $(".tableOne").toggle();
        $(".tableOneTitle").toggle(500);
        $(".daysMenu").toggle(450);
    })
    
        $("element").paroller();
        $(window).paroller({ factor: '0.5', type: 'foreground', direction: 'vertical' });
});