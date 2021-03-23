<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package byk_themetitle
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="entry-content">
    <?php
    // the_content();
    ?>
    <div class="top-cover alignfull has-background-dim">
      <div class="splide splidehead numbered">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/HomepageSlide_1.jpg" alt="">
            </li>
            <li class="splide__slide">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/HomepageSlide_2.jpg" alt="">
            </li>
            <li class="splide__slide">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/HomepageSlide_3.jpg" alt="">
            </li>
          </ul>
        </div>
      </div>






      <script>
        var slideCount = 3;
        var startingSlide = 0;
        if (sessionStorage.getItem("slideCounter") !== null) {
          var cookieVal = parseInt(sessionStorage.getItem("slideCounter"));
          startingSlide = parseInt(cookieVal) + 1;

          sessionStorage.setItem("slideCounter", startingSlide);
        } else {
          var startingSlide = Math.floor((Math.random() * slideCount));
          console.log("Slide #: " + startingSlide);
          sessionStorage.setItem("slideCounter", startingSlide);
        }

        console.log("Slide #: " + startingSlide);
        var slideIndex = startingSlide % 3;
        var slideHead = new Splide('.splidehead', {
          type: 'fade',
          cover: true,
          autoplay: true,
          interval: 6000,
          pagination: false,
          arrows: false,
          speed: 750,
          pauseOnHover: false,
          pauseOnFocus: false,
          rewind: true,
          start: slideIndex
        }).mount();
      </script>
      <div class="wrapper">



        <!--<p class="has-text-align-center sub-header">Debt Sales Simplified</p>-->
        <h2 class="has-text-align-center">The Complete Debt Sale Platform</h2>



        <p class="has-text-align-center">Technology Platform | Bustling Network | Industry Experts</p>



        <div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>



        <div class="wp-block-buttons aligncenter">
          <div class="wp-block-button dark-green large"><a href="#modal-schedule" href="#" class="wp-block-button__link schedule-trigger">Get Started</a></div>



          <div class="wp-block-button light-green large"><a href="#solutions" class="wp-block-button__link">Learn
              More</a></div>
        </div>



        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
      </div>
    </div>
    <!-- CTA BAR -->
    <div class="cta-bar full-width">
      <div class="wrapper">
        <p>Understand how DebtTrader works in 2 minutes. <a id="video-trigger" href="#modal-video" class="button white">Watch Video <span style="font-size:200%;line-height: 0;
position: relative;
top: 0.2em;">&#8227;</span></a>
      </div>
    </div>
    <!-- /CTA BAR -->
    <!-- ICON BAR -->
    <div class="logo-bar">
      <div class="wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aca.png" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lenditfintech.png" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lend360.png" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/money2020.png" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rmai.png" />

      </div>
    </div>
    <!-- /ICON BAR -->

    <div id="solutions" class="section center-text">
      <div class="wrapper">
        <?php get_template_part('icons/icon1'); ?>
        <h2><strong>Our Solutions, Tailored for You.</strong></h2>
        <p>Full-Service Debt Sale Advisor | Complete Debt Sale Platform</p>
      </div>
    </div>

    <!-- 3COL -->
    <div class="section center-text">
      <div class="wrapper col3">
        <div>
          <div class="icon-wrap">
            <?php get_template_part('icons/icon2'); ?>
          </div>
          <h3>Get the Complete Sale <br>&amp; Post-Sale Platform</h3>
          <p>Our proprietary, state-of-the-art loan sale management platform provides you with a complete toolkit to
            sell your portfolios compliantly and manage post-sale comprehensively.</p>
        </div>
        <div>
          <div class="icon-wrap">
            <?php get_template_part('icons/icon3'); ?>
          </div>
          <h3>Access the Largest Certified Buyer Network</h3>
          <p>Nowhere has more pre-vetted buyers ready to bid for your loans. Our certification ensures every buyer is
            licensed and meets data compliance requirements to review.</p>
        </div>
        <div>
          <div class="icon-wrap">
            <?php get_template_part('icons/icon4'); ?>
          </div>
          <h3>Partner with Experienced Loan Sale &amp; Compliance Advisors</h3>
          <p>Highly skilled professionals develop strategy and facilitate the entire process including portfolio review
            and analysis, marketing, due-diligence, and closing.</p>
        </div>
      </div>
    </div>
    <!-- /3COL -->
    <div class="section center-text push">
      <a id="schedule-trigger" href="#modal-schedule" href="#" class="button light-green large schedule-trigger">Schedule A Call to Learn More</a>
    </div>
    <div id="sellers" class="section center-text buy-sell alt-colors">
      <h3 class="h2"><strong>How Selling Works</strong></h3>
      <a href="#buyers" class="button buy-sell large">Buyers</a>
      <a href="#sellers" class="button buy-sell-active large">Sellers</a>

      <div class="splide splide01 numbered">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <?php get_template_part('icons/chess'); ?>
              <h3>Develop a Strategy</h3>
              <p>DebtTrader&rsquo;s team of experts partner with you to develop a tailored strategy for your portfolio
                sales and post-closing oversight. From analytics and valuation, to portfolio marketing, pre-sale due
                diligence and post-sale compliance, our experienced professionals have you covered.</p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/folder'); ?>
              <h3>Load &amp; List Your Portfolios</h3>
              <p>Securely upload your portfolio to the DebtTrader platform using either a standardized API or a
                pre-mapped custom template. To protect you and your customers, all Personal Identifiable Information
                (PII) is automatically masked by our platform at upload. Next, our platform flags critical errors and
                warnings making file clean up a snap. Once your review is complete, use DebtTrader’s portfolio scrub
                tool to remove ineligible accounts. A process that takes minutes and saves countless post-sale hours.
                After being scrubbed, your portfolio file is ready for auction!</p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/megaphone'); ?>
              <h3>Market Your Portfolio</h3>
              <p>Once you hit list, DebtTrader markets your masked portfolio to the largest pre-vetted certified, buyer
                network in North America. PII data is never unmasked for bidding purposes. Buyers that meet your
                customizable criteria securely log in and review your portfolio offering. After review, interested
                buyers can complete a deal packet, underwrite, determine their best price, and place bids.</p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/choose-binary'); ?>
              <h3>Review Buyers &amp; Bids</h3>
              <p>Choosing the right buyer is more than simply accepting the highest price. Compliance is a vital part of
                the bid selection process. The second the auction closes, DebtTrader gives you everything you need to
                choose the right buyer for your portfolio. On our platform, you can review buyer's bids, terms of
                agreement, buyer/agency complaint ratio, buyer/agency complaint trends, and even download a complete
                due-diligence packet, all in real-time.</p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/conversation'); ?>
              <h3>Negotiate Terms &amp; Execute Closing</h3>
              <p>After selecting a buyer, electronically negotiate and execute portfolio sale agreements. Once
                agreements are mutually executed, seamlessly receive funding from the buyer directly into your account.
                You can confirm funds and release the sale file securely all on the DebtTrader platform.</p>
              <a class="buy-sell-cta button large">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/choose-list'); ?>
              <h3>Post-Sale Management</h3>
              <p>Our support doesn’t end at funding, DebtTrader is with you for the life of the account. Whether you're
                submitting a buy back request, consumer complaint for investigation, responding to a media request,
                reviewing chain of title, or reviewing agency placement, the DebtTrader platform gives you unparalleled
                real-time control and oversight.
              </p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <h2 class="whitehead">See a Demo of the DebtTrader Platform</h2>
              <h3>We will walk you through how our professional services and technology combine to give you everything
                you need to liquidate your non-performing accounts routinely with confidence.
              </h3>
              <a class="buy-sell-cta button large schedule-trigger">Schedule a Call</a>
            </li>


          </ul>
        </div>
      </div>
      <script>
        var slideOne = new Splide('.splide01').mount();
      </script>
    </div>


    <div id="buyers" class="section buy-sell center-text">
      <h3 class="h2"><strong>How Buying Works</strong></h3>
      <a href="#buyers" class="button buy-sell-active large">Buyers</a>
      <a href="#sellers" class="button buy-sell large">Sellers</a>

      <div class="splide splide02 numbered">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <?php get_template_part('icons/certified'); ?>
              <h3>Get DebtTrader Certified </h3>
              <p>Access to ready for bid loan portfolios starts with becoming a certified member of the DebtTrader Buyer
                Network. Annual certification helps you get loan files quicker by simplifying the seller's due diligence
                process. Certification includes a review of your licenses and certificates of authority, complaint and
                legal history,
                insurance coverage, background checks, physical and data security, and standard operating policies and
                procedures. Once certified, you can log in to the DebtTrader platform, and find the right deal for you.
              </p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/computer'); ?>
              <h3>Browse a Huge Selection</h3>
              <p>Using DebtTrader's advanced filtering tools, you can set alerts to be notified when the right deal is
                listed, ensuring you quickly and easily identify portfolios that meet your investment criteria and even
                compare them to other portfolios.</p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/spyglass'); ?>
              <h3>Review Deal Packet</h3>
              <p>You can review electronically and/or download hard copies of the deal packet which include: a masked
                data file, loan contracts, pay histories, and seller surveys. In addition, you can review portfolio
                valuation analysis from major national scoring companies.</p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/dollars'); ?>
              <h3>Make a Bid</h3>
              <p>Submitting your bid has never been simpler or more secure. Once you have reviewed the portfolio sale
                packet, log in to DebtTrader, select the portfolio and submit your competitive bid as a one-time
                purchase or for a forward flow commitment and upload your redlined purchase and sale agreement for
                review by the seller.</p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/check'); ?>
              <h3>Close the Sale</h3>
              <p>When a final offer has been accepted, you can review and negotiate contract terms and execute the sale
                agreement electronically. Once the agreement is mutually executed, you fund the seller directly and
                download your purchased portfolio securely.</p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <?php get_template_part('icons/click'); ?>
              <h3>Post-Sale Management</h3>
              <p>Post-sale management is key to a successful purchase. With DebtTrader's transaction management system,
                you can communicate with sellers regarding information requests, putbacks and even respond to consumer
                complaints 100% online.</p>
              <a class="buy-sell-cta button large schedule-trigger">Book a Demo</a>
            </li>
            <li class="splide__slide">
              <h2 class="whitehead">Start Buying Debt<br> with DebtTrader Today</h2>
              <h3>Join our certified buyer network and gain access to the largest marketplace of debt portfolios ready
                for bid directly from the issuer.</h3>
              <a class="buy-sell-cta button large schedule-trigger">Schedule a Call</a>
            </li>


          </ul>
        </div>
      </div>
      <script>
        var slideTwo = new Splide('.splide02').mount();
      </script>
    </div>

    <div class="section bg-image center-text">
      <h3 class="dark-green h2"><strong>Data Security</strong></h3>

      <h2>Built for the future<br>of trade <strong>innovation</strong></h2>
      <p>Our infrastructure is ruggedly built, so you can rest assured that all your data is safe and secure.
      </p>
      <div class="splide splidealt">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="wrapper narrow">

                <?php get_template_part('icons/soc2-type2'); ?>
                <h3>SOC2 Type2 Compliant</h3>
                <p>DebtTrader is SOC2 Type 2 certified by Coalfire. We help secure manage your data, protecting the
                  interests of your organization and the privacy of your customers.</p>

              </div>
            </li>
            <li class="splide__slide">
              <div class="wrapper narrow">

                <?php get_template_part('icons/data-encryption'); ?>
                <h3>Data Encryption</h3>
                <p>Any data handled by DebtTrader is encrypted in-transit and at-rest using the latest encryption
                  protocols.</p>


              </div>
            </li>
            <li class="splide__slide">
              <div class="wrapper narrow">

                <?php get_template_part('icons/data-masking'); ?>
                <h3>Data Masking</h3>
                <p>Masking personally Identifiable Information about consumers data protects them against unintentional
                  disclosure to external and internal users.</p>


              </div>
            </li>
            <li class="splide__slide">
              <div class="wrapper narrow">

                <?php get_template_part('icons/data-collection-erasure'); ?>
                <h3>Data Collection and Data Erasure</h3>
                <p>DebtTrader data collection practices are limited to the data necessary to successfully manage a sale.
                  Post&#8209;sale, DebtTrader only retains non&#8209;personally identifiable data.</p>


              </div>
            </li>
            <li class="splide__slide">
              <div class="wrapper narrow">

                <?php get_template_part('icons/data-resilience'); ?>
                <h3>Data Resilience</h3>
                <p>Encrypted backups are created daily allowing DebtTrader to recover data in the event of an
                  unforeseen&nbsp;loss.</p>


              </div>
            </li>
            <li class="splide__slide">
              <div class="wrapper narrow">

                <?php get_template_part('icons/data-classification'); ?>
                <h3>Data Classification</h3>
                <p>All data collected and stored by DebtTrader is classified and controlled to ensure that it is not
                  improperly disclosed, modified, deleted, or rendered unavailable.</p>


              </div>
            </li>
            <li class="splide__slide">
              <div class="wrapper narrow">

                <?php get_template_part('icons/least-priv-policies'); ?>
                <h3>Least Privilege Policies</h3>
                <p>DebtTrader adheres to minimum access and clean desk policies to ensure that data is only viewed based
                  on business needs or job responsibilities.</p>

              </div>



          </ul>
        </div>
      </div>
      <script>
        new Splide('.splidealt').mount();
      </script>
    </div>


    <div class="section">
      <div class="wrapper narrow center-text">
        <h2 class="light-green">Ready to Get Started?</h2>
        <p>Join the many who have achieved their debt selling and buying goals with DebtTrader.</p>
        <a href="#" class="button light-green large wide schedule-trigger">Schedule a Call</a>
        <p>or</p>
        <?php gravity_form(1, false, false, false, '', true); ?>
      </div>
    </div>

  </div>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->



<!--DEMO01-->
<div id="modal-video">
  <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
  <div class="close-modal-video">
    X <span>CLOSE</span>
  </div>

  <div class="modal-content">
    <h2 class="h1">How DebtTrader Works</h2>
    <div class="video-wrap">

      <div class="seller-wrap">

        <video id="video-seller" class="video-reveal" controls="true">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/dt-seller.mp4" type="video/mp4">

          Your browser does not support HTML5 video.
        </video>
        <h3>Seller</h3>
      </div>
      <div class="buyer-wrap">

        <video id="video-buyer" class="video-reveal" controls="true">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/dt-buyer.mp4" type="video/mp4">

          Your browser does not support HTML5 video.
        </video>
        <h3>Buyer</h3>
      </div>
    </div>
  </div>
</div>

<!--DEMO01-->
<div id="modal-schedule">
  <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
  <div class="close-modal-schedule">
    X <span>CLOSE</span>
  </div>

  <div class="modal-content">
    <h2>Pick a Date and Time that Suits You</h2>
    <iframe src="https://calendly.com/danieljamesgreen74/60min?embed_domain=www.debttrader.com&amp;embed_type=Inline&amp;hide_event_type_details=1&amp;primary_color=00c4b3" width="100%" height="100%" frameborder="0"></iframe>


  </div>
</div>
</div>




<script>

</script>