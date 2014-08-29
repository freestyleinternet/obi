<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="welcome" class="bgParallax" data-speed="35">
        <section>
        	<div class='wrapper'>
            	<div class='loader'>
        			<?php 
						$id=14; 
						$post = get_post($id); 
						$content = apply_filters('the_content', $post->post_content); 
						echo $content;  
					?>
        		</div>
                <div class='welcome-links'>
                	<a href='#about' class='c1'>
                    	<div class='circle-red'>
                        	<p>About obi</p>
                        </div>
                    </a>
                    <a href='#tabbed' class='c2'>
                    	<div class='circle-red'>
                        		<p>Strategy<br>
                            	<span>Product &amp; channel</span>
                            </p>
                        </div>	
                    </a>
                    <a href='#tabbed' class='c3 innovation'>
                    	<div class='circle-red'>
                        	<p>
                            	Innovation<br>
                            	<span>Customer experience<span>
                            </p>
                        </div>	
                    </a>
                    <a href='#about' class='c4'>
                   		<div class='circle-red'>
                        	<p>The team</p>
                        </div>	
                    </a>
                    <a href='#contact' class='c5'>
                   		<div class='circle-red'>
                        	<p>Contact</p>
                        </div>	
                    </a>
                    <div class='starter-arrow'>
                    	<a href='#services'>
                            <p>What can we do for you?</p>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 42 42" enable-background="new 0 0 42 42" xml:space="preserve">
                            <g>
                            <path class='inner' fill="#fff" d="M21,40.4c-10.8,0-19.5-8.7-19.5-19.4S10.2,1.5,21,1.5c10.8,0,19.5,8.7,19.5,19.4S31.8,40.4,21,40.4z"/>
                            <path class='outer' fill="#f0d873" d="M21,3c9.9,0,18,8,18,17.9s-8.1,17.9-18,17.9s-18-8-18-17.9S11.1,3,21,3 M21,0C9.4,0,0,9.4,0,20.9
                            s9.4,20.9,21,20.9s21-9.4,21-20.9S32.6,0,21,0L21,0z"/>
                            </g>
                            <polygon class='arrow' fill="#f9a725" points="25.5,21 25.5,9.9 16.5,9.9 16.5,21 11.9,21 21,32.9 30.1,21 "/>
                            </svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </section>
    </div>
	<div name='services' id="services" class="bgParallax" data-speed="30">
	     <section>
         	<div class='wrapper-inner'>
        		<?php the_field('our_services_editor', 14); ?>
                <div class='content-indent'>
                	<?php the_field('our_serrvices_main_content', 14); ?>
                </div>
            </div>
            <div class='wrapper'>
                <div id='tabbed' class="tabs">
                    <div class='starter-arrow'>
                        <a href='#about'>
                        	<p>More about us</p>
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 42 42" enable-background="new 0 0 42 42" xml:space="preserve">
                            <g>
                            <path class='inner' fill="#fff" d="M21,40.4c-10.8,0-19.5-8.7-19.5-19.4S10.2,1.5,21,1.5c10.8,0,19.5,8.7,19.5,19.4S31.8,40.4,21,40.4z"/>
                            <path class='outer' fill="#f0d873" d="M21,3c9.9,0,18,8,18,17.9s-8.1,17.9-18,17.9s-18-8-18-17.9S11.1,3,21,3 M21,0C9.4,0,0,9.4,0,20.9
                            s9.4,20.9,21,20.9s21-9.4,21-20.9S32.6,0,21,0L21,0z"/>
                            </g>
                            <polygon class='arrow' fill="#f9a725" points="25.5,21 25.5,9.9 16.5,9.9 16.5,21 11.9,21 21,32.9 30.1,21 "/>
                            </svg>
                        </a>
                    </div>
                    
                   <div class="tab">
                       <input type="radio" id="tab-1" name="tab-group-1" checked>
                       <label for="tab-1"><span>
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve">
                        <g>
                        <path class="colchange" fill="#c1c2c3" d="M46,90.5c-24.5,0-44.5-20-44.5-44.5c0-24.5,20-44.5,44.5-44.5c24.5,0,44.5,20,44.5,44.5
                        C90.5,70.5,70.5,90.5,46,90.5z"/>
                        <path class="colchange-border" fill="#e2e2e2" d="M46,3c23.7,0,43,19.3,43,43S69.7,89,46,89S3,69.7,3,46S22.3,3,46,3 M46,0C20.6,0,0,20.6,0,46s20.6,46,46,46
                        s46-20.6,46-46S71.4,0,46,0L46,0z"/>
                        </g>
                        <g>
                        <circle  fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" cx="46" cy="46" r="7.1"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" d="M68.3,54l1.4-8.6l-5.6-0.9
                        c-0.1-1.9-0.6-3.6-1.2-5.3l4.6-3.3l-5.1-7l-4.5,3.3c-1.4-1.2-2.9-2.2-4.7-2.9l0.9-5.5l-8.6-1.4l-0.9,5.5c-1.9,0.1-3.7,0.6-5.3,1.3
                        l-3.3-4.5l-7,5.1l3.3,4.6c-1.2,1.4-2.1,2.9-2.9,4.7L23.7,38l-1.4,8.6l5.6,0.9c0.2,1.8,0.6,3.6,1.3,5.3l-4.6,3.3l5.1,7l4.6-3.3
                        c1.4,1.2,2.9,2.1,4.6,2.9L38,68.3l8.6,1.4l0.9-5.6c1.8-0.1,3.6-0.6,5.3-1.2l3.3,4.6l7-5.1l-3.3-4.6c1.2-1.4,2.1-2.9,2.9-4.6
                        L68.3,54z"/>
                        </g>
                        </svg>
                       </span><?php the_field('tab_one_name', 14); ?></label>
                       <div class="content">
                           <div class='col-one'>
                                <?php the_field('tab_one_left_editor', 14); ?>
                           </div>
                           <div class='col-two'>
								<?php the_field('tab_one_right_editor', 14); ?>	
                           </div>
                       </div> 
                   </div>
                   <div class="tab">
                       <input type="radio" id="tab-2" name="tab-group-1">
                       <label for="tab-2"><span>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve">
                    <g>
                    <path class="colchange" fill="#c1c2c3" d="M46,90.5c-24.5,0-44.5-20-44.5-44.5c0-24.5,20-44.5,44.5-44.5c24.5,0,44.5,20,44.5,44.5
                    C90.5,70.5,70.5,90.5,46,90.5z"/>
                    <path class="colchange-border" fill="#e2e2e2" d="M46,3c23.7,0,43,19.3,43,43S69.7,89,46,89S3,69.7,3,46S22.3,3,46,3 M46,0C20.6,0,0,20.6,0,46s20.6,46,46,46
                    s46-20.6,46-46S71.4,0,46,0L46,0z"/>
                    </g>
                    <polygon fill="none" stroke="#FFFFFF" stroke-width="2" points="46,23.7 53.3,38.4 69.5,40.7 57.7,52.2 60.5,68.3 46,60.7 
                    31.5,68.3 34.3,52.2 22.5,40.7 38.7,38.4 "/>
                    </svg>
                    </span><?php the_field('tab_two_name', 14); ?></label>
                       <div class="content">
                           <div class='col-three'>
								<?php the_field('tab_two_left_editor', 14); ?>	
                           </div>
                           <div class='col-four'>
                            	<?php the_field('tab_right_editor', 14); ?>   
                           </div>
                       </div> 
                   </div>
                </div>
                
            </div>
         </section>
	</div>
    	
    <div id="about" class="bgParallax" data-speed="25">
    	<div class='wrapper'>
			<div id="content-slider">
                <div id="slider">
                     <div id='aboutobi' class='slide'>
                      	<?php the_field('about_us_editor', 14); ?>  
                     </div>
                     <div id='teammembers' class='slide'>
                        <h1>Meet the team</h1>
                        <?php

						$blog_query = new WP_Query( 'post_type=team&posts_per_page=10' );
						$counter = '0';
			
						while ( $blog_query->have_posts() ) : $blog_query->the_post();
						?>

                        <article>
                            <div class='imgcontainer'>
                            	<?php 
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('team');
								} 
								?>
                            </div>
                        	<ul>
                                <li><a class='email' href='#'>
									<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 121.5 98.5" enable-background="new 0 0 121.5 98.5" xml:space="preserve">
                                    <path fill="#FFFFFF" d="M114.3,18.2C114.3,18.2,114.3,18.2,114.3,18.2l0-10H113h-2.8H10.9h-2h-2v19.1v17.3v48.1h1.7h2.4h5.5
                                    c0,0,0,0,0,0h88.3c0,0,0,0,0,0h5.5h2.4h1.7v-9.5c0,0,0,0,0,0V18.2z M97.8,35.1c-8,6.3-16.1,12.6-24,18.9c-3.2,2.6-8.9,8.1-13.1,8.1
                                    h-0.1h-0.1c-4.2,0-10-5.5-13.1-8.1c-8-6.3-16-12.6-24-18.9c-5.4-4.2-8.8-10.1-8.8-16.9c0-1,0.9-1.9,1.9-1.9h88.3
                                    c2.3,0,1.9,2.6,1.9,4.1C106.6,25.4,101.7,32.1,97.8,35.1z M106.6,37.2V83c0,1-0.9,1.9-1.9,1.9H16.4c-1,0-1.9-0.9-1.9-1.9V37.2
                                    c1.3,1.4,2.6,2.7,4.1,3.9c8.6,6.6,17.2,13.2,25.5,20.2c4.5,3.8,10.1,8.4,16.3,8.4h0.1h0.1c6.2,0,11.8-4.6,16.3-8.4
                                    c8.3-6.9,17-13.6,25.5-20.2C104,40,105.3,38.7,106.6,37.2z"/>
                                    </svg>
                                </a></li>
                                <li><a class='linkedin' href='#'>
									<svg version="1.1" id="in" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 121.5 98.5" enable-background="new 0 0 121.5 98.5" xml:space="preserve">
                                    <g>
                                    <path fill="#FFFFFF" d="M63.7,46.2v-0.2c0,0.1-0.1,0.1-0.1,0.2H63.7z"/>
                                    <path fill="#FFFFFF" d="M86.9,8.2H71.5h-22H34.2H18.3V14v5.8V24v52.8v4.2v0v11.6h15.8h15.4h22h15.4h15.8V82.5v-1.6v-4.2V24v-4.2
                                    v-4.3V8.2H86.9z M64.1,54.4c-0.3,0.8-0.4,2-0.4,3.1v21.3H51c0.2-34.6,0-38.2,0-38.2h12.7v5.4c1.7-2.6,4.7-6.3,11.4-6.3
                                    c8.4,0,14.6,5.4,14.6,17.1v21.9H77V58.5c0-5.2-1.8-8.6-6.4-8.6C67.2,49.8,65.1,52.2,64.1,54.4z M31.4,78.8V40.7h12.7v38.1H31.4z
                                    M37.7,35.5L37.7,35.5c-4.3,0-7.1-3-7.1-6.6c0-3.7,2.9-6.6,7.2-6.6c4.3,0,7,2.9,7.1,6.6C44.9,32.6,42.1,35.5,37.7,35.5z"/>
                                    </g>
                                    </svg>
                                </a></li>
                            </ul>
                        	<h4><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                        </article>
                        <?php
						endwhile;
						// Reset Post Data
						wp_reset_postdata();
						?>
                        
                     </div>
                </div>
                <span id="next"><div class='circle-trigger'>
                <p>Meet the Team</p>
                <svg class='roateme' version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 23 18" width='23' height='18' enable-background="new 0 0 23 18" xml:space="preserve">
				<polygon class='arrowfill' fill="#ffffff" points="11.9,13.4 23,13.4 23,4.6 11.9,4.6 11.9,0 0,9 11.9,18 "/>
				</svg>
                </div></span>
            </div>
        </div>
	</div>
    
    <div id="work-with-us" class="bgParallax" data-speed="20">
      <section>
            <div class='wrapper'>
                <?php the_field('work_with_us_editor', 14); ?>
                <div class='starter-arrow-down'>
                	<a href='#contact'>
                        <p>Get in touch</p>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 42 42" width='43' height='42' enable-background="new 0 0 42 42" xml:space="preserve">
                        <g>
                        <path class='inner' fill="#fff" d="M21,40.4c-10.8,0-19.5-8.7-19.5-19.4S10.2,1.5,21,1.5c10.8,0,19.5,8.7,19.5,19.4S31.8,40.4,21,40.4z"/>
                        <path class='outer' fill="#f0d873" d="M21,3c9.9,0,18,8,18,17.9s-8.1,17.9-18,17.9s-18-8-18-17.9S11.1,3,21,3 M21,0C9.4,0,0,9.4,0,20.9
                        s9.4,20.9,21,20.9s21-9.4,21-20.9S32.6,0,21,0L21,0z"/>
                        </g>
                        <polygon class='arrow' fill="#f9a725" points="25.5,21 25.5,9.9 16.5,9.9 16.5,21 11.9,21 21,32.9 30.1,21 "/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
	</div>
    <div id="contact" class="bgParallax" data-speed="15">
        <section>
        	<div class='wrapper'>
                <div class="contact-container--left">
                    <?php the_field('get_in_touch_editor', 14); ?>
                    <?php if( get_field('view_map_link', 14) ): ?><a class='view' href='<?php the_field('view_map_link', 14); ?>' target="_blank">View map</a><?php endif; ?>
                	<p class='credit'>Online Business Innovation Ltd &copy; <?php the_date('Y'); ?></p>
                </div>
                <div class="contact-container">
                    <div class="circle contact-bubble message-sent">
                        <div class='contact-form'>
                        	<?php the_content(); ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
	</div>	
<?php endwhile; endif; ?>

<?php get_footer(); ?>
