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

<?php
if (is_home()) {
    // This is the blog posts index
    echo "i am home page";
} else {
    // This is not the blog posts index
   echo "i am not home page";
}

?>

<?php if (is_home()) { ?>
<div class="home-wrapper">
<?php } ?>
     


 <div class="container">


    <div class="inner">
    <h3 class="masthead-brand"><a href="/wordpress">Home</a></h3>
    <nav class="nav nav-masthead">
    <a class="nav-link active" href="#">Home</a>
    <a class="nav-link" href="#">Tutorials</a>
    <a class="nav-link" href="#">About me</a>
    <a class="nav-link" href="#">Contact</a>
    </nav>
    </div>



<p>
<h1>Tutorials</h1>
Follow along with one of our 1476 
development and sysadmin tutorials.
</p>
<div class="form-group ">
<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
<input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="you@example.com">
</div>




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









 