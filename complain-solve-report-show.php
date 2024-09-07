<?php
  session_start();
  include("header.php");
  include("sidebar.php");
  include("config.php");
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Maintance Report
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Maintance</a></li>
      <li class="active">Maintance report</li>
    </ol>
  </section>


  <section class="content">
    <div class="row">
      <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Brand Name</th>
              <th>Branch Name</th>
              <th>Asset Tag Name</th>
              <th>Category Name</th>
              <th>Model</th>
              <th>Problem Issue Date</th>
              <th>Request Date</th>
              <th>Vendor</th>
              <th>Services Charge</th>
              <th>Status</th>
              <th>Remarks</th>
              <th>Update</th>
            </tr>
          </thead>

          <tbody class="scroll-pane">
            <?php
            if(isset($_GET['show_report'])) {
                $asset = $_GET['asset'];
                $branch_id = $_GET['branch_id'];
              $query = "SELECT * FROM maintenance_table WHERE asset_id = '$asset' OR branch_id = '$branch_id' AND status_request = '1' ";
              $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $branch_id = $row['branch_id'];
                  $asset_id = $row['asset_id'];
                  $category_id = $row['category_id'];
                  $isuee_date = $row['isuee_date'];
                  $request_date = $row['request_date'];
                  $vendor = $row['vendor'];
                  $services_charge = $row['services_charge'];
                  $status_request = $row['status_request'];
                  $remarks = $row['remarks'];
            ?>

            <tr>
              <td> 
                <?php
                    $brand_id = $row['brand_id'];
                    $query = mysqli_query($conn,"SELECT * FROM brand_table WHERE id = '$brand_id'");
                
                    while($row=mysqli_fetch_array($query)) {
                      echo $name = $row['name'];
                    } 
                ?>
              </td>

              <td> 
                <?php
                    $query_b = mysqli_query($conn,"SELECT * FROM branches_table WHERE id = '$branch_id'");
                    while($row_b = mysqli_fetch_array($query_b)) {
                      echo $name = $row_b['br_name'];
                    } 
                ?>
              </td>

              <td> 
                <?php 
                  $query = mysqli_query($conn,"SELECT * FROM asset_table WHERE id = '$asset_id'");
              
                  while($row=mysqli_fetch_array($query)) {
                    echo $name = $row['tag_number'];
                  } 
                ?>
              </td>

              <td> 
                <?php 
                  $query = mysqli_query($conn,"SELECT * FROM category WHERE id = '$category_id'");
              
                  while($row=mysqli_fetch_array($query)) {
                    echo $name = $row['name'];
                  } 
                ?>
              </td>
              <td>
                <?php 
                  $query = mysqli_query($conn,"SELECT * FROM asset_table WHERE id = '$asset_id'");
              
                  while($row=mysqli_fetch_array($query)) {
                    echo $model = $row['model'];
                  } 
                ?>
              </td>
              <td> <?php echo $isuee_date; ?></td>
              <td> <?php echo $request_date; ?></td>
              <td> <?php echo $vendor; ?></td>
              <td> <?php echo $services_charge; ?></td>
              <td> 
                <?php
                  if($status_request == 1) {
                    echo '<span style="color:blue;">Request</span>';
                  } elseif($status_request == 2) {
                    echo '<span style="color:green;">Process</span>';
                  } elseif($status_request == 3) {
                    echo '<span style="color:#f368e0D;">Complete</span>';
                  } elseif($status_request == 4) {
                    echo '<span style="color:red;">Disposal</span>';
                  }
                  //echo $status_request; 
                ?>
              </td>
              <td> <?php echo $remarks; ?></td>
              <td>
                <?php
                  if($status_request == 4) {
                    echo '<span>Item Disposal</span>';
                  } elseif($status_request == 3) {
                    echo '<span style="color:#f368e0D;">Maintance Complete</span>';
                  } else { ?>
                  <a class="btn btn-primary" href="maintance_update.php?id=<?php echo $id; ?>">Edit</a>
                  <?php } ?>
              </td> 
            </tr>

            <?php } } } ?>
          </tbody>
        </table>
      </div>
  </section>
</div>

<?php include('footer.php') ?>