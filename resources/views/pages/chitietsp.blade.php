@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/detail.css')}}">
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="data/data.js"></script>
    <script src="./js/slide.js"></script>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

<div class="price-detail-container" style="margin-top: 2vw">
    <div class="image-product-container">
        <img
          class="mySlides"
          src="{{asset('public/storage/products/' . $pro->image)}}" 
          alt="cho1"
          style="width: 100%"
        />
        @foreach($pro->galleries as $gallery)
          <img
          class="mySlides"
          src="{{ asset('public/storage/gallery/' . $gallery->image) }}" 
          alt="cho1"
          style="width: 100%; display: none"
          />
        @endforeach
      <div class="row-padding section">
        @foreach($pro->galleries as $gallery)
          <div class="col s4">
            <img
              class="demo opacity hover-opacity-off"
              src="{{ asset('public/storage/gallery/' . $gallery->image) }}" 
              style="width: 100%; cursor: pointer"
              onclick="currentDiv(1)"
            />
          </div>
        @endforeach
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </div>
    <div class="detail-product-container">
      <p class="name-product">{{$pro->name}}</p>
      <div class="evaluate" style="display: flex;">
        <div class="img-evaluate" style="display: flex;">
          5 <p class="star-rating1">★★★★★</p>
        </div>
        <p class="text-evaluate">|30 đánh giá</p>
        <p class="text-evaluate">|Đã bán 100</p>
      </div>
      <div class="price-container">
        <p class="text-price">{{$pro->price}}</p>
      </div>
      <div class="return-policy-container">
        <p class="text-return-policy">Chính Sách Trả Hàng:</p>
        <div class="box-date-infor">
          <i class="bi bi-box-seam"></i>
          <p class="text-return-policy-date">Trả hàng 15 ngày</p>
          <span class="span-infor" onmouseover="showInfo(event)"
            ><i class="bi bi-info-circle"></i
          ></span>
          <script src="./js/infor.js"></script>
        </div>
      </div>
      <div class="size-container">
        <p class="text-size">Phân loại:</p>
          <div class="size-box">
            <input type="radio" class="btn-check"  name="btnradio" id="btnradio1" autocomplete="off" >
            <label class="btn btn-outline-primary " for="btnradio1">Size S (Dưới 5kg)</label>
  
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">Size M (Dưới 10kg)</label>
  
            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Size L (Dưới 15kg)</label>
          </div>
      </div>
      <div class="quantity-container">
        <p class="text-quantity">Số lượng:</p>
        <div class="quantity-box">
          <button class="quantity-button" onclick="decreaseQuantity()">
            -
          </button>
          <input
            type="text"
            class="quantity-input"
            id="quantity"
            value="1"
            style="width: 50px"
          />
          <button class="quantity-button" onclick="increaseQuantity()">
            +
          </button>
        </div>
      </div>
      <div class="buy-cart-container">
        <div class="buy-container">
          <button class="buy-button">Mua ngay</button>
        </div>
        <div class="cart-container">
          <i class="bi bi-cart4"></i>
          <button class="cart-button">Thêm vào giỏ hàng</button>
        </div>
      </div>
    </div>
  </div>
  <!----------------------------------- detail infor -------------------------------------------------------------------------->
  <div class="detail-infor-container">
    <p class="text-detail-in">Chi tiết sản phẩm</p>
    <p class="text-detail-in-size"><pre>{{ $pro->description }}</pre></p>
  </div>
  <!-------------------------------------------------------- product reviews----------------------------------------------------------- -->
  <div class="product-reviews-container">
    <p class="text-detail-in">Đánh giá sản phẩm</p>
    <div class="list-start">
      <div>
        <div class="fiveUpfive">
          <p class="text-quantity-big">5</p>
          <p class="text-quantity-small">trên 5 sao</p>
        </div>
        <div style="display: flex; padding-left: 8vw">
        <p class="star-rating1">★★★★★</p>
        </div>
      </div>
      <div class="button-start">
        <button class="button-reviews">Tất cả</button>
        <button class="button-reviews">5 sao</button>
        <button class="button-reviews">4 sao</button>
        <button class="button-reviews">3 sao</button>
        <button class="button-reviews">2 sao</button>
        <button class="button-reviews">1 sao</button>
      </div>
    </div>
    <div class="reviews-comment-container" >
      <p>Kieumoquanh</p>
      <div style="display: flex;">
        <p class="star-rating2">★★★★★</p>
      </div>
      <div class="evaluate" style="display: flex;margin-left: 0vw;" >
        <p class="text-evaluate">2024-01-31 06:24</p>
        <p class="text-evaluate">|</p>
        <p class="text-evaluate">Phân loại hàng: 105-Mái đơn-Xám-L</p>
      </div>
      <p>Lúc đầu thì cậu khoái chui vào nằm, sau thấy nằm bẹp ra nhà lun @@. Tuy 2 con cún nhà em dùng sai cách nma ok nhe cách bảnh ơi. Lâu lâu thích quá em còn chui vào nằm chung cơ :)))</p>
      <img  src="image/nhadem06.jpg" alt="">
    </div>
  </div>
  <!------------------------------------------------------ other products -------------------------------------------------------------------->
  <div class="container-item">
    @foreach( $relatedProducts as $relatedProductsData)
    <div class="item ">
        <a href="">
            <div>
                <img src="{{asset('public/storage/products/' . $relatedProductsData->image)}}" alt="">
                <div class="text-truncate-container">
                    <p>{{$relatedProductsData->name}}</p>
                </div>
            </div>
        </a>
        <div class="pro-price">
          {{$relatedProductsData->price}} VNĐ
        </div>
        <div style="display: flex;">
           <p style="display: flex; margin-left:0.5vw ;">5</p><p class="star-rating1">★★★★★</p>
            <p class="number-of-sales">Lượt bán: 88</p>
        </div>
    </div>
    @endforeach
  </div>
<script>
    function increaseQuantity() {
      let input = document.getElementById("quantity");
      let value = parseInt(input.value);
      input.value = value + 1;
    }
    
    function decreaseQuantity() {
      let input = document.getElementById("quantity");
      let value = parseInt(input.value);
      if (value > 1) {
        input.value = value - 1;
      }
    }
    function showInfo(event) {
      const infoText =
        "Miên phí Trả hàng trong 15 ngày nếu Đổi ý (hàng trả phải còn nguyên seal, tem, hộp sản phẩm). Ngoài ra, tại thời điểm nhận hàng, bạn có thể đóng kiểm và được trả hàng miễn phí.";
      event.target.setAttribute("title", infoText);
    }
  </script>
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);
  
    function plusSlides(n) {
      showSlides((slideIndex += n));
    }
  
    function currentDiv(n) {
      showDivs((slideIndex = n));
    }
  
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }
  
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = x.length;
      }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("opacity-off", "");
      }
      x[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += "opacity-off";
    }
  </script>
  
@endsection

