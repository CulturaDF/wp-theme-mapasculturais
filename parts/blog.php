<div class="content-section">
  <div class="content-section-content">
    <?php for($i = 0; $i <= 3; $i++) : ?>
      <article class="post">
        <div class="featured-image">
          <img src="http://lorempixel.com/1024/400/?<?php echo $i; ?>" />
        </div>
        <h3>Mauris mattis elit ac justo commodo pulvinar. Quisque porta libero massa. In interdum facilisis.</h3>
        <div class="meta">
          <p class="author">
            <a href="#">
              <img src="http://lorempixel.com/30/30/" />
              Raimundo Nonato
            </a>
          </p>
          <p class="date">
            <span class="fa fa-clock-o"></span>
            10 de abril de 2017
          </p>
        </div>
        <p>Quisque tempus, massa in pulvinar aliquet, est tellus scelerisque lorem, vel lobortis felis elit at justo. Nullam id arcu sed purus scelerisque aliquam in et purus. Nam et consequat lacus. Fusce dapibus, sem id efficitur consequat, sem nulla vulputate velit, eget mattis nibh elit vitae dolor. Nulla facilisi. Nullam et consectetur est. Nam mollis, elit eu scelerisque elementum, nibh lectus mattis dui, aliquet iaculis erat lacus at elit.</p>
      </article>
      <?php if($i < 3) : ?>
        <hr class="dark" />
      <?php endif; ?>
    <?php endfor; ?>
  </div>
</div>
