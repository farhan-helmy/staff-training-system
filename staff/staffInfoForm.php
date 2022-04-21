<!DOCTYPE html>
<html>
  <head>
    <title>Staff Training System(STS)</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      .w3docs {
        margin-left: 70px;
        font-weight: bold;
        text-align: left;
        font-family: sans-serif, bold, Arial, Helvetica;
        font-size: 14px;
      }
      .buttons {
        display: flex;
        align-items: center;
        width: 100%;
      }
      div input {
        margin-right: 10px;
      }
      form {
        margin: 0 auto;
        width: 600px;
      }
      form input {
        padding: 10px;
      }
      form select {
        background-color: #ffffff;
        padding: 5px;
      }
      form label {
        display: block;
        width: 100%;
        margin-bottom: 5px;
      }
    </style>
<script>
      function ValidationForm() {
        var staffId = document.forms["staffInfoForm"]["staffId"];
        var firstName = document.forms["staffInfoForm"]["firstName"];
        var lastName = document.forms["staffInfoForm"]["lastName"];
        var icNumber = document.forms["staffInfoForm"]["icNumber"];
        var dateOfBirth = document.forms["staffInfoForm"]["dateOfBirth"];
		var contactNumber = document.forms["staffInfoForm"]["contactNumber"];
		var email = document.forms["staffInfoForm"]["email,"];
		var dateOfEmployment = document.forms["staffInfoForm"]["dateOfEmployment"];
		var position = document.forms["staffInfoForm"]["position"];
		
        if(staffId.value == "") {
          alert("Please enter staffId.");
          staffId.focus();
          return false;
        }
        if(icNumber.value == "") {
          alert("Please enter a valid icNumber.");
          icNumber.focus();
          return false;
        }
        
        if(position.value == "") {
          alert("Please enter the position.");
          position.focus();
          return false;
        }
        if(pass.value == "") {
          alert("Please enter your password");
          pass.focus();
          return false;
        }
      
        return true;
      }
    </script> 
 </head>
  <body>
	<h1 style="text-align: center"> Welcome to Staff Registration Form </h2>
    <h2 style="text-align: center"> Staff Information Form</h2>
    <form class="w3-container" name="staffInfoForm" action="processStaff.php" onsubmit="return ValidationForm()" method="post" class="w3docs">
      
	  <div>
        <label for="staffId">Staff ID:</label>
        <input class="w3-input" type="text" id="staffId" size="30" name="staffId" required>
      </div>
	  
	  <div>
        <label for="firstName">First Name</label>
        <input class="w3-input" type="text" id="firstName" size="30" name="firstName" required>
      </div>
	  
	  <div>
        <label for="lastName">Last Name:</label>
        <input class="w3-input" type="text" id="lastName" size="30" name="lastName">
      </div>
	  
	  <div>
        <label for="icNumber">IC number:</label>
        <input class="w3-input" type="text" id="icNumber" size="12" name="icNumber">
      </div>
	  
      <div>
        <label for="dateOfBirth">Date of Birth:</label>
        <input class="w3-input" type="date" id="dateOfBirth" name="dateOfBirth">
      </div>

      <div>
        <label for="contactNumber">Contact Number:</label>
        <input class="w3-input" type="text" id="contactNumber" size="30" name="contactNumber">
      </div>
	  
	  <div>
        <label for="email">Email:</label>
        <input class="w3-input" type="text" id="email" size="30" name="email">
      </div>
	  
	  <div>
        <label for="dateOfEmployment">Date of Employment:</label>
        <input class="w3-input" type="date" id="dateOfEmployment" name="dateOfEmployment">
      </div>
	  
      <div>
        <label>Select Position:</label>
        <select class="w3-select" type="text" value="" name="position">
          <option></option>
          <option>President</option>
          <option>Vice President</option>
          <option>Supervisor</option>
          <option>Trainee</option>
        </select>
      </div>
	  
	  
	  <br>
	  <div class="buttons">
        <input type="submit" value="Save" name="addStaffButton">
        <input type="reset" value="Reset" name="Reset">
      </div>
    </form>
    
  </body>
</html>