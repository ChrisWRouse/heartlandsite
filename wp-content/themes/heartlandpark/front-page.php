<?php
    /**
     * The front page template file
     *
     * If the user has selected a static page for their homepage, this is what will
     * appear.
     * Learn more: https://codex.wordpress.org/Template_Hierarchy
     *
     * @package WordPress
     * @subpackage Hearland_Park
     * @since 1.0
     * @version 1.0
     */

    get_header(); 
?>

<div id="fb-root"></div>
<script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=1625468864407552&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
            
            }(document, 'script', 'facebook-jssdk'));
</script>

<section class="hero">      
            <div class="hero-content-container">
                <div class="hero-content">
                     <!--<img src="img/logo/heartland-motorsports-park-logo.svg" class="align-item-center" alt="Heartland Motorsports Park Logo" width="350" height="150">-->
                    <h1 class="header-text white-text"><?php echo get_theme_mod("showcase_heading");?></h1>
                    <p class="body-text white-text"><?php echo get_theme_mod("showcase_text");?></p>
                    <a href="#" class="no-decoration"><button class="cta-button"><p class="button-text">Sign Up</p></button></a>
                </div>   
                <div class="video-container">
                    
                    <div class="overlay"></div>
                    <video class="headerVid" width="" height="" autoplay loop>
                        <source src="<?php bloginfo('template_url');?>/assets/video/heartland2.mp4" type="video/mp4">
                        <!--<source src="movie.ogg" type="video/ogg">--> 
                        Your browser does not support the video tag.
                    </video>                   
                </div>
            </div>  
              
</section> 
<section class="artist-info">
    <div class="container">
        <div class="flex-container artist-info-container justify-content-sb">
            <div class="artist-image-wrap">
                
            </div>
            <div class="artist-content-wrap">
                <div class="artist-bio-container">
                <?php
 
                // The Query
                $query1 = new WP_Query( array( 'category_name' => 'latest-news' ) );
                
                // The Loop
                while ( $query1->have_posts() ) {
                    $query1->the_post();
                    echo '<h2>' . get_the_title() . '</h2>';
                    echo '<p>' . get_the_excerpt() . '</p>';
                }
                
                /* Restore original Post Data 
                * NB: Because we are using new WP_Query we aren't stomping on the 
                * original $wp_query and it does not need to be reset with 
                * wp_reset_query(). We just need to set the post data back up with
                * wp_reset_postdata().
                */
                wp_reset_postdata();
                
                ?>
                    
                    
                    <a href="#"><button class="cta-button"><p class="button-text">Learn More</p></button></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="facebook-feed">
<div id="facebook-wrapper" class="facebook-wrapper">
<script>
    
    function facebookResize() {
        var facebookhtml = "<div class='fb-page' data-href='https://www.facebook.com/HeartlandMotorsportsPark/' data-tabs='timeline, events' data-small-header='false' data-adapt-container-width='true' data-hide-cover='true' data-show-facepile='false' data-width='500'><blockquote cite='https://www.facebook.com/HeartlandMotorsportsPark/' class='fb-xfbml-parse-ignore'><a href='https://www.facebook.com/HeartlandMotorsportsPark/'>Heartland Motorsports Park</a></blockquote></div>";
        //document.getElementById('facebook-wrapper').innerHTML= facebookhtml; 
        window.addEventListener('resize', function() {
            setTimeout(function() {
                document.getElementById('facebook-wrapper').innerHTML= facebookhtml; 
                FB.XFBML.parse();   
            }, 500);
        });

        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('facebook-wrapper').innerHTML= facebookhtml; 
                FB.XFBML.parse();   
            }, 500);
        });
    }

    facebookResize(); 

</script>
<div class="facebook-wrapper">    
    
</div>
</section>

<section class="new-releases">
    <div class="new-releases-container">
        <div class="new-releases-description">
            <h1 class="header-text">Our Sponsors</h1>
            <p class="body-text new-releases-text">A big thank you to sponsors and associates of Heartland Motorsports Park!</p>
        </div>
        <div class="cards">
            <?php echo do_shortcode('[maxgallery id="110"]')?>
        </div>
    
    </div>
</section>
<section class="google-map">
    <div id="map" class="google-map">
        
    </div>
</section>
<section class="contact">
    <div class="contact-container">
        <div class="form-container">
            <h1 class="header-text">Stay In The Loop</h1>
            <p class="body-text">Sign up to get the latest news and updates from Heartland Motorsports Park!</p>
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="https://heartlandpark.us17.list-manage.com/subscribe/post?u=f1bdd7dd429d0767ba95ccd77&amp;id=ee5efcc4ce" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
            <div class="mc-field-group">
                <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
            </label>
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
            </div>
            <div class="mc-field-group">
                <label for="mce-FNAME">First Name </label>
                <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
            </div>
            <div class="mc-field-group">
                <label for="mce-LNAME">Last Name </label>
                <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
            </div>
            <div class="mc-field-group size1of2">
                <label for="mce-BIRTHDAY-month">Birthday </label>
                <div class="datefield">
                    <span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> / 
                    <span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
                    <span class="small-meta nowrap">( mm / dd )</span>
                </div>
            </div>	<div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f1bdd7dd429d0767ba95ccd77_ee5efcc4ce" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button cta-button"></div>
                </div>
            </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
        </div>
    </div>
</section>

<?php get_footer()?>


    
