<?php
	include 'db_connect.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <form class="container" method="post">
   	<br>
        <h2>Student Financial Information</h2>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="title">Registration Number</label>
                    <select id="reg_no" value="" type="text" name="reg_no" class="form-control" placeholder="CT202/0027/16" onblur="autofill(this.value)" >
                    	<option></option>
                    	<option>CT202/0027/16</option>
                    	<option>CT202/0054/16</option>
                    	<option>CT202/0041/16</option>
                    </select>
                </div>
                <div class="col-md-9">
                    <label for="title">Full name</label>
                    <input id="student_name" type="text" name="student_name" class="form-control" placeholder="John Doe" readonly>
                </div>
            </div>
        	<div class="form-group">
        		<label>Total required</label>
        		<input id="total_required" type="text"  name="amount_to_be_paid" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Total paid</label>
        		<input id="total_paid" type="text" name="amount_paid" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Balance</label>
        		<input id="balance" type="text" name="balance" class="form-control" readonly>
        	</div>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="/financials" class="btn btn-secondary float-right">Back</a>
        </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript">
    	function autofill(str){
            if (str.length == 0){
                alert("Please fill in registration number");
            }else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('student_name').value = this.responseText;
                    }
                };
                xmlhttp.open("GET", "trial.php?q=" + str, true);
                xmlhttp.send();
            }
        }

    </script>
  </body>
</html>