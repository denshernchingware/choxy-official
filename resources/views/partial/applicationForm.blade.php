   <!-- end section -->



    <!-- Application Form Section -->
    <section class="form-section" id="application">
        <div class="container">
            <div class="row g-5">
                <!-- Form Column -->
                <div class="col-lg-8">
                    <div class="form-card">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" id="successAlert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

@endif
                        <div class="form-header ">
                            <i class="bi bi-file-earmark-text me-2"></i> Application Form
                        </div>
                        <div class="p-4 p-md-5">
                        <form action="{{ route('application.submit') }}" method="POST">
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
