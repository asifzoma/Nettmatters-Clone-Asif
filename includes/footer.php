<?php
// Get current year for copyright
$current_year = date('Y');
?>

<footer>
    <div class="container">
        <div class="footer-row">
            <!-- Company Info (Logo, Follow Text, Social) -->
            <div class="footer-company-info">
                <!-- Logo Container -->
                <div class="footer-content-wrapper">
                    <div class="footer-logo-container">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.png" alt="Netmatters Logo"></a>
                        </div>
                    </div>
                    
                    <!-- Social Media Section -->
                    <div class="footer-social-section">
                        <!-- Follow Us Text -->
                        <div class="follow-us-text">FOLLOW US ON:</div>
                        
                        <!-- Social Media Icons -->
                        <div class="footer-company-socials-logos">
                            <a class="facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a class="linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a class="instagram" href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- About Menu -->
            <div class="footer-menu">
                <h4>About Netmatters</h4>
                <ul class="footer-menu-list">
                    <li><a href="#">News</a></li>
                    <li><a href="#">Our Careers</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Data Retention</a></li>
                    <li><a href="#">CCTV Policy</a></li>
                    <li><a href="#">Environmental Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Services Menu -->
            <div class="footer-menu">
                <h4>Our Services</h4>
                <ul class="footer-menu-list">
                    <li><a href="#">Bespoke Software</a></li>
                    <li><a href="#">IT Support</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Telecoms Services</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Cyber Security</a></li>
                    <li><a href="#">Developer Training</a></li>
                </ul>
            </div>

            <!-- Industries Menu -->
            <div class="footer-menu">
                <h4>Our Industries</h4>
                <ul class="footer-menu-list">
                    <li><a href="#">Financial Services</a></li>
                    <li><a href="#">Construction</a></li>
                    <li><a href="#">Retail & E-Commerce</a></li>
                    <li><a href="#">Non-Profits</a></li>
                    <li><a href="#">SME's</a></li>
                    <li><a href="#">Healthcare</a></li>
                    <li><a href="#">Education & Training</a></li>
                    <li><a href="#">Travel & Leisure</a></li>
                    <li><a href="#">Manufacturing & Offshore</a></li>
                </ul>
            </div>

            <!-- Locations Menu -->
            <div class="footer-menu">
                <h4>Locations</h4>
                <ul class="footer-menu-list">
                    <li><a href="#">Cambridge Office</a></li>
                    <li><a href="#">Wymondham Office</a></li>
                    <li><a href="#">Great Yarmouth Office</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Sticky Footer -->
<div class="container-sticky-footer">
    <div class="container">
        <div class="sticky-footer">
            <p>
                © Copyright Netmatters <?php echo $current_year; ?>. All rights reserved. - 
                <a href="#">Sitemap</a>
            </p>
        </div>
    </div>
</div>

<!-- Include JavaScript files -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/slick/slick.min.js"></script>
<script src="js/cookie-consent.js"></script>
<script src="js/main.js"></script>
</body>
</html> 