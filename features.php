<?php
include "header_inc.php";
?>

  <section class="features-hero py-4">
    <div class="container">

      <!-- Hero -->
      <div class="row align-items-center mb-5 g-4">
        <div class="col-md-6 col-lg-6">
          <h1 class="hero-title">
            Manage operations with <span>confidence</span>
          </h1>

          <p class="hero-text">
            Macwill ERP helps organizations streamline workflows,
            ensure compliance, and make smarter decisions every day.
          </p>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="hero-card">
            <img src="images/erp_features.jpg" style="border-radius: 24px;">
          </div>
        </div>
      </div>

      <!-- Feature Cards -->
      <div class="row align-items-center mb-3">

<?php for($i=0; $i<20; $i++) { ?>
<!-- Card -->
 <div class="col-md-6 col-lg-6 mb-3">
    <div class="card">
    <div class="card-header">
        <div class="icon-box"><i class="bi bi-truck"></i></div>
        <h4 class="card-title">Special title treatment</h4>
    </div>
    <div class="card-body">
        
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

    </div>
    <div class="card-footer d-flex" style="justify-content: center;">
        <a href="#">
            Learn more <i class="bi bi-arrow-right"></i>
        </a>
    </div>
    </div>
</div>
<?php } ?>

      </div>


        <!-- CTA Card -->
        <div class="col-lg mt-5">
          <div class="cta-card">
            <div class="cta-icon">
              <i class="bi bi-rocket-takeoff"></i>
            </div>

            <div class="cta-content">
              <h3>Ready to streamline your operations?</h3>

              <p>
                Join thousands of organizations using Macwill ERP to work smarter,
                safer and more efficiently.
              </p>

              <div class="cta-actions">
                <a href="demo.php" class="btn btn-sm btn-primary">
                  Schedule a Demo
                </a>

                <span>
                  or call
                  <a href="tel:+918146652452">+91-81466-52452</a>
                </span>
              </div>
            </div>
          </div>
        </div>

    </div>
  </section>

<?php
include "footer_inc.php";
?>