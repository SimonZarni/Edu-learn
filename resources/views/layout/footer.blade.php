<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="footer-title">About Us</h4>
                <p class="footer-description">
                    We are committed to providing top-notch education with courses designed to equip you with real-world skills. Join us to elevate your career and grow your knowledge.
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
                    <a href="https://www.facebook.com" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com" class="social-icon twitter"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://www.instagram.com" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Education Platform. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
