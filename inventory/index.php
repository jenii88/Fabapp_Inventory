<?php
/*
 *   CC BY-NC-AS UTA FabLab 2016-2017
 *   FabApp V 0.9
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/pages/header.php');
if (!$staff || $staff->getRoleID() < 7){
    //Not Authorized to see this Page
    header('Location: index.php');
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel ="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.city {display:none}
</style>
<title><?php echo $sv['site_name'];?> Inventory</title>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12"> <!-- this number shows how long the column is -->
            <h1 class="page-header">Inventory</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket fa-fw"></i> Inventory List
                    <!-- Code for the button and the modal STARTS HERE -->
                    <div class ="pull-right"> <!--  direction of button -->
                      <div class="btn-group">
                        <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-default btn-xs">Add Material</button>

                        <div id="id01" class="w3-modal">
                          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                            <header class="w3-container w3-light-blue">
                              <span onclick="document.getElementById('id01').style.display='none'"
                              class="w3-button w3-blue w3-large w3-display-topright">&times;</span>
                              <h2>Add Inventory</h2>
                            </header>

                            <div class="w3-bar w3-border-bottom">
                              <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'New')">New Material</button>
                              <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Existing')">Existing Inventory</button>
                            </div>
                            <!-- The body of the container modal -->
                            <!-- Existing Material -->

                            <div id="Existing" class="w3-container city w3-center">
                              <h1>Existing</h1>
                              <!-- <form class="w3-container" action="/action_page.php"> -->
                              <div class ="w3-section">
                                <div class="w3-dropdown-hover">
                                  <button class="btn btn-default btn-xlarge">Type</button><br>
                                  <div class="w3-dropdown-content w3-bar-block w3-border">
                                    <a href="#" class="w3-bar-item w3-button">ABS</a>
                                    <a href="#" class="w3-bar-item w3-button">VINYL</a>
                                  </div>
                                </div>

                                <br><label><b>Color</b></label><br>
                                <input class'w3-input w3-border w3-margin-bottom" type="text" placeholder="Color" name="color" required><br>

                                <label><b>Qty of Material</b></label><br>
                                <input class'w3-input w3-border w3-margin-bottom" type="amount" placeholder="Amount (grams)" name="qty" required><br>

                                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Add</button>
                              </div>
                            </div>
                            <!-- End of Existing Material -->
                            <!-- New Material-->

                            <div id="New" class="w3-container city w3-center">
                              <h1>New</h1>
                              <!-- <form class="w3-container" action="/action_page.php"> -->
                              <div class ="w3-section">
                                <label><b>Type</b></label><br>
                                <input class'w3-input w3-border w3-margin-bottom" type="text" placeholder="Type" name="type" required><br>

                                <label><b>Color</b></label><br>
                                <input class'w3-input w3-border w3-margin-bottom" type="text" placeholder="Color" name="color" required><br>

                                <label><b>Serial #</b></label><br>
                                <input class'w3-input w3-border w3-margin-bottom" type="serial" placeholder="Serial Number" name="serial" required><br>


                                <label><b>Qty of Material</b></label><br>
                                <input class'w3-input w3-border w3-margin-bottom" type="amount" placeholder="Amount (grams)" name="qty" required><br>

                                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Add</button>
                              </div>
                            </div>

                            <!-- End of New Material -->
                            <!-- End of body of the modal container -->

                            <! -- Code for the look of the modal container -->
                            <div class="w3-container w3-light-grey w3-padding">
                              <button class="w3-button w3-right w3-white w3-border"
                              onclick="document.getElementById('id01').style.display='none'">Close</button>
                            </div>
                          </div>
                        </div>

                        <!--- java script for the multtiple tab for the modal container -->
                        <script>
                        document.getElementByClassName("tablink")[0].click();

                        function openCity(evt, cityName) {
                          var i, x, tablinks;
                          x = document.getElementsByClassName("city");
                          for (i=0; i < x.length;i++) {
                            x[i].style.display = "none";
                          }
                          tablinks = document.getElementsByClassName("tablink");
                          for (i=0; i < x.length; i++) {
                          tablinks[i].classList.remove("w3-light-grey");
                          }
                          document.getElementById(cityName).style.display="block";
                          evt.currentTarget.classList.add("w3-light-grey");
                        }
                        </script>

                        <!-- Modal Button Ends Here -->





                      </div>
                    </div>
                </div>
                <div class="panel-body">
                <div class="row">
                  <div class="col-lg-10">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover table-striped">
                        <thead> <!-- title names of table -->
                          <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Serial #</th>
                            <th>Current Amount(grams)</th>
                            <th>Time Remaining</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr> <!-- examples of table. We need to implement items with a function instead through Adding -->
                            <td>Image Link</td>
                            <td>Abs Color</td>
                            <td>Serial Number</td>
                            <td>1000</td>
                            <td>4 Months</td>
                          </tr>
                        </tbody>


                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.col-lg-10 (nested) -->
                  <div class="col-lg-4">
                    <div id="morris-bar-chart"></div>
                  </div>
                  <!-- /.col-lg-4 (nested) -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
          </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-md-10 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php
//Standard call for dependencies
include_once ($_SERVER['DOCUMENT_ROOT'].'/pages/footer.php');
?>
