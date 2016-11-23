<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Bootstrap 101 Template</title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body>



 <div class="container">
      <nav class="navbar navbar-light bg-faded">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-toggleable-xs" id="navbar-header">
          <a class="navbar-brand" href="#">Navbar</a>

<?php
$categories = get_categories( array(
  'orderby' => 'name',
  'order'   => 'ASC'
) );


echo '<pre>'; print_r($categories);
?>
 



 <ul class="nav navbar-nav">

<?php 
foreach( $categories as $category ) {


if($category->parent == 0){


?>

<li class="nav-item">
<a class="nav-link" href="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
</li>


<?php 
}
}
?>

</ul>


       
          <form class="form-inline float-xs-right">
            <input class="form-control" type="text" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav> <!-- /navbar -->








   <div class="blog-masthead">
      <div class="container">
       
      </div>
    </div>



    <div class="container">