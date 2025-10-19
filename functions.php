<?php
function team_section($doctors) {
?>
<section class="team_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Our <span>Doctors</span></h2>
    </div>
    <div class="carousel-wrap">
      <div class="owl-carousel team_carousel">
        <?php foreach ($doctors as $doc): ?>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo $doc['image']; ?>" alt="<?php echo $doc['name']; ?>">
              </div>
              <div class="detail-box">
                <h5><?php echo $doc['name']; ?></h5>
                <h6><?php echo $doc['degree']; ?></h6>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php
}
function slider($slides) { ?>
<section class="slider_section ">
  <div class="dot_design">
    <img src="images/dots.png" alt="">
  </div>

  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php foreach ($slides as $i => $s): ?>
        <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
          <div class="container ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <?php if (!empty($s['show_play'])): ?>
                  <div class="play_btn">
                    <button><i class="fa fa-play" aria-hidden="true"></i></button>
                  </div>
                  <?php endif; ?>

                  <h1>
                    <?php echo htmlspecialchars($s['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?> <br>
                    <span><?php echo htmlspecialchars($s['highlight'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span>
                  </h1>

                  <?php if (!empty($s['text'])): ?>
                    <p><?php echo htmlspecialchars($s['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                  <?php endif; ?>

                  <?php if (!empty($s['cta']['href']) && !empty($s['cta']['text'])): ?>
                    <a href="<?php echo htmlspecialchars($s['cta']['href'], ENT_QUOTES, 'UTF-8'); ?>">
                      <?php echo htmlspecialchars($s['cta']['text'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-6">
                <div class="img-box">
                  <img src="<?php echo htmlspecialchars($s['image'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="carousel_btn-box">
      <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
        <img src="images/prev.png" alt="">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
        <img src="images/next.png" alt="">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<?php 
}
function treatments(array $treatments, $side_img = 'images/treatment-side-img.jpg') { ?>
<section class="treatment_section layout_padding">
  <div class="side_img">
    <img src="<?php echo ($side_img); ?>" alt="">
  </div>
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Hospital <span>Treatment</span></h2>
    </div>

    <div class="row">
      <?php foreach ($treatments as $t): ?>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="<?php echo ($t['image']); ?>" alt="<?php echo ($t['title']); ?>">
            </div>
            <div class="detail-box">
              <h4><?php echo ($t['title']); ?></h4>
              <?php if (!empty($t['text'])): ?>
                <p><?php echo ($t['text']); ?></p>
              <?php endif; ?>
              <?php if (!empty($t['href'])): ?>
                <a href="<?php echo ($t['href']); ?>">Read More</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<?php }

function testimonials(array $testimonials): void { ?>
<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2><span>Testimonial</span></h2>
    </div>
  </div>

  <div class="container px-0">
    <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <?php foreach ($testimonials as $i => $t): ?>
          <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5><?php echo ($t['name'] ?? ''); ?></h5>
                  <h6><?php echo ($t['role'] ?? ''); ?></h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p><?php echo ($t['quote'] ?? ''); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>
<?php }
