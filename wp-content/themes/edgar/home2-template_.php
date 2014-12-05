<?php

	/**

	* Template Name: Home2

	* A custom page template for Home2 Page.

	*/

	include('header2.php');

?> 



	<div class="main-wrapper"> 

    	<div class="content-wrapper">  

        	<div class="content-container">             

                <div class="content-middle">

                  <div class="article-container">

                        <div class="left-panel">

                        	<div class="sliding-article">

                           <?php 

							// $slideCounter =1;

                            $mainbanner = new WP_Query('showposts=3&cat=-1,-69&order=desc'); 

                            if($mainbanner->have_posts()) : 

                           		while($mainbanner->have_posts()) : $mainbanner->the_post(); 

//								if ( $slideCounter <= 3 && get_field('top_stories')) {

									

									$postCategory = get_the_category($post->ID); 

									$postCategoryName = $postCategory[0]->cat_name;

									$postCategorySlug = $postCategory[0]->slug;

									

									$postParent = $postCategory[0]->parent;

									$postParent_name = get_category($parent);

									$postParent_name = $postParent_name->cat_name;

									

									$postCategoryArticle = $postParent;

	

									if ( $postCategoryArticle == 2 ) { 

										$postCategory_Name = 'to-know';

									}else if (  $postCategoryArticle == 4 ) { 

										$postCategory_Name = 'to-do';

									}else if (  $postCategoryArticle == 5 ) { 

										$postCategory_Name = 'to-go';

									}else if (  $postCategoryArticle == 3 ) { 

										$postCategory_Name = 'to-buy';

									}else if (  $postCategoryArticle == 6 ) { 

										$postCategory_Name = 'to-see';

									}

									

									$articleCategory[3] = 'to-buy';

									$articleCategory[4] = 'to-do';

									$articleCategory[5] = 'to-go';

									$articleCategory[2] = 'to-know';

									$articleCategory[6] = 'to-see';

									

                            ?>

                                <div class="sliding-article-content <?php echo($postCategory_Name);?>-wrapper">

                                    <div class="article-banner">

                                        <a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image'); ?>" alt=""></a>

                                    </div>

                                    <div class="top-stories">

                                        <span>Top Stories </span> | <strong><a href="<?php echo(home_url('/category/')); ?>"><?php echo($postCategoryName); ?></a></strong>

                                    </div>

                                    <div class="article-wrapper">

                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                        <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                        <div class="article-author" style="display:none;">By <?php if ( get_field('author_name') ) { the_field('author_name'); } else { the_author(); } ?></div>

                                        <div class="article-content"><?php the_field('short_description'); ?></div>

                                    </div>

                                </div>

							<?php //  $slideCounter++; } 						

									endwhile; endif; ?>

                            </div>

                            <div class="home-top-article-container">

                            	<?php 

									wp_reset_query();

									$box_cat = get_field('home_cat_box_1');

									$childCategory = get_category($box_cat); 

									$childCategoryName = $childCategory->name; 

									$childCategorySlug = $childCategory->slug;

									$parent = $childCategory->parent;

								?>

                            	<div class="article-wrapper article-col-2 news <?php echo($articleCategory[$parent]); ?>-wrapper">

									<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                        <div class="home-articles-content">

                                            <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                            <div class="article-image">

                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a>

                                            </div>

                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                            <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                            <div class="article-content">

                                                <?php the_field('short_description'); ?>

                                            </div>

                                        </div>

									<?php endwhile; endif; ?>

                                </div>

                                

                                

                                <div class="article-co1-1">

                                		<?php 

								

											wp_reset_query();

								

											$box_cat = get_field('home_cat_box_2');

											$childCategory = get_category($box_cat); 

											$childCategoryName = $childCategory->name; 

											$childCategorySlug = $childCategory->slug;

											

											$parent = $childCategory->parent;	

														

										?>

                                        <div class="article-wrapper sports <?php echo($articleCategory[$parent]); ?>-wrapper">

                                        	<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                                <div class="home-articles-content">

                                                    <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                    <div class="article-image">

                                                        <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a>

                                                    </div>

                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                    <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                                </div>

                                                

                                            <?php endwhile; endif; 

								

												wp_reset_query();

								

												$box_cat = get_field('home_cat_box_3');

												$childCategory = get_category($box_cat); 

												$childCategoryName = $childCategory->name; 

												$childCategorySlug = $childCategory->slug;

												

												$parent = $childCategory->parent;	

														

											?>

                                            

                                            <div class="<?php echo($articleCategory[$parent]); ?>-wrapper">

												<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                                

                                                    <div class="home-articles-content">

                                                        <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                        <div class="article-image">

                                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a>

                                                        </div>

                                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                        <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                                    </div>

                                                    

                                                <?php endwhile; endif; ?>

                                            

                                            </div>

                                            

                                        </div>                                        

                                </div>

                                

                            

                            </div>

                            

                             <div class="home-top-article-container">

                            

                            	<?php 

								

									wp_reset_query();

					

									$box_cat = get_field('home_cat_box_4');

									$childCategory = get_category($box_cat); 

									$childCategoryName = $childCategory->name; 

									$childCategorySlug = $childCategory->slug;

									

									$parent = $childCategory->parent;	

											

								?>

                            

                            	<div class="article-wrapper article-col-2 news <?php echo($articleCategory[$parent]); ?>-wrapper">                            	                                

                                    <?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                        <div class="home-articles-content">

                                            <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                            <div class="article-image">

                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a>

                                            </div>

                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                            <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                            <div class="article-content">

                                                <?php the_field('short_description'); ?>

                                            </div>

                                        </div>

                                    <?php endwhile; endif; ?>

                                </div>

                                <?php 

								

									wp_reset_query();

					

									$box_cat = get_field('home_cat_box_5');

									$childCategory = get_category($box_cat); 

									$childCategoryName = $childCategory->name; 

									$childCategorySlug = $childCategory->slug;

									

									$parent = $childCategory->parent;	

											

								?>

                                

                                <div class="article-co1-1">

                                        <div class="article-wrapper beset-watches <?php echo($articleCategory[$parent]); ?>-wrapper">

                                        <?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                            <div class="home-articles-content">

                                               <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                <div class="article-image">

                                                    <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a>

                                                </div>

                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                            </div>

                                            <?php endwhile; endif; ?>

                                            

                                            <?php 

								

												wp_reset_query();

								

												$box_cat = get_field('home_cat_box_6');

												$childCategory = get_category($box_cat); 

												$childCategoryName = $childCategory->name; 

												$childCategorySlug = $childCategory->slug;

												

												$parent = $childCategory->parent;	

														

											?>

                                            <div class="<?php echo($articleCategory[$parent]); ?>-wrapper">

                                            

                                            	<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                            

                                                    <div class="home-articles-content">

                                                       <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                        <div class="article-image">

                                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('middle_image'); ?>" alt=""></a>

                                                        </div>

                                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                        <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                                    </div>

                                                

                                                <?php endwhile; endif; ?>

                                            

                                            </div>

                                            

                                        </div>

                                </div>

                                

                                

                            </div>

                            

                            <div class="article-wrapper misc-article">

                            	<div class="article-co1-1">

                                

										<?php 

							

											wp_reset_query();

							

											$box_cat = get_field('home_cat_box_7');

											$childCategory = get_category($box_cat); 

											$childCategoryName = $childCategory->name; 

											$childCategorySlug = $childCategory->slug;

											

											$parent = $childCategory->parent;	

													

										?>

                                    <div class="article-wrapper style <?php echo($articleCategory[$parent]); ?>-wrapper">

										<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    	<div class="home-articles-content">

                                                       <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                        <div class="article-image">

                                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt=""></a>

                                                        </div>

                                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                        <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                                    </div>

                                        <?php endwhile; endif; ?>

                                    </div>

                                </div>

                                

                                <div class="article-co1-1">

                                	<?php 

							

											wp_reset_query();

							

											$box_cat = get_field('home_cat_box_8');

											$childCategory = get_category($box_cat); 

											$childCategoryName = $childCategory->name; 

											$childCategorySlug = $childCategory->slug;

											

											$parent = $childCategory->parent;	

													

										?>

                                    <div class="article-wrapper travel <?php echo($articleCategory[$parent]); ?>-wrapper">

                                    	<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    	<div class="home-articles-content">

                                                       <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                        <div class="article-image">

                                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt=""></a>

                                                        </div>

                                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                        <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                                    </div>

                                        <?php endwhile; endif; ?>

                                    </div>

                                </div>

                                

                                <div class="article-co1-1">

                                	<?php 

							

											wp_reset_query();

							

											$box_cat = get_field('home_cat_box_9');

											$childCategory = get_category($box_cat); 

											$childCategoryName = $childCategory->name; 

											$childCategorySlug = $childCategory->slug;

											

											$parent = $childCategory->parent;	

													

										?>

                                    <div class="article-wrapper culture <?php echo($articleCategory[$parent]); ?>-wrapper">

                                    	<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    	<div class="home-articles-content">

                                                       <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                        <div class="article-image">

                                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt=""></a>

                                                        </div>

                                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                        <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                                    </div>

                                        <?php endwhile; endif; ?>

                                    </div>

                                </div>

                            </div>

                            

                            <div class="article-container bottom-article">

                            	<div class="article-co1-4">

                                	<?php 

							

											wp_reset_query();

							

											$box_cat = get_field('home_cat_box_10');

											$childCategory = get_category($box_cat); 

											$childCategoryName = $childCategory->name; 

											$childCategorySlug = $childCategory->slug;

											

											$parent = $childCategory->parent;	

													

										?>

                                    <div class="article-wrapper social <?php echo($articleCategory[$parent]); ?>-wrapper">

	                                    <?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    	<div class="home-articles-content">

	                                        <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                            <div class="article-image">

	                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image'); ?>" alt=""></a>

                                            </div>

                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                            <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                            <div class="article-content">

                                                <?php the_field('short_description'); ?>

										</div>

                                    </div>

                                    <?php endwhile; endif; ?>

                                </div>

                            </div>

                            </div>

                            

                            <div class="article-wrapper misc-article">

                            	<div class="article-co1-1">

                                

										<?php 

							

											wp_reset_query();

							

											$box_cat = get_field('home_cat_box_11');

											$childCategory = get_category($box_cat); 

											$childCategoryName = $childCategory->name; 

											$childCategorySlug = $childCategory->slug;

											

											$parent = $childCategory->parent;	

													

										?>

                                    <div class="article-wrapper style <?php echo($articleCategory[$parent]); ?>-wrapper">

										<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    	<div class="home-articles-content">

                                                       <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                        <div class="article-image">

                                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt=""></a>

                                                        </div>

                                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                        <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                                    </div>

                                        <?php endwhile; endif; ?>

                                    </div>

                                </div>

                                

                                <div class="article-co1-1">

                                	<?php 

							

											wp_reset_query();

							

											$box_cat = get_field('home_cat_box_12');

											$childCategory = get_category($box_cat); 

											$childCategoryName = $childCategory->name; 

											$childCategorySlug = $childCategory->slug;

											

											$parent = $childCategory->parent;	

													

										?>

                                    <div class="article-wrapper travel <?php echo($articleCategory[$parent]); ?>-wrapper">

                                    	<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    	<div class="home-articles-content">

                                                       <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                        <div class="article-image">

                                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt=""></a>

                                                        </div>

                                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                        <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                                    </div>

                                        <?php endwhile; endif; ?>

                                    </div>

                                </div>

                                

                                <div class="article-co1-1">

                                	<?php 

							

											wp_reset_query();

							

											$box_cat = get_field('home_cat_box_13');

											$childCategory = get_category($box_cat); 

											$childCategoryName = $childCategory->name; 

											$childCategorySlug = $childCategory->slug;

											

											$parent = $childCategory->parent;	

													

										?>

                                    <div class="article-wrapper culture <?php echo($articleCategory[$parent]); ?>-wrapper">

                                    	<?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    	<div class="home-articles-content">

                                                       <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                                        <div class="article-image">

                                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumb_image'); ?>" alt=""></a>

                                                        </div>

                                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                                        <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                                    </div>

                                        <?php endwhile; endif; ?>

                                    </div>

                                </div>

                            </div>

                            

                            <div class="article-container bottom-article">

                            	<div class="article-co1-4">

                                	<?php 

							

											wp_reset_query();

							

											$box_cat = get_field('home_cat_box_10');

											$childCategory = get_category($box_cat); 

											$childCategoryName = $childCategory->name; 

											$childCategorySlug = $childCategory->slug;

											

											$parent = $childCategory->parent;	

													

										?>

                                    <div class="article-wrapper social <?php echo($articleCategory[$parent]); ?>-wrapper">

	                                    <?php if(have_posts()) : $my_query = new WP_Query('showposts=1&cat='. $box_cat. "'&order=rand"); while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    	<div class="home-articles-content">

	                                        <h3><a href="<?php echo(home_url('/category/').$childCategorySlug); ?>"><?php echo($childCategoryName); ?></a></h3>

                                            <div class="article-image">

	                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('large_image'); ?>" alt=""></a>

                                            </div>

                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                            <div class="article-date"><?php the_time('F j, Y'); ?></div>

                                            <div class="article-content">

                                                <?php the_field('short_description'); ?>

										</div>

                                    </div>

                                    <?php endwhile; endif; ?>

                                </div>

                            </div>

                            </div>

                            

                        </div>

                        

                        

                        <?php get_sidebar(); ?>

                        

                        

                    </div>

                    

                </div>

                

            </div><!-- Content Container End-->



      </div>



<?php 

	get_footer(); 

?>

