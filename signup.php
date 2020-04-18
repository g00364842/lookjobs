<!-- Header -->
<?php

require 'connect/header.php';
//include 'connect/connect.php';

// Escape user inputs for security
  if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<p class="alert alert-danger" role="alert">Fill in all fields!</p>';
    }
    else if ($_GET["error"] == "invaliduidmail"){
      echo '<p class="alert alert-danger">Invalid username and e-mail!</p>';
    }
    else if ($_GET["error"] == "invaliduid"){
      echo '<p class="alert alert-danger">Invalid username!</p>';
    }
    else if ($_GET["error"] == "invalidmail"){
      echo '<p class="alert alert-danger">Invalid e-mail!</p>';
    }
    else if ($_GET["error"] == "passwordcheck"){
      echo '<p class="alert alert-danger">Your passwords do not match!</p>';
    }
    else if ($_GET["error"] == "usertaken"){
      echo '<p class="alert alert-danger">Username is already taken!</p>';
    }
    
  }

  else if(isset($_GET["signup"]) == "success"){
  
    echo '<p class="alert alert-success" role="alert">Signup successful! Please login</p>';
    }

?>

<!-- Title -->
<div class="container">

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Signup</h1>

<!-- navbar -->
<?php 
require 'connect/nav.php';
require 'connect/intro.php';
require 'connect/content-left.php';
?></div>

    <div class="col-lg-8 md-12 sm-12">        

        <div class="card shadow mb-3 bg-light">
          <h4 class="card-header">Signup</h4>
          <div class="card-body">
            
          <p class="card-text">

          <?php

          if(isset($_GET['error'])){
            if($_GET['error'] == "emptyfields"){
              echo '<p>Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "invaliduidmail"){
              echo '<p>Invalid username and e-mail!</p>';
            }
            else if ($_GET['error'] == "invaliduid"){
              echo '<p>Invalid username!</p>';
            }
            else if ($_GET['error'] == "invalidmail"){
              echo '<p>Invalid e-mail!</p>';
            }
            else if ($_GET['error'] == "passwordcheck"){
              echo '<p>Your passwords do not match!</p>';
            }
            else if ($_GET['error'] == "usertaken"){
              echo '<p>Username is already taken!</p>';
            }
          }
          else if(isset($_GET["signup"]) == "success"){
            echo '<p>Signup successful!</p>';
          }

        ?>

          <form action="signup.inc.php" method="post">
            <input class="form-control" type="text" name="uid" placeholder="username"><br>
            <input class="form-control" type="text" name="emailUsers" placeholder="E-mail"><br>
            <input class="form-control" type="password" name="pwd" placeholder="password"><br>
            <input class="form-control" type="password" name="pwd-repeat" placeholder="repeat password"><br><br>
            <hr>
            <button class="btn btn-info float-right" type="submit" name="signup-submit">Signup</button>
          </form>
        </div></p>
               
            <br><br>
          </div>
        </div>

    </div>
</div>

</div>
</div>
</div>
</div>
</div>


<br>
<br>

<?php require 'connect/footer.php';?>