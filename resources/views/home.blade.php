<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="bg-image">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">EduLearn</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            @if (Auth::check())
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="header-content">
            <h1>Welcome to EduLearn</h1>
            <p>Your journey to knowledge begins here</p>
            <a href="{{ route('courses.index') }}" class="btn btn-primary">Explore Courses</a>
        </div>
    </div>

    <div class="container mt-5">
        <div class="course-card">
            <img src="{{ asset('images/image2.jpg') }}" alt="Course Image">

            <div class="description">
                <h2>Advanced Web Development</h2>
                <p>Learn the most modern web development techniques, including HTML5, CSS3, JavaScript, and advanced
                    frameworks like React and Node.js.</p>
                <p>This course is designed for students who already have basic knowledge of programming and want to
                    expand their skills into full-stack development.</p>
            </div>
        </div>
    </div>

    <h3 class="text-center mt-5 mb-3">Featured Courses</h3>
    <div class="row">
        @foreach ($random_courses as $course)
            <div class="col-md-4 mb-4">
                <div class="course-card-wrapper">
                    <div class="course-card">
                        <div class="course-image">
                            <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image">
                        </div>
                        <div class="course-details">
                            <h4>{{ $course->name }}</h4>
                            <p>{{ $course->description }}</p>
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <section class="why-choose-us">
        <div class="container">
            <h2 class="section-title">Why Choose Us</h2>
            <p class="section-subtitle">We offer the best courses with top-notch instructors, flexible learning, and
                unmatched support.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="why-image">
                        <img src="{{ asset('images/image3.jpg') }}" alt="Why Choose Us Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-description">
                        <h3>Expert Instructors</h3>
                        <p>Our courses are taught by industry professionals who bring real-world experience and insights
                            into every lesson.</p>
                        <h3>Flexible Learning</h3>
                        <p>Learn at your own pace with our flexible online learning options. Whether you're on the go or
                            at home, we make learning convenient.</p>
                        <h3>Unmatched Support</h3>
                        <p>Our dedicated support team is always ready to help you succeed with personalized assistance
                            whenever you need it.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="student-reviews">
        <div class="container">
            <h2 class="section-title text-center mt-5">What Our Students Say</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="review-card">
                        <div class="review-img">
                            <img src="{{ asset('images/image4.jpg') }}" alt="Student 1" class="rounded-circle">
                        </div>
                        <div class="review-content">
                            <h4 class="student-name">John Doe</h4>
                            <p class="student-review">"The courses here are amazing! They helped me build a strong
                                foundation in web development, and the support team is fantastic!"</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="review-card">
                        <div class="review-img">
                            <img src="{{ asset('images/image5.jpg') }}" alt="Student 2" class="rounded-circle">
                        </div>
                        <div class="review-content">
                            <h4 class="student-name">Jane Smith</h4>
                            <p class="student-review">"I absolutely loved the flexibility of the courses. The content
                                was clear, and I could learn at my own pace."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awards-section">
        <div class="container">
            <h2 class="section-title1">Our Awards & Achievements</h2>
        </div>
        <div class="award-image">
            <img src="{{ asset('images/image6.jpg') }}" alt="Awards and Achievements" class="img-fluid">
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="footer-title">About Us</h4>
                    <p class="footer-description">
                        We are committed to providing top-notch education with courses designed to equip you with real-world
                        skills. Join us to elevate your career and grow your knowledge.
                    </p>
                </div>

                <div class="col-md-3">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('courses.index') }}">Courses</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h4 class="footer-title">Contact Us</h4>
                    <p class="footer-contact">Email: info@education.com</p>
                    <p class="footer-contact">Phone: +123 456 7890</p>
                    <p class="footer-contact">Address: 123 Education Street, City, Country</p>
                </div>

                <div class="col-md-3">
                    <h4 class="footer-title">Follow Us</h4>
                    <div class="footer-social">
                        <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Education Platform. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
