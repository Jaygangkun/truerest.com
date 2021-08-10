<?php /* Block Name: Landing Freedom */ ?>
<?php
$bk = get_field('background_image');
$bk_url = '';
if($bk) {
    $bk_url = $bk['url'];
}
?>
<section class="landing-freedom" style="background-image:url(<?php echo $bk_url?>)">
    <div class="container">
        <div class="col-lg-6">
            <h2 class="text-42"><?php the_field('title')?></h2>
            <p class="text-19"><?php the_field('description')?></p>
        </div>
        <div class="col-lg-6">
            <div class="landing-freedom-contact">
                <div class="text-18 text1"><?php the_field('text1') ?></div>
                <div class="text-32 name"><?php the_field('name') ?></div>
                <div class="text-16 address"><?php the_field('address') ?></div>
                <a class="text-16 phone-link" href="tel:<?php the_field('phone')?>"><?php the_field('phone')?></a>
                <div class="landing-freedom-contact-links">
                    <?php
                    $link1 = get_field('link1');
                    if($link1) {
                        ?>
                        <a class="btn-link btn-link-fill-blue" href="<?php echo $link1['url']?>" target="<?php echo $link1['target']?>">
                            <div class="btn-link-wrap">
                                <?php echo $link1['title']?> <span class="btn-link-icon"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                    <?php
                    $link2 = get_field('link2');
                    if($link2) {
                        ?>
                        <a class="text-link terms-link" href="<?php echo $link2['url']?>" target="<?php echo $link2['target']?>">
                            <?php echo $link2['title']?>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        
    </div>
</section>