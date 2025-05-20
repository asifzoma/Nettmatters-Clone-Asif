<?php
// Define services data
$services = [
    'software' => [
        'icon' => 'fa-desktop',
        'title' => 'Bespoke Software',
        'description' => 'Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.',
        'link' => '#',
        'color' => 'software'
    ],
    'it-support' => [
        'icon' => 'fa-display',
        'title' => 'IT Support',
        'description' => 'Remotely managed IT services that is catered to your businesses needs, adds value and reduces costs.',
        'link' => '#',
        'color' => 'it-support'
    ],
    'digital-marketing' => [
        'icon' => 'fa-chart-simple',
        'title' => 'Digital Marketing',
        'description' => 'Driving brand awareness and ROI through creative digital marketing campaigns. We get you the results that grow.',
        'link' => '#',
        'color' => 'digital-marketing'
    ],
    'telecoms' => [
        'icon' => 'fa-phone',
        'title' => 'Telecoms Services',
        'description' => 'A new approach to connectivity, see how we can help your business stay in touch with streamlined communications solutions.',
        'link' => '#',
        'color' => 'telecoms-service'
    ],
    'web-design' => [
        'icon' => 'fa-code',
        'title' => 'Web Design',
        'description' => 'User-centric design for businesses looking to make a lasting first impression. For brands that need a purpose.',
        'link' => '#',
        'color' => 'web-design'
    ],
    'cyber-security' => [
        'icon' => 'fa-shield-halved',
        'title' => 'Cyber Security',
        'description' => 'Ensuring your online business stays secure 24/7, 365 days of the year, with our innovative cyber security solutions.',
        'link' => '#',
        'color' => 'cyber-security'
    ],
    'developer-training' => [
        'icon' => 'fa-graduation-cap',
        'title' => 'Developer Training',
        'description' => 'Have you considered a career in web development but you aren\'t sure where to start?',
        'link' => '#',
        'color' => 'developer-training'
    ]
];
?>

<!-- Banner Section -->
<div class="banner-outer-container">
    <div class="banner-background banner-background-1">
        <div class="banner">
                    <h1>Bespoke Software</h1>
                    <p>Delivering expert bespoke software solutions across a range of industries.</p>
            <div class="banner-btn-container">
                <a href="#" class="btn btn-primary-banner1">Find Out More <i class="fa-solid fa-arrow-right banner-btn-arrow"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section class="our-services">
    <div class="container">
        <div class="our-services-top">
            <h1>Our Services</h1>
            <a href="#" class="view-our-work">View Our Work <i class="fa-solid fa-arrow-right our-services-icon-arrow-right"></i></a>
        </div>
        <div class="service-list">
            <?php 
            // First 3 services in service-container
            $count = 0;
            foreach ($services as $key => $service): 
                if ($count < 3): ?>
                <div class="service-container">
                    <div class="service <?php echo $service['color']; ?>">
                        <span><i class="fa-solid <?php echo $service['icon']; ?>"></i></span>
                        <h2><?php echo $service['title']; ?></h2>
                        <p><?php echo $service['description']; ?></p>
                        <a href="<?php echo $service['link']; ?>" class="read-more">Read More</a>
                    </div>
                </div>
                <?php 
                else: ?>
                <div class="service-container-small service-small-<?php echo $count - 2; ?>">
                    <div class="service <?php echo $service['color']; ?>">
                        <span><i class="fa-solid <?php echo $service['icon']; ?>"></i></span>
                <h2><?php echo $service['title']; ?></h2>
                <p><?php echo $service['description']; ?></p>
                        <a href="<?php echo $service['link']; ?>" class="read-more">Read More</a>
                    </div>
                </div>
                <?php 
                endif;
                $count++;
            endforeach; ?>
        </div>
        <div class="our-services-bottom">
            <a href="#" class="view-our-work">View Our Work <i class="fa-solid fa-arrow-right our-services-icon-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- Partners Section -->
<div class="partners slick-slider">
    <div class="partner-item">
        <img src="img/partners/google-partner.jpeg" alt="Google Partner">
    </div>
    <div class="partner-item">
        <img src="img/partners/ashcroftlogo_landscape_goldblack_DP60P-small.png" alt="Investing in Future Growth">
    </div>
    <div class="partner-item"> 
        <img src="img/partners/cyber-essentials-colour.jpeg" alt="Cyber Essentials">
    </div>
    <div class="partner-item">
        <img src="img/partners/norfolk_prohelp.png" alt="Norfolk ProHelp">
    </div>
    <div class="partner-item">
        <img src="img/partners/crane_logo.png" alt="Crane Logo">
    </div>
    <div class="partner-item">
        <img src="img/partners/norfolk-carbon-charter.jpeg" alt="Norfolk Carbon Charter">
    </div>
    <div class="partner-item">
        <img src="img/partners/busseys_logo.png" alt="Busseys Logo">
    </div>
    <div class="partner-item">
        <img src="img/partners/PPC_logo.jpeg" alt="PPC">
    </div>
    <div class="partner-item">
        <img src="img/partners/princess-royal-training.png" alt="Princess Royal Training">
    </div>
    <div class="partner-item">
        <img src="img/partners/girls_day_school_trust_logob.png" alt="Girls Day School Trust">
    </div>
    <div class="partner-item">
        <img src="img/partners/survey_solutions_logo.png" alt="Survey Solutions">
    </div>
    <div class="partner-item">
        <img src="img/partners/skills-of-tomorrow.jpeg" alt="Skills of Tomorrow">
    </div>
    <div class="view-all-mobile-container">
        <div class="view-all-mobile">
            <h3><a href="#">View All <span class="icon-arrow-right2"></span></a></h3>
        </div>
    </div>
</div>

<!-- Welcome Section -->
<section class="welcome-container">
    <div class="container">
        <div class="about-row">
            <!-- About Section -->
            <div class="about">
                <h2 class="about-title">Welcome To Netmatters</h2>
                <p>Netmatters is a leading <a href="#">Bespoke Software</a>, <a href="#">IT Support</a>, and <a href="#">Digital Marketing</a> company based in the East of England with offices in <a href="#">Cambridge</a>, <a href="#">Wymondham</a>, and <a href="#">Great Yarmouth</a>.</p>
                <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.</p>
                <p>We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.</p>
                <div class="welcome-section-btn-container">
                    <div class="welcome-btn-container">
                        <a href="#" class="btn-primary-inverse">WHY CHOOSE US? <i class="fa-solid fa-arrow-right welcome-arrow"></i></a>
                    </div>
                    <div class="welcome-btn-container">
                        <a href="#" class="btn-primary-inverse">OUR CULTURE <i class="fa-solid fa-arrow-right welcome-arrow"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Client Testimonials Section -->
            <div class="what-our-clients-think">
                <h2 class="about-title">What Our Clients Think</h2>
                <div class="star-rating">
                    <i class="fa-solid fa-star welcome-star"></i>
                    <i class="fa-solid fa-star welcome-star"></i>
                    <i class="fa-solid fa-star welcome-star"></i>
                    <i class="fa-solid fa-star welcome-star"></i>
                    <i class="fa-solid fa-star welcome-star"></i>
                </div>
                <p class="customer-quote">Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</p>
                <p class="customer-quote-author">Eleanor Bishop, Head of Marketing - Ashcroft Partnership LLP</p>
                <div class="welcome-section-btn-container-2">
                    <div class="google-btn-container">
                        <a href="#" class="btn-review btn-google">
                            <span class="btn-text">GOOGLE REVIEWS</span>
                            <span class="arrow-container"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                    <div class="trustpilot-btn-container">
                        <a href="#" class="btn-review btn-trustpilot">
                            <span class="btn-text">TRUSTPILOT REVIEWS</span>
                            <span class="arrow-container"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News Section -->
<section class="latest-news">
    <div class="container">
        <div class="container-latest-news-top">
            <h2>Latest <strong>News</strong></h2>
            <h3><a href="#">View All</a></h3>
        </div>
        <div class="news-list">
            <div class="news-article">
                <div class="article">
                    <div class="article-img-container">
                        <a href="#" class="article-img-btn art-btn-1">Business</a>
                        <div class="article-img">
                            <img src="img/news/news-1.jpg" alt="News Article 1">
                        </div>
                    </div>
                    <div class="article-block">
                        <a href="#">
                            <h3 class="h3-1">What's the difference between Microsoft 365 Business Premium and Microsoft 365 Business Standard?</h3>
                        </a>
                        <p>Microsoft 365 Business Premium and Microsoft 365 Business Standard are both subscription-based services that provide access to Microsoft's productivity tools and services. However, there are some key differences between the two plans...</p>
                        <a href="#" class="btn btn-bus-dev">Read More</a>
                        <div class="user">
                            <div class="user-img">
                                <img src="img/team/team-1.jpg" alt="Team Member">
                            </div>
                            <div class="article-date">
                                <strong>Posted by John Smith</strong><br>
                                15th March 2024
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-article">
                <div class="article">
                    <div class="article-img-container">
                        <a href="#" class="article-img-btn art-btn-2">Digital</a>
                        <div class="article-img">
                            <img src="img/news/news-2.jpg" alt="News Article 2">
                        </div>
                    </div>
                    <div class="article-block">
                        <a href="#">
                            <h3 class="h3-2">The Benefits of Cloud Computing for Small Businesses</h3>
                        </a>
                        <p>Cloud computing has revolutionized the way businesses operate, offering numerous advantages for small businesses looking to streamline their operations and reduce costs...</p>
                        <a href="#" class="btn btn-digital">Read More</a>
                        <div class="user">
                            <div class="user-img">
                                <img src="img/team/team-2.jpg" alt="Team Member">
                            </div>
                            <div class="article-date">
                                <strong>Posted by Jane Doe</strong><br>
                                10th March 2024
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-article">
                <div class="article">
                    <div class="article-img-container">
                        <a href="#" class="article-img-btn art-btn-3">Web Design</a>
                        <div class="article-img">
                            <img src="img/news/news-3.jpg" alt="News Article 3">
                        </div>
                    </div>
                    <div class="article-block">
                        <a href="#">
                            <h3 class="h3-3">The Importance of Responsive Web Design in 2024</h3>
                        </a>
                        <p>With the increasing use of mobile devices, responsive web design has become more important than ever. Learn why your website needs to be mobile-friendly and how it can impact your business...</p>
                        <a href="#" class="btn btn-web">Read More</a>
                        <div class="user">
                            <div class="user-img">
                                <img src="img/team/team-3.jpg" alt="Team Member">
                            </div>
                            <div class="article-date">
                                <strong>Posted by Mike Johnson</strong><br>
                                5th March 2024
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<!-- Case Studies Banner -->
<section class="case-studies-banner">
    <div class="container">
        <h2>Accreditations</h2>
        <p>We are accredited by a number of organisations and are committed to providing the best possible service to our customers.</p>
        <a href="#" class="btn-case-studies">View Our Work <i class="fa-solid fa-arrow-right case-study-btn-arrow"></i></a>
    </div>
</section>

<!-- Case Studies Section -->
<div class="case-studies slick-slider">
    <div class="case-study-item item-1">
        <div class="case-study-description-1">
            <div class="case-study-tooltip-1">
                <h3>Black Swan Care Group</h3>
                <p>
                    Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.
                </p>
                <a class="btn case-study-button-1" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
            </div>
            <span class="triangle-case-study-1"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/black_swan_logo.webp" alt="Black Swan Logo">
        </div>
    </div>
    <div class="case-study-item item-2">
        <div class="case-study-description-2">
            <div class="case-study-tooltip-2">
                <h3>Xupes</h3>
            </div>
            <span class="triangle-case-study-2"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/xupes_logo.webp" alt="Xupes Logo">
        </div>
    </div>
    <div class="case-study-item item-3">
        <div class="case-study-description-3">
            <div class="case-study-tooltip-3">
                <h3>Beat</h3>
                <p>
                    The UK's eating disorder charity founded in 1989.
                </p>
            </div>
            <span class="triangle-case-study-3"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/beat_logo.webp" alt="Beat Logo">
        </div>
    </div>
    <div class="case-study-item item-4">
        <div class="case-study-description-4">
            <div class="case-study-tooltip-4">
                <h3>Survey Solutions</h3>
            </div>
            <span class="triangle-case-study-4"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/survey_solutions_logo.webp" alt="Survey Solutions Logo">
        </div>
    </div>
    <div class="case-study-item item-5">
        <div class="case-study-description-5">
            <div class="case-study-tooltip-5">
                <h3>Girl Guiding Anglia</h3>
                <p>
                    Girl Guiding Anglia is part of Girlguiding, the UK's Leading charity for girls and young women in the UK.
                </p>
                <a class="btn case-study-button-5" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
            </div>
            <span class="triangle-case-study-5"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/girl_guides_anglia_logo.webp" alt="Girl Guides Anglia Logo">
        </div>
    </div>
    <div class="case-study-item item-6">
        <div class="case-study-description-6">
            <div class="case-study-tooltip-6">
                <h3>Sweetzy</h3>
                <p>
                    Sweetzy are an online sweets retailer, based in Wymondham
                </p>
                <a class="btn case-study-button-6" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
            </div>
            <span class="triangle-case-study-6"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/sweetzy_logo.webp" alt="Sweetzy Logo">
        </div>
    </div>
    <div class="case-study-item item-7">
        <div class="case-study-description-7">
            <div class="case-study-tooltip-7">
                <h3>Howes Percival</h3>
            </div>
            <span class="triangle-case-study-7"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/howespercivallogo.webp" alt="Howes Percival Logo">
        </div>
    </div>
    <div class="case-study-item item-8">
        <div class="case-study-description-8">
            <div class="case-study-tooltip-8">
                <h3>GDST</h3>
                <p>
                    The <a href="#">Girls' Day School Trust (GDST)</a> is the UK's leading family of 25 independent girls' schools.
                </p>
                <a class="btn case-study-button-8" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
            </div>
            <span class="triangle-case-study-8"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/girls_day_school_trust_logob.webp" alt="Girls Day School Trust Logo">
        </div>
    </div>
    <div class="case-study-item item-9">
        <div class="case-study-description-9">
            <div class="case-study-tooltip-9">
                <h3>Ashcroft Partnership LLP</h3>
                <p>
                    Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.
                </p>
                <a class="btn case-study-button-9" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
            </div>
            <span class="triangle-case-study-9"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/ashcroftlogo_landscape_goldblack_DP60P-small.webp" alt="Ashcroft Logo">
        </div>
    </div>
    <div class="case-study-item item-10">
        <div class="case-study-description-10">
            <div class="case-study-tooltip-10">
                <h3>One Traveller</h3>
                <p>
                    <a href="#" target="_blank">One Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50's
                </p>
                <a class="btn case-study-button-10" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
            </div>
            <span class="triangle-case-study-10"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/onetravellerlogo_white_figuire.webp" alt="One Traveller Logo">
        </div>
    </div>
    <div class="case-study-item item-11">
        <div class="case-study-description-11">
            <div class="case-study-tooltip-11">
                <h3>Searles Leisure Resort</h3>
                <p>
                    Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.
                </p>
                <a class="btn case-study-button-11" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
            </div>
            <span class="triangle-case-study-11"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/searles_logo.webp" alt="Searles Logo">
        </div>
    </div>
    <div class="case-study-item item-12">
        <div class="case-study-description-12">
            <div class="case-study-tooltip-12">
                <h3>Busseys</h3>
                <p>
                    One of the UK's leading Ford dealerships.
                </p>
            </div>
            <span class="triangle-case-study-12"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/busseys_logo.webp" alt="Busseys Logo">
        </div>
    </div>
    <div class="case-study-item item-13">
        <div class="case-study-description-13">
            <div class="case-study-tooltip-13">
                <h3>Crane Garden Buildings</h3>
                <p>
                    Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.
                </p>
            </div>
            <span class="triangle-case-study-13"></span>
        </div>
        <div class="case-study-image-container">
            <img src="img/case-studies/crane_logo.webp" alt="Crane Logo">
        </div>
    </div>
</div>

<div class="view-all-mobile-container">
    <div class="view-all-mobile">
        <h3><a href="#">View All <span class="icon-arrow-right2"></span></a></h3>
    </div>
</div> 