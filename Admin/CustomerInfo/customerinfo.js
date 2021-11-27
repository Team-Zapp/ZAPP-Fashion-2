$(document).ready(function () {
  $.ajax({
    type: "get",
    url: "usertier.php",
    success: function (data) {
      let json = JSON.parse(data);
      var count1 = 0;
      var count2 = 0;
      var count3 = 0;
      for (const x of json) {
        var totalbudget = x.totalbudget;
        var name = x.username;
        var email = x.email;
        var phnumber = x.phonenumber;
        var address = x.address;
        if (x.totalbudget > 3099) {
          count1++;
          $("#table1").append(
            `
            <tr class="tr table-success">
            <td class="table-primary">${count1}</td>
            <td class="name table-primary">${name}</td>
            <td class="orderid table-primary">${email}</td>
            <td class="table-primary">${phnumber}</td>
            <td class="table-primary">${address}</td>
            <td class="table-primary">${totalbudget
              .toString()
              .replace(/\B(?=(\d{3})+(?!\d))/g, ",")}$</td>
        </tr>
          `
          );
        }
        if (x.totalbudget > 999 && x.totalbudget < 3000) {
          count2++;
          $("#table2 tbody").append(
            `
            <tr class="tr table-success">
            <td class="table-primary">${count2}</td>
            <td class="table-primary">${name}</td>
            <td class="table-primary">${email}</td>
            <td class="table-primary">${phnumber}</td>
            <td class="table-primary">${address}</td>
            <td class="table-primary">${totalbudget
              .toString()
              .replace(/\B(?=(\d{3})+(?!\d))/g, ",")}$</td>
        </tr>
          `
          );
        }
        if (x.totalbudget > 500 && x.totalbudget < 1000) {
          count3++;
          $("#table3 tbody").append(
            `
            <tr class="tr table-success">
            <td class="table-primary">${count3}</td>
            <td class="table-primary">${name}</td>
            <td class="table-primary">${email}</td>
            <td class="table-primary">${phnumber}</td>
            <td class="table-primary">${address}</td>
            <td class="table-primary">${totalbudget
              .toString()
              .replace(/\B(?=(\d{3})+(?!\d))/g, ",")}$</td>
        </tr>
          `
          );
        }
      }
    },
  });
});

$.get("../../def.html", function (data) {
  $("body").prepend(data);
});

$.get("../../deflink.html", function (data) {
  $("head").prepend(data);
  sessionStorage.setItem("AdminName", AdminName);
  $("#adminName").text(sessionStorage.getItem("AdminName"));
  document
    .getElementById("href1")
    .setAttribute(
      "href",
      "../DashBoard/DashBoard.php?name=" + sessionStorage.getItem("AdminName")
    );
  document
    .getElementById("href2")
    .setAttribute(
      "href",
      "../Stockmanagement/stockmanagement.php?name=" +
        sessionStorage.getItem("AdminName")
    );
  document
    .getElementById("href3")
    .setAttribute(
      "href",
      "../CustomerInfo/Customerinfo.php?name=" +
        sessionStorage.getItem("AdminName")
    );
  document
    .getElementById("href4")
    .setAttribute(
      "href",
      "../Transcation/Transcation.php?name=" +
        sessionStorage.getItem("AdminName")
    );
  document
    .getElementById("href5")
    .setAttribute(
      "href",
      "../FeedBack/feedback.php?name=" + sessionStorage.getItem("AdminName")
    );
  const d = new Date();
  let date = d.getDate();
  let minute = d.getMinutes();
  let hour = d.getHours();

  localStorage.setItem("LastSigninTime", hour + ":" + minute);
  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  let month = months[d.getMonth()];
  document.getElementById("date").innerHTML = month + "/" + date;

  if (sessionStorage.getItem("AdminName") == "Zay") {
    document.getElementById("adminPic").setAttribute("src", "~Chuky~.jpg");
  }
  if (sessionStorage.getItem("AdminName") == "Zar") {
    document
      .getElementById("adminPic")
      .setAttribute(
        "src",
        "Lets go home, cityscape, bicycle ride, sunset, clouds, art wallpaper.png"
      );
  }
  if (sessionStorage.getItem("AdminName") == "Zaw") {
    document
      .getElementById("adminPic")
      .setAttribute("src", "A sunset behind the mountain [3840x2160].jpg");
  }
  if (sessionStorage.getItem("AdminName") == "Phu") {
    document.getElementById("adminPic").setAttribute("src", "flower.jpg");
  }
});
