<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); 

global $post;
 
 
 
if ( have_posts() ) :

while ( have_posts() ) : the_post();


 $image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));

$video = get_post_meta( $post->ID , 'video-link', true );
 ?>		


<section id="continer">
  <div class="container-box">
    <div class="container">
    
      <div class="container-block col-md-12">
       <div class= "col-md-8 col-sm-8 col-xs-12 box-video">
       <div class="video-box-head">
        
        <?php if(empty($video)){ ?>
         <img src="<?php echo $image ?>"/>
       
        <?php } else { ?>
        <iframe src="<?php echo get_post_meta( $post->ID , 'video-link', true ); ?>"></iframe>
        <?php } ?>

            </div>
            <div class="vide-text-box"></div>
           
             
           </div>
          
           <div class="col-md-4 col-sm-4 col-xs-12 box-detail">
            <div class="video-right-box">
             <div class="video-gray-box-heading"> 
              <div class="inner-box">
                  <?php echo ot_get_option('t_misson_heading_'); ?>
                </div>               
             </div>
             <div class="box-video-text">
              <div class="border-box-video">
                  <p><?php  echo  $post->post_content; ?>   </p>
<!--<p>This tool will help you to find logo to your website with less than 5 usd
Go to Fiverr from here   </p>
<p>This tool will help you to find logo to your website with less than 5 usd
Go to Fiverr from here   </p>
<p>This tool will help you to find logo to your website with less than 5 usd
Go to Fiverr from here   </p>-->
</div>
             </div>
            </div>
           </div>
      
         
      </div>
      <div class="video-bottom-title col-md-12">
       <?php echo get_post_meta( $post->ID , 'v_title', true ); ?>
       <span class="s_title"><?php echo get_post_meta( get_the_ID(), 'sub_title', true ); ?></span>
      </div>
  </div>
     
    
    <div class="clearfix"></div>
    </div>
    
    
</section>
		
    <?php 
     endwhile;
     endif;
    ?>
 <div class="banner-slider-box-white">

     <div class="container">

         <div class="video-box-heading col-md-12">
            <div class="video-font-asm"><img src="<?php echo ot_get_option('image_video'); ?>"></div>
            

            <div class="video-box-title"><?php echo ot_get_option('heading_txt'); ?></div>

        </div>

         <div class="slider-box-main-box col-md-12 col-sm-12 col-xs-12">

             <div class="slider-box-main-box-auto-m">

             

             <div class="slider-logo">

                 <a href="../../../../../../28-07-16/services.php"></a>

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

 <?php endwhile;    wp_reset_query(); ?>

 <?php endif; ?>

<!--  <li>

      <a href="#">

          <div class="box-wihite-d">

              <div class="whiote-box-slider-img-box"></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider">Text 1 </div>  

               <div class="text-2-slider">Text 2 </div>  

              </div>

          </div>                    

      </a>

      </li>

      

        <li>

      <a href="#">

          <div class="box-wihite-d">

              <div class="whiote-box-slider-img-box"></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider">Text 1 </div>  

               <div class="text-2-slider">Text 2 </div>  

              </div>

          </div>                    

      </a>

      </li>

      

        <li>

      <a href="#">

          <div class="box-wihite-d">

              <div class="whiote-box-slider-img-box"></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider">Text 1 </div>  

               <div class="text-2-slider">Text 2 </div>  

              </div>

          </div>                    

      </a>

      </li>

      

        <li>

      <a href="#">

          <div class="box-wihite-d">

              <div class="whiote-box-slider-img-box"></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider">Text 1 </div>  

               <div class="text-2-slider">Text 2 </div>  

              </div>

          </div>                    

      </a>

      </li>

      

        <li>

      <a href="#">

          <div class="box-wihite-d">

              <div class="whiote-box-slider-img-box"></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider">Text 1 </div>  

               <div class="text-2-slider">Text 2 </div>  

              </div>

          </div>                    

      </a>

      </li>

      

        <li>

      <a href="#">

          <div class="box-wihite-d">

              <div class="whiote-box-slider-img-box"></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider">Text 1 </div>  

               <div class="text-2-slider">Text 2 </div>  

              </div>

          </div>                    

      </a>

      </li>

      

        <li>

      <a href="#">

          <div class="box-wihite-d">

              <div class="whiote-box-slider-img-box"></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider">Text 1 </div>  

               <div class="text-2-slider">Text 2 </div>  

              </div>

          </div>                    

      </a>

      </li>

      

        <li>

      <a href="#">

          <div class="box-wihite-d">

              <div class="whiote-box-slider-img-box"></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider">Text 1 </div>  

               <div class="text-2-slider">Text 2 </div>  

              </div>

          </div>                    

      </a>

      </li>

      

        <li>

      <a href="#">

          <div class="box-wihite-d">

              <div class="whiote-box-slider-img-box"></div>

              <div class="box-wihite-whit-1">

               <div class="text-1-slider">Text 1 </div>  

               <div class="text-2-slider">Text 2 </div>  

              </div>

          </div>                    

      </a>

      </li>

      -->

      


 </ul>
                </div>

               <a href="#" class="jcarousel-control-prev">&lsaquo;&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;&rsaquo;</a>


                <p class="jcarousel-pagination"></p>
            </div>



</div>

                 

            <div class="clear"></div>  

          </div>   

         </div>

         

         <div class="clear"></div>   

     </div>  

     

     

 </div>

 

 

<section id="tool-box">

  <div class="tool-box-black">

      <div class="container">

          <div class="tool-box-heading col-md-12 col-sm-12 col-xs-12">

                    <div class="tool-font-asm"><img src="<?php echo ot_get_option('t_box_image'); ?>"></div>

                <div class="tool-box-title"><?php echo ot_get_option('t_box_heading'); ?></div>



            </div>

          <div class="col-md-2 col-sm-4 col-xs-6 img-box">

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
}</style>
		
<?php get_footer(); ?>
