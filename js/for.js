function toggleSearch(){
	$('.search-icon').on('click', function() {
		$('.seeker').slideToggle();
	})
	$('.close').click(function() {
		$('.seeker').slideToggle();
	});
}