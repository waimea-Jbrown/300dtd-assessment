<?php
    $sites = [
        'coffee' => [
            'title'   => 'Coffee Express',
            'heading' => '<strong>Coffee</strong> Express',
            'tagline' => 'Sourcing, roasting and serving <strong>coffees that we love</strong>',
            'intro'   => '<h2>Pleasure</h2>
                          <p>Coffee is about pleasure. It\'s that moment when your hand is warmed by the mug, you raise it to your nose, inhale deeply and then take a sip.
                          <h2>Tasting</h2>
                          <p>While you are holding that cup of coffee, close your eyes. Open your mouth slightly. Breathe in deeply through your nose. You are smelling the most complex thing humans consume.'
        ],
        'flowers' => [
            'title'   => 'Richmond Flowers',
            'heading' => 'Richmond <strong>Flowers</strong>',
            'tagline' => 'Quality, first grade flowers <strong>for your every need</strong>',
            'intro'   => '<h2>Who We Are</h2>
                          <p>Richmond Flowers is a top Florist located in the heart of the CBD. We are known for our outstanding customer service, our creativity in floral design and the flawless quality, value and beauty of our flowers.
                          <p>Browse our online range of flower bouquets and gifts available for same day delivery throughout the region. Our flowers are sourced from the finest growers in New Zealand, providing world-class, high quality, first grade flowers - guaranteed.'
        ],
        'donuts' => [
            'title'   => 'Dynamite Donuts',
            'heading' => 'Dynamite <strong>Donuts</strong>',
            'tagline' => 'Delicious donuts, made by hand <strong>with a whole lot of love!</strong>',
            'intro'   => '<h2>You\'ll Love Our Donuts!</h2>
                          <p>We put our heart and soul into creating delicious donuts, made the old-school way, by hand and with a whole lot of love! Made fresh daily so you get to enjoy that real homemade taste and texture. 
                          <p>We are proud that our donuts satisfy the cravings of donut lovers throughout New Zealand and across the world. Dynamite Donuts really are the best you\'ll taste. Come and sink your teeth into one today!'
        ],
        'motor' => [
            'title'   => 'Tasman &amp; Nelson Motorsports',
            'heading' => 'Tasman &amp; Nelson <strong>Motorsports</strong>',
            'tagline' => '<strong>Driven by passion</strong> for service and quality',
            'intro'   => '<h2>Passion</h2>
                          <p>It is our vision to lead the local powersports market by delivering an exceptional level of service to our customers before, during and after every purchase.
                          <h2>Quality</h2>
                          <p>We pride ourselves on providing quality products and excellent service. We are passionate about our industry and proud to be part of it.'
        ]
    ];

    $menu = ['Offers', 'Gallery', 'Contact'];

    // Get site if set, default to 'coffee' otherwise
    $site = 'coffee';
    if( isset( $_GET['site'] ) && !empty( $_GET['site'] ) ) {
        if( array_key_exists( $_GET['site'], $sites ) ) {
            $site = $_GET['site'];
        }
    }

    $title   = $sites[$site]['title'];
    $heading = $sites[$site]['heading'];
    $tagline = $sites[$site]['tagline'];
    $intro   = $sites[$site]['intro'];
    $email   = 'info@'.strtolower( str_replace( ' ', '', $title ) ).'.co.nz';


    //-------------------------------------------------------------------------------------
?>


<!doctype html>

<html lang="en">

    <head>
        <title>Design Demo - <?= $title ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/<?= $site ?>.css">
    </head>

    <body id="<?= $site ?>">
        <div id="switcher">
            <p>Site</p>
            <ul>
<?php
    foreach( $sites as $name => $details ) {
        echo '<li><a href="?site='.$name.'">'.$details['title'].'</a></li>';
    }
?>
            </ul>
        </div>

        <header id="mainheader">
            <h1><?= $heading ?></h1>

            <nav id="mainnav">
                <ul>
                    <li><a href="#top">Top</a></li>
<?php
    foreach( $menu as $item ) {
        echo '<li><a href="#'.strtolower( $item ).'">'.$item.'</a></li>';
    }
?>
                </ul>
            </nav>
        </header>


        <main>
            <section id="title">
                <h1><?= $tagline ?></h1>

                <img id="hero" src="images/<?= $site ?>/hero.png" alt="Picture of <?= $site ?>">
            </section>


            <section id="intro">
                <img id="aside" src="images/<?= $site ?>/aside.png" alt="Picture of <?= $site ?>">

                <div id="info">
                    <?= $intro ?>
                </div>
            </section>


            <section id="offers">
                <h2>Never miss out on one of our special offers</h2>
                <p>Send us your email address and we'll send you some great special offers

                <form>
                    <input type="text">
                    <input type="submit" value="Sign Up">
                </form>
            </section>


            <section id="gallery">
<?php
    $images = glob( 'images/'.$site.'/gallery/*.jpeg' );

    foreach( $images as $image ) {
        echo '<img src="'.$image.'" alt="Picture of '.$site.'">';
    }
?>
            </section>


            <section id="contact">
                <div id="times">
                    <h2>Visit Us</h2>
                    <p>Opening hours:</p>
                        
                    <h3>Monday</h3>    <p>07:00 - 19:00</p>
                    <h3>Tuesday</h3>   <p>07:00 - 19:00</p>
                    <h3>Wednesday</h3> <p>07:00 - 19:00</p>
                    <h3>Thursday</h3>  <p>07:00 - 19:00</p>
                    <h3>Friday</h3>    <p>07:00 - 19:00</p>
                    <h3>Saturday</h3>  <p>09:00 - 21:00</p>
                    <h3>Sunday</h3>    <p>10:00 - 14:00</p>
                </div>
                
                <div id="conform">
                    <h2>Get in Touch</h2>
                    <p>Email us at <a href="mailto:<?= $email ?>"><?= $email ?></a>
                    <p>Or complete the form below...
                    
                    <form>
                        <label>Your Name</label> <input type="text">
                        <label>Your Email</label> <input type="email">
                        <label>Your Message</label> <textarea rows="10"></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </section>
        </main>

        <footer id="mainfooter">
            <section id="social">
                <p>Follow us on social media</p>
                
                <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" width="512" height="512">
                    <path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"></path>
                    <path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"></path>
                    <circle cx="351.5" cy="160.5" r="21.5"></circle>
                </svg>
                
                <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" width="512" height="512">
                    <path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"></path>
                </svg>
                
                <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" width="512" height="512">
                    <path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"></path>
                </svg>
            </section>

            <p>&copy; <?= date( 'Y' ) ?> <?= $title ?></p>
        </footer>
    </body>
</html>
        