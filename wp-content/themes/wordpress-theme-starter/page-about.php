<?php get_header(); ?>
<main role="main">
	<a name="work"></a>
	<div class="hero short"><img src="<?php echo get_template_directory_uri(); ?>/img/about_our_work.jpg" alt="" /></div>
	<div class="clear"></div>
	<div class="container">
		<div class="col-lg-12">
			<?php
			
			if( $post->post_parent !== 0 ) {
				$parent_title = get_the_title($post->post_parent);
			    $parent = get_page_by_title($parent_title);
				$parent_link = '<a href="'.$parent->guid.'">'.$parent_title.' /</a> ';
			}
			
			//echo $parent_link; the_title();
			
			?>
			<h1 class="page_title">Our Work</h1>
		</div>
	</div>
	<div class="clear"></div>
	<div class="fade_in">
	<div class="work_examples">
		<div class="work_examples_column">
			<div class="work_examples_images"><img src="<?php echo get_template_directory_uri(); ?>/img/about_standford.png" alt="" /></div>
			<div class="work_examples_title"><div class="content-centered">Stanford Health Care</div></div>
			<div class="work_examples_subtitle">Stanford has turned to Primus for support with a number of its needs over the past decade:</div>
			<ul>
				<li>Activation Management of green-field buildout and operations in entirely new space, transferring pediatric surgical volumes from Stanford University Hospital to Stanford Children’s/Lucile Packard Hospital;</li> 
				<li>Interim Perioperative Services Management at the Administrative Director and Manager levels;</li> 
				<li>Design, Build, and Implementation of both the SurgiNet and SurgiNet Anesthesia Solutions within Cerner Millenium;</li>
				<li>First in the nation implementation of SurgiNet Anesthesia in a pediatric setting.</li>
			</ul>
			<p>
				We believe it is our ability to join their efforts, provide expertise, and share the workload involved which has caused Stanford Health to turn to us for multiple engagements.
			</p>
		</div>
		<div class="work_examples_column">
			<div class="work_examples_images"><img src="<?php echo get_template_directory_uri(); ?>/img/about_sidra.png" alt="" /></div>
			<div class="work_examples_title"><div class="content-centered">Sidra Research and Medical Center &amp; Weill Cornell</div></div> 
			<div class="work_examples_subtitle">Primus’ U.S. client results and relationships generated a reputation which carried us to the other side of the world—to the Middle East, and the buildout of the first dedicated Women’s and Children’s hospital in that region.  In Doha, Qatar, Primus:</div>
			<ul>
				<li>Supported Activation Management of green-field Perioperative Services functions in an acute and ambulatory setting;</li> 
				<li>Developed the overall Periop project Governance and Approach;</li> 
				<li>Created and facilitated overall project timeline and milestone development;</li>
				<li>Sourced and codified Periop Equipment needs, including pricing benchmarks, training and maintenance needs. Facilitated the review and approval process with surgeon, finance and supply chain leadership;</li>
				<li>Oversaw the design and build of Cerner’s SurgiNet and SurgiNet Anesthesia solutions.</li>
			</ul>
			<p>
				We have found that the same keys to successful projects apply throughout the world and across cultures.
			</p>
		</div>
		<div class="work_examples_column">
			<div class="work_examples_images"><img src="<?php echo get_template_directory_uri(); ?>/img/about_johns.png" alt="" /></div>
			<div class="work_examples_title"><div class="content-centered">Johns Hopkins All Children’s Hospital</div></div>
			<div class="work_examples_subtitle">Primus’ expertise in Electronic Health Record development yielded the opportunity to work with another top-tier US healthcare entity.  For this client, we:</div>
			<ul>
				<li>Conducted process-based design sessions for the Cerner SurgiNet and SurgiNet Anesthesia Solutions;</li> 
				<li>Conducted the build, testing, integration, device integration, and interfacing;</li> 
				<li>Developed a joint scheduling and daily tracking capability for all areas requiring general anesthesia;</li>
				<li>Handled all training and go-live support needs.</li>
			</ul>
			<p>
				Our combined clinical and technical expertise came together to help this client implement their system in a periop area where prior system installations had failed.  
			</p>
		</div> 
		<div class="clear"></div>
	</div>  
	</div>
	<div class="fade_in">
	<div class="work_about">
		<a name="about"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/img/about_what.jpg" alt="" />
		<div class="container">
			<h1 class="page_title" style="padding:50px 10px 0">What We’re About</h1>
			<h2 class="page_subtitle"><span>Results. The end goal of a successful collaboration.</span> What Separates Primus from the Pack?</h2>
			<div class="clear"></div>
		</div> 
		<div class="work_about_row">
			<div class="container-lg">
				<div class="work_about_content">
					<div class="content-centered">
						<div class="work_about_content_title">We work!</div>
						<p>We take on workload—so yours is lighter.</p><p>We don’t just call meetings, write down to do items, and then send them back to you. We dive in and do the work too.</p> 
		                <p>We understand the demands of day-to-day management—and then having a complex project added onto your plate.</p> 
		                <p>Primus works as an integral part of your team.</p>
						<a href="<?php echo home_url(); ?>/or-interim-mgmt" class="btn">Learn about interim management</a>
					</div>
				</div>
				<div class="work_about_image">
					<div class="content-centered">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about_experience2.jpg" alt="" />
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="work_about_row">
			<div class="container-lg">
				<div class="work_about_content">
					<div class="content-centered">
						<div class="work_about_content_title">We Bring Our Expertise</div>
						<p>Each Primus consultant comes with a background of real operational experience and management within their areas of expertise. Experience gained through actual day-to-day work over a course of years. The average career span of Primus consultants is 18 years; combined, we have over 100 years. We understand the real world implications of our efforts, because we’ve implemented them. Not just left recommendations on the table.</p>
						<a href="<?php echo home_url(); ?>/surginet" class="btn">learn about SurgiNet</a>
					</div>
				</div>
				<div class="work_about_image">
					<div class="content-centered">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about_experience.jpg" alt="" />
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="work_about_row">
			<div class="container-lg" style="text-align:center;padding:50px 20px;">
				<div class="work_about_content_title">We Stand By Our Results</div>
				<p style="line-height:24px;margin-bottom:40px;">Our clients’ success is our success. We encourage you to talk to prior clients. Find out their perspectives on how we helped them achieve their goals–and  helped them even go beyond why we started working together in the first place.</p>
				<a href="<?php echo home_url(); ?>/periop-activation" class="btn">learn about Periop Activation</a>

				<div class="clear"></div>
			</div>
		</div> 
	</div>
	</div> 
	<div class="fade_in">
	<div class="work_management">
		<a name="management"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/img/about_team.jpg" alt="" />
		<div class="about-management-container">
			<h1 class="page_title"><?php echo $parent_link; ?> Management</h1>
			<div class="row">

					<div data="bio_roger" class="about-management-team"> 
						<div class="about-management-desc">
 							<div class="about-management-team-image"><img src="<?php echo get_template_directory_uri(); ?>/img/roger.jpg" alt="" /></div>
							<h3>Roger Whitehouse</h3> 
							Founder &amp; President   						
						</div>
						<div class="work_management_bios" data="bio_roger_detail">
							<div class="work_management_close"></div>
							<div class="container">        
								<div class="bio_roger">
									<p>Roger has over 23 years’ experience in healthcare consulting, working with over 30 clients. Former clients include Kaiser Permanente, UCSD Medical Center, Intermountain Healthcare, MemorialCare Health System, All Children’s Hospital, The Johns Hopkins Hospital, Stanford Children’s Health | Lucile Packard Children’s Hospital Stanford, HCR ManorCare, and others. He has also founded and run two companies and is the Director of a non-profit Consortium.</p>
				                    <p>Roger developed the company into a firm specializing in perioperative services, and Primus is now a global company. Primus provides project management experience for complete buildout/equipment &amp; instrumentation procurement/staffing/go-live of completely new perioperative facilities. We also have helped 10 clients implement either Cerner SurgiNet® or SAAnesthesia®, or both. For one of those clients, the project was the first of its kind in the United States.</p>
								    <p>As mentioned, he is also the Director of The PEAR Consortium, a group of seven top pediatric medical centers in the United States focused on leveraging their electronic health records (EHR) to support clinical research and quality/outcomes measurement.</p>
				                    <p>Roger has completed the Innovations in Global Healthcare Program at the Harvard Business School, and holds a B.S. in Accounting, magna cum laude, from Brigham Young University.</p>
				                    <p>Send me an email:<br /><a href="mailto:roger@primushealthcareconsulting.com">roger@primushealthcareconsulting.com</a></p>
								</div>
							</div>
						</div>
					</div>

					<div data="bio_jan" class="about-management-team">
						<div class="about-management-desc">
							<div class="about-management-team-image"><img src="<?php echo get_template_directory_uri(); ?>/img/jan.jpg" alt="" /></div>
							<h3>Jan Thode, BS, RN</h3> 
							Vice President							
						</div>
        				<div class="work_management_bios" data="bio_jan_detail">
							<div class="work_management_close"></div>
							<div class="container">        
								<div class="bio_roger">
									<p>Jan has been a nurse for 37 years, working within surgical or perioperative services for over 30 of those years. She has been a Perioperative &amp; Pediatric Services Director, Interim Director, OR Manager, OR Charge Nurse/Team Leader, and OR Staff Nurse.</p>
				                    <p>In addition to Jan’s direct perioperative management and nursing expertise, Jan has overseen the full planning of entirely new perioperative areas and services at two major academic medical centers in the United States and one in the Middle East.</p>
								    <p>Jan also has deep experience with electronic health record (EHR) design, build, and implementation efforts. This included the first ever implementation of Cerner’s SAAnesthesia® solution in a pediatric hospital in the United States. She has overseen multiple Cerner SurgiNet® and SAAnesthesia®projects, and has integrated with similar efforts using the complete suite of Cerner solutions.</p>
				                    <p>Send me an email:<br /><a href="mailto:jan@primushealthcareconsulting.com">jan@primushealthcareconsulting.com</a></p>
								</div>
							</div>
						</div>
					</div>
 
					<div data="bio_lindia" class="about-management-team">
						<div class="about-management-desc">
							<div class="about-management-team-image"><img src="<?php echo get_template_directory_uri(); ?>/img/lindia.jpg" alt="" /></div>
							<h3>Lindia LaFrance, BA, RN</h3> 
							Senior Consultant							
						</div>
             			<div class="work_management_bios" data="bio_lindia_detail">
							<div class="work_management_close"></div>
							<div class="container">        
								<div class="bio_roger">
									<p>Lindia has 23 years of experience as an operating room nurse, with further experience in clinical informatics in a regional medical center.</p>
				                    <p>Lindia then leveraged this knowledge and entered the consulting world, now having worked for over eight years for a variety of clients. Her experience as a consultant has included support for full scale opening of new perioperative services areas at a major pediatric academic medical center.</p>
								    <p>Linda has deep experience in electronic health record (EHR) design, build, and implementation. Particular expertise is with Cerner’s SurgiNet and SAAnesthesia tools.
									She has other experience in supply chain management, interfacing, reporting, and charging.</p>                                                                                          
				                    <p>Send me an email:<br /><a href="mailto:lindia@primushealthcareconsulting.com">lindia@primushealthcareconsulting.com</a></p>
								</div>
							</div>
						</div>
					</div>

				<div class="clear"></div>
			</div>
		</div>



		<div class="about-management-container">
			<div class="row">                      
					<div data="bio_brian" class="about-management-team">
						<div class="about-management-desc">
							<div class="about-management-team-image"><img src="<?php echo get_template_directory_uri(); ?>/img/brian.jpg" alt="" /></div>
							<h3>Brian Koelliker, BSN</h3> 
							Senior Consultant
						</div>
						<div class="work_management_bios" data="bio_brian_detail">
							<div class="work_management_close"></div>
							<div class="container">        
								<div class="bio_roger">
									<p>Brian has over 18 years combined experience in pediatric and neonatal ICU Nursing and in Clinical Informatics.</p>
				                    <p>He has deep experience in design, build, and implementation of Cerner’s SurgiNet® and SAAnesthesia® tools. He has directly supervised projects and teams while at a major medical center, and has functioned in consulting roles on project teams. Brian facilitated numerous site visits and reference site calls for other facilities. He also served on Cerner’s Perioperative Special Interest Group board and gave several lectures at Cerner’s yearly international health conferences.</p>
								    <p>Send me an email:<br /><a href="mailto:brian@primushealthcareconsulting.com">brian@primushealthcareconsulting.com</a></p>
								</div>
							</div>
						</div>
					</div> 
					<div data="bio_penny" class="about-management-team">
						<div class="about-management-desc">
							<div class="about-management-team-image"><img src="<?php echo get_template_directory_uri(); ?>/img/penny.jpg" alt="" /></div>
							<h3>Penny Boyd, RN, MSN, CNOR</h3> 
							Consultant
						</div>
						<div class="work_management_bios" data="bio_penny_detail">
							<div class="work_management_close"></div>
							<div class="container">        
								<div class="bio_roger">
									<p>Penny has 32 years nursing experience and 20 years in the department of Surgery. She retired in early 2014 as Administrative Director of Perioperative Services and joined the Primus Team. Penny’s background includes Administrative Director of Perioperative Services for Pediatric, Adult and Ambulatory Surgery Centers, OR Manager, OR Charge Nurse, OR and Clinical nursing staff.</p>
				                    <p>She provided leadership and oversight of the construction and design of a Surgical Department within a new 250-bed Pediatric Hospital. She has been instrumental in the construction and opening of two self-contained Ambulatory Surgery Centers at two major academic Medical Centers in the Northeast.</p>
								    <p>Under Penny’s leadership each facility passed all requirements needed for state licensing, Medicare certification and JCAHO accreditation. She oversaw development and implementation of policies, procedures and staff education and competency. As a consultant she oversaw creation of the core education modules for a new Pediatric academic Medical Center in the Middle East.</p>
				                    <p>Send me an email:<br /><a href="mailto:penny@primushealthcareconsulting.com">penny@primushealthcareconsulting.com</a></p>
								</div>
							</div>
						</div>
					</div>

				<div class="gap30"></div>
			</div>
			<div class="clear"></div>
		</div>


	</div>
	</div>
	
</main>
<?php get_footer(); ?>
