<section class="py-5 position-relative overflow-hidden" id="contactSection">
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" id="successAlert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Heading -->
        <div class="row justify-content-center mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-semibold text-dark">
                    How we can help you?
                </h2>
            </div>
        </div>

        <!-- Form -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf

                    <div class="row g-4">

                        <!-- Name -->
                        <div class="col-md-6">
                            <label class="form-label text-uppercase fw-semibold small">
                                Your good name <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="bi bi-emoji-smile"></i>
                                </span>
                                <input type="text" name="name" class="form-control"
                                       placeholder="What's your good name?" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label text-uppercase fw-semibold small">
                                Your email address <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email" class="form-control"
                                       placeholder="Enter your email address" required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label text-uppercase fw-semibold small">
                                Your phone number <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="bi bi-telephone"></i>
                                </span>
                                <input type="tel" name="phone" class="form-control"
                                       placeholder="e.g +263784384378" required>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="col-md-6">
                            <label class="form-label text-uppercase fw-semibold small">
                                Your subject
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="bi bi-journal-text"></i>
                                </span>
                                <input type="text" name="subject" class="form-control"
                                       placeholder="e.g price inquiry" required>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="col-12">
                            <label class="form-label text-uppercase fw-semibold small">
                                Your message
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light align-items-start pt-2">
                                    <i class="bi bi-chat-dots"></i>
                                </span>
                                <textarea name="comment" rows="4" class="form-control"
                                          placeholder="Describe your message" required></textarea>
                            </div>
                        </div>

                        <!-- Privacy -->
                        <div class="col-md-8">
                            <p class="small text-muted mb-0">
                                We are committed to protecting your privacy. We will never collect
                                information about you without your explicit consent.
                            </p>
                        </div>

                        <!-- Button -->
                        <div class="col-md-4 text-md-end text-center">
                            <button type="submit" class="btn btn-dark-gray px-4 py-4 w-200px">
                                <i class="bi bi-send me-2"></i> Send message
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
