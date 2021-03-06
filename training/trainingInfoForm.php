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
        var trainingId = document.forms["trainingInfoForm"]["trainingId"];
        var trainingName = document.forms["trainingInfoForm"]["trainingName"];
        var trainingStartDate = document.forms["trainingInfoForm"]["trainingStartDate"];
        var trainingEndDate = document.forms["trainingInfoForm"]["trainingEndDate"];
        var trainerName = document.forms["trainingInfoForm"]["trainerName"];
		
        if(trainingId.value == "") {
          alert("Please enter trainingId.");
          trainingId.focus();
          return false;
        }
        if(trainingName.value == "") {
          alert("Please enter a valid trainingName.");
          trainingName.focus();
          return false;
        }
        
     
      
        return true;
      }
    </script> 
 </head>
  <body>
	<h1 style="text-align: center"> Welcome to Training Registration Form </h2>
    <h3 style="text-align: center"> Enter the detail below: </h3>
    <form class="w3-container" name="trainingInfoForm" action="processTraining.php" onsubmit="return ValidationForm()" method="post" class="w3docs">
      
	  <div>
        <br><label for="staffId">Training ID:</label>
        <input class="w3-input" type="text" id="trainingId" name="trainingId" required>
      </div>
	  
	  <div>
        <br><label for="firstName">Training Course Name</label>
        <input class="w3-input" type="text" id="trainingName" name="trainingName" required>
      </div>
	  
	  <div>
        <br><label for="trainingStartDate">Training Start Date:</label>
        <input class="w3-input" type="date" id="trainingStartDate" name="trainingStartDate">
      </div>
	  
	  <div>
        <br><label for="trainingEndDate">Training End Date:</label>
        <input class="w3-input" type="date" id="trainingEndDate" name="trainingEndDate">
      </div>
	  
      <div>
        <br><label for="trainerName">Trainer Name:</label>
        <input class="w3-input" type="text" id="trainerName" name="trainerName">
      </div>
      
	  
	  <br>
	  <div class="buttons">
        <input type="submit" value="Save" name="addTrainingButton">
        <input type="reset" value="Reset" name="Reset">
		
      </div>
    </form>
	<hr><br>
    
  </body>
</html>