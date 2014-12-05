<?php 
get_header(); ?> 
<div class="main-wrapper">
  <div class="content-wrapper">
    <div class="content-container">
      <div class="content-middle">
        <div class="breadcrum">
          <ul>
            <li><a href="<?php echo(home_url('')); ?>">Home</a></li>
            <li><span>></span></li>
            <li>Search</li>
          </ul>
        </div>
        <div class="article-container">
          <div class="page-heading">
            <h1><?php echo($parentCategoryName); ?></h1>
          </div>
              <div class="search">
                <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input name="s" type="text" id="s" value="" />
                    <input type="submit" name="submit" id="searchsubmit" value="search" />
                </form>
            </div>
          <div class="left-panel">
			<?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="article-container bottom-article">
                      <div class="article-co1-4">
                        <div class="article-wrapper social"> <div class="post-image"><a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image');?>" alt=""><?php if ( in_category(69) ) { ?> <div class="video-tag"></div> <?php } ?></a></div>
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          <div class="article-content">
                            <?php the_field('short_description'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
				
                <div class="seach-content">
                
                    <h1><?php _e( 'Nothing Found', 'twentyten' ); ?></h1>
    
                    <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
                    
    
                    <?php get_search_form(); ?>
                
                </div>
            <?php endif; ?> 
                  
	</div>
    
 <?php get_sidebar(); ?>
          
        </div>
      </div>
    </div>
    <!-- Content Container End--> 
    
  </div>    
<?php 
get_footer(); ?>