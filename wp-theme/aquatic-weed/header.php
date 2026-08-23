<?php
/**
 * Head, navbar and mobile drawer.
 *
 * @package aquatic-weed
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
/*
 * Social / description tags are hard-coded here because no SEO plugin is
 * installed yet. When Yoast or Rank Math goes on for the SEO work, DELETE this
 * block — otherwise the page ships two of each tag.
 */
?>
<meta name="description" content="Eco-friendly preservation for lake &amp; pond weed maintenance. We mechanically cut, collect and haul away milfoil, water chestnut, hydrilla, lily pads and cattails — no chemicals. Based in the Hudson Valley, serving New York, New Jersey and Pennsylvania.">
<meta property="og:type" content="website">
<meta property="og:title" content="Got Lake Weeds? — Aquatic Weed Harvesting LLC">
<meta property="og:description" content="Eco-friendly preservation for lake &amp; pond weed maintenance. Mechanical harvesting, no chemicals. Based in the Hudson Valley, serving the Northeast.">
<meta property="og:image" content="<?php echo awh_img( 'hero-harvesting.jpg' ); ?>">
<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="theme-color" content="#0d221c">
<meta name="color-scheme" content="dark">

<?php // Only our own favicon if no Site Icon is set in Settings → General. ?>
<?php if ( ! has_site_icon() ) : ?>
<link rel="icon" type="image/png" href="<?php echo awh_img( 'logo-256.png' ); ?>">
<link rel="apple-touch-icon" href="<?php echo awh_img( 'logo-256.png' ); ?>">
<?php endif; ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip" href="#main"><?php esc_html_e( 'Skip to content', 'aquatic-weed' ); ?></a>

<!-- ============ NAV ============ -->
<header class="nav" id="nav">
  <div class="nav__inner">
    <a class="nav__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Aquatic Weed Harvesting home">
      <img src="<?php echo awh_img( 'Got_Lake_Weeds_Logo-removebg-preview.png' ); ?>" width="500" height="500"
           alt="Got Lake Weeds? — Aquatic Weed Harvesting LLC">
    </a>

    <nav class="nav__links" aria-label="Main">
      <a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo is_front_page() ? ' aria-current="page"' : ''; ?>>Home</a>
      <a class="nav__link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"<?php echo is_page( 'about' ) ? ' aria-current="page"' : ''; ?>>About</a>
      <a class="nav__link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"<?php echo is_page( 'services' ) ? ' aria-current="page"' : ''; ?>>Services</a>
      <a class="nav__link" href="<?php echo esc_url( home_url( '/why-mechanical/' ) ); ?>"<?php echo is_page( 'why-mechanical' ) ? ' aria-current="page"' : ''; ?>>Why mechanical</a>
      <a class="nav__link" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>"<?php echo is_page( 'how-it-works' ) ? ' aria-current="page"' : ''; ?>>How it works</a>
      <a class="nav__link" href="<?php echo esc_url( home_url( '/who-we-serve/' ) ); ?>"<?php echo is_page( 'who-we-serve' ) ? ' aria-current="page"' : ''; ?>>Who we serve</a>
      <a class="nav__link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"<?php echo is_page( 'resources' ) ? ' aria-current="page"' : ''; ?>>Resources</a>
      <a class="nav__link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"<?php echo is_page( 'contact' ) ? ' aria-current="page"' : ''; ?>>Contact</a>
    </nav>

    <div class="nav__actions">
      <a class="nav__phone" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span>(518) 441-7742</span>
      </a>
      <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/contact/#quote' ) ); ?>">Free Quote</a>
      <button class="nav__burger" id="burger" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<div class="drawer on-dark" id="drawer" hidden>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo is_front_page() ? ' aria-current="page"' : ''; ?>>Home</a>
  <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"<?php echo is_page( 'about' ) ? ' aria-current="page"' : ''; ?>>About</a>
  <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"<?php echo is_page( 'services' ) ? ' aria-current="page"' : ''; ?>>Services</a>
  <a href="<?php echo esc_url( home_url( '/why-mechanical/' ) ); ?>"<?php echo is_page( 'why-mechanical' ) ? ' aria-current="page"' : ''; ?>>Why mechanical</a>
  <a href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>"<?php echo is_page( 'how-it-works' ) ? ' aria-current="page"' : ''; ?>>How it works</a>
  <a href="<?php echo esc_url( home_url( '/who-we-serve/' ) ); ?>"<?php echo is_page( 'who-we-serve' ) ? ' aria-current="page"' : ''; ?>>Who we serve</a>
  <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"<?php echo is_page( 'resources' ) ? ' aria-current="page"' : ''; ?>>Resources</a>
  <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"<?php echo is_page( 'contact' ) ? ' aria-current="page"' : ''; ?>>Contact</a>
  <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/contact/#quote' ) ); ?>">Get a free quote</a>
  <a class="drawer__call" href="tel:+15184417742">(518) 441-7742</a>
</div>
