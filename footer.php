     <!-- Footer -->
    <footer>
      <div class="footCont">
        <!-- line break -->
        <div class="contentbreakline">
          <div>
            <hr>
          </div>
        </div>
        <!-- line break ends-->

        <div class="footerlinks">
            <p>
            	<a href="#" style="color:#FFFFFF">PERSONAL CONSULTING &ndash; NUTRITIONAL ADVICE &ndash; WEIGHT LOSS &ndash; MUSCLE TONING &ndash; PROGRAM DESIGN &ndash; STRENGTH & CONDITIONING &ndash; SPORTS SPECIFIC</a>
            </p>
        </div>

        <div class="copywrite">
          <hr>
            <p>© 2013 by BRPtraining. All rights reserved</p>
        </div>
      </div>
    </footer>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/foundation/foundation.accordion.js"></script>
    <script src="bower_components/foundation/js/foundation/foundation.topbar.js"></script>
    <script src="bower_components/slick.js/slick/slick.js"></script>
    <script src="js/app.js"></script>

    <script type="text/javascript">

      $(document).ready(function(){
        // slick js plugin
        $('.one-time').slick({
          autoplay:true,
          infinite: true,
          speed: 500,
          cssEase: 'linear',
          arrows:false
        });
        
        // fade in for about list items on index page
        $(".aboutlist p").hide(function(){
          $(this).fadeIn("6000");
        });
        // fade in for meet pts on meet page
        $(".meetpts p").hide(function(){
        	$(this).fadeIn("6000");
        })
        //spash page
        if ($(".splash").is(":visible")){
          $(".container").css({"opacity":"0"});
        }
        $(".butRow").click(function(){
          $(".splash").slideUp("800", function(){
            $(".container").delay(100).animate({"opacity":"1.0"}, 800);
          });
          $("audio").remove();
        });
        // temp accordion code
        $("h4").on("click", function(){
          $(this).siblings(".hiddenCont").slideToggle("slow");
        })
      });
      
    </script>

  </body>
</html>