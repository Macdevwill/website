<?php
include "header_inc.php";
?>
<!-- Hero -->
<section class="contact-hero">
  <div class="container">
    <div class="text-center py-2">
      <span class="badge bg-primary-subtle text-primary mb-3"> Contact Macwill ERP </span>
      <h1 class="display-4 fw-bold mb-4"> Let’s Connect With You </h1>
      <p class="lead text-muted mx-auto" style="max-width: 760px;"> Reach out to our team for demos, pricing, support, or partnership opportunities. </p>
    </div>
  </div>
  <div class="container py-4">
    <div class="row g-2">
      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="contact-form-card">
          <?php if(isset($_GET["req"]) && $_GET["req"]=="done") { ?>
              <h3 class="fw-bold mb-4">
                  Request Submitted!
              </h3>
              <p>
                Thank you! We've successfully received your details. 
                  Our team will review your request and contact you shortly.
              </p>
          <?php } elseif(isset($_GET["err"])) { ?>
              <h3 class="fw-bold mb-4">
                  Request Failed!
              </h3>
              <p style="color: red;"><?php echo $_GET["err"];?></p>
          <?php } else { ?>
          <h2 class="fw-bold mb-4"> Send Us a Message </h2>
          <form action="do_contact.php" method="post">
            <div class="d-flex gap-2">
              <div class="col-md-6 mb-3">
                <label class="form-label"> Full Name  <span class="required">*</span></label>
                <input type="text" name="full_name" class="form-control" placeholder="Enter your name">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label"> Email Address  <span class="required">*</span></label>
                <input type="email" name="email_id" class="form-control" placeholder="Enter your email">
              </div>
            </div>
            <div class="d-flex gap-2">
              <div class="col-md-6 mb-3">
                <label class="form-label"> Phone Number  <span class="required">*</span></label>
                <input type="tel" name="mobile_no" class="form-control" placeholder="Enter phone number">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label"> Message Type  <span class="required">*</span></label>
                <select class="form-control form-select" name="msg_type">
                    <option selected>
                        Select Type
                    </option>
                    <option>Complaint</option>
                    <option>Feedback</option>
                    <option>Normal Inquiry</option>
                    <option>Need Information</option>
                    <option>Other</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label"> Subject  <span class="required">*</span></label>
              <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="mb-3">
              <label class="form-label"> Message  <span class="required">*</span></label>
              <textarea class="form-control" name="message" rows="6" placeholder="Write your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary px-5"> Send Message </button>
          </form>
          <?php } ?>
        </div>
      </div>
      <!-- Contact Info -->
      <div class="col-lg-5">
        <div class="contact-info-card">
          <h4 class="fw-bold mb-4"> Contact Information </h4>
          <div class="contact-info-item">
            <div class="contact-icon">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div>
              <h5>Office Address</h5>
              <p> Macwill ERP Solutions, <br> Punjab, India </p>
            </div>
          </div>
          <div class="contact-info-item">
            <div class="contact-icon">
              <i class="bi bi-envelope"></i>
            </div>
            <div>
              <h5>Email</h5>
              <p> info@macwill.in </p>
            </div>
          </div>
          <div class="contact-info-item">
            <div class="contact-icon">
              <i class="bi bi-telephone"></i>
            </div>
            <div>
              <h5>Phone</h5>
              <p> +91 98765 43210 </p>
            </div>
          </div>
          <div class="contact-info-item">
            <div class="contact-icon">
              <i class="bi bi-clock"></i>
            </div>
            <div>
              <h5>Working Hours</h5>
              <p> Mon - Sat : 9:00 AM - 6:00 PM </p>
            </div>
          </div>
          <!-- Social -->
          <div class="mt-5">
            <h5 class="mb-2"> Follow Us </h5>
            <div class="social-links">
              <a href="#">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="#">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="#">
                <i class="bi bi-linkedin"></i>
              </a>
              <a href="#">
                <i class="bi bi-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Google Map -->
<section class="pb-5">
  <div class="container">
    <div class="map-section">
      <iframe src="https://maps.google.com/maps?q=Punjab%20India&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>
<!-- FAQ -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold"> Frequently Asked Questions </h2>
      <p class="text-muted"> Quick answers about Macwill ERP. </p>
    </div>
    <div class="accordion" id="contactFaq">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1"> Do you provide free demos? </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFaq">
          <div class="accordion-body"> Yes, we provide personalized live product demos. </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2"> Is Macwill ERP cloud-based? </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFaq">
          <div class="accordion-body"> Yes, Macwill ERP is fully cloud-based and secure. </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3"> Do you offer training? </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFaq">
          <div class="accordion-body"> Yes, onboarding and staff training are included. </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CTA -->
<section class="cta-section py-3">
  <div class="container text-center">
    <h2 class="fw-bold mb-3"> Ready to Modernize Your Institution? </h2>
    <p class="mb-4"> Start your digital transformation journey with Macwill ERP. </p>
    <a href="demo.php" class="btn btn-light btn-lg px-5" style="border: 1px solid #cccccc;"> Book Free Demo </a>
  </div>
</section> <?php
include "footer_inc.php";
?>