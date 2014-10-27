<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>


<div class="container">
	<div id="content" class="clearfix">


		<div class="row">

  			<div class="col-xs-12 col-sm-8 news">


  			<h2>NEWS</h2>

				<?php
				if (is_page()) {
				  $cat=get_cat_ID($post->post_title); //use page title to get a category ID
				  $posts = get_posts ("cat=$cat&showposts=10");
				  if ($posts) {
				    foreach ($posts as $post):
				      setup_postdata($post); ?>
					  
					  	<div class="home-news-container">
						  	  <div class="home-news-left">
						  	  </div>
						  	 
						  	  <div class="home-news-right">
						      	
						      	<?php the_time("F d, Y"); ?><br/><div class="uppercase"><?php the_title(); ?></div>
						      	 <br/> 
						      	 <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
						      	 <br/>
						      	  <?php the_excerpt(); ?> <!--<?php echo get_excerpt(); ?>-->
						      	 <br/><div class="read-more"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"></div>
						    </div>
						    </a>
					    </div>
					  
				    <?php endforeach;
				  }
				}
				?>
			  </div>









			<div class="xs-hidden col-sm-4">
			

			<div class="row">
				<div class="col-xs-6">
				</div>
				<div class="col-xs-6">
				</div>
			</div>

			</div>
		</div> <!-- end #content -->
	</div>
</div>	

<?php get_footer(); ?>