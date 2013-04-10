<!-- javascript -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stickyMojo.js"></script>
<script type="text/javascript" src="//use.typekit.net/csp2vcm.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script>

		function scrollToElement(selector, time, verticalOffset) {
		    time = typeof(time) != 'undefined' ? time : 1000;
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
		$().button('loading');
		$('nav#info,#transaction-sidebar').stickyMojo({footerID: '#footer', contentID: '.info-body,#transaction-body'});

		// i have trouble getting this to work
		// $('a#why-facebook').tooltip({
		// 	placement: 'bottom',
		// 	trigger: 'hover',
		// 	title: 'Facebook blahblah'
		// });

		$('#scroll-to-marketing').click(function (e) {
			e.preventDefault();
			scrollToElement('#marketing');
		});

	});
</script>