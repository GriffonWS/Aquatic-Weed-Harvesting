<?php
/**
 * Template Name: Contact
 *
 * Renders for the Page with slug "contact"; awh_create_pages() creates it.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="phero on-dark">
  <div class="wrap phero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>Contact us</b></p>
    <h1 class="phero__title">Send us a photo<br>of your <em>water</em>.</h1>
    <p class="phero__lead">That’s all we need to start. Fill in the form and Troy gets back to you, or skip the form and call — no answering service, just the people who run the company.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">+1 (518) 441-7742</a>
    </div>
  </div>
</section>

<!-- ============ QUOTE ============ -->
<section class="section section--quote" id="quote">
  <div class="wrap quote-wrap">
    <div class="quote-copy reveal">
      <a class="quote-call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>+1 (518) 441-7742</b></span>
      </a>
      <a class="quote-mail" href="mailto:jim@wedowaterweeds.com">jim@wedowaterweeds.com</a>

      <div class="minis">
        <div class="mini">
          <h3 class="mini__h">Where we work</h3>
          <p class="mini__p">Based in west-central Minnesota, working throughout the Upper Midwest — Minnesota,
          North Dakota and Wisconsin. Private ponds, lake associations, campgrounds, golf courses
          and municipal waterbodies. Ask us about your waterway wherever it is.</p>
        </div>
        <div class="mini">
          <h3 class="mini__h">Before you call</h3>
          <ul class="mini__list">
            <li><b>No herbicides, ever.</b> Everything is mechanical, so there's no waiting period
            before you can swim or fish.</li>
            <li><b>Harvesting is maintenance, not eradication.</b> Some regrowth is normal — most
            clients settle into once or twice a season.</li>
            <li><b>Book early.</b> Water chestnut has to come out before it drops seed, and the
            calendar fills from spring on.</li>
            <li><b>Permits vary</b> by waterbody and species. We'll tell you where you stand before
            we quote.</li>
          </ul>
        </div>
      </div>
    </div>

    <form class="form reveal" id="quoteForm" novalidate>
      <div class="form__row">
        <label class="field">
          <span class="field__label">Name</span>
          <input class="field__input" type="text" name="name" required autocomplete="name" placeholder="Jane Doe">
          <span class="field__err"></span>
        </label>
        <label class="field">
          <span class="field__label">Phone</span>
          <input class="field__input" type="tel" name="phone" required autocomplete="tel" placeholder="(518) 000-0000">
          <span class="field__err"></span>
        </label>
      </div>
      <label class="field">
        <span class="field__label">Email</span>
        <input class="field__input" type="email" name="email" required autocomplete="email" placeholder="you@email.com">
        <span class="field__err"></span>
      </label>
      <div class="form__row">
        <label class="field">
          <span class="field__label">Lake or pond</span>
          <input class="field__input" type="text" name="water" placeholder="e.g. Copake Lake">
        </label>
        <label class="field">
          <span class="field__label">Rough area</span>
          <select class="field__input" name="area">
            <option value="">Select…</option>
            <option>Under 100 ft of shoreline</option>
            <option>100–300 ft of shoreline</option>
            <option>300 ft – 1 acre</option>
            <option>Over an acre</option>
            <option>Not sure</option>
          </select>
        </label>
      </div>
      <fieldset class="chips">
        <legend class="field__label">What's growing? (pick any)</legend>
        <label class="chip"><input type="checkbox" name="weed[]" value="Milfoil"><span>Milfoil</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Water chestnut"><span>Water chestnut</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Hydrilla"><span>Hydrilla</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Lily pads"><span>Lily pads</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Cattails"><span>Cattails</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Coontail"><span>Coontail</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Algae"><span>Algae</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="No idea"><span>No idea</span></label>
      </fieldset>
      <label class="field">
        <span class="field__label">Anything else</span>
        <textarea class="field__input" name="notes" rows="3" placeholder="Dock in the way, access notes, when you'd like it done…"></textarea>
      </label>
      <?php // Honeypot — hidden from people, filled in by bots. ?>
      <div class="hp" aria-hidden="true">
        <label>Website<input type="text" name="awh_url" tabindex="-1" autocomplete="off"></label>
      </div>

      <button class="btn btn--primary btn--lg btn--block" type="submit">Send my request</button>
      <p class="form__ok" id="formOk" hidden>Thanks — that's through. Troy will be in touch shortly.</p>
    </form>
  </div>
</section>

<!-- ============ CONTACT ============
     The form above is the main route in; this is the "I'd rather just call
     someone" block, split by who picks up for what. -->
<section class="section section--contact on-dark" id="contact">
  <div class="wrap">
    <div class="section__head section__head--center reveal">
      <p class="eyebrow">Contact us</p>
      <h2 class="h2">Or just pick up<br>the phone.</h2>
      <p class="lead">No answering service and no call centre — one number, answered by the people who
      run the company. If we're on the water, leave a message and you'll get a call back the same day.</p>
    </div>

    <div class="contact">
      <a class="ccard reveal" href="tel:+15184417742">
        <span class="ccard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        </span>
        <span class="ccard__k">Estimates &amp; scheduling</span>
        <b class="ccard__v">+1 (518) 441-7742</b>
        <span class="ccard__m">Troy</span>
      </a>

      <a class="ccard reveal" href="mailto:jim@wedowaterweeds.com">
        <span class="ccard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M3 6h18v12H3z"/><path d="M3 7l9 6 9-6"/></svg>
        </span>
        <span class="ccard__k">Email — send photos here</span>
        <b class="ccard__v ccard__v--mail">jim@wedowaterweeds.com</b>
        <span class="ccard__m">Photos of the water help most</span>
      </a>

      <div class="ccard ccard--static reveal">
        <span class="ccard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M12 21s7-5.5 7-11a7 7 0 10-14 0c0 5.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.6"/></svg>
        </span>
        <span class="ccard__k">Mail &amp; service area</span>
        <b class="ccard__v ccard__v--addr">49398 Leaf River Loop<br>Henning, MN 56551</b>
        <span class="ccard__m">Serving MN, ND &amp; WI</span>
      </div>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
