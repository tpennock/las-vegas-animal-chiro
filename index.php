<?php include 'partials/header.php';?>

<!-- Slider
============================================= -->
<section id="slider" class="slider-parallax swiper_wrapper clearfix">

	<div class="slider-parallax-inner">

		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/1.jpg');">
					<div class="container clearfix">
						<div class="slider-caption slider-caption-center">
							<h2 data-caption-animate="fadeInUp">Welcome to Canvas</h2>
							<p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/2.jpg');">
					<div class="container clearfix">
						<div class="slider-caption slider-caption-center">
							<h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
							<p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
					<div class="container clearfix">
						<div class="slider-caption">
							<h2 data-caption-animate="fadeInUp">Great Performance</h2>
							<p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
						</div>
					</div>
				</div>
			</div>
			<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
			<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
			<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
		</div>

	</div>

</section>


<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="promo promo-light promo-full bottommargin-lg center header-stick notopborder">
			<div class="container clearfix">
				<h3>Call us today at <span><?php echo $lvac_phone; ?></span> or Email us at <span><?php echo $lvac_email; ?></span></h3>
				<span>We would love to answer any questions or help you schedule an appointment.</span>
			</div>
		</div>

		<div class="container clearfix">

			<div class="col_two_fifth nobottommargin center">
				<iframe width="560" height="315" src="http://www.youtube.com/embed/FOWy1G_UdWU" frameborder="0" allowfullscreen></iframe>
				<hr>
				<img src="images/lvac/bandashadowsmall.jpg">
			</div>

			<div class="col_three_fifth nobottommargin col_last">

				<div class="heading-block">
					<h2>Chiropractic care can help</h2>
				</div>

				<p>From minor pain and behavior changes to the most severe nerve problems, chiropractic care can make a difference in animals of all sizes.</p>

				<div class="col_half nobottommargin">
					<ul class="iconlist iconlist-color nobottommargin">
						<li><i class="icon-caret-right"></i> Head, Neck, Back, Tail Pain</li>
						<li><i class="icon-caret-right"></i> Joint, Disc, Nerve Problems</li>
						<li><i class="icon-caret-right"></i> Behavior Changes</li>
						<li><i class="icon-caret-right"></i> Internal Disorders</li>
						<li><i class="icon-caret-right"></i> Muscle Spasms</li>
						<li><i class="icon-caret-right"></i> Injuries</li>
						<li><i class="icon-caret-right"></i> Accidents</li>
						<li><i class="icon-caret-right"></i> Geriatric Animals</li>
					</ul>
				</div>

				<div class="col_half nobottommargin col_last">
					<ul class="iconlist iconlist-color nobottommargin">
						<li><i class="icon-caret-right"></i> Lameness, Limping</li>
						<li><i class="icon-caret-right"></i> Hesitating, Balking</li>
						<li><i class="icon-caret-right"></i> Health Maintenance</li>
						<li><i class="icon-caret-right"></i> Elbow, Knee, Foot Pain</li>
						<li><i class="icon-caret-right"></i> Bladder or Bowel Disorders</li>
						<li><i class="icon-caret-right"></i> Jaw, TMJ, Chewing Problems</li>
						<li><i class="icon-caret-right"></i> Event and Sports Performance</li>
						<li><i class="icon-caret-right"></i> Seizures or Neurological Problems</li>
					</ul>
				</div>

			</div>

			<div class="clear"></div><div class="line"></div>

			<p class="nobottommargin col-md-10">Chiropractic care and Veterinary medicine work very well together. Chiropractic treatments are not intended to replace traditional Veterinary care. When a joint is subluxated it loses motion and proper positioning. The chiropractic adjustment is designed to restore correct alignment and proper motion. The adjustment is aimed at correcting the subluxation and restoring the proper functioning of the nervous system. With any dysfunction, Chiropractic works to eliminate the cause of the problem and not just treat the symptoms.</p>

			<div class="col-md-2">
				<img src="images/lvac/avca.jpg">
			</div>

		</div>

		<div class="promo promo-dark promo-flat promo-full center topmargin footer-stick">
            <div class="container clearfix">
                <h3>Call us today at <span><?php echo $lvac_phone; ?></span> or Email us at <span><?php echo $lvac_email; ?></span></h3>
                <span>We would love to answer any questions or help you schedule an appointment.</span>
            </div>
        </div>

	</div>

</section><!-- #content end -->

<?php include 'partials/footer.php'; ?>
