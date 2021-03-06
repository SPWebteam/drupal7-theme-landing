(function ($) {
  Drupal.behaviors.Countdown = {
    attach: function (context, settings) {

      // set ID selector that should refresh
      //var countdown_id = "countdown";
      // get tag element
      var countdown = document.getElementById("countdown");

      if(countdown){

        // set the date we're counting down to
        var target_date = new Date("03/15/2021 07:30:00").getTime();  //ONLY USE THIS FORMAT FOR SAFARI SUPPORT! mm/dd/yyyy hh:mm:ss
        var final_date = new Date("03/17/2021 21:00:00").getTime();

        // variables for time units
        var days, hours, minutes, seconds;
        var countdown_status;
         
        // determ status
        setInterval(function () {
          var status_current_date = new Date().getTime();
          var status_seconds_left = (target_date - status_current_date) / 1000;
          var status_seconds_left_final = (final_date - status_current_date) / 1000;
          if (status_seconds_left > 0){
            countdown_status = "before";
          }
          if (status_seconds_left < 0){
            countdown_status = "during";
          }
          if (status_seconds_left_final < 0){
            countdown_status = "after";
          }
        }, 100);

        // get spans where our clock numbers are held
        //var days_span = countdown.querySelector('.days');
        //var hours_span = countdown.querySelector('.hours');
        //var minutes_span = countdown.querySelector('.minutes');
        //var seconds_span = countdown.querySelector('.seconds');
         
        // update the tag countdown_id every 1 second only if status is determend first
        if (countdown_status = "before" || "during" || "after"){
          setInterval(function () {
         
            // find the amount of "seconds" between now and target
            var current_date = new Date().getTime();
            
            // set seconds_left based on status
            if (countdown_status == "before") {
              var seconds_left = (target_date - current_date) / 1000;
            }
            if (countdown_status == "during") {
              var seconds_left = (final_date - current_date) / 1000;
            }
         
            // do some time calculations
            days = parseInt(seconds_left / 86400);
            seconds_left = seconds_left % 86400;
             
            hours = parseInt(seconds_left / 3600);
            seconds_left = seconds_left % 3600;
             
            minutes = parseInt(seconds_left / 60);

            // add leading zero
            if (minutes < 10) {
              minutes = '0' + minutes;
            }
            seconds = parseInt(seconds_left % 60);
            if (seconds < 10) {
              seconds = '0' + seconds;
            }

            // set day string
            if (days < 1) {
              var days_string = "";
              console.log(days);
            } else if (days >= 2) {
              var days_string = days + " dagen ";
              console.log(days);
            } else {
              var days_string = days + " dag ";
              console.log(days);
            }

            // format countdown string + set tag value
            if (countdown_status == "before") {
              countdown.innerHTML = days_string + hours + ":" + minutes + ":" + seconds + " uur";
              //days_span.innerHTML = days;
              //hours_span.innerHTML = hours;
              //minutes_span.innerHTML = minutes;
              //seconds_span.innerHTML = seconds;

            }
            if (countdown_status == "during") {
              countdown.innerHTML = "Stem SP!<br>" + days_string + hours + ":" + minutes + ":" + seconds + " uur";
              //days_span.innerHTML = days;
              //hours_span.innerHTML = hours;
              //minutes_span.innerHTML = minutes;
              //seconds_span.innerHTML = seconds;
            }
            if (countdown_status == "after") {
              countdown.innerHTML = "SP stemmers bedankt!";
              //days_span.innerHTML = "0"; // else NaN error
              //hours_span.innerHTML = "0"
              //minutes_span.innerHTML = "0"
              //seconds_span.innerHTML = "0"
            }       
          }, 1000);
        }
      }

    }
  }
})(jQuery);

