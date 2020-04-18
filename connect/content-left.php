<!-- Search Form Section Begin -->
    <div class="container">
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-text">
                        <div class="search-text">
                             <a class="text-white" href="jobs.php"><i class="fa fa-search"></i></a>
                            <a class="text-white" href="jobs.php">Find Your Job</a>
                        </div>
                        <div class="home-text">
                            <i class="fa fa-home"></i>
                            <a class="text-white" href="employers.php">Employers</a>
                        </div>
                    </div>
                    <form action="filter.php" method="post" class="filter-form">
                        <div class="first-row">
                          <div class="col form-group">
                            <div class="row">
                            </form>

                                <div class="col-lg-4 sm-12 d-none d-lg-block">
                                  
                                 <div class="card shadow mb-3 bg-light">
                                  <h4 class="card-header">Find you career</h4>
                                  <div class="card-body">
                                    <p class="card-text">

                                      <form action="filter.php" method="post" class="filter-form">
                                         <input type="search" class="form-control" name="search-item" placeholder="Search"><br>
                                         <button type="submit" name="search" class="w-100 search-btn btn-info">Search</button>
                                         <!--<a href="all.php" class="w-100 btn btn-info float-right">Search</a><br><br><hr>-->
                                      </form>

                                         <br>
                                         <a class="text-info float-left" href="index.php">Home</a><br><br>
                                         <a class="text-info float-left" href="jobs.php">find your career</a><br><br>
                                         <a class="text-info float-left" href="alloffers.php">All Offers</a><br><br>
                                         <a class="text-info float-left" href="fulltime.php">Full-Time Jobs</a><br><br>
                                         <a class="text-info float-left" href="parttime.php">Part-Time Jobs</a><br><br>
                                         <a class="text-info float-left" href="summer.php">Summer Jobs</a><br><br>
                                         <a class="text-info float-left" href="internship.php">Internship</a><br><br>
                                         <a class="text-info float-left" href="graduate.php">Graduate Programmes</a><br><br>
                                         <a class="text-info float-left" href="abroad.php">Abroad</a><br><br>
                                         <a class="text-info float-left" href="volunteer.php">Volunteer Jobs</a><br><br>
                                         <a class="text-info float-left" href="project.php">Projects</a><br><br>
                                     
                                    </p>
                                    
                                  </div>
                              </div>

                                <div class="card shadow mb-3 bg-light">
                                  <h4 class="card-header">Filter by:</h4>
                                  <div class="card-body">
                                    <p class="card-text">

                                      <div class="col form-group">
                                      <select>
                                        <option for="JOB_TYPE" id="JOB_TYPE">Job type</option>
                                        <option selected>Job type...</option>
                                          <option value="Full-time" <?php if($type['JOB_TYPE'] == "Full-time") { echo "SELECTED"; } ?>>Full-Time</option>
                                          <option value="Part-time" <?php if($type['JOB_TYPE'] == "Part-time") { echo "SELECTED"; } ?>>Part-Time</option>
                                          <option value="Summer Job" <?php if($type['JOB_TYPE'] == "Summer Job") { echo "SELECTED"; } ?>>Summer Job</option>
                                          <option value="Intership" <?php if($type['JOB_TYPE'] == "Intership") { echo "SELECTED"; } ?>>Internship</option>
                                          <option value="Graduate Programme" <?php if($type['JOB_TYPE'] == "Graduate Programme") { echo "SELECTED"; } ?>>Graduate Programme</option>
                                          <option value="Abroad" <?php if($type['JOB_TYPE'] == "Abroad") { echo "SELECTED"; } ?>>Abroad</option>
                                          <option value="Volunteer" <?php if($type['JOB_TYPE'] == "Volunteer") { echo "SELECTED"; } ?>>Volunteer</option>
                                          <option value="Project" <?php if($type['JOB_TYPE'] == "Project") { echo "SELECTED"; } ?>>Project</option>

                                    </select>
                                    </div> 

                                       <div class="col form-group">
                                      <select class="w-100" name="LOCATION" id="LOCATION">
                                        <option selected>Location</option>
                                        <option value="Antrim" <?php if($record['LOCATION'] == "Antrim") { echo "SELECTED"; } ?>>Antrim</option>
                                        <option value="Armagh" <?php if($record['LOCATION'] == "Armagh") { echo "SELECTED"; } ?>>Armagh</option>
                                        <option value="Carlow" <?php if($record['LOCATION'] == "Carlow") { echo "SELECTED"; } ?>>Carlow</option>
                                        <option value="Cavan" <?php if($record['LOCATION'] == "Cavan") { echo "SELECTED"; } ?>>Cavan</option>
                                        <option value="Clare" <?php if($record['LOCATION'] == "Clare") { echo "SELECTED"; } ?>>Clare</option>
                                        <option value="Cork" <?php if($record['LOCATION'] == "Cork") { echo "SELECTED"; } ?>>Cork</option>
                                        <option value="Derry" <?php if($record['LOCATION'] == "Derry") { echo "SELECTED"; } ?>>Derry</option>
                                        <option value="Donegal" <?php if($record['LOCATION'] == "Donegal") { echo "SELECTED"; } ?>>Donegal</option>
                                        <option value="Down" <?php if($record['LOCATION'] == "Down") { echo "SELECTED"; } ?>>Down</option>
                                        <option value="Dublin" <?php if($record['LOCATION'] == "Dublin") { echo "SELECTED"; } ?>>Dublin</option>
                                        <option value="Fermanagh" <?php if($record['LOCATION'] == "Fermanagh") { echo "SELECTED"; } ?>>Fermanagh</option>
                                        <option value="Galway" <?php if($record['LOCATION'] == "Galway") { echo "SELECTED"; } ?>>Galway</option>
                                        <option value="Kerry" <?php if($record['LOCATION'] == "Kerry") { echo "SELECTED"; } ?>>Kerry</option>
                                        <option value="Kildare" <?php if($record['LOCATION'] == "Kildare") { echo "SELECTED"; } ?>>Kildare</option>
                                        <option value="Kilkenny" <?php if($record['LOCATION'] == "Kilkenny") { echo "SELECTED"; } ?>>Kilkenny</option>
                                        <option value="Laois" <?php if($record['LOCATION'] == "Laois") { echo "SELECTED"; } ?>>Laois</option>
                                        <option value="Leitrim" <?php if($record['LOCATION'] == "Leitrim") { echo "SELECTED"; } ?>>Leitrim</option>
                                        <option value="Limerick" <?php if($record['LOCATION'] == "Limerick") { echo "SELECTED"; } ?>>Limerick</option>
                                        <option value="Longford" <?php if($record['LOCATION'] == "Longford") { echo "SELECTED"; } ?>>Longford</option>
                                        <option value="Louth" <?php if($record['LOCATION'] == "Louth") { echo "SELECTED"; } ?>>Louth</option>
                                        <option value="Mayo" <?php if($record['LOCATION'] == "Mayo") { echo "SELECTED"; } ?>>Mayo</option>
                                        <option value="Meath" <?php if($record['LOCATION'] == "Meath") { echo "SELECTED"; } ?>>Meath</option>
                                        <option value="Monaghan" <?php if($record['LOCATION'] == "Monaghan") { echo "SELECTED"; } ?>>Monaghan</option>
                                        <option value="Offaly" <?php if($record['LOCATION'] == "Offaly") { echo "SELECTED"; } ?>>Offaly</option>
                                        <option value="Roscommon" <?php if($record['LOCATION'] == "Roscommon") { echo "SELECTED"; } ?>>Roscommon</option>
                                        <option value="Sligo" <?php if($record['LOCATION'] == "Sligo") { echo "SELECTED"; } ?>>Sligo</option>
                                        <option value="Tipperary" <?php if($record['LOCATION'] == "Tipperary") { echo "SELECTED"; } ?>>Tipperary</option>
                                        <option value="Tyrone" <?php if($record['LOCATION'] == "Tyrone") { echo "SELECTED"; } ?>>Tyrone</option>
                                        <option value="Waterford" <?php if($record['LOCATION'] == "Waterford") { echo "SELECTED"; } ?>>Waterford</option>
                                        <option value="Westmeath" <?php if($record['LOCATION'] == "'Westmeath") { echo "SELECTED"; } ?>>'Westmeath</option>
                                        <option value="Wexford" <?php if($record['LOCATION'] == "Wexford") { echo "SELECTED"; } ?>>Wexford</option>
                                        <option value="Wicklow" <?php if($record['LOCATION'] == "Wicklow") { echo "SELECTED"; } ?>>Wicklow</option>
                                      </select>
                                    </div>

                                     

                                    </p>
                                    <div class="col form-group">
                                    <a href="filter.php" class="w-100 btn btn-info float-right">Search</a>
                                  </div>
                                  </div>
                                </div>      
                         
                  

