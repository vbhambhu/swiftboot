<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body>












<?php if (is_home()) { ?>
<div class="home-wrapper">
<?php } ?>
     


 <div class="container">


    <div class="header clearfix">

    <h3 class="masthead-brand">
    <a href="<?php echo( get_bloginfo( 'url' ) ); ?>"><?php echo( get_bloginfo( 'title' ) ); ?></a>
    </h3>


    <nav class="nav nav-masthead">

    <?php if ( has_nav_menu( 'primary' ) ) { ?>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
<?php } ?>


    <a class="nav-link active" href="<?php echo( get_bloginfo( 'url' ) ); ?>">Home</a>
    <a class="nav-link" href="#">About me</a>
    <a class="nav-link" href="#">Contact</a>
    </nav>

    </div>





<?php if (is_home()) { ?>


<div class="home-text">
<h1>Tutorials</h1>
Search from wide range of programming, how-to and arduino tutorials. 
</div>




 <div class="input-group input-group-lg">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-success btn-lg" type="button">Go!</button>
      </span>
    </div>



<?php } ?>


 <!--            
      <nav class="navbar navbar-light bg-faded">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-toggleable-xs" id="navbar-header">
          <a class="navbar-brand" href="<?php echo( get_bloginfo( 'url' ) ); ?>"><?php echo( get_bloginfo( 'title' ) ); ?></a>




  <?php get_the_categories(); ?>



       
          <form class="form-inline float-xs-right">
            <input class="form-control" type="text" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav> 
      -->


</div>
<?php if (is_home()) { ?>
</div>
<?php } ?>
 <div class="container">









 