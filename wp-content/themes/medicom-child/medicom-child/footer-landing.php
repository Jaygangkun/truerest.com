<footer class="landing-footer">
    <div class="container">
        <div class="footer-row">
            <div class="footer-col-logo">
                <?php 
                $logo = get_field('landing_footer_logo', 'option');
                if($logo) {
                    ?>
                    <img class="landing-footer__logo-img" src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>">
                    <?php
                }
                ?>
                <?php
                $copyright = get_field('landing_footer_copyright', 'option');
                if($copyright) {
                    ?>
                    <div class="landing-footer-copyright"><?php echo $copyright?></div>
                    <?php
                }
                ?>
                
            </div>
            <div class="footer-col-contact">
                <div class="landing-footer-contact">
                    <div class="landing-footer-address"><?php the_field('landing_footer_address', 'option')?></div>
                    <?php
                    if(get_field('landing_footer_phone', 'option')) {
                        ?>
                        <div class="landing-footer-phone-link-wrap">
                            <a class="landing-footer-phone-link" href="tel: <?php the_field('landing_footer_phone', 'option')?>"><?php the_field('landing_footer_phone', 'option')?></a>
                        </div>
                        
                        <?php
                    }
                    ?>
                    
                </div>
            </div>
            <div class="footer-col-menus">
                <div class="landing-footer-menus">
                    <?php if( have_rows('landing_footer_menus', 'option') ): while ( have_rows('landing_footer_menus', 'option') ) : the_row(); ?>
                        <?php
                        $link = get_sub_field('link');
                        if($link) {
                            ?>
                            <a class="landing-footer-menu-link" href="<?php echo $link['url']?>" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
                            <?php
                        }
                        ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>