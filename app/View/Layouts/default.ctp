<!DOCTYPE html>
<html>
<head>
	<?php
		echo $this->Html->charset();
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title id="pageTitle">
		<?php
			echo $title_for_layout;
		?>
	</title>
	<?php
		echo $this->Html->css([ 'bootstrap.min', 'main' ]);
		echo $this->Html->script('jquery-1.10.1.min');
	?>
	<link rel="shortcut icon" href="favicon2.png">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php echo $this->Html->script(['respond.min','html5shiv']); ?>
	<![endif]-->
	<!--[if !IE 7]>
	<style type="text/css">
		#wrap {
			display: table;
			height: 100%
		}
	</style>
	<![endif]-->

	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-000000000-3', 'azurewebsites.net');
		ga('send', 'pageview');
	</script>

</head>

<body>
<div id="wrap">
	<div id="header">
		<div class="navbar navbar-inverse navbar-fixed-top" id="teh-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">The Ultimate Quiz</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index" title="Home"><span
									class="glyphicon glyphicon-home"></span></a></li>
					</ul>
				</div>
				<!--/.navbar-collapse -->
			</div>
		</div>
	</div>

	<div id="content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
</div>
<div id="footer">
	<div class="container">
		<div class="row credit">
			<div class="col-sm-12"><p class="text-muted">Baked
					by <?php echo $this->Html->image('PUP-PG_23px-dark.png', [ 'url' => 'https://www.facebook.com/PupProgrammingGuild',
					                                                    'id'    => 'pup-progguild' ]) ?></p>
			</div>
		</div>
	</div>
</div>

<?php
	echo $this->Html->script([
	                         'bootstrap.min',
	                         'main'
	                         ]);
?>

</body>
</html>
