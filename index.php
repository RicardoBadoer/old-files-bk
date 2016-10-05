
<?php get_header(); ?>


<?php

$args = array('post_type'=>'days','posts_per_page'=> 1, 'orderby'=>'date','order'=>'desc' );

$myposts = get_posts( $args );
//echo '<pre>';
//print_r($myposts);
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a>
  
<?php $video = get_post_meta($post->ID, 'video-link', true ); 
  $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
?>
 <!-- continer Section START -->

 <section id="continer">

  <div class="container-box">

    <div class="container ">

      <div class="col-md-12">

           <div class="col-md-8 col-sm-8 col-xs-12">
           <!--this is main video section-->
            <div class="video-box-head">
              
        <?php if(empty($video)){ ?>
         <img src="<?php echo $image ?>"/>
         
        <?php } else { ?>
       <iframe src="<?php echo get_post_meta( $post->ID , 'video-link', true ); ?>" frameborder="0">
            </iframe>
        <?php } ?>
          
                <?php //echo ot_get_option('vedio_box'); ?>
              
            </div>
              <!--video section end -->
            <div class="vide-text-box"></div>

           </div>        

           <div class="col-md-4 col-sm-4 col-xs-12 ">

            <div class="video-right-box">

             <div class="video-gray-box-heading">
              <!-- today mission section start -->
                <div class="inner-box">
                  <?php echo ot_get_option('t_misson_heading_'); ?>
                </div>
             </div>

             <div class="box-video-text">

              <div class="border-box-video">                 
                  <p><?php  echo  $post->post_content; ?>   </p>
                  <?php //echo ot_get_option('today_mission'); ?> 

              </div>
              <!-- today mission section end -->
             </div>

            </div>

           </div>
      </div>
      <!-- video box bottom heading -->
<div class="video-bottom-title col-md-12">
  <?php echo get_post_meta( $post->ID , 'v_title', true ); ?>
       <span class="s_title"><?php echo get_post_meta( get_the_ID(), 'sub_title', true ); ?></span>
</div>
      
<!-- video box bottom heading end -->
  </div>
    <div class="clearfix"></div>

    </div>
    
</section>
<?php endforeach;
wp_reset_postdata();?>

<!-- this is slider section start  -->
 <div class="banner-slider-box-white">

     <div class="container">

         <div class="video-box-heading col-md-12">
            <div class="video-font-asm"><img src="<?php echo ot_get_option('image_video'); ?>"></div>
            

            <div class="video-box-title"><?php echo ot_get_option('heading_txt'); ?></div>

        </div>
<div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul> 
             
                <?php $args = array( 'post_type' => 'days', 'posts_per_page' => -1 );
                  $the_query = new WP_Query( $args );
                ?>
 <?php if ( $the_query->have_posts()) : ?>

 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 

 $image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));

 if($c == 0){

 ?>
      <li>

          <div class="box-wihite-d">

              <div class="box-vd">            
<?php $video = get_post_meta( get_the_ID(), 'video-link', true ); 
$image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));

?>

              <div class="whiote-box-slider-img-box"><a href="<?php the_permalink();?>" onclick="document.getElementById('<?=get_the_ID()?>').submit();"> <?php if(empty($video)){ ?><img src="<?php echo $image ?>"/>  <?php }else{?> <iframe src="<?php echo get_post_meta( get_the_ID(), 'video-link', true ); ?>" frameborder="0"></iframe>  <?php } ?> </a></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider"><?php the_title(); ?> </div>  

               <div class="text-2-slider"><?php echo get_post_meta( get_the_ID(), 'sub_title', true ); ?></div>  

               <a href="../../../../../../28-07-16/services.php"></a>

              </div>

              </div>  

              <a href="<?php the_permalink();?>"> <div class="box-fg1"></div> </a>

          </div>                     

      </li>

      <?php $c = 0; } ?>

 <?php endwhile; ?>

 <?php endif; wp_reset_query(); ?>
 
      </ul>
                </div>

               <a href="#" class="jcarousel-control-prev">&lsaquo;&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;&rsaquo;</a>


                <p class="jcarousel-pagination"></p>
            </div>
      

         <div class="clear"></div>    

     </div>         
 
 </div>
<!--         this is slider section end       -->












<!--                        <li><img src="../_shared/img/img1.jpg" alt="Image 1"></li>
                        <li><img src="../_shared/img/img2.jpg" alt="Image 2"></li>
                        <li><img src="../_shared/img/img3.jpg" alt="Image 3"></li>
                        <li><img src="../_shared/img/img4.jpg" alt="Image 4"></li>
                        <li><img src="../_shared/img/img5.jpg" alt="Image 5"></li>
                        <li><img src="../_shared/img/img6.jpg" alt="Image 6"></li>-->
              












 
<section id="tool-box">

	<div class="tool-box-black">

    	<div class="container">

        	<div class="tool-box-heading col-md-12 col-sm-12 col-xs-12">

                    <div class="tool-font-asm"><img src="<?php echo ot_get_option('t_box_image'); ?>"></div>

                <div class="tool-box-title"><?php echo ot_get_option('t_box_heading'); ?></div>

            </div>

        	<div class="col-md-2 col-sm-4 col-xs-6  img-box ">

            	<div class="image-box">

                	<div class="img-bg"><img src="<?php echo ot_get_option('too_box_image2'); ?>"></div>

                </div>

            </div>

            <div class="col-md-10 col-sm-8 col-xs-6 txt-box">

            	<div class="text-box"><?php echo ot_get_option('tool_box_txt2'); ?></div>

            </div>
        </div>
    </div>
    <div class="tool-box-black new-box">

    	<div class="container">

        	<div class="col-md-2 col-sm-4 col-xs-6 img-box">

            	<div class="image-box">

                	<div class="img-bg"><img src="<?php echo ot_get_option('image'); ?>"></div>

                </div>

            </div>

            <div class="col-md-10 col-sm-8 col-xs-6 txt-box">

            	<div class="text-box"><?php echo ot_get_option('tool_box_text'); ?></div>

            </div>             

        </div>    

    </div>
<div style="clear:both;"></div>
</section>

<style>#tool-box {
    background: #242323 none repeat scroll 0 0;
    padding-bottom: 24px;
} 
</style>
  
 <!-- continer Section End -->  

 <?Php get_footer(); ?>  