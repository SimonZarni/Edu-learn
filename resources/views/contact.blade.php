@extends('layout.master')
@section('main')
    <!-- Contact Us Section -->
<section class="contact-us">
    <!-- Location iframe -->
    <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7743.13296163283!2d100.6318217!3d13.9843907!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sth!2sth!4v1733825673984!5m2!1sth!2sth" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Social Media Contacts -->
    <div class="social-media">
        <h3>Contact Us on Social Media</h3>
        <div class="social-icons">
            <div class="social-icon">
                <img src="{{ asset('images/image7.jpg') }}" alt="WhatsApp">
                <p>WhatsApp</p>
                <p>+1 234 567 890</p>
            </div>
            <div class="social-icon">
                <img src="{{ asset('images/image8.png') }}" alt="Messenger">
                <p>Messenger</p>
                <p>+1 234 567 890</p>
            </div>
            <div class="social-icon">
                <img src="{{ asset('images/image9.png') }}" alt="WeChat">
                <p>WeChat</p>
                <p>+1 234 567 890</p>
            </div>
            <div class="social-icon">
                <img src="{{ asset('images/image10.png') }}" alt="Line">
                <p>Line</p>
                <p>+1 234 567 890</p>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
        <h3>Get in Touch</h3>
        <form action="submit-form.php" method="POST">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Enter your message" rows="4" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</section>
@endsection

