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
<title><?php echo $sv['site_name'];?> Inventory</title>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
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
                        <button type ="button" class="btn btn-default btn-xs" data-toggle="moddle" data-target="#myModal">Add Material
                        </button>
                        


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
                          <tr> 
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
