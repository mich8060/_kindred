<?php get_header('home'); ?> 
<div class="header--spacer"></div>
<main class="main" role="main">     
	<div class="section reverse"> 
		<div class="section--container">
			<div class="section--landscape"><img src="<?php echo get_template_directory_uri(); ?>/img/section--ask@2x.jpg" alt="" /></div> 
			<div class="section--content">
				<h6 class="section--title">Discover more possibilities </h6>
				<h2 class="section--headline">Ask a therapist</h2>
				<div class="section--description">
					Ask a Therapist is a place for direction, information and advice on a wide variety of topics. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a sodales mauris. Nunc nec neque nulla. Etiam at ipsum ullamcorper, mollis urna lacinia, mattis enim. Donec molestie nulla sapien, sit amet dictum tellus consectetur eget. Proin sodales, mi ac ullamcorper molestie, eros lacus placerat est, vitae tincidunt tellus elit sed ante. 
				</div>
				<div class="section--actions">
					<a href="<?php echo get_site_url(); ?>/contact" class="button stroke">Learn more</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section">
		<div class="section--container">
			<div class="section--visual">
				<div class="section--shape circle"></div>
				<div class="section--image">
					<div class="section--play">
						<div class="section--icon tan"><img src="<?php echo get_template_directory_uri(); ?>/img/section--play.svg" alt="" /></div>
					</div> 
					<div class="modal">                   
						<div class="modal--overlay"></div>
						<div class="modal--window"> 
							<div class="modal--close">+</div>
							<div class="iframe">
								<iframe src="https://www.youtube.com/embed/_ahA_ohxjnA" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="section--photo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/section--adages@2x.jpg" alt="" />
					</div>
				</div>
			</div> 
			<div class="section--content">  

				<h6 class="section--title">Welcome to…</h6>
				<h2 class="section--headline">The new adages</h2>
				<div class="section--description">
					We all know how difficult it can be to learn a new behavior. My way of helping individuals 
					learn ways of working on themselves is to use adages. Throughout my practice I have used 
					these sayings to help my clients deal with things immediately. They serve as prompts to 
					actions or self checking.
				</div>
				<div class="section--actions">
					<a href="<?php echo home_url(); ?>/adages" class="button stroke">Read more</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section reverse">
		<div class="section--container">
			<div class="section--visual">
				<div class="section--shape circle"></div>
				<div class="section--image triangle">
					<div class="section--play">
						<div class="section--icon"><img src="<?php echo get_template_directory_uri(); ?>/img/section--play.svg" alt="" /></div>  
					</div>                                                                                                                       
					<div class="modal">                   
						<div class="modal--overlay"></div>
						<div class="modal--window"> 
							<div class="modal--close">+</div>
							<div class="iframe">
								<iframe src="https://www.youtube.com/embed/IhMnuNuuvkU" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="section--photo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/section--dating@2x.jpg" alt="" />
					</div>
				</div>
			</div> 
			<div class="section--content">
				<h6 class="section--title">Learn what you’ve forgotten</h6>
				<h2 class="section--headline">The art of dating</h2>
				<div class="section--description">
					People have forgotten how to date. Fact. And how you date has a huge impact on your future — 
					whether you stay together or not. In this series you’ll learn how to be the architect of your 
					relationship from the very beginning. You’ll even learn the best ways to break up.
				</div>
				<div class="section--actions">
					<a href="<?php echo home_url(); ?>/dating" class="button stroke">Read more</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section">
		<div class="section--container">
			<div class="section--visual">
				<div class="section--shape circle"></div>
				<div class="section--image square">
					<div class="section--play">
						<div class="section--icon green"><img src="<?php echo get_template_directory_uri(); ?>/img/section--play.svg" alt="" /></div>
					</div>
					<div class="modal">                   
						<div class="modal--overlay"></div>
						<div class="modal--window"> 
							<div class="modal--close">+</div>
							<div class="iframe">
								<iframe src="https://www.youtube.com/embed/2UU1h4SW09Y" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="section--photo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/section--relationship@2x.jpg" alt="" />
					</div> 
				</div>
			</div> 
			<div class="section--content">
				<h6 class="section--title">Learning to talk again</h6>
				<h2 class="section--headline">Relationships</h2>
				<div class="section--description">
					I used to rely heavily on the words “communication” and “talk”. There are so many rules and ways to 
					“communicate” that it is virtually impossible to really listen and converse. Now I just focus on 
					teaching people how to have conversations. It takes out all of the defensiveness and fear that comes 
					with “communication”. There are some conversations that are more difficult then others but they are 
					still just conversations!
				</div>
				<div class="section--actions">
					<a href="<?php echo home_url(); ?>/relationships" class="button stroke">Read more</a>
				</div>
			</div>
		</div>
	</div> 
	
	<div class="post--latest">
		<div class="post--headline">Recent Articles</div> 
		<div class="post--subheadline">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
		<?
		$args = array(          
			'posts_per_page'=> 3,
			'offset' => 0,
			'category' => 0,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'include' => '',
			'exclude' => '',
			'meta_key' => '',
			'meta_value' =>'',
			'post_type' => 'post',
			'post_status' => 'publish',
			'suppress_filters' => true
		);
		$wp_query = new WP_Query($args); 
		?>
		<?php get_template_part('loop'); ?>  
		<div class="post--callout">
			<a href="<?php echo get_site_url(); ?>/articles" class="button stroke lg">Read all articles</a> 
		</div>
	</div>
	
</main>
<?php get_footer(); ?>