<!-- Breadcrumb -->
<div class="breadcrumb-container">
    <div class="container">
        <nav class="breadcrumb">
            <a href="index.php">Home</a> / <span>Our Offices</span>
        </nav>
    </div>
</div>

<!-- Our Offices Section -->
<section class="offices-section">
    <div class="container">
        <h1 class="offices-heading">Our Offices</h1>
        <div class="offices-grid">
            <!-- Cambridge Office -->
            <div class="offices-item">
                <img src="img/offices/cambridge.jpg" alt="Cambridge Office" class="office-img" />
                <div class="office-description">
                    <h2>Cambridge Office</h2>
                    <address>
                        Unit 1.31,<br>
                        St John's Innovation Centre,<br>
                        Cowley Road, Milton,<br>
                        Cambridge,<br>
                        CB4 0WS
                    </address>
                    <p class="office-phone">01223 37 57 72</p>
                    <a href="#" class="btn office-btn">VIEW MORE</a>
                </div>
            </div>
            <!-- Wymondham Office -->
            <div class="offices-item">
                <img src="img/offices/wymondham.jpg" alt="Wymondham Office" class="office-img" />
                <div class="office-description">
                    <h2>Wymondham Office</h2>
                    <address>
                        Unit 15,<br>
                        Penfold Drive,<br>
                        Gateway 11 Business Park,<br>
                        Wymondham, Norfolk,<br>
                        NR18 0WZ
                    </address>
                    <p class="office-phone">01603 70 40 20</p>
                    <a href="#" class="btn office-btn">VIEW MORE</a>
                </div>
            </div>
            <!-- Great Yarmouth Office -->
            <div class="offices-item">
                <img src="img/offices/yarmouth-2.jpg" alt="Great Yarmouth Office" class="office-img" />
                <div class="office-description">
                    <h2>Great Yarmouth Office</h2>
                    <address>
                        Suite F23,<br>
                        Beacon Innovation Centre,<br>
                        Beacon Park, Gorleston,<br>
                        Great Yarmouth, Norfolk,<br>
                        NR31 7RA
                    </address>
                    <p class="office-phone">01493 60 32 04</p>
                    <a href="#" class="btn office-btn">VIEW MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Form and Details Section -->
<section class="contact-details-section">
  <div class="container contact-details-grid">
    <!-- Contact Form -->
    <div class="contact-form-container">
      <form class="contact-form" action="process_contact.php" method="POST" autocomplete="off">
        <div class="form-row">
          <div class="form-group">
            <label for="name">Your Name *</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="company">Company Name</label>
            <input type="text" id="company" name="company">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="email">Your Email *</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="telephone">Your Telephone Number *</label>
            <input type="tel" id="telephone" name="telephone" required>
          </div>
        </div>
        <div class="form-group">
          <label for="message">Message *</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="form-group checkbox-group">
          <input type="checkbox" id="marketing" name="marketing" required>
          <label for="marketing">
            Please tick this box if you wish to receive marketing information from us.<br>
            Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.
          </label>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn contact-btn">SEND ENQUIRY</button>
          <span class="fields-required">* Fields Required</span>
        </div>
        <p class="recaptcha-note">
          This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.
        </p>
      </form>
    </div>
    <!-- Contact Details -->
    <div class="contact-info-side">
      <p><strong>Email us on:</strong></p>
      <p class="contact-highlight"><a href="mailto:sales@netmatters.com">sales@netmatters.com</a></p>
      <p><strong>Speak to Sales on:</strong></p>
      <p class="contact-highlight"><a href="tel:01603515007">01603 515007</a></p>
      <p><strong>Business hours</strong></p>
      <p>Monday – Friday 07:00 – 18:00</p>
      <p><strong>Out of Hours IT Support</strong></p>
      <!-- Add more details as needed -->
    </div>
  </div>
</section> 