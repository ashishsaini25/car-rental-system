<!DOCTYPE html>
<html>
  <head>
    <title>Car Booking Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="testbox" >
      <form action="booking.php" method="POST">
        <div class="banner">
          <h1>Rent Now</h1>
        </div>
        <div class="item">
          <h3>Name</h3>
          <div class="name-item">
            <input type="text" name="FirstName" placeholder="FirstName" required class="text-uppercase" />
            <input type="text" name="LastName" placeholder="LastName" required  class="text-uppercase"/>
          </div>
        </div>
        <div class="item">
          <h3>Email</h3>
          <input type="text" name="Email" required />
        </div>
        <div class="item">
          <h3>Contact No</h3>
          <input type="text" name="Contact_No" required />
        </div>
        <div class="item">
          <h3>Address</h3>
          <input type="text" name="Address" placeholder="Address" required class="text-uppercase" />
        </div>
       
        <div class="item">
          <h3>Pick Up Date</h3>
          <input type="date" name="Pick_up_date" />
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <h3>Pick Up Time</h3>
          <input type="time" name="Pick_up_time" />
          <i class="fas fa-clock"></i>
        </div>
        <div class="item">
          <h3>Pick Up Point</h3>
          <input type="text" name="Pick_up_point" placeholder="Location"  class="text-uppercase"/>
        <div class="item">
          <h3>Destination</h3>
          <input type="text" name="Destination" placeholder="Location" class="text-uppercase" />
        </div>
         <div class="question">
          <h3>Vehicle</h3>
          <div class="question-answer">
            <div>
              <input type="radio" value="Honda city" id="radio_1" name="Vehicletype" />
              <label for="radio_1" class="radio"><span>Honda city(8-12 person)</span></label>
            </div>
            <div>
              <input type="radio" value="SUV " id="radio_2" name="Vehicletype" />
              <label for="radio_2" class="radio"><span>SUV (6-7 person)</span></label>
            </div>
            <div>
              <input type="radio" value="Van" id="radio_3" name="Vehicletype" />
              <label for="radio_3" class="radio"><span>Van (12-15 person)</span></label>
            </div>
            <div>
              <input type="radio" value="Bus" id="radio_4" name="Vehicletype" />
              <label for="radio_4" class="radio"><span>Bus (50+ person)</span></label>
            </div>
          </div>
        <div class="item">
          <h3>Id Proof</h3>
          <input type="text" name="IdProof" />
        </div>
        <div class="item">
          <h3>No of Days</h3>
          <input type="text" name="No_of_Days" />
        </div>
        <div class="btn-block">
          <button type="submit" href="/">BOOK</button>
        </div>
      </form>
    </div>
  </body>
</html>