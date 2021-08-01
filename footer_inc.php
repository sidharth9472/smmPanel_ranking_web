
<footer style="background:#111;">
  <div class="footer-content">
    <h3>Smm<span>Panel</span></h3>
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.</p>
    <ul class="social">
    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>copyright &copy;2021 SMmPanel. Desgined by<span>&nbspSRP</span></p>
  </div>
</footer>


<!-- this java script for skill count in login page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>
</html> 