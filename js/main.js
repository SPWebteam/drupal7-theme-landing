(function ($) {
  function fitItems(target, screen, width) {
    space = Math.floor(screen / width);
    items = $(target).length;
    if (items > space) {
      items = space;
    }
    return items;
  }

  // MENU TOGGLE
  Drupal.behaviors.SiteHeaderMenuToggle = {
    attach: function (context, settings) {
      $(".menu-toggle button", context).click(function (event) {
        event.preventDefault();
        //$('.primary-menu').slideToggle(250);
        $("#block-system-main-menu").slideToggle(100);
      });
    },
  };

  // MODAL
  Drupal.behaviors.OpenModal = {
    attach: function (context, settings) {
      $(".modal-open", context).click(function (event) {
        event.preventDefault();
        $("#modal").fadeIn();
      });
    },
  };
  Drupal.behaviors.CloseModal = {
    attach: function (context, settings) {
      $(".modal-close", context).click(function (event) {
        event.preventDefault();
        $("#modal").fadeOut();
      });
    },
  };
  // QUICKFIX MODAL
  Drupal.behaviors.ErrorModal = {
    attach: function (context, settings) {
      if ($(".webform-client-form-1818").find("input.error").length !== 0) {
        $("#modal").fadeIn();
        $(".messages").prependTo("form");
      }
    },
  };

  // SOCIAL FOOTER
  Drupal.behaviors.SocialFollow = {
    attach: function (context, settings) {
      $("#follow", context).click(function (event) {
        event.preventDefault();
        $("#social-follow").slideToggle(100);
        $("#social-share").hide();
        $("#follow").addClass("active");
        $("#share").removeClass("active");
      });
    },
  };
  Drupal.behaviors.SocialShare = {
    attach: function (context, settings) {
      $("#share", context).click(function (event) {
        event.preventDefault();
        $("#social-share").slideToggle(100);
        $("#social-follow").hide();
        $("#share").addClass("active");
        $("#follow").removeClass("active");
      });
    },
  };

  // DISABLE PAGEBACK
  Drupal.behaviors.PageBack = {
    attach: function (context, settings) {
      $("a.back").click(function () {
        if (document.referrer.indexOf(window.location.hostname) != -1) {
          parent.history.back();
          return false;
        }
      });
    },
  };

  // DOEMEE FORM
  Drupal.behaviors.WebformSliderOpen = {
    attach: function (context, settings) {
      // Open slide on click
      $(".webformslider-open").click(function () {
        $(".webformslider").addClass("open");
      });
      // Open slide if on 2nd step or higher. Used for multistep forms
      if ($('input[name="details[page_num]"]').length) {
        var checkStep =
          document.getElementsByName("details[page_num]")[0].value;
        if (checkStep > 1) {
          $(".webformslider").addClass("open-instant");
        }
      }
    },
  };
  Drupal.behaviors.WebformSliderClose = {
    attach: function (context, settings) {
      $(".webformslider-close").click(function () {
        $(".webformslider").removeClass("open");
        $(".webformslider").removeClass("open-instant");
      });
    },
  };
  Drupal.behaviors.WebformSliderMessage = {
    attach: function (context, settings) {
      // Quickfix to move webform error message (or any other message) generated on page.tpl.php to node--doe-mee.tpl.php
      if ($(".webformslider")[0]) {
        $(".messages").prependTo("form");
      }
    },
  };

  Drupal.behaviors.smoothScroll = {
    attach: function (context, settings) {
      $(".scroll-to").click(function (event) {
        event.preventDefault();
        $([document.documentElement, document.body]).animate(
          {
            scrollTop: $($(this).attr("href")).offset().top - 16,
          },
          720
        );
      });
    },
  };

  Drupal.behaviors.scrollToError = {
    attach: function (context, settings) {
      // on pageload scroll to first .error class
      if (typeof $(".error") === "defined") {
        $("html, body").animate(
          {
            scrollTop: $(".error").offset().top,
          },
          100
        );
      }
    },
  };

  Drupal.behaviors.trimEmailField = {
    // Remove spaces in email on change
    // The jquery clientside validation plugin doesn't allow trailing spaces for email input and responds with 'invalid email'.
    // The user can be unaware of the space and unable to continue the form
    attach: function (context, settings) {
      $("input[type=email]").change(function (e) {
        emailTrimmed = $(this).val().replace(/ /g, "");
        $(this).val(emailTrimmed);
      });
    },
  };

  Drupal.behaviors.hideCookieBar = {
    // QUICKFIX: Hides cookiebar if user adds input before accepting cookies
    // This prevents user losing input after accepting terms
    attach: function (context, settings) {
      $(".webform-client-form input").focus(function () {
        // Hide slidingbar
        $("#sliding-popup").addClass("hidden");
      });
    },
  };

  Drupal.behaviors.accordion = {
    // Add a simple JS accordion (see w3)
    attach: function (context, settings) {
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
          this.classList.toggle("active");

          /* Toggle between hiding and showing the active panel */
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
    },
  };

  Drupal.behaviors.HeroSlide = {
    // Based upon Automatic Slideshow w3schools.com
    attach: function (context, settings) {
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        // First check if class is present
        if ($(".slide-item")[0]) {
          var i;
          var slides = document.getElementsByClassName("slide-item");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {
            slideIndex = 1;
          }
          slides[slideIndex - 1].style.display = "block";
          setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
      }
    },
  };

  Drupal.behaviors.cdcookie = {
    // duplicatie the cookie for cross domain, if possible
    attach: function (context, settings) {
      var cookieGet = $.cookie("sp_tc");
      var cookieValue = 2;

      if (cookieGet == 0) {
        var cookieValue = 0; //
      }

      if (cookieGet !== undefined) {
        $.cookie("sp_tc", cookieValue, {
          expires: 365, //days
          path: "/",
          domain: "sp.nl ",
          secure: true,
        });
      }
    },
  };

  //   Drupal.behaviors.counters = {
  //     // start counting
  //     attach: function (context, settings) {
  //       const counters = document.querySelectorAll(".count");
  //       const speed = 200;

  //       counters.forEach((counter) => {
  //         const updateCount = () => {
  //           const target = parseInt(counter.getAttribute("data-target"));
  //           const count = parseInt(counter.innerText);
  //           const increment = Math.trunc(target / speed);

  //           if (count < target) {
  //             counter.innerText = count + increment;
  //             setTimeout(updateCount, 1);
  //           } else {
  //             counter.innerText = target.toLocaleString("us");
  //           }
  //         };
  //         updateCount();
  //       });
  //     },
  //   };
})(jQuery);
