<?php if (!isset($object)) $object = App\Page::create(); ?>
<?php if (!isset($bodyclass)) $bodyclass = 'unknown'; ?>
<!DOCTYPE html>
<html lang="en">
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# book: http://ogp.me/ns/book#">
		<meta charset="utf-8">
		<link rel="canonical" href="{{$object->web_url()}}">
		<meta name="robots" content="noarchive">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Chrome colors -->
		<meta name="theme-color" content="#2c3f50">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<!-- iOS -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="format-detection" content="telephone=no">

		<!-- Title and description -->
		<title>{{$object->web_page_title(true)}}</title>
		<meta name="description" content="{{$object->web_description()}}" />

		<!-- Icons -->
		<link rel="icon" sizes="192x192" href="{{URL::to('assets/icon192.png')}}">
		<link rel="icon" sizes="144x144" href="{{URL::to('assets/icon144.png')}}">
		<link rel="icon" sizes="96x96" href="{{URL::to('assets/icon96.png')}}">
		<link rel="icon" sizes="48x48" href="{{URL::to('assets/icon48.png')}}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{URL::to('assets/icon152.png')}}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{URL::to('assets/icon144.png')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{URL::to('assets/icon120.png')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{URL::to('assets/icon114.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('assets/icon76.png')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{URL::to('assets/icon72.png')}}">
		<link rel="apple-touch-icon" sizes="57x57" href="{{URL::to('assets/icon57.png')}}">

		<!-- Twitter (https://cards-dev.twitter.com/validator) -->
		@if ($object->web_image() != "")
		<meta name="twitter:card" content="summary_large_image" />
		@else
		<meta name="twitter:card" content="summary" />
		@endif
		<meta name="twitter:site" content="@LaikaReads" />
		<meta name="twitter:title" content="{{$object->web_page_title(true)}}" />
		<meta name="twitter:description" content="{{$object->web_description()}}" />
		@if ($object->web_image() != "")
		<meta name="twitter:image" content="{{URL::to($object->web_image())}}" />
		@endif

		<!-- Open Graph (https://developers.facebook.com/tools/debug/) -->
		<meta property="fb:app_id" content="229883360868841" />
		<meta property="og:site_name" content="Laika Reads"/>
		<meta property="og:url" content="{{$object->web_url()}}" />
		@if ($bodyclass == "book" || $bodyclass == "chapter")
		<meta property="og:type" content="book" />
		@endif
		@if ($bodyclass == "about")
		<meta property="og:type" content="article" />
		@endif
		<meta property="og:title" content="{{$object->web_page_title(true)}}" />
		<meta property="og:description" content="{{$object->web_description()}}" />
		@if ($object->web_image() != "")
		<meta property="og:image" content="{{URL::to($object->web_image())}}" />
		@endif

		<!-- Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
		@include("fonts")

		<!-- Styling -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="{{URL::to('css/app.css')}}" />

		<!-- AdSense -->
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
		    google_ad_client: "ca-pub-1082181286220484",
		    enable_page_level_ads: true
		  });
		</script>

		<!-- HTML5 shim -->
		<!-- Respond.js -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="{{$bodyclass}}">
	    @include("nav")
	    @yield("content")

		<footer class="footer">
			<div class="container">
				<p>Made with <span class="glyphicon glyphicon-heart"></span> by <a href="https://twitter.com/ernes7a" target="_blank">@ernes7a</a> and <a href="https://twitter.com/aurimas" target="_blank">@aurimas</a>. <a href="{{route('about')}}">Learn more</a>.</p>

				@if ($bodyclass == "book")
				<p>We are a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for us to earn fees by linking to Amazon.com and affiliated sites. In human terms, whenever you buy a book on <a href="https://www.amazon.com?tag=laikareads-20" target="_blank">Amazon</a> by following a link on LaikaReads, we get a small percentage of its price to help support our work.</p>
				@endif
			</div>
		</footer>

		<!-- Structured Data -->
		@include("structure")

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="{{URL::to('js/jquery.dotdotdot.min.js')}}"></script>
		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- JavaScript -->
		<script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>
		<!-- Modernizr -->
		<script src="{{URL::to('js/modernizr-custom.js')}}" type="text/javascript"></script>
		<!-- Twitter -->
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<!-- Facebook -->
		<div id="fb-root"></div>
		<!-- Amazon -->
		<script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=d1fd94e6-d008-4d9c-9170-1f8cbad00503"></script>
		<!-- Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-19315846-20', 'auto');
		ga('send', 'pageview');
		</script>

		<!-- Doorbel.io -->
		@if ($bodyclass != "chapter")
		<script type="text/javascript">
    		window.doorbellOptions = {
        		appKey: 'MqQwYKhajdXcyTSZ5vp0p3ZMdA5JfMQwtAqnWyGe1UQnFG2tBCCrywGn6cD2Rh7D'
    		};
    		(function(w, d, t) {
        	var hasLoaded = false;
        	function l() { if (hasLoaded) { return; } hasLoaded = true; window.doorbellOptions.windowLoaded = true; var g = d.createElement(t);g.id = 'doorbellScript';g.type = 'text/javascript';g.async = true;g.src = 'https://embed.doorbell.io/button/7051?t='+(new Date().getTime());(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(g); }
        	if (w.attachEvent) { w.attachEvent('onload', l); } else if (w.addEventListener) { w.addEventListener('load', l, false); } else { l(); }
        	if (d.readyState == 'complete') { l(); }
    		}(window, document, 'script'));
		</script>
		@endif
	</body>
</html>
