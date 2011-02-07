
<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="themes/SSproject/js/libs/jquery-1.5.min.js"><\/script>')</script>
<script src="themes/SSproject/js/SSproject.js?v=1"></script>

<!--[if lt IE 7 ]>
<script src="themes/SSproject/js/libs/dd_belatedpng.js?v=1"></script>
<![endif]-->

<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
change the UA-XXXXX-X to be your site's ID -->
<script>
var _gaq = [['_setAccount', '{{$SiteConfig.GoogleAnalytics}}'], ['_trackPageview']];
(function(d, t) {
	var g = d.createElement(t),
	s = d.getElementsByTagName(t)[0];
	g.async = true;
	g.src = '//www.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g, s);
	})(document, 'script');
</script>
