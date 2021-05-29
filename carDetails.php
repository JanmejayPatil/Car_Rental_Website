<?php 

include('dbConnection.php');

session_start();

$session = $_SESSION['email'];


if(isset($_REQUEST["submit1"])) {
    if(($_REQUEST["days"] == "")) {
      $msg = '<div class="alert alert-danger mt-2" role="alert">
    Please Enter Rental Days !!
   </div>';
    }
    else {
      $UNIQUE_CAR_ID="SCC01";
      $LICENSE_PLATE_NO ="DHX0211";
      $MODEL="Chevrolet Bolt";		
      $TYPE="Sub Compact";	
      $COLOR="Maroon";
      $YEAR_MADE=2017;
      $ODOMETER=42000;
      $FUEL_LEVEL="HALF";
      $price = 600;
      $days = $_REQUEST["days"];
      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      $result = mysqli_query($conn,$sql);
      
      echo "<script>location.href='billing.php'</script>";
      $msg = '<div class="alert alert-success mt-2" role="alert">
        Success !!
      </div>';
    }
    
    }else if(isset($_REQUEST["submit2"])) {
      if(($_REQUEST["days1"] == "")) {
        $msg1 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="SCC02";
    $LICENSE_PLATE_NO ="XVC3200";
    $MODEL="KIA Rio";		
    $TYPE="Sub Compact";	
    $COLOR="Red";
    $YEAR_MADE=2018;
    $ODOMETER=36000;
    $FUEL_LEVEL="QUARTER";
    $price = 700;
    $days = $_REQUEST["days1"];
    $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg1 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
   }
    
    }else if(isset($_REQUEST["submit3"])) {
      if(($_REQUEST["days2"] == "")) {
        $msg2 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="SCC03";
    $LICENSE_PLATE_NO ="PLR4301";
    $MODEL="Toyota Yaris";		
    $TYPE="Sub Compact";	
    $COLOR="Blue";
    $YEAR_MADE=2018;
    $ODOMETER=32000;
    $FUEL_LEVEL="FULL";
    $price = 800;
    $days = $_REQUEST["days2"];
    $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg2 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
  }
    
}else if(isset($_REQUEST["submit4"])) {
  if(($_REQUEST["days3"] == "")) {
    $msg3 = '<div class="alert alert-danger mt-2" role="alert">
  Please Enter Rental Days !!
 </div>';
  } else {
    $UNIQUE_CAR_ID="SCC04";
    $LICENSE_PLATE_NO ="SRF6971";
    $MODEL="Mini Cooper";		
    $TYPE="Sub Compact";	
    $COLOR="Yellow";
    $YEAR_MADE=2019;
    $ODOMETER=15000;
    $FUEL_LEVEL="QUARTER TO FULL";
    $price = 900;
    $days = $_REQUEST["days3"];
    $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg3 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
  }
      
    }else if(isset($_REQUEST["submit5"])) {
      if(($_REQUEST["days4"] == "")) {
        $msg4 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="XCC01";
    $LICENSE_PLATE_NO ="SGW2683";
    $MODEL="Toyota Corolla";		
    $TYPE="Compact";	
    $COLOR="Silver";
    $YEAR_MADE=2016;
    $ODOMETER=56000;
    $FUEL_LEVEL="FULL";
    $price = 1000;
    $days = $_REQUEST["days4"];
      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg4 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
  }
    
    }else if(isset($_REQUEST["submit6"])) {
      if(($_REQUEST["days5"] == "")) {
        $msg5 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="XCC02";
    $LICENSE_PLATE_NO ="WEU3475";
    $MODEL="Volkswagen Golf";		
    $TYPE="Compact";	
    $COLOR="Lime Green";
    $YEAR_MADE=2017;
    $ODOMETER=40000;
    $FUEL_LEVEL="HALF";
    $price = 1100;
    $days = $_REQUEST["days5"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg5 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
    }

    }else if(isset($_REQUEST["submit7"])) {
      if(($_REQUEST["days6"] == "")) {
        $msg6 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="XCC03";
      $LICENSE_PLATE_NO ="LWR2304";
      $MODEL="Toyota Yaris";		
      $TYPE="Compact";	
      $COLOR="Black";
      $YEAR_MADE=2019;
      $ODOMETER=16000;
      $FUEL_LEVEL="QUARTER TO FULL";
      $price = 1200;
      $days = $_REQUEST["days6"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg6 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
  }
    
    }else if(isset($_REQUEST["submit8"])) {
      if(($_REQUEST["days7"] == "")) {
        $msg7 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="XCC04";
      $LICENSE_PLATE_NO ="MZT0012";
      $MODEL="Mini Cooper";		
      $TYPE="Compact";	
      $COLOR="White";
      $YEAR_MADE=2019;
      $ODOMETER=10000;
      $FUEL_LEVEL="QUARTER";
      $price = 1300;
      $days = $_REQUEST["days7"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg7 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
    }

    }else if(isset($_REQUEST["submit9"])) {
      if(($_REQUEST["days8"] == "")) {
        $msg8 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="SSC01";
      $LICENSE_PLATE_NO ="EFQ2349";
      $MODEL="BMW 320i";		
      $TYPE="Sedan";	
      $COLOR="Blue";
      $YEAR_MADE=2017;
      $ODOMETER=32000;
      $FUEL_LEVEL="FULL";
      $price = 2000;
      $days = $_REQUEST["days8"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg8 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
      }


    }else if(isset($_REQUEST["submit10"])) {
      if(($_REQUEST["days9"] == "")) {
        $msg9 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="SSC02";
      $LICENSE_PLATE_NO ="WIE0348";
      $MODEL="Volkswagen Arteon";		
      $TYPE="Sedan";	
      $COLOR="White";
      $YEAR_MADE=2018;
      $ODOMETER=26000;
      $FUEL_LEVEL="QUARTER TO FULL";
      $price = 2200;
      $days = $_REQUEST["days9"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg9 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
      }
      
    }else if(isset($_REQUEST["submit11"])) {
      if(($_REQUEST["days10"] == "")) {
        $msg10 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="SSC03";
      $LICENSE_PLATE_NO ="ZFD6592";
      $MODEL="Mercedes-Benz C 300";		
      $TYPE="Sedan";	
      $COLOR="Silver";
      $YEAR_MADE=2016;
      $ODOMETER=38000;
      $FUEL_LEVEL="HALF";
      $price = 2400;
      $days = $_REQUEST["days10"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg10 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
      }

    }else if(isset($_REQUEST["submit12"])) {
      if(($_REQUEST["days11"] == "")) {
        $msg11 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="SSC04";
      $LICENSE_PLATE_NO ="XMB1584";
      $MODEL="KIA Stinger";		
      $TYPE="Sedan";	
      $COLOR="Red";
      $YEAR_MADE=2018;
      $ODOMETER=28000;
      $FUEL_LEVEL="QUARTER";
      $price = 2600;
      $days = $_REQUEST["days11"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg11 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
      }
    
    }else if(isset($_REQUEST["submit13"])) {
      if(($_REQUEST["days12"] == "")) {
        $msg12 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="LXC01";
      $LICENSE_PLATE_NO ="AAA7788";
      $MODEL="Audi A8";		
      $TYPE="Luxury";	
      $COLOR="Black";
      $YEAR_MADE=2016;
      $ODOMETER=23000;
      $FUEL_LEVEL="FULL";
      $price = 3500;
      $days = $_REQUEST["days12"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg12 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
      }

    }else if(isset($_REQUEST["submit14"])) {
      if(($_REQUEST["days13"] == "")) {
        $msg13 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="LXC02";
      $LICENSE_PLATE_NO ="BBB4545";
      $MODEL="Bentley Bentayga";		
      $TYPE="Luxury";	
      $COLOR="Olive Green";
      $YEAR_MADE=2019;
      $ODOMETER=8000;
      $FUEL_LEVEL="FULL";
      $price = 4000;
      $days = $_REQUEST["days13"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg13 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
      }

    }else if(isset($_REQUEST["submit15"])) {
      if(($_REQUEST["days14"] == "")) {
        $msg14 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="LXC03";
      $LICENSE_PLATE_NO ="MBS5500";
      $MODEL="Mercedes-Benz S 550";		
      $TYPE="Luxury";	
      $COLOR="White";
      $YEAR_MADE=2017;
      $ODOMETER=19000;
      $FUEL_LEVEL="FULL";
      $price = 4500;
      $days = $_REQUEST["days14"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg14 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
      }

    }else if(isset($_REQUEST["submit16"])) {
      if(($_REQUEST["days15"] == "")) {
        $msg15 = '<div class="alert alert-danger mt-2" role="alert">
      Please Enter Rental Days !!
     </div>';
      } else {
        $UNIQUE_CAR_ID="LXC04";
      $LICENSE_PLATE_NO ="RRP2020";
      $MODEL="Rolls-Royce Phantom";		
      $TYPE="Luxury";	
      $COLOR="White";
      $YEAR_MADE=2019;
      $ODOMETER=6000;
      $FUEL_LEVEL="FULL";
      $price = 5000;
      $days = $_REQUEST["days15"];

      $sql = "INSERT INTO car(UNIQUE_CAR_ID,LICENSE_PLATE_NO,MODEL,TYPE,COLOR,YEAR_MADE,ODOMETER,FUEL_LEVEL,price,DAYS,email) VALUE('$UNIQUE_CAR_ID','$LICENSE_PLATE_NO','$MODEL','$TYPE','$COLOR','$YEAR_MADE','$ODOMETER','$FUEL_LEVEL','$price','$days','$session')";
      
      
      $result = mysqli_query($conn,$sql);
      echo "<script>location.href='billing.php'</script>";
      $msg15 = '<div class="alert alert-success mt-2" role="alert">
      Success !!
    </div>';
    }
}


?>