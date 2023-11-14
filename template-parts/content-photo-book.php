<?php
/**
 * Template part for displaying Photo Book posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parts_Per_Million
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-header-wrapper <?php if (
  get_the_post_thumbnail(null, "thumbnail", "")
) {
  echo "has-hero-image";
} ?>">
	<header class="entry-header">
		<?php if (get_field("medium")): ?>
			<span class="single-post-med"><?php echo get_field("medium"); ?></span>
    <?php endif; ?>
		<?php the_title('<h1 class="entry-title">', "</h1>"); ?>
		<?php if (get_field("subheading")): ?>
		<span class="subheading">
			<?php echo get_field("subheading"); ?>
		</span>
	<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="featured-image-frame single-post-image">
		<?php if (get_the_post_thumbnail(null, "thumbnail", "")): ?>
			<?php echo the_post_thumbnail("full", [
     "class" => "fit",
     "title" => "Featured image",
   ]); ?>
		<?php endif; ?>
	</div><!-- /.featured-image-frame -->
	<?php if (get_field("cover_image_caption")): ?>
	<div class="cover-caption-block">
		<p class="cover-image-caption">
			<?php echo get_field("cover_image_caption"); ?>
		</p>
	</div>
	<?php endif; ?>
	</div><!-- /.entry-header-wrapper -->
	<div id="story-content" class="entry-content">
		<div class="post-layout-main">
			<!-- BOOK main content -->
			<div class="post-body pages-track">
				<!-- TODO: Bring in content from DB -->
				<!-- FOREWORD -->
				<div class="book-page theme-dark forward">
					<div class="page-bg">
						<div class="page-heading">
							<h2 class="heading-main">
								Forward
							</h2>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="first-paragraph ts-l">
									This collection is a wake up call for everyone. The climate crisis worsens each day pollution increases, and while action is being taken there is still much work to be done. Pasted on the cover is a clock. That clock—located in Union Square, New York City—counts down to a grim milestone. A total warming of 1.5 degrees celsius, the original annual average temperature rise ceiling set by the global community. 1.5 degrees of warming was nearly unimaginable almost a century ago yet today we inch closer and closer towards reaching it.
								</p>
								<p>Through this collection, it is my aim to spread awareness for the effects of climate change and pollution apparent all around us, to shed light on these things we don&rsquo;t often notice. In this book, you will find a showcase of photos all based in New York City, centered around climate change, pollution, and finally, the wide variety of resiliency projects currently being undertaken by the local NYC population as well as the City&rsquo;s governing body. Each page focuses on a different location in NYC.</p>
								<p>It is my hope that this collection will evoke a sense of urgency to act within you. Hopefully, one day, we can come together as a society, fully educated and ready to act, in order to fight the different crises facing our civilization.</p>

								<p class="t-alignR">&mdash; Elias Bukai-Leite</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Slide 1 -->
				<!-- Clock's Ticking :: Gowanus -->
				<div class="book-page theme-dark bg-image-page gowanus-0">
					<div class="page-bg has-image">
						<div class="bg-image-screen">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-gowanus-canal-0.jpg" class="image-full-screen" />
						</div>
						<!-- <h2 class="page-heading">The Clock&rsquo;s Ticking</h2> -->
						<div class="page-heading">
							<h2 class="heading-main">Gowanus Canal</h2>
							<span class="photo-meta">Brooklyn, NY</span>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="first-paragraph ts-l">
									The Gowanus Canal. The canal, constructed in the 1800s, is 100 ft wide and 1.8 miles long. It runs through several different communities in Brooklyn, NY including Park Slope, Cobble Hill, Carroll Gardens and Red Hook.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Slide 2 -->
				<div class="book-page theme-dark bg-image-page gowanus-0">
					<div class="page-bg has-image">
						<div class="bg-image-screen">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-gowanus-canal-1.jpg" class="image-full-screen" />
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="first-paragraph ts-l">
									For years pollutants such as polycyclic aromatic hydrocarbons, polychlorinated biphenyls, and heavy metals such as mercury, lead, and copper were dumped into the canal by surrounding factories.
								</p>
								<p>
									In 2010, the canal was placed on the national priorities list and a program taken up by the U.S. Environmental Protection Agency to clean out and restore the canal was implemented. Since 2010, the EPA has dredged 300,000 cubic yards of contaminated sediment, cleaned up the surrounding factories, and finally is installing a cement cap on the bottom of the canal to keep any additional contaminants residing in the bottom sediments from spreading throughout the canal. The entire project is expected to be completed by 2023 and will likely cost over $1 billion dollars.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- The Clock's Ticking -->
				<div class="book-page theme-dark">
					<div class="page-bg">
						<div class="page-heading">
							<h2 class="heading-main c-gold1">
								The Clock&rsquo;s Ticking
							</h2>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-gm">
								<!-- countdown goes here -->
								<div class="countdown-block">
									<climate-clock />
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Clock's Ticking :: We're Fighting - ESCR -->
				<!-- Slide 1 -->
				<div class="book-page theme-green bg-image-page construction-escr">
					<div class="page-bg has-image">
						<div class="bg-image-screen">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-fdr-drive-escr-construction.jpg" class="image-full-screen" />
						</div>
						<div class="page-heading">
							<h2 class="heading-main">
								East Side Coastal Resiliency Project
							</h2>
							<span class="photo-meta">Manhattan, New York City</span>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="first-paragraph ts-l">
									Construction taking place next to the FDR Drive for the East Side Coastal Resiliency (ESCR) project. The project is an initiative taken by the City of New York to protect vulnerable areas of Manhattan from rising sea levels.
								</p>
								<p>
									 It is jointly funded by NYC as well as the federal government. The project, being a sea wall, will stretch about 2.5 miles from East 25th St. to Montgomery St. Construction of the wall is scheduled to be completed by 2026 and will hopefully help to prevent the ocean from damaging essential infrastructure and destroying the different ecosystems that reside near the shoreline. The program will cause a temporary disturbance in the equilibrium of the area as many prominent parks and other wild life areas will be temporarily closed off in order to aid the construction of the project.
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Slide 2 -->
				<div class="book-page theme-green">
					<div class="page-bg">
						<div class="page-heading">
							<h2 class="heading-main">
								The Clock&rsquo;s Ticking
							</h2>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<h2 class="content-heading">We&rsquo;re Fighting It</h2>
								<h2 class="content-heading">Is It Enough?</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- Clock's Ticking :: We're Fighting - EV -->
				<!-- Slide 1 -->
				<div class="book-page theme-green bg-image-page construction-escr">
					<div class="page-bg has-image">
						<div class="bg-image-screen">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-ev-charging-carroll-gardens.jpg" class="image-full-screen" />
						</div>
						<div class="page-heading">
						<h2 class="heading-main">
							PlugNYC EV Charging Station
						</h2>
						<span class="photo-meta">Carroll Gardens, Brooklyn, NY</span>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="first-paragraph ts-l">
									Photo of two electric vehicles (EVs) charging at one of the City&rsquo;s 120 public EV charging stations in Carroll Gardens, Brooklyn.
								</p>
								<p>The portable station is known as PlugNYC, an initiative taken by the NYC government partnered with ConEdison to reduce total emissions in the city. Regular gas powered cars are responsible for about 30% of total NYC emissions. These stations will help the city to encourage purchases of EV cars and hopefully push the city towards its goal of reducing emissions by about 80% by 2050. The charging stations are level 2 meaning that they charge at a rate of 20 miles of range per hour. They are mid level voltage (240v) which is similar voltage used to power larger appliances such as dryers. The project will last a total duration of 4 years as a test run.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Clock's Ticking :: Delay = Denial -->
				<!-- Slide 1 -->
				<div class="book-page theme-dark bg-image-page climate-clock">
					<div class="page-bg has-image">
						<div class="bg-image-screen">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-climate-clock-delay-denial.jpg" class="image-full-screen" />
						</div>
						<div class="page-heading">
							<h2 class="heading-main">
								Climate Clock
							</h2>
							<span class="photo-meta">Union Square, Manhattan, New York City</span>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="first-paragraph ts-l">
									Photos taken at Union Square, NYC of the Climate Clock which counts down to doomsday. The clock was installed in 2020 by an organization known simply as &ldquo;Climate Clock.&rdquo;
								</p>
								<p>The clock&rsquo;s purpose is to inform citizens of how much time the world has to reach zero emissions before the effects of climate change are permanently solidified. Additionally, the clock tells how much time the world has until total warming of 1.5 degrees centigrade, a milestone that if reached would encourage the global community to set a new warming limit. Setting a new warming ceiling can have catastrophic effects including increased food and water shortages as well as more frequent natural disaster events. There are three clocks worldwide, one in Seoul, one in Glasgow, and one in NYC. In addition to a simple countdown, the clock displays three additional messages including &ldquo;solutions exist&rdquo;, &ldquo;delay=denial,&rdquo; as well as the signature hashtag &ldquo;Let&rsquo;s #Act In Time.&rdquo;</p>
							</div>
						</div>
					</div>
				</div>
				<!-- The Clock's Ticking -->
				<div class="book-page theme-dark">
					<div class="page-bg">
						<div class="page-heading">
							<h2 class="heading-main c-gold1">
								The Clock&rsquo;s Ticking
							</h2>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-gm">
								<!-- countdown goes here -->
								<div class="countdown-block">
									<climate-clock />
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Clock's Ticking :: Hamilton Asphalt plant -->
				<!-- Slide 1 -->
				<div class="book-page theme-dark bg-image-page climate-clock">
					<div class="page-bg has-image">
						<div class="bg-image-screen">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-hamilton-asphalt-plant.jpg" class="image-full-screen" />
						</div>
						<div class="page-heading">
							<h2 class="heading-main">
								Hamilton Asphalt Plant
							</h2>
							<span class="photo-meta">Gowanus, Brooklyn, NY</span>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="first-paragraph ts-l">
									<strong>The Hamilton Asphalt plant, Hamilton Ave, Brooklyn.</strong> Originally opened in 1979, the plant was a leading asphalt producer helping to fix and pave roads all across NYC.
								</p>
								<p>The plant was more recently closed down but was eventually restored and reopened in 2014 by Bill De Blasio. The plant&rsquo;s reopening was a part of an initiative to repave 1,000 lane miles of streets and repair 400,000 potholes. As a result of the plant&rsquo;s recycling abilities as well as its novel asphalt producing process which saves a total of 2.2 million barrels of crude oil, the plant is much more environmentally sustainable than other similar sites; it has substantially reduced its externalized costs. Still, while the factory is somewhat environmentally suitable, emissions from the asphalt production process remain. Since 2005, NYC CO<sub>2</sub> emissions have decreased by over 17%. However, CO<sub>2</sub> emissions still remain at a hefty 52 million metric tons. The effects of greenhouse gas emissions produced by different processes in NYC possess the potential to have detrimental effects on the different ecosystems within the city. Since 1970, the average NY state temperature has risen by 3 degrees Fahrenheit. Increased temperatures give way to a multitude of potential risks including increased extreme weather events such as heavier rainfall due to increased water evaporation into the atmosphere as well as &ldquo;the heat island effect.&rdquo;</p>
								<p>While the city is constantly pushing closer to reaching its goal of reducing total emissions by 80% by 2050, achieving that goal remains distant.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Clock's Ticking – We're Fighting It :: Windmills -->
				<!-- Slide 1 -->
				<div class="book-page theme-green bg-image-page windmills">
					<div class="page-bg has-image">
						<div class="bg-image-screen fit-portrait">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-windmills-wf-carroll-gardens.jpg" class="image-full-screen" />
						</div>
						<div class="page-heading">
							<h2 class="heading-main">
								Windmills
							</h2>
							<span class="photo-meta">
								Carroll Gardens, Brooklyn, NY
							</span>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="first-paragraph ts-l">
									<strong>Two windmills at Whole Foods Market Carroll Gardens, Brooklyn.</strong> Windmills are notable renewable energy producers.
									</p>
									<p>In recent years, NYC has taken a much keener interest in wind energy in order to further its goal of reaching 70% of electricity from renewable sources by 2030. NYC currently has five offshore wind farms set to be constructed in the coming years. The five wind farms will produce 4,300 megawatts of energy, nearly 50% of the capacity needed to meet NY&rsquo;s offshore wind goal of 9,000 megawatts by 2035. The farms will power 2.4 million New York homes, provide an economic impact of $12.1 billion dollars, and will provide over 6,800 jobs. Parts for the five projects will be housed at the South Brooklyn Marine Terminal. The wind farms known as the Empire and Beacon projects will be completed and expected to enter commercial operation by 2027 and 2028.</p>
							</div>
						</div>
					</div>
				</div><!-- /.book-page -->
				<!-- Slide 2 -->
				<div class="book-page theme-green">
					<div class="page-bg">
						<div class="page-heading">
							<h2 class="heading-main">
								The Clock&rsquo;s Ticking
							</h2>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<h2 class="content-heading">We&rsquo;re Fighting It</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- Is It Enough? :: CitiBike Share -->
				<!-- Slide 1 -->
				<div class="book-page theme-green bg-image-page bike-share">
					<div class="page-bg has-image">
						<div class="bg-image-screen">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-citibike-dock.jpg" class="image-full-screen" />
						</div>
						<div class="page-heading">
							<h2 class="heading-main">
								Citi Bike Docking Station, 3rd Street
							</h2>
							<span class="photo-meta">
								Gowanus, Brooklyn, NY
							</span>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="first-paragraph ts-l">
									<strong>Citi Bikes being stored on 3rd Street in Gowanus, Brooklyn. </strong> The bike sharing program has become increasingly popular over the last few years as daily rides jumped from an average of 48,315 rides per day in 2018, to a record number of 138,372 rides in a single day in 2022.
									</p>
									<p>The service gained prominence especially during and after the height of the Covid-19 pandemic in 2020. Citi Bikes have been proven as a means of reducing greenhouse gas emissions therefore improving climate change and the environment overall. In 2022, it was announced that 100 new Citi Bike stations would be installed in Brooklyn alone with more set to be introduced across the five boroughs.</p>
							</div>
						</div>
					</div>
				</div><!-- /.book-page -->
				<!-- Slide 2 -->
				<div class="book-page theme-green">
					<div class="page-bg">
						<div class="page-heading">
							<h2 class="heading-main">
								Is It Enough?
							</h2>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-gm">
								<!-- countdown goes here -->
								<div class="countdown-block">
									<climate-clock />
								</div>
							</div>
						</div>
					</div>
				</div>
					<!-- Is It Enough? :: Energy Efficiency Rating -->
					<!-- Slide 1 -->
					<div class="book-page theme-dark bg-image-page building energy efficiency grades">
						<div class="page-bg has-image">
							<div class="bg-image-screen">
								<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-energy-efficiency-grade-wf-gowanus.jpg" class="image-full-screen" />
							</div>
							<div class="page-heading">
								<h2 class="heading-main">Building Energy Efficiency Rating</h2>
								<span class="photo-meta">Gowanus, Brooklyn, NY</span>
							</div>
						</div>
						<div class="page-content">
							<div class="pt-6 pb-6 px-4">
								<div class="w-max max-640">
									<p class="first-paragraph ts-l">
										<strong>An energy efficiency rating posted on the front of Whole Foods Market in Gowanus, Brooklyn.</strong> The rating compares a building&rsquo;s energy consumption with similar buildings nationwide.
									</p>
									<p>A rating of one signifies that the building performs worse than 99% of other similar buildings nationwide. Each building is required to submit benchmark information about energy and water consumption to the city. Out of the nearly 40,000 buildings that submitted the required information, half received a D rating meaning a score less than 55. While businesses are not fined as a result of a poor rating, a low score may still harm a company in the long run as it reflects poorly on the practices of the business and therefore may influence potential customers to steer clear of the location. By 2030, NYC hopes to reduce total carbon emissions by 40%. This is one of the actions they are taking to do so.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Is It Enough? :: Pollution -->
					<!-- Slide 1 -->
					<div class="book-page theme-green bg-image-page carroll-gardens-pollution">
						<div class="page-bg has-image">
							<div class="bg-image-screen fit-portrait">
								<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-pollution-carroll-gardens.jpg" class="image-full-screen" />
							</div>
							<div class="page-heading">
								<h2 class="heading-main">
									Local Pollution
								</h2>
								<span class="photo-meta">Carroll Gardens, Brooklyn, NY</span>
							</div>
						</div>
						<div class="page-content">
							<div class="pt-6 pb-6 px-4">
								<div class="w-max max-640">
									<p class="first-paragraph ts-l">
										<strong>Local pollution. Photo taken in Carroll Gardens, Brooklyn.</strong> The photo was taken recently after a statement issued by New York City mayor Eric Adams on June 22, 2022 in which he communicated that increased litter collection, rat control, severe crackdowns on illegal dumping, and new operations to clean the city would all be on NYC&rsquo;s agenda in the coming years.
									</p>
									<p>With a new budget passed by the City Council of about $22 million dollars, litter bins will be emptied 50,000 times more per week than in the years prior. An additional $7.5 million dollars will be pledged towards fighting litterers and illegal dumpers. $5 million dollars will go towards paying sanitation workers and $4.8 million dollars will go towards rat mitigation which have reportedly hit a population total of 2 million in NYC. All of these actions will greatly help to assist in the preservation of many of NYC&rsquo;s ecosystems which have been gravely effected by increased pollution in recent years.</p>
								</div>
							</div>
						</div>
					</div>
				<!-- Let's Stop the Count -->
				<div class="book-page theme-green">
					<div class="page-bg">
						<div class="page-heading">
							<h2 class="heading-main">
								Let&rsquo;s Stop the Count
							</h2>
						</div>
					</div>
					<div class="page-content">
						<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
								<p class="ts-xl mb-5">
									<em>Get involved in the fight against pollution and climate change with these organizations:</em>
								</p>
								<dl class="orgs-list mb-5">
								<!-- 350.org -->
								<div class="org-item">
										<dt><a href="https://350.org/" target="_blank" rel="noreferrer noopener">350.org</a></dt>
										<dd>&ldquo;We&rsquo;re an international movement of ordinary people working to end the age of fossil fuels and build a world of community-led renewable energy for all.&rdquo;</dd>
									</div>
									<!-- Climate Action 100+ -->
									<div class="org-item">
										<dt><a href="https://www.climateaction100.org/" target="_blank" rel="noreferrer noopener">Climate Action 100+</a></dt>
										<dd>&ldquo;<strong>Climate Action 100+</strong> is an investor-led initiative to ensure the world&rsquo;s largest corporate greenhouse gas emitters take necessary action on climate change.&rdquo;</dd>
									</div>
									<!-- Gowanus Canal Conservancy -->
									<div class="org-item">
										<dt><a href="https://gowanuscanalconservancy.org/" target="_blank" rel="noreferrer noopener">Gowanus Canal Conservancy</a></dt>
										<dd>&ldquo;<strong>Gowanus Canal Conservancy</strong> advocates and cares for ecologically sustainable parks and public spaces in the Gowanus lowlands while empowering a community of stewards.&rdquo;</dd>
									</div>
									<!-- NYC City Cleanup Corps -->
									<div class="org-item">
										<dt><a href="https://www.nyc.gov/site/safestbigcity/keep-nyc-safe/city-cleanup-corps.page" target="_blank" rel="noreferrer noopener">NYC City Cleanup Corps</a></dt>
										<dd>&ldquo;<strong>The City Cleanup Corps (CCC)</strong> is employing 10,000 New Yorkers for beautification across our city. CCC workers wipe away graffiti, power-wash sidewalks, create community murals, tend to community gardens, transform public spaces, and work with community organizations to clean their neighborhoods. By making our city gleam, we're welcoming business and tourists back and helping revitalize our economy.&rdquo;</dd>
									</div>
									<!-- The Environmental Defense Fund -->
									<div class="org-item">
										<dt><a href="https://www.edf.org/" target="_blank" rel="noreferrer noopener">The Environmental Defense Fund</a></dt>
										<dd>&ldquo;For over 50 years, <strong>EDF</strong> has brought together scientists and lawyers to protect the environment. Using strategic partnerships, scientific and economic research, and advocacy, EDF works to strengthen laws and policies that improve the environment and public health.&rdquo;</dd>
									</div>
								</dl>
								<hr class="hairline white" />
								<p class="tf-sans t-alignR">
									Climate Clock Widget by <a href="https://github.com/climateclock" target="_blank" rel="noreferrer noopener"><strong>Climate Clock</strong></a>
								</p>
							</div>
						</div>
					</div>
				</div>


				<!-- Photo Book Meta, Credits, etc. -->
				<!-- ++++++++++++++++++++++++++++++ -->
				<div class="book-page entry-meta">
					<div class="page-content flex-height sxs">
						<div class="author-photo"><img src="<?php echo get_template_directory_uri(); ?>/images/book/elias-stand.jpg" class="fit" /></div>
						<div class="author-bio">
							<div class="text-col">
								<!-- contributor -->
								<div class="contributor-block meta-section">
									<div class="contributor-byline">
									<?php if (get_field("contributor")): ?>
										 <div class="contributor-name author">
											 <strong><?php echo get_field("contributor"); ?></strong>
									</div>
								<?php endif; ?>
								</div><!-- /.contributor-byline -->

								<?php if (get_field("contributor_bio")): ?>
									 <p class="contributor-bio">
										 <?php echo get_field("contributor_bio"); ?>
									</p>
								<?php endif; ?>
							</div><!-- /.contributor-block -->
							<!-- Date -->
						<div class="post-date meta-section">
							<?php if (get_field("date_published")): ?>
								 <span class="post-meta date-published">
									 Date: <?php echo get_field("date_published"); ?>
								</span>
							<?php endif; ?>
							<?php if (get_field("location")): ?>
								 <span class="post-meta location">
									 From: <?php echo get_field("location"); ?>
								</span>
							<?php endif; ?>


							</div>
					</div><!-- /.text-col -->
					</div><!-- /.author-bio -->
						</div><!-- .page-content -->
				</div><!-- .book-page -->
				<!-- ++++++++++++++++++++++++++++++ -->
			</div><!-- .pages-track -->
		</div><!-- /.post-layout-main -->
		<div class="post-content-footer">
			<div class="px-4 pt-6 pb-6">
				<div class="w-max max-gl">
					<div class="post-footer-nav t-alignC">
						<a class="link-subtle" href="<?php echo esc_url(home_url("/")); ?>" rel="home">
							<b class="ico">&larr;</b>	Back to PPM Home
							</a>
					</div>
	 			</div>
			</div>
		</div><!-- /.post-content-footer -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
