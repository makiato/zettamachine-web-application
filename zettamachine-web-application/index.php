<?php
if ( !isset($wp_did_header) ) {
    $wp_did_header = true;
    require_once( dirname(__FILE__) . '/insights/wp-load.php' );
    wp();
}
function zetta_excerpt_length($length) {return 40;}
function zetta_excerpt_more($more) {return str_replace('&hellip;','&hellip;<br/>',$more);}
add_filter( 'excerpt_length', 'zetta_excerpt_length');
add_filter( 'excerpt_more', 'zetta_excerpt_more');
?>
<!-- Zetta Machine, Mehmet Akyuz, Enterprise Solutions Architect -->
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta content="ie=edge" http-equiv="x-ua-compatible">
	<title>Zetta Machine | Digital Thinking</title>
	<meta content="" name="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans|Roboto+Slab|Cabin+Sketch" rel="stylesheet">
	<link href="/img/apple-touch-icon-iphone-60x60.png" rel="apple-touch-icon">
	<link href="/img/apple-touch-icon-ipad-76x76.png" rel="apple-touch-icon" sizes="60x60">
	<link href="/img/apple-touch-icon-iphone-retina-120x120.png" rel="apple-touch-icon" sizes="114x114">
	<link href="/img/apple-touch-icon-ipad-retina-152x152.png" rel="apple-touch-icon" sizes="144x144">
	<link href="/img/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
	<link href="/img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
	<link href="/img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
	<link href="/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
	<link href="/img/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
	<link href="/img/android-chrome-192x192.png" rel="icon" sizes="192x192" type="image/png">
	<meta content="/img/smalltile.png" name="msapplication-square70x70logo">
	<meta content="/img/mediumtile.png" name="msapplication-square150x150logo">
	<meta content="/img/widetile.png" name="msapplication-wide310x150logo">
	<meta content="/img/largetile.png" name="msapplication-square310x310logo">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js">
	</script>
	<script src="/js/plugins.js">
	</script>
	<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js">
	</script>
	<script src="https://use.fontawesome.com/ee62852333.js">
	</script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/normalize.min.css" rel="stylesheet">
	<link href="/css/main.min.css?v=hesse" rel="stylesheet">
</head>
<body data-offset="0" data-spy="scroll" data-target=".navbar" id="zettamachine">
  
	<!-- Header -->
	<div class="container-fluid zetta-header page-header" id="top-container">
		<nav class="navbar navbar-default navbar-fixed-top bg-dark-grey">
			<div class="container-fluid">
				<div class="navbar-header">
					<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="#zettamachine">zetta<b>machine</b></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#about">ABOUT</a>
						</li>
						<li>
							<a href="#insights">INSIGHTS</a>
						</li>
						<li>
							<a href="#contact">CONTACT</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="row">
		  <div class="col-sm-7"></div>
		  <div class="col-sm-5">
		    <div class="zetta-quote">
		      <span class="zetta-beauty">Beauty is the purgation of superfluities.</span><br/>
		      <span class="zetta-michael">- Michaelangelo<sub><i class="cheeky">(the sculptor one, not the ninja turtle&hellip;)</i></sub></span>
		    </div>
		  </div>
		</div>
	</div>
	<!-- Insights -->
	<div class="container-fluid vert-spacey" id="insights">
		<div class="row">
			<div class="col-sm-2">
				<h1>insights</h1>
			</div>
			<?php
			   // the query
			   $the_query = new WP_Query( array(
			      'posts_per_page' => 3,
			   ));
			?><?php if ( $the_query->have_posts() ) : ?><?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-sm-3">
				<h2><?php the_title(); ?></h2>
				<a href="<?php the_permalink();  ?>"><?php the_post_thumbnail('medium_large',["class" => "img-responsive responsive-img"]); ?></a>
				<?php the_excerpt(); ?>
			</div><?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?>
			<p><?php __('No News'); ?></p>
			<?php endif; ?>
			<div class="col-sm-1"></div>
		</div>
	</div>
	<!-- About -->
	<div class="container-fluid bg-light-grey vert-spacey" id="about">
		<div class="row">
			<div class="col-sm-2">
				<h1>about</h1>
			</div>
			<div class="col-sm-8">
				<p><a href="https://linkedin.com/in/makyuz"><i aria-hidden="true" class="fa fa-male"></i> Mehmet Akyuz</a></p>
				<p>I'm a Sydney based Digital Solutions Architect with 18+ years of technology experience and a shiny TOGAF certificate.</p>
				<p>I have been helping clients from finance, insurance, telco and other industries with their large programs and managing end to end architectures. Lately I got more involved in digital transformation initiatives and sharing my thoughts and ideas in <a href="//insights.zettamachine.com">my blog.</a></p>
				<p>I'm particularly interested in APIs, enterprise architecture and digital thinking.</p>
				<p>I'm also fond of <a href="https://flic.kr/p/SEzDZJ">motorcycles <i aria-hidden="true" class="fa fa-motorcycle"></i></a>, <a href="https://www.instagram.com/mak100/">photography <i aria-hidden="true" class="fa fa-instagram"></i></a> and <a href="https://www.last.fm/user/mak100">music <i class="fa fa-music" aria-hidden="true"></i></a> and occasionally <a href="https://github.com/makiato/">code <i aria-hidden="true" class="fa fa-github"></i></a> for fun.</p>
				<p>Feel free to contact me on <a href="https://linkedin.com/in/makyuz"><i aria-hidden="true" class="fa fa-linkedin-square"></i> linkedin.com/makyuz</a> & <a href="https://twitter.com/_makyuz"><i aria-hidden="true" class="fa fa-twitter"></i> twitter.com/_makyuz</a></p>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
	<!-- Contact -->
	<div class="container-fluid bg-dark-grey vert-spacey" id="contact">
		<div class="row">
			<div class="col-sm-2">
				<h1>contact</h1>
			</div>
			<div class="col-sm-8">
				<p><a href="mailto:hello@zettamachine.com"><i aria-hidden="true" class="fa fa-envelope"></i> hello@zettamachine.com</a></p>
				<p><i aria-hidden="true" class="fa fa-location-arrow"></i> Sydney, Australia <sub><i class="cheeky">(where you're beaten by kangaroos and stung by deadly spiders)</i></sub></p>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
	
	<!-- Add scripts -->
	<script src="/js/main.min.js">
	</script>
	<script>
	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	 ga('create', 'UA-43111163-1', 'auto');
	 ga('send', 'pageview');

	</script>
</body>
</html>