<?php 
	/**
	* Template Name: Tip's
	* A custom page template for Tip's Page.
	*/
get_header(); ?> 
<div class="main-wrapper inner-page page-template">
  <div class="content-wrapper">
    <div class="content-container">
        <div class="part-txt">
            <p>part of EDGAR Middle East</p>
        </div>
      <div class="content-middle">
        <div class="breadcrum">
          <?php  if(function_exists('theme_breadcrumbs')) theme_breadcrumbs(); 
		  			wp_reset_query();
		  ?>
        </div>
        <div class="article-container">
          <div class="left-panel">
            <div class="page-heading main-article">
              <h1 style="visibility:hidden;"><?php the_title(); ?></h1>
            </div>
            <div class="top-article single-content">
                <div class="post-content">
			<?php
				$counter=0;
				wp_reset_query();
				$my_query = new WP_Query( 'pagename=home' );
				while ($my_query->have_posts()) : $my_query->the_post();
				
					while( has_sub_field('right_banner_caption') ):
					
						$quoteDate[$counter] = get_sub_field('right_banner_caption_date');
						$quoteTxt[$counter] = get_sub_field('right_banner_caption_txt');
						$quoteAuthor[$counter] = get_sub_field('quote_author');
						$counter++;
						
					endwhile;
					
					$counter--;
					
					while( $counter >= 0 ): 
					
						$tipDate = $quoteDate[$counter];
					
						$chkDate = date("Ymd");
						
						if ( $tipDate <= $chkDate ) { 
						
							$tipDate = date( 'F j, Y', strtotime( $tipDate ) );
					
					?>
					
                        <div class="quote-content">
                            <h3><?php echo($tipDate); ?></h3>
                            <p><?php echo($quoteTxt[$counter]); ?><br/><strong><?php echo($quoteAuthor[$counter]); ?></strong></p>
                        </div>
                        
						<?php 
							}
						
						$counter--;
						
					endwhile;
					
			 	endwhile;
			 ?>
                </div>
                
               </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div><!-- Content Container End--> 
  </div>
<?php 
get_footer(); ?>