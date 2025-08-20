
 
  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img src="bootstrap/images/footer-logo.png" alt="Logo">

        <p><b class="text-light">Find us</b><br>
          123 Business Street, Kochi<br>
          Kerala, India
        </p>
        <div class="social-icons">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
      </div>

      <div class="footer-links">
        <h4>Useful Links</h4>
        <div class="row">
          <div class="col-md-6 col-lg-6 col-sm-12">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Product</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <ul>

              <li><a href="#">E-waste Management</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>

        </div>

      </div>

      <div class="footer-links">
        <h4>Subscribe</h4>
        <p>Don’t miss to subscribe to our new feeds, kindly fill the
          form below.</p>
        <input type="email" placeholder="Email Address">
        <button><i class="bi bi-send-check"></i></button>
      </div>

      <div class="footer-mail">
        <h4>Mail us</h4>
        <p>info@pantoneindia.in</p>

        <h4 class="mt-3">Phone</h4>
        <p>+91-9099121384 , +91-9510108345 </p>
      </div>
    </div>


  </footer>
  <div class="footer-bottom">
    <p>Copyright © 2025. All Rights Reserved.</p>
    <p>
      <a href="#" style="color:white;">Privacy Policy</a> |
      <a href="#" style="color:white;">Terms & Conditions</a>
    </p>
  </div>
  <script>
    const testimonials = document.querySelectorAll('.testimonial-content');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    let currentIndex = 0;
    let interval;

    function showTestimonial(index) {
      testimonials.forEach((t, i) => {
        t.classList.remove('active');
        if (i === index) {
          t.classList.add('active');
        }
      });
    }

    function nextTestimonial() {
      currentIndex = (currentIndex + 1) % testimonials.length;
      showTestimonial(currentIndex);
    }

    function prevTestimonial() {
      currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
      showTestimonial(currentIndex);
    }

    // Auto play every 5s
    function startAutoPlay() {
      interval = setInterval(nextTestimonial, 5000);
    }

    function stopAutoPlay() {
      clearInterval(interval);
    }

    nextBtn.addEventListener('click', () => {
      stopAutoPlay();
      nextTestimonial();
      startAutoPlay();
    });

    prevBtn.addEventListener('click', () => {
      stopAutoPlay();
      prevTestimonial();
      startAutoPlay();
    });

    // Init
    showTestimonial(currentIndex);
    startAutoPlay();
  </script>

</body>

</html>