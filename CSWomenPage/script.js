//FixedBar
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      document.getElementById("navbar_top").classList.add("fixed-top");
      // add padding top to show content behind navbar
      navbar_height = document.querySelector(".navbar").offsetHeight;
      document.body.style.paddingTop = navbar_height + "px";
    } else {
      document.getElementById("navbar_top").classList.remove("fixed-top");
      // remove padding top from body
      document.body.style.paddingTop = "0";
    }
  });
});
//Parallx card
(function ($) {
  $.fn.tilt = function () {
    var perspective = "500px",
      delta = 20,
      width = this.width(),
      height = this.height(),
      midWidth = width / 2,
      midHeight = height / 2;
    this.on({
      mousemove: function (e) {
        var pos = $(this).offset(),
          cursPosX = e.pageX - pos.left,
          cursPosY = e.pageY - pos.top,
          cursCenterX = midWidth - cursPosX,
          cursCenterY = midHeight - cursPosY;

        $(this).css(
          "transform",
          "perspective(" +
            perspective +
            ") rotateX(" +
            cursCenterY / delta +
            "deg) rotateY(" +
            -(cursCenterX / delta) +
            "deg)"
        );
        $(this).removeClass("is-out");
      },
      mouseleave: function () {
        $(this).addClass("is-out");
      },
    });
    //Return
    return this;
  };
})(jQuery);

//Set plugin on cards
$(".card").tilt();

//Expanding Card
const panels = document.querySelectorAll(".panel");
panels.forEach((panel) => {
  panel.addEventListener("click", () => {
    remveActiveClasses();
    panel.classList.add("active");
  });
});

function remveActiveClasses() {
  panels.forEach((panel) => {
    panel.classList.remove("active");
  });
}

//ready
$(document).ready(function () {
  $.get("cslinks.html", function (data) {
    $("head").append(data);
  });
});
