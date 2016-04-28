<?php get_header(); ?>
<div class="row">
  <div class="col-md-1">



    <?php wp_list_categories(array('title_li' => '')); ?>




  </div>
  <div class="col-md-7">


<?php foreach (get_posts(array( 'posts_per_page' => 3 )) as $post ) : setup_postdata($post); ?>

<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="..." alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php tie_excerpt() ?>
  </div>
</div>


<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


<?php the_post_thumbnail('home-post-thumbnail'); ?>


<?php endforeach;  wp_reset_postdata(); ?>




<pre> <?php print_r( get_posts() ); ?></pre>
   


  </div>
  <div class="col-md-4">


  	<div class="well">

  		Trending Now

  		<?php wpp_get_mostpopular(); ?>


  	</div>

  	



  </div>
</div>
<?php get_footer(); ?>