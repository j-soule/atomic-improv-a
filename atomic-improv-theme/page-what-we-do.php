<?php

// This is the template for the Corporate page.

// @package Atomic_Improv

get_header();
?>



<main id="primary" class="site-main">
  <section class="corporate-events">
    <?php
    $whatwedo_hero_query = new WP_Query(
      array(
        "post_type" => "image",
        "posts_per_page" => 1,
        "tag" => "whatwedo_hero"
      )
    );
    if ($whatwedo_hero_query->have_posts()) :
      while ($whatwedo_hero_query->have_posts()) :
        $whatwedo_hero_query->the_post();
        $whatwedo_hero_url = get_field("image");
    ?>
        <div class="hero" style="background-image: url('<?php echo $whatwedo_hero_url ?>');">
      <?php
      endwhile;
      wp_reset_postdata();
    endif;
      ?>
      <div class="hero-content">
        <h1>What We Do</h1>
      </div>
        </div>
  </section>
  <section>
    <div class="container">
      <h2>Private Events</h2>
      <p>Our interactive, custom and hilarious shows are the perfect fit for any audience. Fast, funny and tailored to the crowd, Atomic Improv is always a hit.
      </p>
      <p>
        You're not just watching the show … you're a part of it!
      </p>
      <div class="center-container">
        <a href="contact-us" class="button-style">Book Now</a>
      </div>
    </div><!-- container -->
  </section>
  <section class="power-of-yes" id="power-of-yes">
    <div class="container">
      <h2>Power of Yes</h2>
      <iframe src="https://www.youtube.com/embed/WLpsNkCDZMA" title="Power of Yes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <!-- info -->
      <p>At <span class="pos">Power of Yes!</span>, we believe in the transformative power of improv. Our workshop
        is designed to unlock your team's full potential. </p>
      <p>Starting with simple exercises, participants will collaborate in teams, building trust and camaraderie as
        they
        navigate through challenges together.</p>
      <p>But that's just the beginning. As the workshop progresses, we move onto games and activities that will push
        your creativity and communication skills to new heights! From quick thinking to active listening, every
        moment
        is an opportunity to shine.</p>
      <p>Whether you have a team of 10 or an audience of 1,000, our workshop adapts to fit your needs. Choose from a
        hands-on session for intimate teams or turn it into an interactive and entertaining keynote address for a
        larger
        crowd.</p>
      <div class="center-container">
        <a href="contact-us" class="button-style">Book Now</a>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2>More Options</h2>
      <!-- <li>Think of us for </li> -->
      <p>Professional MCs for corporate, conference, and special events!</p>
      <p>Special package pricing when booking multiple services!</p>
      <div class="center-container">
        <a href="contact-us" class="button-style">Book Now</a>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();
