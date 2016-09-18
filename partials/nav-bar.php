<!-- Header
============================================= -->
<header id="header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="style-2">

                <ul>
                    <?php foreach($pages as $url=>$title):?>
                    <li <?php if($url === $active_page):?>class="current"<?php endif;?>>
                        <a href="<?php echo $url;?>">
                            <div><?php echo $title;?></div>
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->