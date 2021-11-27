$(document).ready(function () {
  $(".login-info-box").fadeOut();
  $(".login-show").addClass("show-log-panel");
  remember();
  $("#icon").click(function () {});
});
function remember() {
  let rememberme = document.getElementById("rememberme");

  if (rememberme.checked) {
    let name = $("#username").val();
    let password = $("#userpassword").val();
    localStorage.setItem("name", name);
    localStorage.setItem("password", password);
    localStorage.setItem("checked", "yes");
  } else {
    localStorage.setItem("checked", "no");
    localStorage.removeItem("name");
    localStorage.removeItem("password");
  }
}

$("#username").val(localStorage.getItem("name"));
$("#userpassword").val(localStorage.getItem("password"));
if (localStorage.getItem("checked") == "yes") {
  document.getElementById("rememberme").setAttribute("checked", "checked");
}
document.getElementById("icon").addEventListener("click", function () {
  if (
    document.getElementById("icon").getAttribute("name") == "eye-off-outline"
  ) {
    document.getElementById("icon").setAttribute("name", "eye-outline");
    document.getElementById("userpassword").setAttribute("type", "text");
  } else {
    document.getElementById("icon").setAttribute("name", "eye-off-outline");
    document.getElementById("userpassword").setAttribute("type", "password");
  }
});
document.getElementById("icon2").addEventListener("click", function () {
  if (
    document.getElementById("icon2").getAttribute("name") == "eye-off-outline"
  ) {
    document.getElementById("icon2").setAttribute("name", "eye-outline");
    document.getElementById("newaccpassword").setAttribute("type", "text");
  } else {
    document.getElementById("icon2").setAttribute("name", "eye-off-outline");
    document.getElementById("newaccpassword").setAttribute("type", "password");
  }
});
$('.login-reg-panel input[type="radio"]').on("change", function () {
  if ($("#log-login-show").is(":checked")) {
    $(".register-info-box").fadeOut();
    $(".login-info-box").fadeIn();

    $(".white-panel").addClass("right-log");
    $(".register-show").addClass("show-log-panel");
    $(".login-show").removeClass("show-log-panel");
  } else if ($("#log-reg-show").is(":checked")) {
    $(".register-info-box").fadeIn();
    $(".login-info-box").fadeOut();

    $(".white-panel").removeClass("right-log");

    $(".login-show").addClass("show-log-panel");
    $(".register-show").removeClass("show-log-panel");
  }
});
