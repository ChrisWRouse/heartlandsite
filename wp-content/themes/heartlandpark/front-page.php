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

<section class="hero">      
            <div class="hero-content-container">
                <div class="hero-content">
                     <!--<img src="img/logo/heartland-motorsports-park-logo.svg" class="align-item-center" alt="Heartland Motorsports Park Logo" width="350" height="150">-->
                    <h1 class="header-text white-text">The <span>Fastest </span> Track In the World</h1>
                    <p class="body-text white-text">Christopher Brent Wood, better known by his stage name Brent Faiyaz, is an American singer and record producer.  He released his debut project, an extended play entitled A.M. Paradox in 2016.</p>
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
                    <h1 class="header-text ">The Fastest Track In The World</h1>
                    <p class="body-text">Faiyaz began uploading his music onto SoundCloud in 2014 and moved from his hometown Columbia, Maryland to Charlotte, North Carolina before ultimately settling in Los Angeles, California to further his music career.  On January 19, 2015, he released his debut single “Allure”.[4] On June 1, 2016.  Faiyaz released “Invite Me”, the lead single from his upcoming debut EP.  On September 19, 2016, his 21st birthday, the EP entitled A.M. Paradox was released and received with positive reviews from music critics.  On January 26, 2017, Sonder released their debut EP Into.</p>
                    <a href="#"><button class="cta-button"><p class="button-text">Learn More</p></button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="new-releases">
    <div class="new-releases-container">
        <div class="new-releases-description">
            <h1 class="header-text">New Releases</h1>
            <p class="body-text new-releases-text">New albums every month, check out the newest &amp best from Snyder Recording artist, now available on Apple Music &amp Spotify.</p>
        </div>
        <div class="cards">

            <div class="new-releases-card">
                <div class="album-art"><img src="img/bryson-tiller-trapsoul.jpg" alt=""></div>
                <div class="album-info">
                    <h1 class="header-two-text">Trapsoul</h1>
                    <h2 class="header-three-text">BRYSON TILLER</h2>
                    <p class="body-text">
                        Bryson Djuan Tiller, is a an American singer, songwriter, and rapper. Born in Louisville, Kentucky, he started his career in 2011, releasing the debut mixtape titled Killer Instinct Vol.1
                    </p>
                </div>
            </div>

            <div class="new-releases-card">
                <div class="album-art"><img src="img/bryson-tiller-trapsoul.jpg" alt=""></div>
                <div class="album-info">
                    <h1 class="header-two-text">Trapsoul</h1>
                    <h2 class="header-three-text">BRYSON TILLER</h2>
                    <p class="body-text">
                        Bryson Djuan Tiller, is a an American singer, songwriter, and rapper. Born in Louisville, Kentucky, he started his career in 2011, releasing the debut mixtape titled Killer Instinct Vol.1
                    </p>
                </div>
            </div>

            <div class="new-releases-card">
                <div class="album-art"><img src="img/bryson-tiller-trapsoul.jpg" alt=""></div>
                <div class="album-info">
                    <h1 class="header-two-text">Trapsoul</h1>
                    <h2 class="header-three-text">BRYSON TILLER</h2>
                    <p class="body-text">
                        Bryson Djuan Tiller, is a an American singer, songwriter, and rapper. Born in Louisville, Kentucky, he started his career in 2011, releasing the debut mixtape titled Killer Instinct Vol.1
                    </p>
                </div>
            </div>
        </div>

        <div class="carousel-buttons">
            
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
            <h1 class="header-text">Get In Touch</h1>
            <p class="body-text">New albums every single month, check out the newest &amp best from Snyder Recording artist, now available on Apple music & Spotify. 
</p>
            <form action="signup.php" method="post" class="contact-form">
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="email" name="email" placeholder="Email Address">
                <div class="custom-select">
                    <select name="reason">
                        <option disabled selected>Reason For Contacting</option>
                        <option>Book An Artist</option>
                        <option>Fan Club Info</option>
                        <option>Media Request</option>
                        <option>Order Issue</option>
                        <option>Submit Music</option>
                    </select>
                </div>
                <textarea placeholder="Write a brief message" draggable="false"></textarea>
                <a href="#"><button class="cta-button">Send Message</button></a>
            </form>
        </div>
    </div>
</section>

<?php get_footer()?>


    
