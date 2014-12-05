<?php get_header(); ?> 
<div class="main-wrapper inner-page">
  <div class="content-wrapper">
    <div class="content-container">
        <div class="part-txt">
            <p>part of EDGAR Middle East</p>
        </div>
      <div class="content-middle">
        <div class="breadcrum">
        	<ul>
                <li><a href="<?php echo(home_url('')); ?>">Home</a></li>
                <li><span>></span></li>
                <li>Page not Found</li>
			</ul>
        </div>
        <div class="article-container">
          <div class="left-panel">
            <div class="page-heading main-article">
              <h1>Page not found</h1>
            </div>
            <div class="top-article single-content">
              <div class="article-banner">                
                <div class="post-content">
	              	<p><?php _e( 'Sorry, but no such page exist. Please try searching with some different keywords.', 'twentyten' ); ?></p>
                    <p style="text-align:center;font-family:'DIN-Medium';font-size:180px;color:#000;">404</p>
                </div>
                
               </div>
            
          </div>
          </div>
          
          <?php get_sidebar(); ?>
          
        </div>
      </div>
    </div>
    <!-- Content Container End--> 
    
  </div>
<?php get_footer(); ?>