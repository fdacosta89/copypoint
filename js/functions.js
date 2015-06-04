myFunction = function() {

  var navActive="nav1";
  var windowHeight = $(window).height();
  var size = document.getElementsByClassName("info").length;

  $(".info-nav").each(function() {
    $(this).click(function() {
      var $input =$(this);
      var newNav = $input.attr('id');
      console.log("active nav: " + '\''+ navActive +'\'');
      console.log("new nav: " + '\''+ newNav + '\'');
      if (newNav != navActive) {
        console.log("switch info");
        $("#" + navActive).removeClass("active");
        $input.addClass("active");
        navActive=newNav;

        var windowHeight = window.innerHeight;
        var inputHeight = $('#' + $input.attr('target-div')).height();
        var margin = 0;
        if ((windowHeight > inputHeight) && this.id != "info8"){
          margin = (windowHeight - inputHeight) / 2;
        }
        var position;
        if (this.id == "info6")
          position = $(document).height();
        else
          position = $('#' + $input.attr('target-div')).offset().top;
        $('html, body').animate({scrollTop: position - margin},600);
      }
    });
  });

  $(".info").each(function(){
    $(this).click(function() {
      var $input = $(this);
      var windowHeight = window.innerHeight;
      var inputHeight = $('#' + $input.attr('target-div')).height();
      var margin = 0;
      if ((windowHeight > inputHeight) && this.id != "info8"){
        margin = (windowHeight - inputHeight) / 2;
      }
      var position;
      if (this.id == "info8")
        position = $(document).height();
      else
        position = $('#' + $input.attr('target-div')).offset().top;

      var newNav =$input.attr('target-nav');
      $("#" + navActive).removeClass("active");
      $("#" + newNav).addClass("active");
      navActive = newNav;
      $('html, body').animate({scrollTop: position - margin},600);
    });
  });

  $("#uparrow").click(function() {
      $('html, body').animate({scrollTop: 0},800);
      $("#" + navActive).removeClass("active");
      $("#nav1").addClass("active");
      navActive = 'nav1';
  });


};
