<?php get_header(); ?>
	
	<div class="twelve columns centered">
	<div class="alert-box error">404!</div>
	<h1>OH NO!!</h1>
	<p>We can't find what you're looking for!!</p>  
	<p>But we're not going to leave you stranded.</p>
	<p>Why don't you try a search?</p>
	
	<?php get_search_form(); ?>
	
	<a href="<?php echo home_url( '/' ); ?>">&larr; Go Home?</a>

<?php get_sidebar(); ?>
		
<?php get_footer(); ?>