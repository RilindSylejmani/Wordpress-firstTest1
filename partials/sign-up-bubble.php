<?php
$avatar = get_field('image1');
$banner = get_field('banner');
?>


<div class="container">
  <div class="first-side">
    <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
    <div class="fields-container">
      <div class="title">
       <p> <?php the_field('title'); ?> </p>
      </div>
      <div class="body">
        <p><?php the_field('body'); ?></p>
      </div>
    </div>
  </div>
  <div class="second-side">
    <div class="first-row1">
      <h1>Why Starlabs?</h1>
    </div>
    <div class="checkin">
      <p> <?php the_field('checkin'); ?> </p>
    </div>
    <div class="checkout">
      <p> <?php the_field('checkout'); ?> </p>
    </div>
    <div class="card">
     <p> <?php the_field('card'); ?> </p>
    </div>
    <div class="button">
     <button> <?php the_field('button'); ?> </button>
    </div>
    
  </div>
  </div>
  <div class="card-container">
    <?php if( have_rows('cards') ): ?>
        <?php $count = 0; ?>
        <?php while( have_rows('cards') ): the_row(); ?>
            <div class="card">
                <?php $image = get_sub_field('image1'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <p class="text"><?php the_sub_field('text1'); ?></p>
                <p class="title"><?php the_sub_field('title'); ?></p>
                <p class="body"><?php the_sub_field('body'); ?></p>
            </div>
            <?php
                $count++;
                if ($count % 4 === 0) {
                    echo '</div><div class="card-container">';
                }
            ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="banner">
<img src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt']; ?>" />
  <div class="banner-content">
  <p> <?php the_field('banner_text'); ?></p>
  </div>
</div>

