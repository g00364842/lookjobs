<!-- Header -->
<?php

require 'connect/header.php';
include 'connect/connect.php';

// Escape user inputs for security

$record = false;
if(isset($_POST['LOCATION'])){
    $record = $_POST['LOCATION'];
 } 
 
$type = false;
if(isset($_POST['JOB_TYPE'])){
    $type = $_POST['JOB_TYPE'];
 }

$cat = false;
if(isset($_POST['CATEGORY'])){
    $cat = $_POST['CATEGORY'];
 }

?>
<!-- Title -->
<div class="container">

    <h1 class="head float-left font-weight-bold text-white align-middle align-baseline shadow p-3 mb-5">Students Tips</h1>

<!-- navbar -->
<?php 
require 'connect/nav.php';
require 'connect/intro.php';
require 'connect/content-left-std.php';
?>

    <div class="col-lg-8 md-12 sm-12">

        <div class="card shadow mb-3 bg-light">
          <h4 class="card-header">CV Template</h4>
          <div class="card-body">
            <p class="card-text">Every successful job hunt starts with a great CV.<br> We have prepared a CV templates.</p><hr>
            
            <div class="row">
              
              <div class="col">
                <h5>Front</h5>
                <img src="cv/images/Anariel_BlentonTemplate.jpg" alt="cv front">
              </div>

              <div class="col">
                <h5>Back</h5>
                <img src="cv/images/Anariel_UnixTemplate.jpg" alt="cv back">
              </div>

            </div><br><br><hr>

            <a href="cv_template.php" class="btn btn-info float-right">Read More >></a>
          </div>
        </div>

        <div class="card shadow mb-3 bg-light">
          <h4 class="card-header">CV Checklist</h4>
          <div class="card-body">
            
            <p class="card-text">
              There are different ways of presenting the information on your CV, but it should always include certain key information. Personal details. A CV should contain a factual summary of personal details. Only use contact details where correspondence will reach you promptly.</p> 
              <hr> 
            <a href="check.php" class="d-none d-lg-block btn btn-info float-right">Read More >></a>
          </div>
        </div>

        <div class="card shadow mb-3 bg-light">
          <h4 class="card-header">The graduate's guide to CVs</h4>
          <div class="card-body">
            <p class="card-text">
              What graduates need to know about writing a CV, the information to include and how to choose the right CV format.<hr>  
            </p>
            
            <a href="cvgrad.php" class="btn btn-info float-right">Read More >></a>
          </div>
        </div>

        <div class="card shadow mb-3 bg-light">
         <h4 class="card-header">Cover Letter</h4> 
          <div class="card-body">
            <p class="card-text">
              Learn how to write a great cover letter that will impress an employer. By Young People. For Young People.<br>
            A cover letter must showcase your abilities, experience and skills in a way it convinces the hiring manager</p>
            <hr>
            <a href="coverletter.php" class="btn btn-info float-right">Read More >></a>
          </div>
        </div>

        <div class="card shadow mb-3 bg-light">
         <h4 class="card-header">Mock Interview</h4> 
          <div class="card-body">
            <p class="card-text">
                A mock interview, also known as a practice interview, is a simulation of an actual job interview.<br>
              A mock interview is an emulation of a job interview used for training purposes. The conversational exercise usually resembles a real interview as closely as possible, for the purpose of providing experience for a candidate.</p>
             
            <hr>
            <a href="mock.php" class="btn btn-info float-right">Read More >></a>
          </div>
        </div>

        <div class="card shadow mb-3 bg-light">
          <h4 class="card-header">Upcoming events</h4>
          <div class="card-body">
            <h5 >Tech Careers Expo - Limerick</h5><br>
            <h6 class="font-weight-bold">27th June 2020</h4><hr>
            <p class="card-text">

            The Expo is a great opportunity for job seekers to meet IT companies that are hiring in person. The event will take place at the Limerick Strand Hotel on 27th June 2020 and will be the largest, specialised, tech careers event of the year, featuring the top companies in the tech & IT sectors at home and abroad.</p>
              

            </p><hr>
            <a href="events.php" class="d-none d-lg-block btn btn-info float-right">Read More >></a>
          </div>
        </div>

        

    </div>
</div>

</div>
</div>
</div>
</div>
</div>


<br><br><br>
<br>

<?php require 'connect/footer.php';?>