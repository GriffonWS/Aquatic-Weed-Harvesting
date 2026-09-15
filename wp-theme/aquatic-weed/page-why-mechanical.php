<?php
/**
 * Template Name: Why mechanical
 *
 * Renders for the Page with slug "why-mechanical"; awh_create_pages() creates it.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="phero on-dark">
  <div class="wrap phero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>Why mechanical</b></p>
    <h1 class="phero__title">Don’t sink the problem.<br><em>Remove</em> it.</h1>
    <p class="phero__lead">Chemical treatment controls the symptoms, not the cause of the nuisance plant problem. Herbicides are a short-term remedy to a longer-term problem. Mechanical harvesting allows for precision weed removal and prevents the build-up of biomass and muck.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">+1 (518) 441-7742</a>
    </div>
  </div>
</section>

<!-- ============ MECHANICAL VS CHEMICAL ============ -->
<section class="section section--why on-dark" id="why">
  <div class="wrap">
    <div class="compare">
      <article class="cmp cmp--bad reveal">
        <h3 class="cmp__head"><span class="cmp__mark" aria-hidden="true">✕</span> Spraying herbicides</h3>
        <ul class="cmp__list">
          <li>Doesn't remove the plant — it sinks it. The weed dies off and drops to the bottom.</li>
          <li>That dead biomass becomes muck, which fuels more weed growth next season.</li>
          <li>Eurasian watermilfoil can spread through surviving plant fragments. Any removal method
          must carefully collect loose fragments to reduce the risk of further spread.</li>
          <li>Limits use of the water for a period of time after treatment.</li>
          <li>Introduces chemicals, like glyphosate, into ecosystems where fish, birds, pets and
          people recreate.</li>
          <li>Disrupts aquatic and wildlife habitats.</li>
        </ul>
      </article>

      <article class="cmp cmp--good reveal">
        <h3 class="cmp__head"><span class="cmp__mark" aria-hidden="true">✓</span> Mechanical harvesting</h3>
        <ul class="cmp__list">
          <li>Pulls the problem out by the roots — we physically cut and remove roots, stems,
          fragments and, most importantly, the seeds.</li>
          <li>Prevents the build-up of biomass and muck instead of adding to it.</li>
          <li>We're not just trimming the weed — we're preventing its comeback.</li>
          <li>Immediate use of the waterway for swimming, fishing, boating and irrigation.</li>
          <li>100% chemical-free. No toxic runoff, no collateral damage, no downstream consequences.</li>
          <li>Precision removal that leaves the habitat intact.</li>
        </ul>
      </article>
    </div>

    <div class="factbar reveal">
      <div class="fact">
        <b class="fact__num stat__num" data-count="177">177</b>
        <span class="fact__label">plant species worldwide have developed resistance to herbicides</span>
      </div>
      <div class="fact">
        <b class="fact__num stat__num" data-count="70" data-suffix="+">70+</b>
        <span class="fact__label">of them in the United States, most in agricultural systems</span>
      </div>
      <div class="fact">
        <b class="fact__num stat__num" data-count="0">0</b>
        <span class="fact__label">chemicals introduced to your water by mechanical harvesting</span>
      </div>
    </div>

    <!-- The milfoil worked example, reduced to a headline and the photo. The
         prose that used to sit here (the second rack-card sheet) made the same three
         points as the ✕/✓ lists above — sinks rather than removes, muck feeds
         next season, fragments regenerate — so the block now lands the line and
         shows the plant instead of arguing it twice. -->
    <article class="spotlight reveal">
      <div class="spotlight__lede">
        <p class="spotlight__tag">Case in point</p>
        <h3 class="spotlight__h">Eurasian milfoil</h3>
        <p class="spotlight__kick">Spraying doesn't remove the plant.<br>It sinks it.</p>
        <p class="spotlight__note">Sprayed milfoil dies where it stands and settles into muck, and
        every fragment left behind can root again. We take the plant out of the water instead —
        roots, stems and seeds.</p>
      </div>
      <figure class="spotlight__media">
        <img src="<?php echo awh_img( 'weed-milfoil.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
          alt="Eurasian milfoil growing in a dense underwater stand, its tips breaking the surface.">
      </figure>
    </article>

    <figure class="pull reveal">
      <blockquote>
        <p>Would you spray <em>Roundup</em> on your front lawn and leave the weeds to rot into the
        soil? Or would you pull them out and haul them away?</p>
        <p class="pull__kick">The same principle applies underwater.</p>
      </blockquote>
      <figcaption>Don't sink the problem — remove it. Mechanical harvesting works where chemicals fail.</figcaption>
    </figure>
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
