<!-- Footer -->
<footer class="text-white mt-5 p-4 text-center" style="background-color: #45624E;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 border-end border-light pe-4">
                <h5>Saran dan Kritik</h5>
                <form action="#" method="POST">
                    @csrf <!-- Include CSRF token for security -->
                    <div class="input-group mt-3" style="max-height: 100px;">
                        <span class="input-group-text"></span>
                        <textarea class="form-control" name="textarea_content" aria-label="With textarea" style="height: 100px; resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" style="width: 100%;">Kirim</button>
                </form>
            </div>
            <div class="col-md-4 mt-2 border-end border-light pe-4 ps-4">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li>Email: info@example.com</li>
                    <li>Phone: +123 456 7890</li>
                    <li>Address: 123 Main Street, Anytown, USA</li>
                </ul>
            </div>
            <div class="col-md-4 mt-2 ps-4">
                <h5>About Me</h5>
                <p>I'm a passionate web developer with a love for creating dynamic and user-friendly websites. With years of experience in various programming languages and frameworks, I strive to deliver the best solutions for my clients.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <p>&copy; 2024 Your Company. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>