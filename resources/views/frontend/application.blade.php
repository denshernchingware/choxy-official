@extends('frontend.master')
@section('content')
   <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography"
        style="background-image: url(images/adm-main.png)">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-base-color">Admissions</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">Join Our Community</h2>
                    <p class="text-white">Begin your journey to excellence at Choxy Dee Academy. Applications for Form
                        1 are now open.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- Admission Requirements Section -->
    <section class="admissions-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">Admission Requirements</h2>
                <p class="section-subtitle text-base-color">Ensure you have the following documents and meet the
                    requirements before applying.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Grade 7 Result Slip -->
                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi bi-file-earmark-text req-icon"></i>
                        </div>
                        <h4 class="req-title">Grade 7 Result Slip</h4>
                        <p class="req-desc">Must have 6 to 20 units for consideration.</p>
                    </div>
                </div>

                <!-- Birth Certificate -->
                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi bi-card-heading req-icon"></i>
                        </div>
                        <h4 class="req-title">Birth Certificate</h4>
                        <p class="req-desc">A clear copy of the student's birth certificate.</p>
                    </div>
                </div>

                <!-- Registration Fee -->
                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi bi-currency-dollar req-icon"></i>
                        </div>
                        <h4 class="req-title">Registration Fee</h4>
                        <p class="req-desc">$20 non-refundable registration fee.</p>
                    </div>
                </div>

                <!-- Assessment Exam -->
                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi bi-check-circle req-icon"></i>
                        </div>
                        <h4 class="req-title">Assessment Exam</h4>
                        <p class="req-desc">All applicants must sit for an examination.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="text-center mb-5 ">
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">Application Process</h2>
                <p class="section-subtitle">Follow these simple steps to complete your application</p>
            </div>

            <div class="timeline">
                <!-- Step 1 -->
                <div class="timeline-item">
                    <div class="timeline-badge">1</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Submit Application</h4>
                        <p class="timeline-desc">Fill out the online application form below.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="timeline-item">
                    <div class="timeline-badge">2</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Submit Documents</h4>
                        <p class="timeline-desc">Provide required documents at the school.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="timeline-item">
                    <div class="timeline-badge">3</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Pay Registration Fee</h4>
                        <p class="timeline-desc">Pay the $20 non-refundable fee.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="timeline-item">
                    <div class="timeline-badge">4</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Assessment Exam</h4>
                        <p class="timeline-desc">Sit for the placement assessment.</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="timeline-item">
                    <div class="timeline-badge">5</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Receive Results</h4>
                        <p class="timeline-desc">Get notified of admission decision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" id="successAlert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

@endif


    <!-- Application Form Section -->
    <section class="form-section" id="application">
        <div class="container">
            <div class="row g-5">
                <!-- Form Column -->
                <div class="col-lg-8">
                    <div class="form-card">
                        <div class="form-header ">
                            <i class="bi bi-file-earmark-text me-2"></i> Application Form
                        </div>
                        <div class="p-4 p-md-5">
                        <form action="{{ route('application') }}" method="POST">
                            @csrf
                                <!-- Row 1 -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="studentName" class="form-label required">Student Full Name</label>
                                        <input type="text" class="form-control" id="studentName " name='name'
                                            placeholder="Enter student's full name" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="dob" class="form-label required">Date of Birth</label>
                                        <input type="date" class="form-control" name="date_of_birth" id="dob" required>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label required">Gender</label>
                                        <select class="form-select" id="gender" name="gender" required>
                                            <option selected disabled>Select gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="previousSchool" class="form-label required">Previous
                                            School</label>
                                        <input type="text" class="form-control" id="previousSchool"
                                            placeholder="Enter previous school name"  name="previous_school" required>
                                    </div>
                                </div>

                                <!-- Row 3 -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="guardianName" class="form-label required">Parent/Guardian
                                            Name</label>
                                        <input type="text" class="form-control" id="guardianName"
                                            placeholder="Enter guardian's full name" name="guardian_name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label required">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="e.g. 0775 746 617" required>
                                    </div>
                                </div>

                                <!-- Row 4 -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter email address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="grade7Units" class="form-label required">Grade 7 Units</label>
                                        <input type="number" class="form-control" id="grade7Units" name="results"
                                            placeholder="Enter total units (6-20)" min="6" max="20"
                                            required>
                                    </div>
                                </div>

                                <!-- Residential Address -->
                                <div class="mb-4">
                                    <label for="address" class="form-label required">Residential Address</label>
                                    <textarea class="form-control" id="address"  name="address" rows="3" placeholder="Enter full residential address" required></textarea>
                                </div>

                                <!-- Additional Information -->
                                <div class="mb-4">
                                    <label for="additionalInfo" class="form-label">Additional Information</label>
                                    <textarea class="form-control" id="additionalInfo" rows="4" name="additional_information"
                                        placeholder="Any additional information you'd like to share"></textarea>
                                </div>

                                <!-- Agreement Checkbox -->
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="agreement" required>
                                    <label class="form-check-label checkbox-text" for="agreement">
                                        <i class="bi bi-info-circle me-1 text-base-color"></i>
                                        By submitting this form, you confirm that all information provided is accurate
                                        and agree to the school's admission policies.
                                    </label>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center ">
                                    <button type="submit" class="btn btn-submit text-black bg-base-color">Submit
                                        Application</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h5>Need Help?</h5>
                        <p>Contact our admissions team for any questions or assistance with your application.</p>

                        <div class="contact-item">
                            <i class="bi bi-telephone-forward me-2"></i>
                            <a href="tel:+263775746617">0775 746 617</a><br>
                            <i class="bi bi-telephone-forward ms-4 me-2"></i>
                            <a href="tel:+263778550367">0778 550 367</a>
                        </div>

                        <div class="contact-item mb-4">
                            <i class="bi bi-envelope me-2"></i>
                            <a href="mailto:info@choxydee.ac.zw">info@choxydee.ac.zw</a>
                        </div>

                        <h5 class="mt-5">Key Contacts</h5>

                        <div class="key-contact">
                            <strong>Mr. Marufu</strong><br>
                            <small>Principal</small>
                        </div>

                        <div class="key-contact">
                            <strong>Mrs. Moyo</strong><br>
                            <small>Administration</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection







