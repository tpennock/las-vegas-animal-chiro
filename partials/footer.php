        <!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_one_third">
						<!-- <img src="images/lvac/avca.jpg" alt="" class="footer-logo"> -->
						Copyright &copy; <?php echo date("Y") ?> All Rights Reserved by LasVegasAnimalChiro.com.
					</div>

                    <div class="col_one_third">
                        <!-- <div class="widget subscribe-widget clearfix">
                            <h5><strong>Join</strong> our mailing list for special offers and news:</h5>
                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                        </div> -->
						<div class="widget subscribe-widget center clearfix">
                            <h5><strong>Join</strong> our mailing list for special offers and news:</h5>
                            <div>
                            	<a href="signup.php" class="btn btn-success">Subscribe</a>
                            </div>
                        </div>
                    </div>

					<div class="col_one_third col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
                            <?php foreach($pages as $url=>$title):?>
                            <a href="<?php echo $url;?>"><?php echo $title;?></a>
                            <?php if (end($pages) !== $title): ?>/<?php endif; ?>
                            <?php endforeach;?>
						</div>
						<div class="fright clearfix">
							<a href="http://www.facebook.com/pages/Dr-Sidney-Carter-DC-Animal-Chiropractic/213607852002029" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
						</div>
					</div>
				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->


	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/functions.js"></script>

</body>
</html>
