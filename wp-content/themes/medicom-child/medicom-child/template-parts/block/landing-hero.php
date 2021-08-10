<?php /* Block Name: Landing Hero */ ?>
<section class="landing-hero">
    <div class="landing-hero-top">
        <div class="container">
            <h4 class="text-26"><?php the_field('date')?></h4>
            <h1 class="text-86"><?php the_field('title')?></h1>
            <p class="text-18"><?php the_field('sub_title')?></p>
            <div class="">
                <div class="text-50 landing-hero-countdown" id="landing_hero_countdown"></div>
                <div class="text-18"><?php the_field('remaining_text')?></div>
            </div>
            <div class="landing-hero-links">
                <?php
                $link1 = get_field('link1');
                if($link1) {
                    ?>
                    <a class="btn-link btn-link-fill-white" href="<?php echo $link1['url']?>" target="<?php echo $link1['target']?>">
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
                    <a class="btn-link btn-link-outline-white" href="<?php echo $link2['url']?>" target="<?php echo $link2['target']?>">
                        <div class="btn-link-wrap">
                            <?php echo $link2['title']?> <span class="btn-link-icon"><i class="fa fa-arrow-right"></i></span>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="landing-hero-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <p class="text-28"><?php the_field('bottom_text')?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php the_field('remaining_time') ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("landing_hero_countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("landing_hero_countdown").innerHTML = "EXPIRED";
  }
}, 1000);
</script>