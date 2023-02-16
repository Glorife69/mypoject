<?php
session_start();  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Store profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css ">
     <link rel=" stylesheet" href="css/style.css"
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Krispy Kreme </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      


      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Feature
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#events">Events</a>
        
        </div>
        </li> 
       
        <li class="nav-item">
        <a class="nav-link" href="#booking">Booking</a>
        </li>

        </li>
        <li class="nav-item">
        <a class="nav-link" href="#about us">About us</a>
        </li>
        </ul>
    
       </div>
       </nav>

       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
       </ol>


        <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/kklogo.jpg" class="d-block w-100" alt=" event ">
        </div>



       <div class="carousel-item">
       <img src="images/store.jpg" class="d-block w-100" alt=" event ">
       </div>


       <div class="carousel-item">
       <<img src="images/og.jpg" class="d-block w-100" alt=" event ">
       </div>

       <div class="carousel-item">
      <<img src="images/xmas.jpg" class="d-block w-100" alt=" event ">
      </div>

      <div class="carousel-item">
      <<img src="images/event5.jpg" class="d-block w-100" alt=" event ">
      </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

     <a id="events">
    <section class="my-4">
    <div class="py-4">
    <h2 class="text-center">Events</h2>

    </div>
 
    <div class="container">
  <div class="row">
    <div class="col">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/event1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Birthday</h5>
      <p class="card-text"> “I hope your celebration gives you many happy memories!”</p>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/event5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Wedding</h5>
      <p class="card-text">“Walking with your hands in mine and mine in yours, that's exactly where I want to be always.”.</p>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src=" images/event3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Gender reveal</h5>
      <p class="card-text">Ten little fingers, ten little toes, two little eyes, and one little nose, boy or a girl, no one knows! </p>
      
    </div>
  </div>
</div>
</div>


<div class="container">
  <div class="row">
    <div class="col">
<div class="card-deck">
<div class="card">
    <img class="card-img-top" src=" images/event7.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Halloween</h5>
      <p class="card-text">It's Halloween, Everyone's Entitled To One Good Scare</p>
      
    </div>
  </div>

  
<div class="card">
    <img class="card-img-top" src=" images/moms.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mother's Day</h5>
      <p class="card-text">“It may be possible to gild pure gold, but who can make his mother more beautiful?” </p>
      <p class="card-text"><small class="text-muted">  Mahatma Gandhi</small></p>
    </div>
  </div>


<div class="card">
    <img class="card-img-top" src=" images/xmas.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Holiday season</h5>
      <p class="card-text">“Christmas is the season of joy, of gift-giving, and of families united.” </p>
      <p class="card-text"><small class="text-muted">  Norman Vincent Peale</small></p>
</div>
</div>
</div>
</div>
</div>
</section>
</a>



<?php

if(isset($_SESSION['status']))
{
  echo"<h4>".$_SESSION['status']."</h4>";
  unset ($_SESSION['status']);
}

?>

<style>
select {
  width: 100%;
        height: 5%;
        border: 1 px solid brown;
        border-radius: 05 px;
        box-shadow:  1px 1px 2px grey;
        padding: 10px 15px 10px 15px;

}




</style>

<div class="card bg-light text-dark">
  <img class="card-img" src="images/pink1.jpg" alt="Card image">
  <div class="card-img-overlay">
    






    <a id="booking">
   <section class="my-4">
    <div class="py-4">
    <h2 class="text-center">Booking</h2>
    

    </div>
  
    <div class=" w-50 m-auto h-5  ">
      <form action="about.php" method="post">
      

        <div class=" form-group">
          <label>First name</label>
          <input type="text" name="fname" class="form-control">
          
          
          </div>
          

          <div class=" form-group">
          <label> Last Name</label>
          <input type="text" name="lname" class="form-control">
          
          </div>
       

          
          <div class=" form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
          
          </div>
      


          <div class=" form-group">
          <label>Number</label>
          <input type="text" name="number" class="form-control">
          
          </div>
       
          <div class=" form-group">
          <label>Event date and time</label>
          <input type="datetime-local" name="event_dt" class="form-control">
          
          </div>
        
        
          
          
          <div class=" form-group">
          <label>Type of event: </label><br>
          <select input type="text" name='type' class="form-control">
            <option value=''>...select....</option><br>
            <option value='wedding'>Wedding</option><br>
            <option value='birthday'>Birthday</option><br>
            <option value='gender reveal'>gender reveal</option><br>
            <option value='baptismal'>baptismal</option><br>
            
            </select>
            <br></br>

            <div class=" form-group">
            <label>Others</label>
            <input type="text" name="others" class="form-control">
            
             </div>
        



<div class=" form-group ">
<button type="Submit" name="save_datetime" class="btn btn-success">Submit</button>


</form>
</div>
</div>
</div>
</section>
</a>


<a id="about us">
<section class="my-4">
<div class="py-4">
<h2 class="text-center">About  us</h2>

<div class="card text-center">
<div class="card-header">
<h4 class="text-center">EVENT MANAGEMENT</h4>
</div>
<div class="card-body">
<h5 class="card-title"><i>Customize your event with us</i></h5>

<p class="card-text"><b>E-mail: ettrynesalvador@gmail.com</b></p>
    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</a>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/1.16.0/umd.pooper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</style>
</body>
</html>
