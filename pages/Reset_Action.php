<?php
include("./Connection.php");
$id = $_GET['hos'];
if (isset($id)) {  
  // ensure that the user exists on our system
  $query = "SELECT hospital_id, random FROM password_reset WHERE hospital_id='$id'";
  $results = mysqli_query($con, $query);
  $x = mysqli_fetch_assoc($results); /* 2 */
  $resultstring2 = $x['random']; /* 2 */

  if (empty($resultstring2)) {
    echo "Random Number is incorect";
  }else  {
    // dialog box
         echo " <form action='controller/new_passwordAction.php?hos2= $id ' method='post'>
          <div class='modal-dialog'>
           <div class='modal-content' style='width: 70%;margin: auto;'>
                <div class='modal-header'>
                    
                </div>
                <div class='modal-body text-center'>
                <h4>Enter Verifecation Code</h4>
               <h4> <input  type='text' name = 'random' required  /> </h4>
                </div>
                <div class='modal-body text-center'>
                    <h4>Click on button to reset password</h4>
                <h4>
                <input type='hidden' name=' value='someValue'/>
                <button type= 'submit' id='submit1' name = 'submit1' class='btn btn-danger btn-block'>Reset Password</button>
                </h4>
                </div>
            </div>
        </div>
        </form>";
  }
    }
?>