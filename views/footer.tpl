<footer>

</footer>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
	$(window).scroll(function(){ 
		if($(this).scrollTop() > 1080){
			$("#terugKnop").fadeIn();
		} 
		else{ $("#terugKnop").fadeOut();} 
	});
	
	$("#berichtenKnop").click(function(){
		$("html, body").animate({
			scrollTop: $("#berichten").offset().top
		}, 2000);
		
	});
	
	$("#berichtenKnop2").click(function(){
		$("html, body").animate({
			scrollTop: $("#berichten2").offset().top
		}, 2000);
		
	});
	
	$("#terugKnop").click(function(){
		$("html, body").animate({
			scrollTop: 0
		}, 2000);
	});

	$(document).ready(function() {
		$("[href]").each(function() {
			if (this.href == window.location.href) {
				$(this).addClass("active");
			}
		});
	});
</script>
</body>
</html>