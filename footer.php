<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package Puzzle
 */

?>
<footer id="colophon" class="site-footer">
  <section>
    <div class="container">
      <div class="row">

          <div class="footers1 allinonefooter col-lg-3 col-md-6 col-sm-6">
            <h1>Contact</h1>
            <?php dynamic_sidebar('footer1');?>
          </div>

          <div class="footers2 allinonefooter col-lg-6 col-md-12 col-sm-12">
          <!-- <h1>Our Services</h1> -->
            <?php dynamic_sidebar('footer2');?>
          </div>

          <div class="footers3 allinonefooter col-lg-3 col-md-6 col-sm-6">
            <h1>Painting License</h1>
            <?php dynamic_sidebar('footer3');?>
          </div>
          
		</div>
	</div>
</section>

    <div class="totop">
		<div id="section07" class="demo">
		<a href="#sectionhome"><span></span><span></span><span></span></a>
    </div>
    </div>


	
		<div class="underfooter">
		<div class="container" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="1000"data-aos-duration="1000">      
		  <p><?php echo date(' Y ') ;?> &copy; ALL RIGHTS ARE RESERVED. <a href="https://www.puzzle-ep.com">Puzzle Enterprise</a></p>

		</div>
		</div>
	
	
		</footer><!-- #colophon -->

		
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

	jQuery('.counter-body h2').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
    duration: 1000,
    easing: 'swing',
    step: function () {
      $this.text(Math.ceil(this.Counter));
    }
  });
});

	var swiper = new Swiper('.swiper-container1', {
    loop: true,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      fadeEffect: { crossFade: true 
      },
      virtualTranslate: true,
      // autoplay: {
      // delay: 2500,
      // disableOnInteraction: true,
      // },
      speed: 1000, 
      effect: "fade"
    });


	var Menu = {
          el: {
          ham: jQuery('.menu-m'),
          menuTop: jQuery('.menu-top'),
          menuMiddle: jQuery('.menu-middle'),
          menuBottom: jQuery('.menu-bottom')
          },
          init: function() {
          Menu.bindUIactions();
          },
          bindUIactions: function() {
          Menu.el.ham
          .on(
          'click',
          function(event) {
          Menu.activateMenu(event);
          event.preventDefault();
          }
          );
          },
          activateMenu: function() {
          Menu.el.menuTop.toggleClass('menu-top-click');
          Menu.el.menuMiddle.toggleClass('menu-middle-click');
          Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
          }
          };
      Menu.init();

          jQuery('.text').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.responsive'
        });
        jQuery('.responsive').slick({
          centerMode: true,
          focusOnSelect: true,
          dots: false,
          infinite: true,
          asNavFor: '.text',
          speed: 200,
          slidesToShow: 3,
          slidesToScroll: 2,
          responsive: [{
              breakpoint: 1199,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
              }},
            {
              breakpoint: 1024,
              settings: {
              autoplay:true,
              autoplaySpeed:10000,
                slidesToShow: 3,
                slidesToScroll: 1
              }},
            {
              breakpoint: 767,
              settings: {
              autoplay:true,
              autoplaySpeed:10000,
                slidesToShow: 3,
                slidesToScroll: 1
              }},
            {
              breakpoint: 480,
              settings: {
                autoplay:true,
              autoplaySpeed:10000,
                slidesToShow: 3,
                slidesToScroll: 1
              }}]});

          jQuery("#slider").on("input change", (e)=>{
          const sliderPos = e.target.value;
          // Update the width of the foreground image
          jQuery('.foreground-img').css('width', `${sliderPos}%`)
          // Update the position of the slider button
          jQuery('.slider-button').css('left', `calc(${sliderPos}% - 23px)`)
        });
</script>
</body>
</html>