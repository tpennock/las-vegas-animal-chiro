<?php include 'partials/header.php';?>


<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="lvac-avca-logo bottom">
                <img src="images/lvac/avca.jpg">
            </div>

            <!-- Post Content
            ============================================= -->
            <div class="postcontent">

                <!-- Google Map
                ============================================= -->
                <!--<section id="google-map" class="gmap bottommargin" style="height: 300px;"></section>-->


                <!-- Contact Form
                ============================================= -->
                <h3>Send us an Email</h3>

                <div class="contact-widget">

                    <div class="contact-form-result"></div>

                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="template-contactform-name">Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                        </div>

                        <div class="col_one_third">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-phone">Phone</label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
                        </div>
                        
                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="template-contactform-message">Message <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                        </div>

                        <div class="col_full">
                            <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                        </div>

                    </form>
                </div>

                <div>
                    Be certain to share all the information with the doctor about your pet's care from all health care providers, including diet, supplements, and medications. Be certain you understand post-adjustment exercise and home therapy recommendations. Give attention to saddle fit, shoeing, exercise, collar, harness, and conditioning recommendations.
                </div>

            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">

                    <!-- Contact Info
                    ============================================= -->
                    <div class="col_full nobottommargin">
                        <address>
                            <strong>Mailing Address:</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                        </address>
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> <?php echo $lvac_phone; ?><br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr>  <?php echo $lvac_email; ?>
                    </div><!-- Contact Info End -->

                </div>
            </div>

        </div>

        <div class="promo promo-dark promo-flat promo-full center topmargin footer-stick">
            <div class="container clearfix">
                <h3>House calls and on-site locations available.</h3>
                <span>Call or email to ask questions or to schedule an appointment.</span>
            </div>
        </div>

    </div>

</section><!-- #content end -->

<?php include 'partials/footer.php'; ?>