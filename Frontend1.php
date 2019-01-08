<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laptop Store</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="./photo/icon/logoMain.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
          <a class="navbar-brand" href="#myPage"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#myPage">TRANG CHỦ</a></li>
            <li><a href="#cheapflower">HOA GIÁ RẺ</a></li>
            <li><a href="#interestflower">HOA ĐƯỢC ĐƯỢC ƯA CHUỘNG</a></li>
            <li><a href="#commonflower">HOA PHỔ BIẾN</a></li>
            <li><a href="#contact">LIÊN HỆ</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">THÔNG TIN THÊM
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./giohang.html">GIỏ hàng</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="./Flowers/newyear.png" alt="Chuc mung nam moi" width="1200" height="700">
        </div>

        <div class="item">
          <img src="./Flowers/heo.jpg" alt="Nam 2019 Ky Hoi" width="1200" height="700">
        </div>

        <div class="item">
          <img src="./Flowers/poster1.png" alt="Hoi cho" width="1200" height="700">
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    <!-- 

        <!- Container (The Band Section) -->



    <div class="container">
      <div class="row">
        <div class="col-md-12" style="text-align: right; margin-right: -15px;">
          <button class="btn btn-default glyphicon glyphicon-shopping-cart" data-toggle="modal" href='#modal-id' style="font-size: 20px;"></button>
        </div>
      </div>
    </div>


    <div id="cheapflower" class="container text-center">

      <!-- <strong style="color: red;"><h2><b>LAPTOP ĐỒ HỌA</b></h2></strong> -->
      <div class="row">
        <h4 style="background: red;"><p>HOA GIÁ RẺ</p></h4>
        <div class="col-sm-4 container1">
	        <a href="#" data-toggle="collapse">
	        	<img src="./Flowers/hoacattuong.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image" >
	      	</a>
	          	<p><strong>HOA CÁT TƯỜNG</strong></p>
	          	<p style="color: blue;">1.000.000 <u>Đ</u></p>
	          	<div class="overlay" style="width: 470px;">
	           </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
        <img src="./Flowers/hoacuc.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
      </a>
          <p><strong>HOA CÚC</strong></p>
          <p style="color: blue;">890.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
          
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
        <img src="./Flowers/hoacamtucau.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
      </a>
          <p><strong>HOA CẨM TÚ CẦU</strong></p>
          <p style="color: blue;">900.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
            
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
        <img src="./Flowers/hoadayenthao.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
      </a>
          <p><strong>HOA DÃ YẾN THẢO</strong></p>
          <p style="color: blue;">750.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
            
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
        <img src="./Flowers/hoahuongduong.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
      </a>
          <p><strong>HOA HƯỚNG DƯƠNG</strong></p>
          <p style="color: blue;">850.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
           
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
        <img src="./Flowers/hoahaiduong.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
      </a>
          <p><strong>HOA HẢI ĐƯỜNG</strong></p>
          <p style="color: blue;">450.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
           
          </div>
        </div>
      </div>
    </div>

    <div id="interestflower" class="container text-center">
      <!--  <h2 style="color: red;"><b>LAPTOP GAMING</b></h2> -->
      <div class="row">
        <h4 style="background: red; color: black;">HOA ĐƯỢC NHIỀU ƯA CHUỘNG</h4>
        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoahongmon.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA HỒNG MÔN</strong></p>
          <p style="color: blue;">400.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
            
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoahong.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA HỒNG</strong></p>
          <p style="color: blue;">1.000.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
            
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoalanhodiep.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA LAN HỒ ĐIỆP</strong></p>
          <p style="color: blue;">500.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
           
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoalayon.jpeg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA LAY ƠN</strong></p>
          <p style="color: blue;">599.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
           
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoamai.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA MAI</strong></p>
          <p style="color: blue;">1.990.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
           
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoathuocduoc.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA THƯỢC DƯỢC</strong></p>
          <p style="color: blue;">1.550.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
            
          </div>
        </div>
      </div>
    </div>


    <div id="commonflower" class="container text-center">
      <div class="row">
        <h4 style="background: red; color: black;">HOA PHỔ BIẾN</h4>
        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoadao.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA ĐÀO</strong></p>
          <p style="color: blue;">1.850.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
            
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoadongtien.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA ĐỒNG TIỀN</strong></p>
          <p style="color: blue;">1.450.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
           
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoadoquyen.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA ĐỖ QUYÊN</strong></p>
          <p style="color: blue;">600.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
            
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoalinhlan.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA LINH LAN</strong></p>
          <p style="color: blue;">650.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
            
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoamaitrang.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p><strong>HOA MAI TRANG</strong></p>
          <p style="color: blue;">485.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
           
          </div>
        </div>

        <div class="col-sm-4 container1">
          <a href="#" data-toggle="collapse">
      <img src="./Flowers/hoathuyvu.jpg" class="img-rounded person" alt="Random Name" width="255" height="255" class="image">
    </a>
          <p style="margin-left: 0px;"><strong>HOA THỦY VU</strong></p>
          <p style="color: blue;">845.000 <u>Đ</u></p>
          <div class="overlay" style="width: 470px;">
            
           
          </div>
        </div>
      </div>
    </div>



    <!-- Container (Contact Section) -->

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-right">
          <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Giỏ hàng</h4>
                </div>
                <div class="modal-body">
                  <div class="wrapper">
                    <h1 style="text-align: center;">Sản phẩm</h1>
                    <div class="row">
                      <table class="table table-bordered" id="table-products" › <thead>
                        <tr>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                        </thead>
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                    </div>
                    <div>
                      <button class="btn btn-lg btn-success" id="button-clear">Clear</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer -->
    <footer>
      <div id="contact" class="container">
        <h3 class="text-center">Liên hệ</h3>
        <p class="text-center"><em>**************</em></p>

        <div class="row">
          <div class="col-md-4">
            <p><span class="glyphicon glyphicon-map-marker"></span>Địa chỉ: 101B Lê Hữu Trác, Quận Sơn Trà, TP.Đà Nẵng, Việt Nam</p>
            <p><span class="glyphicon glyphicon-phone"></span> Phone: 0342713011 (Kiệt)</p>
            <p><span class="glyphicon glyphicon-phone"></span> Phone: 0965243205 (Mai)</p>
            <p><span class="glyphicon glyphicon-envelope"></span> Email: kiet.alang@student.passerellesnumeriques.org</p>
            <p><span class="glyphicon glyphicon-envelope"></span> Email: mai.truong@student.passerellesnumeriques.org</p>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
            <br>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
    </footer>

    <script>
      //giỏ hàng
      var shopCart = [];

      $(document).ready(function() {
        if (sessionStorage["shopping-cart-items"] != null) {
          shopCart = JSON.parse(sessionStorage["shopping-cart-items"].toString());
        }
        displayShoppingCart();
      });

      $(".add-to-cart").click(function() {
        var button = $(this);
        var id = button.attr("id");
        var name = button.attr("data-name");
        var price = button.attr("data-price");
        var quantity = 1;

        var item = {
          id: id,
          name: name,
          price: price,
          quantity: quantity
        };

        var exists = false;
        if (shopCart.length > 0) {
          $.each(shopCart, function(index, value) {
            if (value.id == item.id) {
              value.quantity++;
              exists = true;
              return false;
            }
          });
        }
        if (!exists) {
          shopCart.push(item);
        }
        sessionStorage["shopping-cart-items"] = JSON.stringify(shopCart);
        displayShoppingCart();
      });

      //xóa
      $("#button-clear").click(function() {
        shopCart = [];
        sessionStorage["shopping-cart-items"] = JSON.stringify(shopCart);
        $("#table-products > tbody").html("");
      });


      //hiển thị
      function displayShoppingCart() {
        if (sessionStorage["shopping-cart-items"] != null) {
          shopCart = JSON.parse(sessionStorage["shopping-cart-items"].toString());

          $("#table-products > tbody").html("");
          $.each(shopCart, function(index, item) {
            var htmlString = "";
            htmlString += "<tr>";
            htmlString += "<td>" + item.id + "</td>";
            htmlString += "<td>" + item.name + "</td>";
            htmlString += "<td style='text-align: right'>" + item.price + "</td>";
            htmlString += "<td style='text-align: right'>" + item.quantity + "</td>";
            htmlString += "<td style='text-align: right'>" + item.price * item.quantity + "</td>";
            htmlString += "</tr>";

            $("#table-products > tbody:last").append(htmlString);
          });
        }
      }
      //kết thúc giỏ hàng

      $(document).ready(function() {
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function() {

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      })

    </script>

  </body>

</html>
