<?php
include "header_inc.php";
?>

<!-- Hero -->
<section class="demo-hero py-3 bg-light">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-6">
                <span class="badge bg-primary-subtle text-primary mb-3">
                    Live ERP Demo
                </span>

                <h1 class="display-5 fw-bold mb-4">
                    <span class="display-6">Experience</span> Macwill ERP in Real Time
                </h1>

                <p class="lead text-muted mb-5">
                    Schedule a personalized product demo and discover
                    how Macwill ERP simplifies institution management.
                </p>

                <div class="d-flex flex-wrap gap-5">

                    <div class="demo-stat">
                        <h3>500+</h3>
                        <p>Institutions</p>
                    </div>

                    <div class="demo-stat">
                        <h3>24/7</h3>
                        <p>Support</p>
                    </div>

                    <div class="demo-stat">
                        <h3>99%</h3>
                        <p>Uptime</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Demo Form -->
                <div class="demo-form-card">
                <?php if(isset($_GET["req"]) && $_GET["req"]=="done") { ?>
                    <h3 class="fw-bold mb-4">
                        Booking Submitted!
                    </h3>
                    <p><i>"Thank you! We've successfully received your details. 
                        Our team will review your information and contact you shortly via email to confirm 
                        the exact date and time for your software demo."</i></p>

                    <h5>What Happens Next?</h5>
                    <ul>
                        <li>Our team is tailoring the demo to focus on how to streamline your workflow.</li>
                        <li>You will receive a calendar invite with a secure meeting link before the session.</li>
                        <li>In the meantime, feel free to browse our Case Studies or watch this 2-Minute Overview Video to see the platform in action.</li>
                    </ul>
                    <p>If you need to make changes or have any questions, feel free to contact us.</p>
                <?php } elseif(isset($_GET["err"])) { ?>
                    <h3 class="fw-bold mb-4">
                        Booking Failed!
                    </h3>
                    <p style="color: red;"><?php echo $_GET["err"];?></p>
                <?php } else { ?>
                    <h3 class="fw-bold mb-4">
                        Book Free Demo
                    </h3>

                    <form action="do_demo-booking.php" method="post">
                        <div class="mb-3">
                            <input type="text" name="inst_name" class="form-control" placeholder="Institute Name">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="inst_type">
                                <option selected>
                                    Select Institution Type
                                </option>
                                <option value="uni">University</option>
                                <option value="clg">College</option>
                                <option value="scl">School</option>
                                <option value="ctr">Coaching Center</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="inst_website" class="form-control" placeholder="Institute Website">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                            <!--<input type="text" name="designation" class="form-control" placeholder="Designation">-->
                            <select class="form-select" name="source">
                                <option selected>Select Designation</option>
                                <option value="ppl">Principal</option>
                                <option value="vpl">Vice Principal</option>
                                <option value="hod">Head of Department</option>
                                <option value="tch">Teacher</option>
                                <option value="ltr">Lecturer</option>
                                <option value="pro">Professor</option>
                                <option value="lib">Librarian</option>
                                <option value="lab">Lab Assistant</option>
                                <option value="cop">Computer Operator</option>
                                <option value="acc">Accountant</option>
                                <option value="rec">Receptionist</option>
                                <option value="hoc">Head Counsellor</option>
                                <option value="con">Counsellor</option>
                                <option value="adm">Administrator</option>
                                <option value="hrm">HR Manager</option>
                                <option value="exe">Executive</option>
                            </select>                            
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email_id" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="mobile_no" class="form-control" placeholder="Mobile Number">
                        </div>
                        <!-- <div class="mb-3">
                            <input type="text" name="address" class="form-control" placeholder="Enter institute address">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="city" class="form-control" placeholder="Enter City name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="state" class="form-control" placeholder="Enter State name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="pincode" class="form-control" placeholder="Enter Pincode">
                        </div> -->
												<div class="row mb-3 d-flex justify-content-between">
													<div class="col-6" title="Enter Number of Students Count">
															<input type="number" name="student_counts" class="form-control" placeholder="Std. counts">
													</div>
													<div class="col-6">
															<select class="form-select" name="source">
																	<option selected>
																			Select Source
																	</option>
																	<option value="ws">Website</option>
																	<option value="gl">Google</option>
																	<option value="fb">Facebook</option>
																	<option value="ig">Instagram</option>
																	<option value="wi">Walk-In</option>
																	<option value="rf">Reference</option>
																	<option value="ad">Advertisement</option>
															</select>
													</div>
												</div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-md-7">
                                <small class="form-label">
                                    Preferred Date
                                </small>
                                <input type="date" name="pref_date" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <small class="form-label">
                                    Time
                                </small>
                                <input type="time" name="pref_time" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="4" placeholder="Your Requirements"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Request Demo
                        </button>
                    </form>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Screenshots -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                ERP Software Preview
            </h2>

            <p class="text-muted">
                Explore Macwill ERP's modern interface and modules.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="dashboard-card">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71" class="img-fluid rounded-top"
                        alt="Dashboard">
                    <div class="p-3">
                        <h5>
                            Admin Dashboard
                        </h5>

                        <p class="text-muted mb-0">
                            Complete overview of operations and reports.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="dashboard-card">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6"
                        class="img-fluid rounded-top" alt="Student Panel">
                    <div class="p-3">
                        <h5>
                            Student Management
                        </h5>
                        <p class="text-muted mb-0">
                            Simplified admissions and attendance.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="dashboard-card">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3"
                        class="img-fluid rounded-top" alt="Analytics">
                    <div class="p-3">
                        <h5>
                            Analytics & Reports
                        </h5>
                        <p class="text-muted mb-0">
                            Powerful charts and institution insights.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Workflow -->
<section class="workflow-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                How Macwill ERP Works
            </h2>

            <p class="text-muted">
                Simple onboarding process for institutions.
            </p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-lg-3 col-md-6">
                <div class="workflow-card">
                    <div class="workflow-number">
                        1
                    </div>

                    <i class="bi bi-calendar-check"></i>
                    <h5>
                        Schedule
                    </h5>
                    <p>
                        Book a personalized ERP walkthrough.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="workflow-card">
                    <div class="workflow-number">
                        2
                    </div>

                    <i class="bi bi-gear"></i>

                    <h5>
                        Setup System
                    </h5>

                    <p>
                        Configure modules and institution settings.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="workflow-card">
                    <div class="workflow-number">
                        3
                    </div>

                    <i class="bi bi-cloud-upload"></i>

                    <h5>
                        Import Data
                    </h5>

                    <p>
                        Migrate student and staff data securely.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="workflow-card">
                    <div class="workflow-number">
                        4
                    </div>

                    <i class="bi bi-rocket-takeoff"></i>

                    <h5>
                        Go Live
                    </h5>

                    <p>
                        Start managing your institution efficiently.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Preview -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <!--<img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c"
                        class="img-fluid rounded-4 shadow"
                        alt="ERP Demo Video">-->
                <iframe class="rounded-4 shadow" width="320" height="180"
                    src="https://www.youtube.com/embed/ERYtvTfJd28?si=L7Bl-MMDKgZwFXmv&amp;controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">

                <span class="badge bg-primary-subtle text-primary mb-3">
                    Product Walkthrough
                </span>

                <h2 class="fw-bold mb-4">
                    Watch Macwill ERP in Action
                </h2>

                <p class="text-muted mb-4">
                    Learn how our ERP software streamlines administration,
                    communication, and academic operations.
                </p>

                <!--<a href="#"
                        class="btn btn-primary btn-sm">
                        <i class="bi bi-play-circle me-2"></i>
                        Watch Demo Video
                    </a>-->

            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<!--<section class="cta-section py-3">

        <div class="container text-center">

            <h2 class="fw-bold mb-3">
                Ready to Upgrade Your Institution?
            </h2>

            <p class="mb-4">
                Get started with Macwill ERP today.
            </p>

            <a href="#" class="btn btn-light btn-lg px-5" style="border: 1px solid #cccccc;">
                Book Free Demo
            </a>

        </div>

    </section>-->

<?php
include "footer_inc.php";
?>