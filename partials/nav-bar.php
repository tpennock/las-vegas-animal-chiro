<!-- Header
============================================= -->
<header id="header">

    <div id="header-wrap">

        <div class="clearfix">

            <table class="lvac-header-table" width="100%" align="center" cellpadding="0" cellspacing="0">
        		<tbody>
            		<tr>
            			<td class="lvac-header-table-side" width="*" background="images/lvac/header_l.jpg">&nbsp;</td>
            			<td class="lvac-header-table-content" background="images/lvac/header.png"></td>
            			<td class="lvac-header-table-side" width="*" background="images/lvac/header_r.jpg">&nbsp;</td>
            		</tr>
            	</tbody>
            </table>

        </div>

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <!-- <a href="index.html" class="standard-logo" data-dark-logo="images/lvac/avac.png"><img src="images/lvac/avca.jpg" alt="Las Vegas Animal Chiro Logo"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="images/lvac/avac.png"><img src="images/lvac/avca.jpg" alt="Las Vegas Animal Chiro Logo"></a> -->
            </div>

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
            </nav>

        </div>

    </div>

</header><!-- #header end -->
