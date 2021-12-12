

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <!-- <link rel="stylesheet" href="style/form-style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Passenger Form</title>

    
  </head>
  <body>
    <form class="signup-form" action="../actions/add_passenger.php" method="post">

      <!-- form header -->
      <div class="form-header">
        <h1>Passenger Form</h1>
        <h4>Kindly fill out this form to complete check in</h4>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">First name</label>
            <input type="text" id="firstname" class="form-input" placeholder="enter your first name" required="required" name='firstname'/>
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" id="lastname" class="form-input" placeholder="enter your last name" name='lastname'/>
          </div>
        </div>

        <!-- DOB -->
        <div class="form-group">
          <label for="date" class="label-title">Date of Birth</label>
          <input type="date" id="date" class="form-input" placeholder="enter your DOB" required="required" name='date'>
        </div>

        <!-- Gender -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender:</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
            </div>
          </div> 

         <!-- passport -->
         <div class="form-group">
          <label for="passport" class="label-title">Passport</label>
          <input type="text" id="passport" class="form-input" placeholder="enter your PC number" required="required" name='passport'>
        </div>

        <!-- Issued date -->
        <div class="form-group">
          <label for="date" class="label-title">Issued date</label>
          <input type="date" id="issued_date" class="form-input" placeholder="" required="required" name='issued_date'>
        </div>

        <!-- Expiration date -->
        <div class="form-group">
          <label for="date" class="label-title">Expiration date</label>
          <input type="date" id="exp_date" class="form-input" placeholder="" required="required" name='exp_date'>
        </div> 

        <!-- Issued place -->
        <div class="form-group right">
            <label for="issued_place" class="label-title">Place of Issue</label>
            <input type="text" id="issued_place" class="form-input" placeholder="" name='issued_place'/>
          </div>
        </div> 

        <!-- Ticket Nbr -->
        <div class="form-group right">
            <label for="ticket_nbr" class="label-title">Ticket Number</label>
            <input type="text" id="ticket_nbr" class="form-input" placeholder="" name='ticket_nbr'/>
          </div>
        </div> 

        <div class="form-group right">
            <label for="class" class="label-title">Cabin</label>
            <input type="text" id="class" class="form-input" placeholder="" name='class'/>
          </div>
        </div>

        <!-- Departure time -->
        <div class="form-group right">
            <label for="departure" class="label-title">Departure time</label>
            <input type="time" id="departure" class="form-input" placeholder="" name='departure'/>
          </div>
        </div> 

        <!-- Arrival time -->
        <div class="form-group right">
            <label for="arrival" class="label-title">Arrival time</label>
            <input type="time" id="arrival" class="form-input" placeholder="" name='arrival'/>
          </div>
        </div> 
        
        <!-- Destination -->
        <div class="form-group right">
            <label for="Destination" class="label-title">Destination</label>
            <input type="text" id="Destination" class="form-input" placeholder="" name='Destination'/>
          </div>
        </div> 
      

      <!-- form-footer -->
      <div class="form-footer">
        <button class="btn bb-btn" name="addpassenger"><span>SUBMIT</span></button>
      </div>

    </form>

    <!-- Script for range input label -->
    <script>
      var rangeLabel = document.getElementById("range-label");
      var experience = document.getElementById("experience");

      function change() {
      rangeLabel.innerText = experience.value + "K";
      }
    </script>

  </body>
</html>