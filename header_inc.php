<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Macwill ERP — Choose Your Path: School or College</title>
<meta name="description" content="Compare top schools and colleges across India. Smart filters, reviews, scholarships and counseling — all in one ERP." />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./css/style1.css">
<link rel="stylesheet" href="./css/why.css">
<link rel="stylesheet" href="./css/features.css">
<link rel="stylesheet" href="./css/testimonials.css">
</head>
<body>
<div class="layout">
  <div class="scrim" id="scrim"></div>
  <aside class="sidebar" id="sidebar">
    <div class="brand mb-3">
      <!--<div class="brand-logo">M</div>
      <div>
        <div class="brand-name">MACWILL</div>
        <div class="brand-sub">ERP Software</div>
      </div>-->
      <img src="images/erp-logo.png">
    </div>
<?php
$active1 = "";
$active2 = "";
$active3 = "";
$active4 = "";
$active5 = "";
$active6 = "";
$active7 = "";

$file = basename($_SERVER['SCRIPT_NAME']);
$file = pathinfo($file, PATHINFO_FILENAME); //file name without extension

if($file=='index') {
  $active1 = "active";
} elseif($file=='why-us') {
  $active2 = "active";
} elseif($file=='features') {
  $active3 = "active";
} elseif($file=='pricing') {
  $active4 = "active";
} elseif($file=='blogs') {
  $active5 = "active";
} elseif($file=='contact') {
  $active6 = "active";
} elseif($file=='demo') {
  $active7 = "active";
}
?>
    <nav class="nav mb-5" style="flex-direction: column;">
      <a href="index.php" class="<?=$active1;?>"><i class="bi bi-house-door"></i> Home</a>
      <a href="why-us.php" class="<?=$active2;?>"><i class="bi bi-patch-question"></i> Why Us?</a>
      <a href="features.php" class="<?=$active3;?>"><i class="bi bi-list-check"></i> Features</a>
      <a href="pricing.php" class="<?=$active4;?>"><i class="bi bi-currency-rupee"></i> Pricing</a>
      <!--<a href="blogs.php" class="<?=$active5;?>"><i class="bi bi-file-earmark-richtext"></i> Blogs</a>-->
      <a href="contact.php" class="<?=$active6;?>"><i class="bi bi-postcard"></i> Contact Us</a>
      <a href="demo.php" class="<?=$active7;?>"><i class="bi bi-credit-card"></i> Online Demo</a>
    </nav>

    <div class="help">
      <div class="help-row">
        <div class="help-icon"><i class="bi bi-headset" style="font-size: 1.8rem;"></i></div>
        <div><div class="help-title">Need Help?</div><div class="help-sub">Talk to our experts</div></div>
      </div>
      <a class="help-btn" href="demo.php">Book a Free Session</a>
    </div>

    <div class="contact">
      <h4>Sales query</h4>
      <div class="row"><i class="bi bi-telephone" style="width: 28px;"></i> +91 - 81466 - 52452</div>
      <div class="row"><i class="bi bi-telephone" style="width: 28px;"></i> +91 - 94639 - 40920</div>
      <a class="row link" href="mailto:sales@macwill.in"><i class="bi bi-envelope" style="width: 28px;"></i> sales@macwill.in</a>
      <h4>Support Contact</h4>
      <div class="row"><i class="bi bi-telephone" style="width: 28px;"></i> +91-81468 - 00147</div>
      <div class="row"><i class="bi bi-telephone" style="width: 28px;"></i> +91-81468 - 00145</div>
      <a class="row link" href="mailto:support@macwill.in"><i class="bi bi-envelope" style="width: 28px;"></i> support@macwill.in</a>
      <h4>Location</h4>
      <div class="row"><i class="bi bi-geo-alt" style="width: 28px;"></i> <span>2nd Floor WD Complex, Court Road, Hoshiarpur (PB)-146001-India</span></div>
    </div>
  </aside>

  <main class="main">
    <div class="topbar">
      <button class="menu-btn" id="menuBtn" aria-label="Open menu"><i class="bi bi-list" style="font-size: 1.8rem;"></i></button>
      <div style="font-weight:800;color:var(--navy)">MACWILL ERP</div>
      <a href="tel:+918146652452" class="menu-btn"><i class="bi bi-telephone" style="font-size: 1.5rem;"></i></a>
    </div>