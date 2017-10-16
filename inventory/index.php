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
<!-- added random things for errors -->
$array = array();
foreach($array as $value ) {
  echo "<br />";
}
foreach($array as $value) {
  if($value ==4) continue;
  
}
<!-- ends random useless code -->

?>
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
                    <div class ="pull-right"> <!-- This is a comment. direction of button -->
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                          Actionis<span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Add New Material</a>
                            </li>
                            <li><!--  removed <a href="#"> -->Add Existing Material</a>
                            </li>
                            <li class="divider"> /*divider for other link: removed </li> */
                            <li><a href="#">Another Link</a>
                            </li>
                          </ul>
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
                            <th>Time Remaining <!-- removed </th> -->
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
