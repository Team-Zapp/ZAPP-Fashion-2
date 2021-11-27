//ready

$(document).ready(function () {
  // set initial visibility of [Add to Your Cart] Alert
  document.getElementById("cart-alert-parent").style.visibility = "hidden";

  /*$("#toleft").click(function(){
    var name =document.getElementById("toleft").getAttribute("name")
    if(name=="chevron-back-outline") {
      $("#toleft").attr("name","chevron-forward-outline")
      
    }
    else if(name=="chevron-forward-outline") {
      $("#toleft").attr("name","chevron-back-outline")
      
    }
  })*/
  document.getElementById("btnCheckout").addEventListener("click", function () {
    let senddata = [];
    let cartid = document.getElementsByClassName("cartid");
    let itemprice = document.getElementsByClassName("cartitemprice");
    let quantity = document.getElementsByClassName("cartquantity");
    let itemname = document.getElementsByClassName("cartitemname");

    for (let index = 0; index < cartid.length; index++) {
      var data = {
        name: itemname[index].innerHTML,
        cartid: cartid[index].innerHTML,
        itemprice: itemprice[index].innerHTML,
        quantity: quantity[index].value,
        userid: UserID,
      };
      senddata.push(data);
    }

    $.ajax({
      type: "post",
      url: "productinsert.php",
      data: { send: JSON.stringify(senddata) },
      success: function (data) {
        let returnmessage = JSON.parse(data);
        if (returnmessage["success"] == false) {
          Swal.fire({
            icon: "error",
            title: "Oops... Sorry",
            text: `${returnmessage["message"]}`,
          });
        } else {
          Swal.fire({
            title: "Thanks for your purchase",
            text: "Your purchase successful",
            icon: "success",
            backdrop: false,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Ok",
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload();
            }
          });
        }
      },
      error: function () {
        alert("An Error has Occured");
      },
    });
  });
  $("#feedback").click(function () {
    $("#feedbackform").attr(
      "href",
      "feedbackform.php?id=" + sessionStorage.getItem("UserID")
    );
  });
  $.get("cslinks.html", function (data) {
    $("head").prepend(data);
  });
  $.ajax({
    type: "get",
    url: "add.php",
    success: function (data) {
      let Mdata = JSON.parse(data);
      console.log(Mdata);
      //Men Variable
      var MS = 0;
      var MSH = 0;
      var MP = 0;
      var loop = 0;
      var loop1 = 0;
      var loop2 = 0;
      //Women Variable
      var WS = 0;
      var WSH = 0;
      var WP = 0;
      var loop3 = 0;
      var loop4 = 0;
      var loop5 = 0;
      //Kid Variable
      var KS = 0;
      var KSH = 0;
      var KP = 0;
      var loop6 = 0;
      var loop7 = 0;
      var loop8 = 0;

      //Men Variable
      var idMS = 100;
      var idMSH = 300;
      var idMP = 200;
      //Women Variable
      var idWS = 400;
      var idWSH = 600;
      var idWP = 500;
      //Kid Variable
      var idKS = 700;
      var idKSH = 900;
      var idKP = 800;

      for (const iterator of Mdata) {
        if (iterator.gender == "1") {
          if (iterator.category == "1") {
            let start = "";
            let end = "";
            let inner = "#MenShirt";
            if (MS == 0) {
              loop++;
              start = ` <div class="carousel-item active"><div class="row MenShirt${loop}">`;
              end = "</div></div>";
            } else if (MS % 3 == 0) {
              loop++;
              start = `<div class="carousel-item "><div class="row MenShirt${loop}"> `;
              end = "</div></div>";
              inner = "#MenShirt";
            } else {
              start = "";
              end = "";
              inner = `.MenShirt${loop}`;
            }
            $(`${inner}`).append(
              `${start}
            <div class="col-md-4 mb-3">
              <div class="card slcard MSlength">
                <img class="img-fluid" src="../Admin/Stockmanagement/pdphotos/${iterator.photoname}" />
                <div class="card-body justify-content-center
                    d-flex
                    flex-column">
                  <h4 class="card-title Mshirtprice" id="${idMS}">${iterator.saleprice}$</h4>
                  <p class="card-text Mshirtname itemtag ">${iterator.name}</p>
                  <p style="display: none;" id="itemid${idMS}">${iterator.id}</p>
                  <p class="remainingstock">Remaining Stock :${iterator.stock}</p>
                  <button href="" class="btn btn-primary btnaddcart">Add to Cart</button>
                </div>
              </div>
            </div>
            ${end}`
            );
            MS++;
            idMS++;
          } else if (iterator.category == "2") {
            let start = "";
            let end = "";
            let inner = "#MenPant";
            if (MP == 0) {
              loop1++;
              start = ` <div class="carousel-item active"><div class="row MenPant${loop1}">`;
              end = "</div></div>";
            } else if (MP % 3 == 0) {
              loop1++;
              start = `<div class="carousel-item "><div class="row MenPant${loop1}"> `;
              end = "</div></div>";
              inner = "#MenPant";
            } else {
              start = "";
              end = "";
              inner = `.MenPant${loop1}`;
            }
            $(`${inner}`).append(
              `${start}
            <div class="col-md-4 mb-3">
              <div class="card slcard MPlength">
                <img class="img-fluid" src="../Admin/Stockmanagement/pdphotos/${iterator.photoname}" />
                <div class="card-body justify-content-center
                    d-flex
                    flex-column">
                  <h4 class="card-title Mpantprice" id="${idMP}">${iterator.saleprice}$</h4>
                  <p class="card-text Mpantname itemtag ">${iterator.name}</p>
                  <p style="display: none;" id="itemid${idMP}">${iterator.id}</p>
                  <p class="remainingstock">Remaining Stock :${iterator.stock}</p>
                  <button href="" class="btn btn-primary btnaddcart">Add to Cart</button>
                </div>
              </div>
            </div>
            ${end}`
            );
            MP++;
            idMP++;
          } else if (iterator.category == "3") {
            let start = "";
            let end = "";
            let inner = "#MenShoe";
            if (MSH == 0) {
              loop2++;
              start = ` <div class="carousel-item active"><div class="row MenShoe${loop2}">`;
              end = "</div></div>";
            } else if (MSH % 3 == 0) {
              loop2++;
              start = `<div class="carousel-item "><div class="row MenShoe${loop2}"> `;
              end = "</div></div>";
              inner = "#MenShoe";
            } else {
              start = "";
              end = "";
              inner = `.MenShoe${loop2}`;
            }
            $(`${inner}`).append(
              `${start}
            <div class="col-md-4 mb-3">
              <div class="card slcard MSHlenght">
                <img class="img-fluid" src="../Admin/Stockmanagement/pdphotos/${iterator.photoname}" />
                <div class="card-body justify-content-center
                    d-flex
                    flex-column">
                  <h4 class="card-title Mshoeprice" id="${idMSH}">${iterator.saleprice}$</h4>
                  <p class="card-text Mshoename itemtag ">${iterator.name}</p>
                  <p style="display: none;" id="itemid${idMSH}">${iterator.id}</p>
                  <p class="remainingstock">Remaining Stock :${iterator.stock}</p>
                  <button href="" class="btn btn-primary btnaddcart">Add to Cart</button>
                </div>
              </div>
            </div>
            ${end}`
            );
            MSH++;
            idMSH++;
          }
        }
        //women shirt
        if (iterator.gender == "2") {
          if (iterator.category == "1") {
            let start = "";
            let end = "";
            let inner = "#WomenShirt";
            if (WS == 0) {
              loop3++;
              start = ` <div class="carousel-item active"><div class="row WomenShirt${loop3}">`;
              end = "</div></div>";
            } else if (WS % 3 == 0) {
              loop3++;
              start = `<div class="carousel-item "><div class="row WomenShirt${loop3}"> `;
              end = "</div></div>";
              inner = "#WomenShirt";
            } else {
              start = "";
              end = "";
              inner = `.WomenShirt${loop3}`;
            }
            $(`${inner}`).append(
              `${start}
            <div class="col-md-4 mb-3">
              <div class="card slcard WSlenght">
                <img class="img-fluid" src="../Admin/Stockmanagement/pdphotos/${iterator.photoname}" />
                <div class="card-body justify-content-center
                    d-flex
                    flex-column">
                  <h4 class="card-title Wshirtprice" id="${idWS}">${iterator.saleprice}$</h4>
                  <p class="card-text Wshirtname itemtag ">${iterator.name}</p>
                  <p style="display: none;" id="itemid${idWS}">${iterator.id}</p>
                  <p class="remainingstock">Remaining Stock :${iterator.stock}</p>
                  <button href="" class="btn btn-primary btnaddcart">Add to Cart</button>
                </div>
              </div>
            </div>
            ${end}`
            );
            WS++;
            idWS++;
          } else if (iterator.category == "2") {
            let start = "";
            let end = "";
            let inner = "#WomenPant";
            if (WP == 0) {
              loop4++;
              start = ` <div class="carousel-item active"><div class="row WomenPant${loop4}">`;
              end = "</div></div>";
            } else if (WP % 3 == 0) {
              loop4++;
              start = `<div class="carousel-item "><div class="row WomenPant${loop4}"> `;
              end = "</div></div>";
              inner = "#WomenPant";
            } else {
              start = "";
              end = "";
              inner = `.WomenPant${loop4}`;
            }
            $(`${inner}`).append(
              `${start}
            <div class="col-md-4 mb-3">
              <div class="card slcard WSlenght">
                <img class="img-fluid" src="../Admin/Stockmanagement/pdphotos/${iterator.photoname}" />
                <div class="card-body justify-content-center
                    d-flex
                    flex-column">
                  <h4 class="card-title Wpantprice" id="${idWP}">${iterator.saleprice}$</h4>
                  <p class="card-text Wpantname itemtag ">${iterator.name}</p>
                  <p style="display: none;" id="itemid${idWP}">${iterator.id}</p>
                  <p class="remainingstock">Remaining Stock :${iterator.stock}</p>
                  <button href="" class="btn btn-primary btnaddcart">Add to Cart</button>
                </div>
              </div>
            </div>
            ${end}`
            );
            WP++;
            idWP++;
          } else if (iterator.category == "3") {
            let start = "";
            let end = "";
            let inner = "#WomenShoe";
            if (WSH == 0) {
              loop5++;
              start = ` <div class="carousel-item active"><div class="row WomenShoe${loop5}">`;
              end = "</div></div>";
            } else if (WSH % 3 == 0) {
              loop5++;
              start = `<div class="carousel-item "><div class="row WomenShoe${loop5}"> `;
              end = "</div></div>";
              inner = "#WomenShoe";
            } else {
              start = "";
              end = "";
              inner = `.WomenShoe${loop5}`;
            }
            $(`${inner}`).append(
              `${start}
            <div class="col-md-4 mb-3">
              <div class="card slcard WSHlength">
                <img class="img-fluid" src="../Admin/Stockmanagement/pdphotos/${iterator.photoname}" />
                <div class="card-body justify-content-center
                    d-flex
                    flex-column">
                  <h4 class="card-title Wshoeprice" id="${idWSH}">${iterator.saleprice}$</h4>
                  <p class="card-text Wshoename itemtag ">${iterator.name}</p>
                  <p style="display: none;" id="itemid${idWSH}">${iterator.id}</p>
                  <p class="remainingstock">Remaining Stock :${iterator.stock}</p>
                  <button href="" class="btn btn-primary btnaddcart">Add to Cart</button>
                </div>
              </div>
            </div>
            ${end}`
            );
            WSH++;
            idWSH++;
          }
        }
        if (iterator.gender == "3") {
          if (iterator.category == "1") {
            let start = "";
            let end = "";
            let inner = "#Kidshirt";
            if (KS == 0) {
              loop6++;
              start = ` <div class="carousel-item active"><div class="row Kidshirt${loop6}">`;
              end = "</div></div>";
            } else if (KS % 3 == 0) {
              loop6++;
              start = `<div class="carousel-item "><div class="row Kidshirt${loop6}"> `;
              end = "</div></div>";
              inner = "#Kidshirt";
            } else {
              start = "";
              end = "";
              inner = `.Kidshirt${loop6}`;
            }
            $(`${inner}`).append(
              `${start}
            <div class="col-md-4 mb-3">
              <div class="card slcard KSlength">
                <img class="img-fluid" src="../Admin/Stockmanagement/pdphotos/${iterator.photoname}" />
                <div class="card-body justify-content-center
                    d-flex
                    flex-column">
                  <h4 class="card-title Kidshirtprice" id="${idKS}">${iterator.saleprice}$</h4>
                  <p class="card-text Kidshirtname itemtag ">${iterator.name}</p>
                  <p style="display: none;" id="itemid${idKS}">${iterator.id}</p>
                  <p class="remainingstock">Remaining Stock :${iterator.stock}</p>
                  <button href="" class="btn btn-primary btnaddcart">Add to Cart</button>
                </div>
              </div>
            </div>
            ${end}`
            );
            KS++;
            idKS++;
          } else if (iterator.category == "2") {
            let start = "";
            let end = "";
            let inner = "#Kidpant";
            if (KP == 0) {
              loop7++;
              start = ` <div class="carousel-item active"><div class="row Kidpant${loop7}">`;
              end = "</div></div>";
            } else if (KP % 3 == 0) {
              loop7++;
              start = `<div class="carousel-item "><div class="row Kidpant${loop7}"> `;
              end = "</div></div>";
              inner = "#Kidpant";
            } else {
              start = "";
              end = "";
              inner = `.Kidpant${loop7}`;
            }
            $(`${inner}`).append(
              `${start}
            <div class="col-md-4 mb-3">
              <div class="card slcard KSlength">
                <img class="img-fluid" src="../Admin/Stockmanagement/pdphotos/${iterator.photoname}" />
                <div class="card-body justify-content-center
                    d-flex
                    flex-column">
                  <h4 class="card-title Kidpantprice" id="${idKP}">${iterator.saleprice}$</h4>
                  <p class="card-text Kidpantname itemtag ">${iterator.name}</p>
                  <p style="display: none;" id="itemid${idKP}">${iterator.id}</p>
                  <p class="remainingstock">Remaining Stock :${iterator.stock}</p>
                  <button href="" class="btn btn-primary btnaddcart">Add to Cart</button>
                </div>
              </div>
            </div>
            ${end}`
            );
            KP++;
            idKP++;
          } else if (iterator.category == "3") {
            let start = "";
            let end = "";
            let inner = "#Kidshoe";
            if (KSH == 0) {
              loop8++;
              start = ` <div class="carousel-item active"><div class="row Kidshoe${loop8}">`;
              end = "</div></div>";
            } else if (KSH % 3 == 0) {
              loop8++;
              start = `<div class="carousel-item "><div class="row Kidshoe${loop8}"> `;
              end = "</div></div>";
              inner = "#Kidshoe";
            } else {
              start = "";
              end = "";
              inner = `.Kidshoe${loop8}`;
            }
            $(`${inner}`).append(
              `${start}
            <div class="col-md-4 mb-3">
              <div class="card slcard WSHlength">
                <img class="img-fluid" src="../Admin/Stockmanagement/pdphotos/${iterator.photoname}" />
                <div class="card-body justify-content-center
                    d-flex
                    flex-column">
                  <h4 class="card-title Kidshoeprice" id="${idKSH}">${iterator.saleprice}$</h4>
                  <p class="card-text Kidshoename itemtag " >${iterator.name}</p>
                  <p style="display: none;" id="itemid${idKSH}">${iterator.id}</p>
                  <p class="remainingstock">Remaining Stock :${iterator.stock}</p>
                  <button href="" class="btn btn-primary btnaddcart">Add to Cart</button>
                </div>
              </div>
            </div>
            ${end}`
            );
            KSH++;
            idKSH++;
          }
        }
      }
      var emptyMshoecard = document.getElementsByClassName("MSHlength")
      var emptyMshirtcard = document.getElementsByClassName("MSlength")
      var emptyMpantcard = document.getElementsByClassName("MPlength")
      var emptyWshirtcard = document.getElementsByClassName("WSlength")
      var emptyWpantcard = document.getElementsByClassName("WPlength")
      var emptyWshoecard = document.getElementsByClassName("WSHlength")
      var emptyKshirtcard = document.getElementsByClassName("KSlength")
      var emptyKpantcard = document.getElementsByClassName("KPlength")
      var emptyKshoecard = document.getElementsByClassName("KSHlength")
      if(emptyMshirtcard.length == 0){
        $(".mshirt").css("display","none");
        $(".mshirtbtn").css("display","none");
      }
      if(emptyMshoecard.length == 0){
        $(".mshoe").css("display","none");
        $(".mshoebtn").css("display","none");
      }
      if(emptyMpantcard.length == 0){
        $(".mpant").css("display","none");
        $(".mspantbtn").css("display","none");
      }
      if(emptyWshirtcard.length == 0){
        $(".wshirt").css("display","none");
        $(".wshirtbtn").css("display","none");
      }
      if(emptyWpantcard.length == 0){
        $(".wpant").css("display","none");
        $(".wpantbtn").css("display","none");
      }
      if(emptyWshoecard.length == 0){
        $(".wshoe").css("display","none");
        $(".wshoebtn").css("display","none");
      }
      if(emptyKshirtcard.length == 0){
        $(".kshirt").css("display","none");
        $(".kshirtbtn").css("display","none");
      }
      if(emptyKpantcard.length == 0){
        $(".kpant").css("display","none");
        $(".kpantbtn").css("display","none");
      }
      if(emptyKshoecard.length == 0){
        $(".kshoe").css("display","none");
        $(".kshoebtn").css("display","none");
      }
      /* Start Shipping Cart (Phu) */
      removeItem();

      //Add Item To Cart

      var cartBtn = document.querySelectorAll(".btnaddcart");
      cartBtn.forEach(function (btn) {
        btn.addEventListener("click", function (event) {
          let imgSrc = event.target.parentElement.previousElementSibling.src;
          let pname = event.target.parentElement.childNodes[3].textContent;
          let pcode = event.target.parentElement.childNodes[1].id;
          let price = event.target.parentElement.childNodes[1].textContent;
          let itemid = event.target.parentElement.childNodes[5].textContent;
          console.log(event);
          var item = {};
          newItem = pcode;
          item.img = imgSrc;
          item.title = pname;
          item.ID = pcode;
          item.price = price;
          item.itemid = itemid;

          check = "";
          alreadyAdded();
          if (check === false) {
            var cartItem = document.createElement("div");
            cartItem.classList.add(
              "cart-item",
              "d-flex",
              "justify-content-between",
              "text-capitalize",
              "my-3",
              "border-bottom"
            );
            // cartItem.innerHTML = `<img src="
            //   ${item.img}
            //   " id="item-img" alt=""><div class="item-text"><p id="cart-item-title" class="font-weight-bold mb-0 cartitemname">
            // ${item.title}
            // </p><span class="cart-item-id text-muted" class="mb-0" >(
            // ${item.ID}
            //   )</p><span class="cart-item-id text-muted cartid" class="mb-0" style="visibility: hidden;">
            //   ${item.itemid}
            //   </span>
            //   </div><p id="itemPrice" class="font-weight-bold cartitemprice">
            //   ${item.price}
            //   </p><div class="form-group row"><div class="col-xs-1"><div class="form-group"><select class="form-control cartquantity" id="sel1"><option value=1 selected>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option></select></div></div></div><button type="button" class="btn-close cart-item-remove" aria-label="Close"></button>`;

            cartItem.innerHTML = `<img src="
              ${item.img}
              " id="item-img" alt=""><div class="item-text itemtextpp"><p id="cart-item-title" class="font-weight-bold cartitemname">
            ${item.title}
            </p><span class="cart-item-id text-muted">Item No : 
            ${item.ID}
              </span><span class="cart-item-id text-muted cartid" style="visibility: hidden;">  
              ${item.itemid}
              </span>
              </div><div>
              <p class="font-weight-bold">Price</p>
              <p id="itemPrice" class="fw-normal cartitemprice">${item.price} </p> 
                    </div>
                    <div class="form-group itemqtypp row"><div class=""><div class="form-group"><p class="font-weight-bold">Quantity</p><select class="form-control form-control-sm cartquantity"><option value=1 selected>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option></select></div></div></div><button type="button" class="btn-close cart-item-remove" aria-label="Close"></button>`;

            var cart = document.getElementById("cart");
            var total = document.getElementsByClassName("cart-total-container");
            cart.insertBefore(cartItem, null);
            var dupeFalse = document.getElementById("cart-alert-parent");
            dupeFalse.innerHTML =
              '<div id="cart-alert" class="alert alert-warning" role="alert">Added To Cart</div>';
            document.getElementById("cart-alert").style.visibility = "visible";
            document.getElementById("cart-alert").style.opacity = "1";
            fadeOutEffect();
            showTotals();
<<<<<<< HEAD
            totalcaluate();
=======
            calctotalprice();
>>>>>>> 7810592e6c617c8874e879d7fbb6cb730d9a1425

            //Show Shopping Cart Dialog
            // $("#cart-button").trigger("click");
          } else {
            //you can show Already in your Cart msg with sweet alert
            var dupeTrue = document.getElementById("cart-alert-parent");
            dupeTrue.innerHTML =
              '<div id="cart-alert" class="alert alert-warning" role="alert">Already In Your Cart</div>';
            document.querySelectorAll(".alert-warning")[0].style.visibility =
              "visible";
            document.querySelectorAll(".alert-warning")[0].style.opacity = "1";
            fadeOutEffect();
            calctotalprice();
          }
        });
      });
<<<<<<< HEAD
      //Calculate
      var totalprice = [];
      var calitemprice = document.getElementsByClassName("cartitemprice");
      var calitemqty = document.getElementsByClassName("itemqtypp");
      var grandtotalprice = 0;
      function totalcaluate() {
        for (let index = 0; index < calitemprice.length; index++) {
          totalprice[index] = Number(calitemprice[index].innerHTML) * Number(calitemqty[index].innerHTML);
        }
        for (let index = 0; index < totalprice.length; index++) {
         Number( grandtotalprice) += Number(totalprice[index]);
        }
        $("#grandtotal").text(grandtotalprice);
=======

      //Total Price Calc

      function calctotalprice() {
        var totalprice = [];
        var grandtotal = 0;
        var calcprice = document.getElementsByClassName("cartitemprice");
        var calcitemqty = document.querySelectorAll(".form-control");
        for (let index = 0; index < calcprice.length; index++) {
          totalprice[index] =
            Number(calcprice[index].innerHTML.replace("$", "")) *
            Number(calcitemqty[index].value);
        }
        for (let index = 0; index < totalprice.length; index++) {
          grandtotal += Number(totalprice[index]);
        }
        $("#grandtotal").text(grandtotal + "$");
>>>>>>> 7810592e6c617c8874e879d7fbb6cb730d9a1425
      }
      // Check If Item Is Already In Cart

      var newItem = [];
      var cartCheck = [];
      var check = "";
      var cartCheckStr = "";

      function alreadyAdded() {
        var elements = document.querySelectorAll(".cart-item");
        cartCheck = [];
        for (var i = 0; i < elements.length; i++) {
          cartCheck.push(elements[i].childNodes[1].childNodes[1].innerText);
        }
        cartCheckStr = cartCheck.toString();
        check = cartCheckStr.includes(newItem);
      }

      // Add to Cart PopUp Fade Effect

      function fadeOutEffect() {
        var fadeTarget = document.getElementById("cart-alert");
        var fadeEffect = setInterval(function () {
          if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
          }
          if (fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
          } else {
            clearInterval(fadeEffect);
          }
        }, 100);
      }

      // Cart Functionality

      var itemQty = 0;

      function showTotals() {
        itemQty = 0;

        var elements = document.querySelectorAll(".form-control");
        for (var i = 0; i < elements.length; i++) {
          itemQty += Number(elements[i].value);
          console.log(itemQty);
        }
        if (itemQty == 0) {
          $("#btnCheckout").attr("disabled", true);
          $("#btnCheckout").text("Your Cart Is Empty");
        } else {
          $("#btnCheckout").removeAttr("disabled");
          $("#btnCheckout").text("Check Out");
        }
        document.getElementById("cart-total").textContent = itemQty;
        document.getElementById("cart-total-page").textContent = itemQty;
      }

      // Remove Items

      function removeItem() {
        var element = document.getElementById("cart");
        element.addEventListener("click", function (remove) {
          if (remove.target.matches(".cart-item-remove")) {
            var cartItemRemove = remove.target.parentElement;
            cartItemRemove.remove();
            showTotals();
            calctotalprice();
          }
        });
      }

      //Continue Shopping Button click
      btnContinue.addEventListener("click", function () {
        $("#close").click();
      });

      // Monitor Quantity
      document.addEventListener(
        "change",
        function (event) {
          if (event.target.classList.contains("form-control")) {
            showTotals();
            calctotalprice();
          }
        },
        false
      );

      // Hide elements that are not selected

      function RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
          }
        }
        element.className = arr1.join(" ");
      }

      /*End Shipping Cart (Phu) */
    },
  });
  //zayar
  sessionStorage.setItem("UserID", UserID);

  var name = sessionStorage.getItem("UserID");
  $.ajax({
    type: "post",
    url: "usertable.php",
    data: "id=" + name,
    success: function (data) {
      console.log(data);
      let profiledata = JSON.parse(data);
      console.log(profiledata);
      $("#profilenames").text(profiledata[0]["name"]);
      $("#profileemailaddress").text(profiledata[0]["email"]);
    },
  });
});
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

//display function

$(".manbtn").click(function () {
  $(".Women").css("display", "none");
  $(".Home").css("display", "none");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "block");
  $(".tag").text("MEN");
  $("#shirt").css("display", "block");
  $("#shoe").css("display", "block");
  $("#pants").css("display", "block");
  document.getElementById("shirt").href = "#scrollspyHeading1";
  document.getElementById("pants").href = "#scrollspyHeading2";
  document.getElementById("shoe").href = "#scrollspyHeading3";
});

$(".kidbtn").click(function () {
  $(".Women").css("display", "none");
  $(".Home").css("display", "none");
  $(".Kid").css("display", "block");
  $(".Men").css("display", "none");
  $(".tag").text("KID");
  $("#shirt").css("display", "block");
  $("#shoe").css("display", "block");
  $("#pants").css("display", "block");
  document.getElementById("shirt").href = "#scrollspyHeading7";
  document.getElementById("pants").href = "#scrollspyHeading8";
  document.getElementById("shoe").href = "#scrollspyHeading9";
});

$(".womanbtn").click(function () {
  $(".Women").css("display", "block");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "none");
  $(".Home").css("display", "none");
  $(".tag").text("WOMEN");
  $("#shirt").css("display", "block");
  $("#shoe").css("display", "block");
  $("#pants").css("display", "block");
  document.getElementById("shirt").href = "#scrollspyHeading4";
  document.getElementById("pants").href = "#scrollspyHeading5";
  document.getElementById("shoe").href = "#scrollspyHeading6";
});

$(".homebtn").click(function () {
  $(".Women").css("display", "none");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "none");
  $(".Home").css("display", "block");
  $(".tag").text("HOME");
  $("#shirt").css("display", "none");
  $("#shoe").css("display", "none");
  $("#pants").css("display", "none");
  document.getElementById("shirt").href = "#scrollspyHeading10";
  document.getElementById("pants").href = "#scrollspyHeading11";
  document.getElementById("shoe").href = "#scrollspyHeading12";
});
//logo click
$(".logo").click(function () {
  $(".Women").css("display", "none");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "none");
  $(".Home").css("display", "block");
  $(".tag").text("HOME");
  $("#shirt").css("display", "none");
  $("#shoe").css("display", "none");
  $("#pants").css("display", "none");
});
//Home Btn
$("#hmbtn1").click(function () {
  $(".Women").css("display", "none");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "block");
  $(".Home").css("display", "none");
  $(".tag").text("MEN");
  $("#shirt").css("display", "block");
  $("#shoe").css("display", "block");
  $("#pants").css("display", "block");
});
$("#hmbtn2").click(function () {
  $(".Women").css("display", "block");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "none");
  $(".Home").css("display", "none");
  $(".tag").text("WOMEN");
  $("#shirt").css("display", "block");
  $("#shoe").css("display", "block");
  $("#pants").css("display", "block");
});
//user Profile click
$(".profile").click(function () {
  $(".userprofile").toggleClass("userprofileactive", 2000);
});
// HOME PAGE JS
// HOME PAGE JS
(function () {
  var $$ = function (selector, context) {
    var context = context || document;
    var elements = context.querySelectorAll(selector);
    return [].slice.call(elements);
  };

  function _fncSliderInit($slider, options) {
    var prefix = ".fnc-";

    var $slider = $slider;
    var $slidesCont = $slider.querySelector(prefix + "slider__slides");
    var $slides = $$(prefix + "slide", $slider);
    var $controls = $$(prefix + "nav__control", $slider);
    var $controlsBgs = $$(prefix + "nav__bg", $slider);
    var $progressAS = $$(prefix + "nav__control-progress", $slider);

    var numOfSlides = $slides.length;
    var curSlide = 1;
    var sliding = false;
    var slidingAT =
      +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000;
    var slidingDelay =
      +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000;

    var autoSlidingActive = false;
    var autoSlidingTO;
    var autoSlidingDelay = 5000; // default autosliding delay value
    var autoSlidingBlocked = false;

    var $activeSlide;
    var $activeControlsBg;
    var $prevControl;

    function setIDs() {
      $slides.forEach(function ($slide, index) {
        $slide.classList.add("fnc-slide-" + (index + 1));
      });

      $controls.forEach(function ($control, index) {
        $control.setAttribute("data-slide", index + 1);
        $control.classList.add("fnc-nav__control-" + (index + 1));
      });

      $controlsBgs.forEach(function ($bg, index) {
        $bg.classList.add("fnc-nav__bg-" + (index + 1));
      });
    }

    setIDs();

    function afterSlidingHandler() {
      $slider
        .querySelector(".m--previous-slide")
        .classList.remove("m--active-slide", "m--previous-slide");
      $slider
        .querySelector(".m--previous-nav-bg")
        .classList.remove("m--active-nav-bg", "m--previous-nav-bg");

      $activeSlide.classList.remove("m--before-sliding");
      $activeControlsBg.classList.remove("m--nav-bg-before");
      $prevControl.classList.remove("m--prev-control");
      $prevControl.classList.add("m--reset-progress");
      var triggerLayout = $prevControl.offsetTop;
      $prevControl.classList.remove("m--reset-progress");

      sliding = false;
      var layoutTrigger = $slider.offsetTop;

      if (autoSlidingActive && !autoSlidingBlocked) {
        setAutoslidingTO();
      }
    }

    function performSliding(slideID) {
      if (sliding) return;
      sliding = true;
      window.clearTimeout(autoSlidingTO);
      curSlide = slideID;

      $prevControl = $slider.querySelector(".m--active-control");
      $prevControl.classList.remove("m--active-control");
      $prevControl.classList.add("m--prev-control");
      $slider
        .querySelector(prefix + "nav__control-" + slideID)
        .classList.add("m--active-control");

      $activeSlide = $slider.querySelector(prefix + "slide-" + slideID);
      $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID);

      $slider
        .querySelector(".m--active-slide")
        .classList.add("m--previous-slide");
      $slider
        .querySelector(".m--active-nav-bg")
        .classList.add("m--previous-nav-bg");

      $activeSlide.classList.add("m--before-sliding");
      $activeControlsBg.classList.add("m--nav-bg-before");

      var layoutTrigger = $activeSlide.offsetTop;

      $activeSlide.classList.add("m--active-slide");
      $activeControlsBg.classList.add("m--active-nav-bg");

      setTimeout(afterSlidingHandler, slidingAT + slidingDelay);
    }

    function controlClickHandler() {
      if (sliding) return;
      if (this.classList.contains("m--active-control")) return;
      if (options.blockASafterClick) {
        autoSlidingBlocked = true;
        $slider.classList.add("m--autosliding-blocked");
      }

      var slideID = +this.getAttribute("data-slide");

      performSliding(slideID);
    }

    $controls.forEach(function ($control) {
      $control.addEventListener("click", controlClickHandler);
    });

    function setAutoslidingTO() {
      window.clearTimeout(autoSlidingTO);
      var delay = +options.autoSlidingDelay || autoSlidingDelay;
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 1;

      autoSlidingTO = setTimeout(function () {
        performSliding(curSlide);
      }, delay);
    }

    if (options.autoSliding || +options.autoSlidingDelay > 0) {
      if (options.autoSliding === false) return;

      autoSlidingActive = true;
      setAutoslidingTO();

      $slider.classList.add("m--with-autosliding");
      var triggerLayout = $slider.offsetTop;

      var delay = +options.autoSlidingDelay || autoSlidingDelay;
      delay += slidingDelay + slidingAT;

      $progressAS.forEach(function ($progress) {
        $progress.style.transition = "transform " + delay / 1000 + "s";
      });
    }

    $slider
      .querySelector(".fnc-nav__control:first-child")
      .classList.add("m--active-control");
  }

  var fncSlider = function (sliderSelector, options) {
    var $sliders = $$(sliderSelector);

    $sliders.forEach(function ($slider) {
      _fncSliderInit($slider, options);
    });
  };

  window.fncSlider = fncSlider;
})();

// Homeslide

fncSlider(".example-slider", { autoSlidingDelay: 4000 });

var $demoCont = document.querySelector(".homemainslide");
