	<footer>
		<ul class="menu">
			<li>© Anxiety. All rights reserved.</li><li>Website courtesy of <a href="www.arjunkalburgi.com">Arjun Kalburgi</a></li>
		</ul>
	</footer>

	<script>
		var blurElement = {blur:0};//start the blur at 0 pixels
		$(function () { // wait for document ready
			// init controller
			var controller = new ScrollMagic.Controller();

			// build tween
			var tween = TweenMax.to(blurElement, 1, {blur:50, onUpdate:applyBlur, ease: Power0.easeInOut});
			// var tween = TweenMax.to("#logo", 1, {rotation: 360, ease: Linear.easeNone});

			// build scene
			var scene = new ScrollMagic.Scene({triggerElement: "#trigga", duration: 300})
							.setTween(tween)
							// .setPin("a#logo", {pushFollowers: false})
							// .addIndicators() // add indicators (requires plugin)
							.addTo(controller);

			var tween2 = TweenMax.to("nav", 1, {css:{opacity:1}, ease: Power4.easeInOut})
			var scene2 = new ScrollMagic.Scene({triggerElement: "content"})
							.setTween(tween2)
							.addTo(controller); 
		})

		function applyBlur() {
			// $('header a#logo').removeClass("fixed"); 
		    TweenMax.set($('#logo'), {webkitFilter:"blur(" +blurElement.blur + "px)"});
		};
	</script>

	<script type="text/javascript">
		if (window.location.href != "http://www.anxiety44.com/" && window.location.href != "file:///Users/insanekillah/projects/anxiety44/index.html") {
			$("header").css("display", "none"); 
			$("footer").css("display", "none"); 
		}
	</script>

</body>
</html>