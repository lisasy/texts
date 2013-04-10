<!-- javascript -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stickyMojo.js"></script>
<script src="js/jquery.fitvids.min.js"></script>
<script type="text/javascript" src="//use.typekit.net/csp2vcm.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script>

		function scrollToElement(selector, time, verticalOffset) {
		    time = typeof(time) != 'undefined' ? time : 500;
		    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
		    element = $(selector);
		    offset = element.offset();
		    offsetTop = offset.top + verticalOffset;
		    $('html, body').animate({
		        scrollTop: offsetTop
		    }, time);
		}

	$(document).ready(function() {
		$('.xbook').popover();
		$('.popover-element').popover();
		$('.video').fitVids();
		$('#scroll-to-marketing').click(function (e) {
			e.preventDefault();
			scrollToElement('#marketing');
		});

		$('a#why-facebook').tooltip({
			placement: 'bottom',
			trigger: 'hover',
			title: 'We encourage you to use Facebook to log in so that you are connected to your campus network.'
		});

		// drawer menu
		$('.landing-nav').addClass('js').before('<div id="menu">Menu</div>');
		$('#menu').click(function(){
			$('.landing-nav').toggle();
		});
		

		//this must go at the end
		$('nav#info,#transaction-sidebar').stickyMojo({footerID: '#footer', contentID: '.info-body,#transaction-body'});

	});
</script>