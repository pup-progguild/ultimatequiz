<?php echo $this->Html->css('quiz'); ?>
<div class="well well-lg container quizContainer">
	<div id="slickQuiz">
		<h1 class="quizName"><!-- where the quiz name goes --></h1>

		<div class="quizArea">
			<div class="quizHeader">
				<!-- where the quiz main copy goes -->
				<br />
                <p class="quizTimer"></p>
				<p><a class="btn btn-primary btn-lg startQuiz">Get Started!</a></p>
			</div>

			<!-- where the quiz gets built -->
		</div>

		<div class="quizResults">
			<h3 class="quizScore">You Scored: <span><!-- where the quiz score goes --></span></h3>

			<h3 class="quizLevel"><strong>Ranking:</strong> <span><!-- where the quiz ranking level goes --></span></h3>

			<div class="quizResultsCopy">
				<!-- where the quiz result copy goes -->
			</div>
		</div>
	</div>
</div>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
</script>
<script type="text/javascript"
        src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
<script type="text/javascript">

</script>
<?php echo $this->Html->script([ 'slickQuiz-config', 'slickQuiz', 'quiz' ]); ?>
