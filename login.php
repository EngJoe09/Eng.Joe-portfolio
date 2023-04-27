<!DOCTYPE html>
<html>
    <head>
      <style>
        table, td, th {
          border: 1px solid black;
        }
        
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th {
          text-align: left;
        }
        </style>
      <style>
        h1 {text-align: center;}
        </style>
        <style>
div.a {
  text-align: right;
}
</style>
        <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
$email = $_POST['email'];
$password = $_POST['password'];

//Database connection here
$con = new mysqli("localhost","root","","test");
if($con->connect_error) {
    die("Failed to connect : ".$con->connect_error);
}else{
    $stmt = $con->prepare("select * from users where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
       $data = $stmt_result->fetch_assoc();
         
       if($data['password'] === $password) {

       echo "<h2>Login Successful!! ,Welcome to Call Centre Assessments</h2>";
       }
       else {
        echo "<h2>Invalid Email or password</h2>";
        die;
       }
    }else {
        echo "<h2>Invalid Email or password</h2>";
        die;
    }
}
// SQL to create table
$sql = "CREATE TABLE agent_registration (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
    
  )";
  
  



?>
<nav class="nav-bar">
            <a class="active" href="#home">Home</a>
        
            <input type="text" placeholder="Search..">
            
            <ul>
               <li class="nav-link"><a href="logout.php">logout</a></li>

               <li onclick="window.location.href='registration.html'" class="register-button"><input type="button" value="Add Agent" class= "right">
              
              
              </li>
            </ul>
            </div>
           
    </head>
    
    
    
        
       <h1 style ="color:black;">CALL ASSESSMENTS</h1>

       <h2> <u>INBOUND AGENTS</u> </h2>
      
        <h2><table>
          <tr>
            <th>Agent name</th>
            <th>Assessment date</th>
            <th>Assessed(Yes/No)</th>
          </tr>
          
            <tr>
              <td></td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr> 
            <tr>
              <td></td>
              <td><input type="date"></td>
              <td>No</td>
            </tr>
            <tr>
              <td></td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr>
            <tr>
              <td></td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr>
            <tr>
              <td></td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr>
            <tr>
              <td></td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr>
            <tr>
              <td></td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr>
            <tr>
              <td></td>
              <td><input type="date"></td>
              <td>Yes</td>
              <tr>
              <td></td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr>
            </tr>
          </table></h2>

        <h3> <u>OUTBOUND AGENTS </u>  </h3>
        <h4><table>
        <tr>
            <th>Agent name</th>
            <th>Assessment date</th>
            <th>Assessed(Yes/No)</th>
          </tr>

          <tr>
              <td>MaposaN</td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr> 
            <tr>
              <td>NavayaL</td>
              <td><input type="date"></td>
              <td>No</td>
            </tr>
            <tr>
              <td>MusaN</td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr>
            <tr>
              <td>MuchaN</td>
              <td><input type="date"></td>
              <td>Yes</td>
            </tr>
          </table></h4>




        </h4>
        <h5></h5>
        <h6></h6>

        <p></p>
    </body>
</html>