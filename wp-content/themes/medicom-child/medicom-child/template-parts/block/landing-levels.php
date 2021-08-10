<?php /* Block Name: Landing Levels */ ?>
<section class="landing-levels">
    <div class="container-lg">
        <h2 class="text-32"><?php the_field('title') ?></h2>
        <div class="row landing-level-row">
        <?php if( have_rows('levels') ): while ( have_rows('levels') ) : the_row(); ?>
            <div class="col-lg-4 landing-level-col">
                <div class="landing-level-col-wrap">
                    <div class="landing-level-col__img-wrap">
                        <?php
                        $icon = get_sub_field('icon');
                        if($icon) {
                            ?>
                            <img class="landing-level-col__img" src="<?php echo $icon['url']?>" alt="<?php echo $icon['alt']?>">
                            <?php
                        }
                        ?>
                    </div>
                    <h5 class="landing-level-col__title"><?php the_sub_field('title')?></h5>
                    <div class="landing-level-col__desc"><?php the_sub_field('description')?></div>
                </div>
            </div>
        <?php endwhile; endif; ?>
        </div>
    </div>
</section>