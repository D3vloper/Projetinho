   // When the user clicks on the button, scroll to the top of the document
            function topFunction(){
              document.body.scrollTop = 0; // For Safari
              document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
          jQuery(document).ready(function(){
            mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

                function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
              }
          }

  });

 /*----------------------------
 2. Mobile Menu Activation
-----------------------------*/
    jQuery('.mobile-menu nav').meanmenu({
        meanScreenWidth: "991",
    });

  // Navbar Area sticky

  jQuery(window).on('scroll', function() {
      if (jQuery(this).scrollTop() >200){  
          jQuery('.anymags-sticky').addClass("sticky-nav");
      }
      else{
          jQuery('.anymags-sticky').removeClass("sticky-nav");
      }
    });