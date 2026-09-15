<?php
/**
 * Template Name: About
 *
 * Renders for the Page with slug "about"; awh_create_pages() creates it.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="phero on-dark">
  <div class="wrap phero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>About us</b></p>
    <h1 class="phero__title">A family business,<br>run off <em>one boat</em>.</h1>
    <p class="phero__lead">Aquatic Weed Harvesting LLC is a family-run operation based in Henning,
    Minnesota, working lakes, ponds and riverfronts across west-central Minnesota and the wider
    Upper Midwest.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">+1 (518) 441-7742</a>
    </div>
  </div>
</section>

<!-- ============ ABOUT ============ -->
<section class="section section--about on-dark" id="about">
  <div class="wrap about">
    <div class="about__copy reveal">
      <p class="lead">We do one thing. Not lawn care with a boat attached, not a chemical
      applicator that also owns a harvester — mechanical removal of aquatic vegetation and debris,
      and nothing else. That's the whole business, and it's why the equipment is built around the
      shallow, weedy, awkward water most operators won't take on.</p>

      <p class="about__p">It also means we have no herbicide licence to protect and no treatment
      contract to renew. When we look at your water, the honest answer is the only one we've got a
      reason to give you.</p>

      <ul class="values">
        <li class="value"><b>We remove it — we don't sink it.</b><span>Every plant we cut leaves the
        site. Nothing is left to rot on the bottom and feed next season.</span></li>
        <li class="value"><b>We tell you what's actually growing.</b><span>The plan for water chestnut
        is not the plan for lily pads. Identification comes before the quote.</span></li>
        <li class="value"><b>Harvesting is maintenance, not a miracle.</b><span>We'll give you the
        real cadence for your waterbody rather than promising one visit fixes it.</span></li>
        <li class="value"><b>Stewardship, not just tidying.</b><span>Pull the invasives and the water
        chemistry rebalances, oxygen rises, and the fish and frogs come back.</span></li>
      </ul>

      <figure class="shot shot--portrait">
        <img src="<?php echo awh_img( 'harvesters-sunset.jpg' ); ?>" width="1536" height="2048" loading="lazy" decoding="async"
             alt="Two harvesters moored at the dock at sunset, at the end of a day's work.">
      </figure>
    </div>

    <aside class="about__people reveal">
      <h3 class="about__peopleH">Who you'll be talking to</h3>

      <!-- One number for the business, so one card here. Roles inferred from the
           rack card — worth a one-line confirmation from the owners before launch. -->
      <a class="person" href="tel:+15184417742">
        <span class="person__ini" aria-hidden="true">T</span>
        <span class="person__txt">
          <b>Troy</b>
          <em>Estimates, scheduling and the man on the boat</em>
          <span class="person__num">+1 (518) 441-7742</span>
        </span>
      </a>

      <dl class="facts">
        <div><dt>Based in</dt><dd>Henning, MN — Otter Tail County, west-central Minnesota</dd></div>
        <!-- Three states, named rather than left as "the Upper Midwest", and
             matching the footer, contact and who-we-serve copy. Worth confirming
             with the owners before launch if they travel further than this. -->
        <div class="facts__row--wide"><dt>Working</dt>
          <dd>
            <ul class="states">
              <li class="state"><b>MN</b> Minnesota</li>
              <li class="state"><b>ND</b> North Dakota</li>
              <li class="state"><b>WI</b> Wisconsin</li>
            </ul>
          </dd>
        </div>
        <div><dt>Method</dt><dd>Mechanical harvesting only — no herbicides, ever</dd></div>
        <div><dt>Season</dt><dd>Spring through fall; book early for water chestnut</dd></div>
      </dl>
    </aside>
  </div>
</section>


<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free estimate</p>
      <h2 class="cta__h">Send us a photo of your water.</h2>
      <p class="cta__p">That's all we need to start. We'll tell you what's growing, what it takes to
      clear it and what it costs — no charge, no obligation.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>+1 (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Get a free quote <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
