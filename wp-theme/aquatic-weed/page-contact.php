<?php
/**
 * Template Name: Contact
 *
 * Renders for the Page with slug "contact"; awh_create_pages() creates it.
 * Content mirrors the approved static contact.html.
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
    <h1 class="phero__title">Request an aquatic weed<br>removal <em>estimate</em></h1>
    <p class="phero__lead">Tell us about the weeds, muck, debris, or shoreline growth affecting your lake or pond. Based in the Hudson Valley, Aquatic Weed Harvesting LLC provides mechanical removal services throughout New York, New Jersey, and Pennsylvania.</p>
    <p class="phero__lead">Complete the form, email us, or call to discuss your waterbody. Photos can help us understand the conditions, but they are not required to begin the conversation. We will review the project details, recommend an appropriate removal approach, and provide a no-obligation estimate.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="#quote">Request an Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call +1 (518) 441-7742</a>
    </div>
  </div>
</section>

<!-- ============ WHERE WE WORK ============ -->
<section class="section" id="where">
  <div class="wrap boat">
    <div class="boat__copy reveal">
      <p class="eyebrow">Where We Work</p>
      <h2 class="h2">Serving New York, New Jersey, and Pennsylvania</h2>
      <p class="lead">Based in the Hudson Valley, we provide mechanical aquatic vegetation, muck,
      shoreline, and debris removal for qualifying projects across New York, New Jersey, and
      Pennsylvania.</p>
      <p class="lead">Contact us to confirm availability for your property or waterbody.</p>
    </div>
    <div class="reveal">
      <p class="where__label">We work with:</p>
      <ul class="svc__list svc__list--lg where__list">
        <li>Private waterfront owners</li>
        <li>Lake and homeowner associations</li>
        <li>Campgrounds and marinas</li>
        <li>Golf courses and resorts</li>
        <li>Municipalities and public agencies</li>
      </ul>
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
          <h3 class="mini__h">Before You Request an Estimate</h3>
          <ul class="mini__list">
            <li><b>Mechanical Removal.</b> Our services use mechanical equipment to cut, collect, lift,
            or remove aquatic vegetation, biomass, muck, and debris without applying herbicides.</li>
            <li><b>Realistic Maintenance.</b> Mechanical harvesting controls existing growth but does
            not guarantee permanent eradication. Regrowth and maintenance requirements vary by plant
            species, water conditions, and time of year.</li>
            <li><b>Seasonal Scheduling.</b> Early scheduling is recommended, especially for invasive
            species such as water chestnut, Eurasian watermilfoil, phragmites, and hydrilla.</li>
            <li><b>Permits and Approvals.</b> Permit requirements vary by state, waterbody, species, and
            project. Any necessary approvals should be confirmed before work begins.</li>
          </ul>
        </div>
      </div>
    </div>

    <form class="form reveal" id="quoteForm" novalidate>
      <div class="form__head">
        <p class="eyebrow">Estimate Request Form</p>
        <h2 class="form__h">Tell Us About Your Waterbody</h2>
        <p class="form__p">Provide as much information as you can about the affected area and how it is
        interfering with the property. If you do not know what is growing, select “Not sure.” Photos
        are optional but can help with the initial review.</p>
      </div>
      <div class="form__row">
        <label class="field">
          <span class="field__label">Name</span>
          <input class="field__input" type="text" name="name" required autocomplete="name" placeholder="Jane Doe">
          <span class="field__err"></span>
        </label>
        <label class="field">
          <span class="field__label">Primary phone number</span>
          <input class="field__input" type="tel" name="phone" required autocomplete="tel" placeholder="(518) 000-0000">
          <span class="field__err"></span>
        </label>
      </div>
      <div class="form__row">
        <label class="field">
          <span class="field__label">Email address</span>
          <input class="field__input" type="email" name="email" required autocomplete="email" placeholder="you@email.com">
          <span class="field__err"></span>
        </label>
        <label class="field">
          <span class="field__label">Property location</span>
          <input class="field__input" type="text" name="location" autocomplete="street-address" placeholder="Address, town, or lake name">
        </label>
      </div>
      <div class="form__row">
        <label class="field">
          <span class="field__label">Type of property</span>
          <select class="field__input" name="property">
            <option value="">Select…</option>
            <option>Private residence</option>
            <option>Lake or homeowner association</option>
            <option>Campground or marina</option>
            <option>Golf course or resort</option>
            <option>Municipality or public agency</option>
            <option>Other</option>
          </select>
        </label>
        <label class="field">
          <span class="field__label">Approximate affected area</span>
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
      <div class="form__row">
        <label class="field">
          <span class="field__label">What is growing?</span>
          <select class="field__input" name="weed">
            <option value="">Select…</option>
            <option>Eurasian watermilfoil</option>
            <option>Water chestnut</option>
            <option>Hydrilla</option>
            <option>Phragmites</option>
            <option>Lily pads</option>
            <option>Cattails</option>
            <option>Coontail</option>
            <option>Algae</option>
            <option>Leaves or floating debris</option>
            <option>Muck or organic sediment</option>
            <option>Not sure</option>
          </select>
        </label>
        <label class="field">
          <span class="field__label">Preferred service timeframe</span>
          <select class="field__input" name="timeframe">
            <option value="">Select…</option>
            <option>As soon as possible</option>
            <option>Within the next month</option>
            <option>Later this season</option>
            <option>Next season</option>
            <option>Flexible</option>
          </select>
        </label>
      </div>
      <label class="field">
        <span class="field__label">Photos (optional)</span>
        <input class="field__input field__input--file" type="file" name="photos" accept="image/*" multiple>
      </label>
      <label class="field">
        <span class="field__label">Additional project details</span>
        <textarea class="field__input" name="notes" rows="3" placeholder="Docks, access notes, how the growth is affecting the property…"></textarea>
      </label>
      <button class="btn btn--primary btn--lg btn--block" type="submit">Request a Free Estimate</button>
      <p class="form__ok" id="formOk" hidden>Thanks — that's through. Troy will be in touch shortly.</p>
    </form>
  </div>
</section>

<!-- ============ CONTACT ============ -->
<section class="section section--contact on-dark" id="contact">
  <div class="wrap">
    <div class="section__head section__head--center reveal">
      <p class="eyebrow">Discuss Your Waterbody Directly</p>
      <h2 class="h2">Prefer to Talk Through the Project?</h2>
      <p class="lead">Call or email us to discuss the vegetation, debris, or sediment affecting your
      property. If we are working on the water and cannot answer, leave your name, phone number, and
      property location. We will return your call as soon as possible.</p>
    </div>

    <div class="contact">
      <a class="ccard reveal" href="tel:+15184417742">
        <span class="ccard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        </span>
        <span class="ccard__k">Estimates &amp; scheduling</span>
        <b class="ccard__v">(518) 441-7742</b>
      </a>

      <a class="ccard reveal" href="mailto:jim@wedowaterweeds.com">
        <span class="ccard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M3 6h18v12H3z"/><path d="M3 7l9 6 9-6"/></svg>
        </span>
        <span class="ccard__k">Email</span>
        <b class="ccard__v ccard__v--mail">jim@wedowaterweeds.com</b>
        <span class="ccard__m">Include photos of the affected area when available.</span>
      </a>

      <div class="ccard ccard--static reveal">
        <span class="ccard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M12 21s7-5.5 7-11a7 7 0 10-14 0c0 5.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.6"/></svg>
        </span>
        <span class="ccard__k">Service area</span>
        <b class="ccard__v ccard__v--addr">Based in the Hudson Valley</b>
        <span class="ccard__m">Serving New York, New Jersey, and Pennsylvania</span>
      </div>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
