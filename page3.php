<?php 

include('carDetails.php');

?>





<!DOCTYPE html>
<html>
  <head>
    <title>WHEELZ CAR RENTAL</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="style_page3.css" />
    <style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button 
  {
  -webkit-appearance: none; 
   margin: 0;
  }

</style>
  </head>
  <body>
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="front.php"
        ><i><b>WHEELZ</b></i></a
      >
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navLinks"
        aria-Label="Toggle Navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navLinks">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="front.php" class="nav-link">HOME</a>
          </li>
          <li class="nav-item">
            <a href="page2.php" class="nav-link">BOOKINGS</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">Log Out</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="jumbotron">
      <h1 class="display-4">
        CHOOSE YOUR <i><b>WHEELZ</b></i
        >!
      </h1>
      <p class="lead">
        <b>We aim to provide you with the best rental deals and amazing cars to
        suit your budget!</b>
      </p>
    </div>
    <!-- nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a
          class="nav-link active"
          id="home-tab"
          data-toggle="tab"
          href="#home"
          role="tab"
          aria-controls="home"
          aria-selected="true"
          >Subcompact</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          id="profile-tab"
          data-toggle="tab"
          href="#profile"
          role="tab"
          aria-controls="profile"
          aria-selected="false"
          >Compact</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          id="contact-tab"
          data-toggle="tab"
          href="#contact"
          role="tab"
          aria-controls="contact"
          aria-selected="false"
          >Sedans</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          id="luxury-tab"
          data-toggle="tab"
          href="#luxury"
          role="tab"
          aria-controls="luxury"
          aria-selected="false"
          >Luxury</a
        >
      </li>
    </ul>
    <form action="" method="POST">
    <div class="tab-content" id="myTabContent">
      <!-- sub-compact -->
      <div
        class="tab-pane fade show active"
        id="home"
        role="tabpanel"
        aria-labelledby="home-tab"
      >
     
        <div class="card-deck">
        
          <div class="card">
          
            <img src="subcompact/bolt.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Chevrolet Bolt</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >Chevrolet Bolt has ample passenger space, a peppy powertrain,
                  and a long driving range</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 200 hp</p>
              <p style="float: right" class="card-text">Range: 259 miles</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 600</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days">
              </div>
            </div>
            </div>
              
              <button  type="submit" class="btn btn-primary btn-lg btn-block" name="submit1" >
                Book
              </button>
              <?php if(isset($msg)) {echo $msg;} ?>
            </div>
            
            

          </div>
          
          <div class="card">
            <img src="subcompact/kia rio.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">KIA Rio</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >Attractive, comfortable cabin and athletic handling</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 133 hp</p>
              <p style="float: right" class="card-text">Mileage: 33 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 700</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days1">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit2">
                Book
              </button>
              <?php if(isset($msg1)) {echo $msg1;} ?>

            </div>
          </div>
          
        </div>
    
        <div class="card-deck">
          <div class="card">
            <img src="subcompact/yaris.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Toyota Yaris</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted">
                  It offers agile handling, a handsome interior, user-friendly
                  features, and good reliability.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 106 hp</p>
              <p style="float: right" class="card-text">Mileage: 32 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 800</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days2">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit3">
                Book
              </button>
              <?php if(isset($msg2)) {echo $msg2;} ?>

            </div>
          </div>
          <div class="card">
            <img src="subcompact/mini.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Mini Cooper</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >It's stylish and athletic, with a high predicted reliability
                  rating.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 138 hp</p>
              <p style="float: right" class="card-text">Mileage: 23-28 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 900</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days3">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit4">
                Book
              </button>
              <?php if(isset($msg3)) {echo $msg3;} ?>

            </div>
          </div>
          
        </div>
      </div>
      
      <!-- compact -->
      <div
        class="tab-pane fade"
        id="profile"
        role="tabpanel"
        aria-labelledby="profile-tab"
      >
        <div class="card-deck">
          <div class="card">
            <img src="compact/corolla.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Toyota Corolla</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >It's stylish and athletic, with a high predicted reliability
                  rating.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 131 hp</p>
              <p style="float: right" class="card-text">Mileage: 30 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 1000</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days4">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit5">
                Book
              </button>
              <?php if(isset($msg4)) {echo $msg4;} ?>

            </div>
          </div>
          <div class="card">
            <img src="compact/golf.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Volkswagen Golf</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >A deft blend of lively handling, a high-class cabin, a large
                  cargo hold, and plenty of advanced safety features.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 147 hp</p>
              <p style="float: right" class="card-text">Mileage: 29 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 1100</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days5">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit6">
                Book
              </button>
              <?php if(isset($msg5)) {echo $msg5;} ?>

            </div>
          </div>
        </div>
        <div class="card-deck">
          <div class="card">
            <img src="compact/fit.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Honda Fit</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted">
                  It boasts a spacious and handsome cabin with a configurable
                  rear seat that makes cargo hauling a cinch.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 138 hp</p>
              <p style="float: right" class="card-text">Mileage: 23-28 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 1200</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days6">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit7">
                Book
              </button>
              <?php if(isset($msg6)) {echo $msg6;} ?>

            </div>
          </div>
          <div class="card">
            <img src="compact/mazda3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Mazda 3</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted">
                  Its engaging performance and upscale interior help it stand
                  out in a highly competitive segment.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 187 hp</p>
              <p style="float: right" class="card-text">Mileage: 27 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 1300</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days7">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit8">
                Book
              </button>
              <?php if(isset($msg7)) {echo $msg7;} ?>

            </div>
          </div>
        </div>
      </div>
      <div
        class="tab-pane fade"
        id="contact"
        role="tabpanel"
        aria-labelledby="contact-tab"
      >
        <div class="card-deck">
          <div class="card">
            <img src="sedans/3 series.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">BMW 320i</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted">
                  It's nimble yet comfortable, with a roomy cabin and a spacious
                  trunk.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 255 hp</p>
              <p style="float: right" class="card-text">Mileage: 28 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 2000</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days8">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit9">
                Book
              </button>
              <?php if(isset($msg8)) {echo $msg8;} ?>

            </div>
          </div>
          <div class="card">
            <img src="sedans/arteon.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Volkswagen Arteon</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted">
                  Volkswagen Arteon has a spacious interior, composed driving
                  dynamics, and intuitive tech features.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 268 hp</p>
              <p style="float: right" class="card-text">Mileage: 23 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 2200</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days9">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit10">
                Book
              </button>
              <?php if(isset($msg9)) {echo $msg9;} ?>

            </div>
          </div>
        </div>
        <div class="card-deck">
          <div class="card">
            <img src="sedans/c-class.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Mercedes-Benz C 300</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted">
                  It has an opulent cabin, a comfortable ride, and a strong
                  lineup of engines.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 255 hp</p>
              <p style="float: right" class="card-text">Mileage: 23 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 2400</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days10">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit11">
                Book
              </button>
              <?php if(isset($msg10)) {echo $msg10;} ?>

            </div>
          </div>
          <div class="card">
            <img src="sedans/stinger.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">KIA Stinger</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >It offers a roomy and posh interior, intuitive tech features,
                  composed handling.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 255 hp</p>
              <p style="float: right" class="card-text">Mileage: 22 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 2600</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days11">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit12">
                Book
              </button>
              <?php if(isset($msg11)) {echo $msg11;} ?>

            </div>
          </div>
        </div>
      </div>
      <!-- luxury -->
      <div
        class="tab-pane fade"
        id="luxury"
        role="tabpanel"
        aria-labelledby="luxury-tab"
      >
        <div class="card-deck">
          <div class="card">
            <img src="luxury/a8.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Audi A8</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >It has a nice cabin and spacious seating</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 335 hp</p>
              <p style="float: right" class="card-text">Mileage: 17 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 3500</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days12">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit13">
                Book
              </button>
              <?php if(isset($msg12)) {echo $msg12;} ?>

            </div>
          </div>
          <div class="card">
            <img src="luxury/bentayga.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Bentley Bentayga</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >Filled with rich-smelling leathers, real wood trim, and
                  glitzy metal accents.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 535 hp</p>
              <p style="float: right" class="card-text">Mileage: 14 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 4000</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days13">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit14">
                Book
              </button>
              <?php if(isset($msg13)) {echo $msg13;} ?>

            </div>
          </div>
        </div>
        <div class="card-deck">
          <div class="card">
            <img src="luxury/s-class.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Mercedes-Benz S 550</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >It's impeccable interior, lounge-like seating, and thrilling
                  engine choices.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 362 hp</p>
              <p style="float: right" class="card-text">Mileage: 19 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 4500</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days14">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit15">
                Book
              </button>
              <?php if(isset($msg14)) {echo $msg14;} ?>

            </div>
          </div>
          <div class="card">
            <img src="luxury/phantom.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Rolls-Royce Phantom</h5>
              <!-- content -->
              <p class="card-text">
                <small class="text-muted"
                  >An interior tailored for kings can even be adorned with a
                  custom-artwork dash.</small
                >
              </p>
              <p style="float: left" class="card-text">Power: 563 hp</p>
              <p style="float: right" class="card-text">Mileage: 12 mpg</p> <br> <br>
              <div class="row">
            <div class="col-lg-6">
            <div class="rate mx-3">
                <h3>Rs. 5000</h3>
                <span><small class="text-muted">/day</small></span>
             </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group mx-3">
                <label for="name">Enter Rental Period</label>
                <input type="number" class="form-control" id="cust_name" placeholder="Enter Days" name="days15">
              </div>
            </div>
            </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit16">
                Book
              </button>
              <?php if(isset($msg15)) {echo $msg15;} ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
