<footer>
    <div class="container mt35 mb30">
      <div class="row ">
        <div class="col-md-2">
          <h6>Quick Links</h6>
          <ul class="footerlink">
           <li><a>Search</a></li>
            <li><a>Contact us</a></li>
             <li><a>About us</a></li>
              <li><a>Safety Measures & Update For Covid 19</a></li> 
              

          </ul>
        </div>
        <div class="col-md-2">
          <h6>Information</h6>
          <ul class="footerlink">
           <li><a>Return and Refund Policy</a></li>
            <li><a>Shipping % FAQ</a></li>
             <li><a>Privacy Policy</a></li>
              <li><a>Terms of use</a></li> 
              

          </ul>
        </div>
        <div class="col-md-3">
          <h6>Get in touch</h6>
          <ul class="footerlink">
           <li><i class="fa fa-envelope pr5" aria-hidden="true"></i>Info@diamondbilliards.com</li>
            <li ><i class="fa fa-phone pr5" aria-hidden="true"></i>+1.812.288.7665</li>
             

          </ul>
        </div>
        <div class="col-md-3">
          <h6>Be in the know</h6>
          <p>Sign up for the latest news and offers</p>
                <form class="subscribe_form">
            <div class="input-group">
               <input type="text" class="form-control" name="email" placeholder="Enter your email">
               <span class="input-group-btn">
                    <button class="btn btn-info" type="button" style="border-radius: 0px">subscribe</button>
               </span>
            </div>
          </form>
        </div>
        <div class="col-md-2">
          <h6>Follow us</h6>
          <p>Sign up for the latest news and offers</p>
            <ul class="footerlink">
                <li><i class="fa fa-facebook p5" aria-hidden="true"></i>Facebook</li>
                 <li><i class="fa fa-twitter p5" aria-hidden="true"></i>Twitter</li>
                  <li> <i class="fa fa-instagram p5" aria-hidden="true"></i>Instagram</li>
              </ul>
        </div>
      </div>
    </div>

      </footer>
 <div class="container-fluid p0 bggrey">
      <div class="container">
      
  <ul class="pull-left footerlink2">
    <li><a href="#">Privacy Statement</a></li>
    <li><a href="#">Terms of Use</a></li>
    <li><a href="#">Login</a></li>
  </ul>

  
<div class="pull-right text-center footertext" >
  <p class="">Copy right by Dimond Billard Products , INC</p>
</div>
</div> 
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php wp_footer(); ?>

<script type="text/javascript">
  

$(document).ready(function() {
  //parallax scroll
  $(window).on("load scroll", function() {
    var parallaxElement = $(".parallax_scroll"),
      parallaxQuantity = parallaxElement.length;
    window.requestAnimationFrame(function() {
      for (var i = 0; i < parallaxQuantity; i++) {
        var currentElement = parallaxElement.eq(i),
          windowTop = $(window).scrollTop(),
          elementTop = currentElement.offset().top,
          elementHeight = currentElement.height(),
          viewPortHeight = window.innerHeight * 0.5 - elementHeight * 0.5,
          scrolled = windowTop - elementTop + viewPortHeight;
        currentElement.css({
          transform: "translate3d(0," + scrolled * -0.25 + "px, 0)"
        });
      }
    });
  });
});
</script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script type="text/javascript">
  
  $('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true
});
</script>
</body>



  </html> 