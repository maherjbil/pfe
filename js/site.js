$(document).ready(function() 
{
	$(".quit").css("display", "none");

	var isMenuOpen = false;

	$('.menu_btn').click(function()
	{
		if (isMenuOpen == false)
		{
		//alert('je suis dans le bon cas')
			$("#menu").clearQueue().animate({
				left : '0'
			})
			$("#page").clearQueue().animate({
				"margin-left" : '240px'
			})
			
			$(this).fadeOut(200);
			$(".quit").fadeIn(300);
			
			isMenuOpen = true;
		} 
	});
	
	$('.quit').click(function()
	{
		if (isMenuOpen == true)
		{
			$("#menu").clearQueue().animate({
				left : '-240px'
			})
			$("#page").clearQueue().animate({
				"margin-left" : '0px'
			})
			
			$(this).fadeOut(200);
			$(".menu_btn").fadeIn(300);
			
			isMenuOpen = false;
		}
	});
});

