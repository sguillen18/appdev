<!DOCTYPE html>

<?php
    
    include "testconfig.php";

$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'SELECT * FROM Reservation_t WHERE Park_Id = 7';
        
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
    <head>
        <title>Futbol Finder</title> 
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="thread.css"> 
        <script type="text/javascript" src="view.js"></script>
        <script type="text/javascript" src="calendar.js"></script>
    </head>
    <body id="main_body" >

        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                      </button>
                      <a class="navbar-brand" href="home.html">FutbolFinder</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a data-toggle="modal" data-target=".login-register-form"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                      </ul>
                    </div>
                </div>
            </nav>
        </header>
		
		<!-- park title -->
<!-- 		<h1>Park Name Here<h1> -->
		
		
        <div id="form_container">
            <form id="form_3462" class="appnitro"  method="post" action="">
                <div class="form_description">
                    <h2>Reservation Form</h2>
                    <p>Please Enter the Reservation Information</p>
                </div>						
                <ul >
                    <li id="li1" >
                        <label class="description">Name: </label>
                        <div>
                            <input id="name" name="name" class="text medium" type="text" maxlength="255" value=""/> 
                        </div> 
                    </li>
                    
                    <li id="li2" >
                        <label class="description">Date: </label>
                        <span>
                            <input id="month" name="month" class="text" size="2" maxlength="2" value="" type="text"> /
                            <label>MM</label>
                        </span>
                        <span>
                            <input id="day" name="day" class="text" size="2" maxlength="2" value="" type="text"> /
                            <label>DD</label>
                        </span>
                        <span>
                            <input id="year" name="year" class="text" size="4" maxlength="4" value="" type="text">
                            <label>YYYY</label>
                        </span>
                    </li>		
                    
                    <li id="li3" >
                        <label class="description">Time: </label>
                        <span>
                            <input id="hour" name="hour" class="text" size="2" type="text" maxlength="2" value=""/> : 
                            <label>HH</label>
                        </span>
                        <span>
                            <input id="minutes" name="minutes" class="text" size="2" type="text" maxlength="2" value=""/> : 
                            <label>MM</label>
                        </span>
                        <span>
                            <select class="select" style="width:4em" id="PMAM" name="PMAM">
                                <option value="AM" >AM</option>
                                <option value="PM" >PM</option>
                            </select>
                            <label>AM/PM</label>
                        </span> 
                    </li>		
                    
                    <li id="li4" >
                        <label class="description">Number of people: </label>
                        <div>
                            <input id="number" name="number" class="text medium" type="text" maxlength="255" value=""/> 
                        </div> 
                    </li>		
                    <li id="li5" >
                        <label class="description">Notes: </label>
                        <div>
                            <textarea id="notes" name="notes" class="textarea"></textarea> 
                        </div> 
                    </li>

                    <li class="buttons">
                        <input type="hidden" name="form_id" value="3462" />
                        <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" onClick="getValues();"/>
                    </li>
                </ul>
            </form>	
        </div>
        <img id="bottom" src="bottom.png" alt="">
		
	<!--Shannon's Reservation Table-->
		<table class="GeneratedTable">
            <h2>CHARLESTOWN PARK</h2>
		<thead>
			<tr>
			<th>Name</th>
			<th>Date</th>
			<th>Time</th>
			<th># Of People</th>
			<th>Notes</th>
			</tr>
		</thead>
		
  <tbody>
      <?php
        $no     = 1;
        $total  = 0;
        while ($row = mysqli_fetch_array($query))
        {
            echo '<tr>
                    <td>'.$row['Reservation_Name'].'</td>
                    <td>'.$row['Reservation_Date'].'</td>
                    <td>'.$row['Reservation_Time'].'</td>
                    <td>'.$row['Reservation_People'].'</td>
                    <td>'.$row['Reservation_Notes'].'</td>
                </tr>';
        }
    ?>		
  </tbody>
</table>
		
	
	<!--Google Maps Directions-->
		<div>
			<a class="button" href="https://www.google.com/maps/dir//Charlestown+High+School+240+Medford+Street/@42.3802754,-71.059888,749m/data=!3m1!1e3!4m9!4m8!1m0!1m5!1m1!1s0x89e370f01a030e2b:0xcb29b13f4cec27c9!2m2!1d-71.0610777!2d42.3800262!3e3">Directions</a>
		</div>
	</body>	
	
	<!--footer tab -->	
	<footer>
		<p>Created by: Sean Guillen, Edgar Romero, Andres Prato, Shannon Cain. 2018.</p>
	</footer>
</html>

<script type="text/javascript">
function getValues(){
    var id = 7;
    var xmlhttp;
    xmlhttp=new XMLHttpRequest();
    var name = document.getElementById("name").value;
    var year = document.getElementById("year").value;
    var month = document.getElementById("month").value;
    var day = document.getElementById("day").value;
    
    var date = year + "/" + month + "/" + day;
    var hour = document.getElementById("hour").value;
    var minutes = document.getElementById("minutes").value;
    
    var e = document.getElementById("PMAM");
    var am_pm = e.options[e.selectedIndex].value;
    
    var time = hour + ":" + minutes + " " + am_pm;
    var number_of_people = document.getElementById("number").value;
    var notes = document.getElementById("notes").value;
    xmlhttp.open("GET", "insert.php?name="+name+"&date=" + date + "&time=" + time + "&number_of_people=" + number_of_people + "&notes=" + notes +"&id=" + id, false);
    xmlhttp.send(null);
    // xmlhttp.open("GET", "insert.php?date="+date, false);
    // xmlhttp.send(null);
    // xmlhttp.open("GET", "insert.php?time="+time, false);
    // xmlhttp.send(null);
    // xmlhttp.open("GET", "insert.php?number_of_people="+document.getElementById("number").value, false);
    // xmlhttp.send(null);
    // xmlhttp.open("GET", "insert.php?notes="+document.getElementById("notes").value, false);
    // xmlhttp.send(null);
    alert(name + " " + date + "  " + time + "number= " + number_of_people);
}
</script>