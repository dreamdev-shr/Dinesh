<!DOCTYPE html>
<html>
    <!--hello-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
    .nav-link:hover{
    color: red;

}
        .xyz{
            width: 100%;
            height: 600px;
        }
        .cx{
          width: 300px;
        }

        .cds{
          width: 100px;
          height: 40px;

        }
        .card-img-top{
            height: 50vh;

        }



        </style>
        </head>


    <body>


<header>
  <nav class="navbar navbar-expand-md navbar-white fixed-top bg-white ">
    <div class="container-fluid">
      <a class="navbar-brand " href="#"><button><img src="{{asset('images/delivery.png')}}"  style="height: 50px" width="50px"></button></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item active">
                <a class="nav-link" href="navbarCustom"><b>Home</b></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#"><b>Share</b></a>
          </li>


          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><b>Near By Store </b></a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><b> trace delivery</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><b>Login</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><b>Sign up</b></a>
        </li>
        </ul>
        <form class="d-flex">
         <button> <img src="{{asset('images/shopping-cart-add.svg')}}"></button>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
  </nav>

</header>



<!-- carousel-->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/fruits.jpg')}}" class="xyz">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Fresh Fruits </h1>
            <p>Apple,grapes,mangoes,...Available now</p>
            <p><a class="btn btn-lg btn-primary" href="#">Get It</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/vege.jpg')}}" class="xyz">
        <div class="container">
          <div class="carousel-caption">
            <h1>Fresh Vegetables</h1>
            <p>onion,tomato,beetroot,....Available now</p>
            <p><a class="btn btn-lg btn-primary" href="#">Discount 25%</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/m.png')}}" class="xyz">
        <div class="container">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Meat</h1>
            <p>Chicken,Mutton,Fish.........Available now</p>
            <p><a class="btn btn-lg btn-primary" href="#">Discount 10%</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>







<br>
  <!-- Button trigger modal -->
  <div class="d-flex justify-content-center d-flex justify-content-center">
<button type="button" class="btn btn-white d-flex justify-content-center bg-info"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><h3>See me</h3>
    <img src="{{asset('images/apple.png')}}" style="height: 50px" width="50px">
</button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Fruits</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>What is the main benefit of fruit?<br>
            Fruits are an excellent source of essential vitamins and minerals, and they are high in fiber. Fruits also provide a wide range of health-boosting antioxidants, including flavonoids. Eating a diet high in fruits and vegetables can reduce a person's risk of developing heart disease, cancer, inflammation, and diabetes</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary"  data-bs-dismiss="modal">Understood</button>
        </div>
      </div>
    </div>
  </div>

<!-- Button trigger modal -->
<br>
<div class="d-flex justify-content-center d-flex justify-content-center p-3">
  <button type="button" class="btn btn-white d-flex justify-content-center bg-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  <img src="{{asset('images/vegetables.png')}}" style="height: 50px" width="50px"><h3>Taste me</h3>
  </button>
</div>

  <!-- Modal -->

  <div class="modal fade" id="staticBackdrops" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropsLabels">Vegetables</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p> What vegetables benifit?<br>
           <p>Lower Blood Pressure. Many green leafy vegetables like kale, spinach, and chard contain potassium. ...
            Lower Risk of Heart Disease. Green leafy vegetables also contain vitamin K, which is believed to prevent calcium from building up in your arteries. ...
            Diabetes Control</p></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary"  data-bs-dismiss="modal">Understood</button>
        </div>
      </div>
    </div>
  </div>


  <!---card--->
  <div class="card-group row bg-white card border-dark" >
    <div class="card border-3 border-dark">
      <img src={{asset('images/onion.webp')}} class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Onion(White Sweet Spanish)</h5>
        <select class="form-select" aria-label="Default select example">
            <option selected>250g at 1$</option>
            <option value="1">500g at 2$</option>
            <option value="2">750g at 2.5$</option>
            <option value="3">1kg at 4$</option>
          </select>
          <div class="p-3">
          <button type="button" class="btn btn-success" id="press" onclick = "effect7()"><b>Buy</b></button>
          <button type="button" class="btn btn-warning" id="press"onclick = "effect6()"><b>Add to Cart</b></button>
          </div>
            <div class="input-group w-auto justify-content-end align-items-center p-3">
              <h3 class><small><button class="btn btn-info">kgs</button></small></h3>
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
            </div>

      </div>
    </div>

    <div class="card border-3 border-dark">
        <img src={{asset('images/tomato.jpg')}} class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title">Tomato(Cherry tomatoes)</h5>
            <select class="form-select" aria-label="Default select example">
                <option selected>250g at 1$</option>
                <option value="1">500g at 2$</option>
                <option value="2">750g at 2.5$</option>
                <option value="3">1kg at 4$</option>
              </select>
              <div class="p-3">
              <button type="button" class="btn btn-success" id="press" onclick = "effect7()"><b>Buy</b></button>
              <button type="button" class="btn btn-warning" id="press" onclick = "effect6()"><b>Add to Cart</b></button>
              </div>
            <div class="input-group w-auto justify-content-end align-items-center">
              <h3 class><small><button class="btn btn-info">kgs</button></small></h3>
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
            </div>
        </div>
    </div>

    <div class="card border-5 border-dark">
        <img src="{{asset('images/chic.jpg')}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Chicken(Rhode Island Red)</h5>
        <select class="form-select" aria-label="Default select example">
            <option selected>250g at 5$</option>
            <option value="1">500g at 10$</option>
            <option value="2">750g at 12.5$</option>
            <option value="3">1kg at 17$</option>
          </select>
          <div class="p-3">
          <button type="button" class="btn btn-success" id="press" onclick = "effect7()"><b>Buy</b></button>
          <button type="button" class="btn btn-warning" id="press" onclick = "effect6()"><b>Add to Cart</b></button>
        </div>
            <div class="input-group w-auto justify-content-end align-items-center">
              <h3 class><small><button class="btn btn-info">kgs</button></small></h3>
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
            </div>
    </div>
  </div>



  <div class="card-group">
    <div class="card border-5 border-dark">
      <img src={{asset('images/apple.jpg')}} class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Apple(Red Delicious)</h5>
        <select class="form-select" aria-label="Default select example">
            <option selected>250g at 2$</option>
            <option value="1">500g at 4$</option>
            <option value="2">750g at 5$</option>
            <option value="3">1kg at 7$</option>
          </select>
          <div class="p-3">
          <button type="button" class="btn btn-success" id="press" onclick = "effect7()"><b>Buy</b></button>
          <button type="button" class="btn btn-warning" id="press" onclick = "effect6()"><b>Add to Cart</b></button>
          </div>
            <div class="input-group w-auto justify-content-end align-items-center">
              <h3 class><small><button class="btn btn-info">kgs</button></small></h3>
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
        </div>
    </div>
    </div>

    <div class="card border-5 border-dark">
      <img src={{asset('images/mango.jpg')}} class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Mango(Dasheri)</h5>
        <select class="form-select" aria-label="Default select example">
            <option selected>250g at 1$</option>
            <option value="1">500g at 2$</option>
            <option value="2">750g at 35$</option>
            <option value="3">1kg at 4$</option>
          </select>
          <div class="p-3">
          <button type="button" class="btn btn-success" id="press" onclick = "effect7()"><b>Buy</b></button>
          <button type="button" class="btn btn-warning " id="press" onclick = "effect6()"><b>Add to Cart</b></button>
        </div>
          <div class="input-group w-auto justify-content-end align-items-center">
            <h3 class><small><button class="btn btn-info">kgs</button></small></h3>
          <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
          <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
          <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
          </div>
        </div>
  </div>
  <div class="card border-5 border-dark ">
    <img src={{asset('images/papaya.jpg')}} class="card-img-top ">
      <div class="card-body">
        <h5 class="card-title">Papaya(Pusa Delicious)</h5>
        <select class="form-select" aria-label="Default select example">
            <option selected>250g at 1$</option>
            <option value="1">500g at 2$</option>
            <option value="2">750g at 2.5$</option>
            <option value="3">1kg at 4$</option>
          </select>
          <div class="p-3">
          <button type="button" class="btn btn-success" id="press" onclick = "effect7()"><b>Buy</b></button>
          <button type="button" class="btn btn-warning" id="press" onclick = "effect6()"><b>Add to Cart</b></button>
        </div>
            <div class="input-group w-auto justify-content-end align-items-center">
              <h3 class><small><button class="btn btn-info">kgs</button></small></h3>
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
            </div>
      </div>
    </div>
  </div>
<br>
<br>
<div class="d-flex justify-content-end bg-white p-3 ">
  <button type="button" class="btn btn-danger m-2">See more</button>
  <button type="button" class="btn btn-success m-2">Move to cart</button>
</div>


<br>
<!--footer-->
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted bg-info ">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom bg-info text-white">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block bg-info">
      <span><h3>Get connected with us on social networks:</h3></span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">fruits</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Nuts</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vegetables</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Meats</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<script src={{asset('js/script.js')}}> </script>
<!-- Footer -->
  </body>

</html>
