<div class="slider_area">


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    
     <?php
global $post;
$args = array( 'posts_per_page' => 10, 'post_type'=> 'custom-post-type' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>

    <?php 
        $job_link= get_post_meta($post->ID, 'job_instructions', true); 
    ?>

	
	
	
	
	
	
    <div class="item active">
      <img src="<?php  echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
      <div class="slider-caption">
		<h2><?php the_title(); ?></h2>
		
		 <p><?php the_excerpt(); ?></p>
		 
		 <p><?php echo $job_link; ?></p>
		
		
		
		
		<!-- 
		<p>We Make Awesome Theme For Your Business</p>
       -->
      </div>
    </div>
    
  </div>
	
	
<?php endforeach; ?>
   
   
   
   

  <!-- Controls -->
  <a class="left slider-left-btn" href="#carousel-example-generic" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i>
  </a>
  <a class="right slider-right-btn" href="#carousel-example-generic" role="button" data-slide="next">
    <i class="fa fa-angle-right"></i>
  </a>
</div>



       </div>