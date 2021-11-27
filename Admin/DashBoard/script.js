var stock = [];
var categories = [];
$(document).ready(function () {
  //to get remain stock

  $.ajax({
    type: "get",
    url: "stock.php",
    success: function (data) {
      let json = JSON.parse(data);
      for (const x of json) {
        stock.push(x.stock);
        var gender = x.gender;
        var category = x.category;
        if (gender == "1") gender = "Man";
        else if (gender == "2") gender = "Woman";
        else if (gender == "3") gender = "Kid";
        if (category == "1") category = "Shirt";
        else if (category == "2") category = "Pant";
        else if (category == "3") category = "Shoe";
        categories.push(category + "(" + gender + ")");
      }

      var options = {
        series: [
          {
            name: "Total Stock",
            data: stock,
          },
        ],
        chart: {
          type: "bar",
          height: 350,
          toolbar: {
            show: false,
          },
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: "55%",
            endingShape: "rounded",
          },
        },
        dataLabels: {
          enabled: false,
        },
        title: {
          text: "Remain Stock",
          align: "left",
          style: {
            fontSize: "20px",
          },
        },
        stroke: {
          show: true,
          width: 2,
          colors: ["transparent"],
        },
        xaxis: {
          categories: categories,
        },
        yaxis: {
          title: {
            text: "InStock",
          },
        },
        fill: {
          opacity: 1,
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val;
            },
          },
        },
      };

      var chart = new ApexCharts(document.getElementById("chart"), options);
      chart.render();
    },
  });
  var revenue = [];
  var revenuecategory = [];
  $.ajax({
    type: "get",
    url: "secondchart.php",
    success: function (data) {
      let json = JSON.parse(data);
      for (const x of json) {
        revenue.push(x.revenue);
        var gender = x.ordergender;
        var category = x.ordercategory;
        if (gender == "1") gender = "Man";
        else if (gender == "2") gender = "Woman";
        else if (gender == "3") gender = "Kid";
        if (category == "1") category = "Shirt";
        else if (category == "2") category = "Pant";
        else if (category == "3") category = "Shoe";
        revenuecategory.push(category + "(" + gender + ")");
      }
      var options = {
        series: [
          {
            name: "Desktops",
            data: revenue,
          },
        ],
        chart: {
          height: 350,
          type: "line",
          zoom: {
            enabled: false,
          },
          toolbar: {
            show: false,
          },
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: "straight",
        },
        title: {
          text: "Earning",
          align: "left",
          style: {
            fontSize: "20px",
          },
        },
        grid: {
          row: {
            colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
            opacity: 0.5,
          },
        },
        xaxis: {
          categories: revenuecategory,
        },
      };

      var chart = new ApexCharts(document.querySelector("#secChart"), options);
      chart.render();
    },
  });

  $.ajax({
    type: "get",
    url: "popularitems.php",
    success: function (data) {
      let json = JSON.parse(data);
      var ordercategories = [];
      var orderquantity = [];
      for (const x of json) {
        orderquantity.push(Number(x.quantity));
        var gender = x.ordergender;
        var category = x.ordercategory;
        if (gender == "1") gender = "Man";
        else if (gender == "2") gender = "Woman";
        else if (gender == "3") gender = "Kid";
        if (category == "1") category = "Shirt";
        else if (category == "2") category = "Pant";
        else if (category == "3") category = "Shoe";
        ordercategories.push(category + "(" + gender + ")");
      }

      orderquantity.sort(function (a, b) {
        return b - a;
      });
      var highquantity = [];
      for (let index = 0; index < orderquantity.length; index++) {
        if (index < 5) highquantity.push(orderquantity[index]);
      }
      console.log(highquantity);

      ordercategories.sort(function (a, b) {
        return b - a;
      });

      var highcategories = [];
      for (let index = 0; index < ordercategories.length; index++) {
        if (index < 5) highcategories.push(ordercategories[index]);
      }

      var options = {
        series: highquantity,
        chart: {
          type: "pie",
        },
        labels: highcategories,
        responsive: [
          {
            breakpoint: 480,
            options: {
              chart: {
                width: 200,
              },
              legend: {
                position: "bottom",
              },
            },
          },
        ],
      };

      var chart = new ApexCharts(document.querySelector("#pie"), options);
      chart.render();

      // orderquantity.sort(function(a, b) {
      //   return   a-b;
      // });
      var lowquantity = [];
      for (let index = 0; index < orderquantity.length; index++) {
        if (index > 4) lowquantity.push(orderquantity[index]);
      }

      // ordercategories.sort(function(a, b) {
      //   return   a-b;
      // });
      var lowcategories = [];
      for (let index = 0; index < ordercategories.length; index++) {
        if (index > 4) lowcategories.push(ordercategories[index]);
      }

      var options = {
        series: lowquantity,
        chart: {
          type: "donut",
        },

        labels: lowcategories,
        responsive: [
          {
            breakpoint: 480,
            options: {
              chart: {
                width: 200,
              },
              legend: {
                position: "bottom",
              },
            },
          },
        ],
      };

      var chart = new ApexCharts(document.querySelector("#donut"), options);
      chart.render();
    },
  });
  // $("#logout").click(function () {
  //   window.alert("hello");
  //   Swal.fire({
  //     title: "Are you sure to logout?",
  //     icon: "warning",
  //     showCancelButton: true,
  //     confirmButtonColor: "#3085d6",
  //     cancelButtonColor: "#d33",
  //     confirmButtonText: "Yes, Please",
  //   }).then((result) => {
  //     if (result.isConfirmed) {
  //       window.open("../LoginForm/login.php");
  //     }
  //   });
  // });
});

$.get("../../deflink.html", function (data) {
  $("head").prepend(data);
});

$.get("../../def.html", function (data) {
  $("body").prepend(data);
  sessionStorage.setItem("AdminName", AdminName);
  $("#adminName").text(sessionStorage.getItem("AdminName"));
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

$.ajax({
  type: "get",
  url: "search.php",
  success: function (data) {
    let json = JSON.parse(data);
    $("#visit").text(json);
  },
});
$.ajax({
  type: "get",
  url: "totalstock.php",
  success: function (data) {
    let json = JSON.parse(data);
    $("#totalstocks").text(json);
  },
});
$.ajax({
  type: "get",
  url: "feedback.php",
  success: function (data) {
    let json = JSON.parse(data);
    $("#feedback").text(json);
  },
});
$.ajax({
  type: "get",
  url: "totalorder.php",
  success: function (data) {
    let json = JSON.parse(data);
    $("#totalorder").text(json);
  },
});
$.ajax({
  type: "get",
  url: "totalrevenue.php",
  success: function (data) {
    let json = JSON.parse(data);
    $("#revenue").text(data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
  },
});
