<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// fixed-top navigation on scroll
		$(window).scroll(function(){
			if ($(this).scrollTop() == 0 || $(this).scrollTop() < 240) {
				$("header").removeClass();
			} else if ($(this).scrollTop() >= 240) {
				$("header").addClass("scrolled");
			} else {
				$("header").removeClass();
			};
		})
		// mobile navbar button toggle
		$(".navbar-toggle").click(function () {
			if ( $("nav").style.visibility == "visible" ) {
				$("nav").style.visibility = "hidden";
			} else {
				$("nav").style.visibility = "visible";	
			}
		})
	})
</script>