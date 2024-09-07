<?php
session_start();
include("header.php");
include("sidebar.php");
include("config.php");

if (isset($_POST['search_data'])) {
  $br_id = $_POST['br_id'];
   $tag_name = $_POST['tag_name'];

?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Maintance Search
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Maintance</a></li>
        <li class="active">Maintance Search</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Asset Tag Name</th>
                <th>Operation Name</th>
                <th>Operation date</th>
              </tr>
            </thead>
            <tbody class="scroll-pane">
              <?php 
                 $result = mysqli_query($conn, "SELECT tl.tag_number tag, tl.status_type tl_status, tl.status_date tl_date FROM asset_table ast INNER JOIN tag_log tl ON ast.tag_number = tl.tag_number WHERE ast.branch_id = '$br_id' AND  ast.tag_number LIKE '%$tag_name%' AND tl.tag_number LIKE '%$tag_name%'");
                 while ($row = $result->fetch_assoc()) { 
                   $tag = $row['tag'];
                   $tl_status = $row['tl_status'];
                   $tl_date = $row['tl_date'];
                  
              ?>
              <tr>
                <td>
                  <?php echo $tag; ?>
                </td>
                <td>
                  <?php echo $tl_status; ?>
                </td>
                <td>
                  <?php echo $tl_date; ?>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
    </section>
  </div>

<?php include('footer.php');
} else { ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Maintance List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Maintance</a></li>
        <li class="active">Maintance List</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <h4>No data found</h4>
          </table>
        </div>
    </section>
  </div>
<?php include('footer.php');
} ?>