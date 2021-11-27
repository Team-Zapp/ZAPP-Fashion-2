$(document).ready(function () {
  $.get("../../deflink.html", function (data) {
    $("head").prepend(data);
  });
  $("#form").on("submit", function (e) {
    e.preventDefault();

    $.ajax({
      type: "post",
      url: "../../Controllers/stockmgmtinsert.php",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (res) {
        let name = $("#name").val();
        let gender = $("#inputGroupSelect01").val();
        let category = $("#inputGroupSelect02").val();
        let orgprice = $("#orgprice").val();
        let saleprice = $("#saleprice").val();
        let made = $("#made").val();
        let stock = $("#stock").val();
        let photoname = res;
        var data = {
          "pdname": name,
          "pdgender": gender,
          "category": category,
          "orgprice": orgprice,
          "saleprice": saleprice,
          "madeof": made,
          "stock": stock,
          "photonames": photoname
        };
        $.ajax({
          type: "post",
          url: "../../Controllers/stockmgmtinsert.php",
          data: { send: JSON.stringify(data) },
          success: function (data) {
            Swal.fire({
              title: "Success",
              backdrop: false,
              text: "Your file has been submitted.",
              icon: "success",
              confirmButtonColor: "#3085d6",
              confirmButtonText: "Ok",
              backdrop: false,
            })
            document.getElementById("chart").innerHTML = "";
            stock = [];
            categories = [];
            remainStock();

          },
          error: function () {
            alert("An Error has Occured");
          },
        });
      },
    });
  });
  document.getElementById("update").addEventListener("click", function () {
    let name = $("#name").val();
    let gender = $("#inputGroupSelect01").val();
    let category = $("#inputGroupSelect02").val();
    let orgprice = $("#orgprice").val();
    let saleprice = $("#saleprice").val();
    let made = $("#made").val();
    let stock = $("#stock").val();
    let id = $("#forid").text();
    var data = {
      "name": name,
      "gender": gender,
      "category": category,
      "orgprice": orgprice,
      "saleprice": saleprice,
      "made": made,
      "stock": stock,
      "id": id,
    };
    $.ajax({
      type: 'post',
      url: 'nameUpdate.php',
      data: {send : JSON.stringify(data)},
      success :function(data){

        Swal.fire({
          title: "Product Successfully Updated",
          icon: "success",
          backdrop: false,
          confirmButtonColor: "#3085d6",
          confirmButtonText: "Ok",
        }).then((result) => {
          if (result.isConfirmed) {
            location.reload();
          }
        });
      },
      error: function(){
        alert("An Error has Occured")
      }
  })


  })
  document.getElementById("delete").addEventListener("click", function () {
    let id = $("#forid").text();
    var data = {
      id: id,
    };
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      backdrop: false,
      showDenyButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
      denyButtonText: `Cancel`,
      backdrop: false,
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "nameDelete.php",
          data: { send: JSON.stringify(data) },
          success: function (data) {
            Swal.fire({
              title: "Deleted!",
              backdrop: false,
              text: "Your file has been deleted.",
              icon: "success",
              confirmButtonColor: "#3085d6",
              confirmButtonText: "Ok",
              backdrop: false,
            }).then((result) => {
              if (result.isConfirmed) {
                location.reload();
              }
            });
          },
        });
      } else if (result.isDenied) {
        Swal.fire({
          title: "Changes are not saved",
          icon: "info",
          backdrop: false,
          confirmButtonColor: "#3085d6",
          confirmButtonText: "Ok",
        }).then((result) => {
          if (result.isConfirmed) {
            location.reload();
          }
        });
      }
    });
  });
  document.getElementById("search").addEventListener("click", function () {
    var name = document.getElementById("name").value;
    $.ajax({
      type: "post",
      url: "nameSearch.php",
      data: "name=" + name,
      success: function (data) {
        let json = JSON.parse(data);
        let count = 1;
        if (json.length == 0) {
          $(".update").attr("class", "update");
          $(".delbth").attr("class", "delbth");
        }
        $(".tr").remove();
        var count1 = 0;
        for (const x of json) {
          var gender = x.gender;
          var category = x.category;
          var name = x.name;
          if (gender == "1") gender = "Man";
          else if (gender == "2") gender = "Woman";
          else if (gender == "3") gender = "Kid";
          if (category == "1") category = "Shirt";
          else if (category == "2") category = "Pant";
          else if (category == "3") category = "Shoe";
          if (count1 == 0) {
            $("#table").append(`
            <tr class="tr">
            <th>No.</th>
            <th>Product Name </th>
            <th>Gender</th>
            <th>Product Catagory</th>
            <th>Original Price</th>
            <th>Sale Price</th>
            <th>Quantities</th>
            </tr>
            `);
          }
          $("#table").append(
            `
                      <tr class="tr"  style="cursor : pointer;">
                        <td>${count++}</td>
                        <td class="name"> ${name}</td>
                        <td class="gender">${gender}</td>
                        <td class="category">${category}</td>
                        <td class="orgprice">${x.orgprice}</td>
                        <td class="saleprice">${x.saleprice}</td>
                        <td class="stock">${x.stock}</td>
                        <td class="id" hidden>${x.id}</td>
                    </tr>
                      `
          );
          count1++;
        }
        $(".tr").click(function () {
          $("#search").focus();
          $(".update").attr("class", "update update_act");
          $(".delbth").attr("class", "delbth delbth_act");
          let name = $(this).find(".name").text();
          let gender = $(this).find(".gender").text();
          let category = $(this).find(".category").text();
          let orgprice = $(this).find(".orgprice").text();
          let saleprice = $(this).find(".saleprice").text();
          let stock = $(this).find(".stock").text();
          let id = $(this).find(".id").text();

          if (gender == "Man") {
            $("#men").attr("selected", "true");
            $("#women").removeAttr("selected");
            $("#kid").removeAttr("selected");
            // $("#women").attr("selected","false")
            // $("#kid").attr("selected","false")
          } else if (gender == "Woman") {
            $("#women").attr("selected", "true");
            $("#men").removeAttr("selected");
            $("#kid").removeAttr("selected");
            // $("#men").attr("selected","false");
            // $("#kid").attr("selected","false")
          } else if (gender == "Kid") {
            $("#kid").attr("selected", "true");
            $("#men").removeAttr("selected");
            $("#women").removeAttr("selected");
            // $("#men").attr("selected","false");
            // $("#women").attr("selected","false")
          }
          if (category == "Shirt") {
            $("#shirt").attr("selected", "true");
            $("#shoe").removeAttr("selected");
            $("#pant").removeAttr("selected");
            // $("#women").attr("selected","false")
            // $("#kid").attr("selected","false")
          } else if (category == "Pant") {
            $("#pant").attr("selected", "true");
            $("#shoe").removeAttr("selected");
            $("#shirt").removeAttr("selected");
            // $("#men").attr("selected","false");
            // $("#kid").attr("selected","false")
          } else if (category == "Shoe") {
            $("#shoe").attr("selected", "true");
            $("#pant").removeAttr("selected");
            $("#shirt").removeAttr("selected");
            // $("#men").attr("selected","false");
            // $("#women").attr("selected","false")
          }
          $("#name").val(name);
          $("#orgprice").val(orgprice);
          $("#saleprice").val(saleprice);
          $("#stock").val(stock);
          $("#forid").text(id);
          trim($str, "Hed!");
        });
      },
    });
  });

  $.get("../../def.html", function (data) {
    $("body").prepend(data);
    sessionStorage.setItem("AdminName", AdminName);
    $("#adminName").text(sessionStorage.getItem("AdminName"));
    document
      .getElementById("href1")
      .setAttribute(
        "href",
        "../DashBoard/DashBoard.php?name=" + sessionStorage.getItem("AdminName")
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
});
var stock = [];
var categories = [];
remainStock();
function remainStock() {
  $.ajax({
    type: "get",
    url: "stock.php",
    success: function (data) {
      let json = JSON.parse(data);
      stock = [];
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
      var options = null;
      console.log(stock);
      options = {
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
          align: "center",
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

      let chart = new ApexCharts(document.getElementById("chart"), options);
      chart.render();
    },
  });
}

/*var options = {
  series: [
    {
      name: "Remain Stock",
      data: [80, 55, 57, 56, 61, 58, 63, 60, 66, 11],
    }

  ],
  chart: {
    type: "bar",
    height: 350,
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
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },
  xaxis: {
    categories: [
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Dec",
    ],
  },
  yaxis: {
    title: {
      text: "$ (thousands)",
    },
  },
  fill: {
    opacity: 1,
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return "$ " + val + " thousands";
      },
    },
  },
};

var chart = new ApexCharts(document.getElementById("chart"), options);
chart.render();*/
