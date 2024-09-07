<?php
  session_start();
  include("header.php");
  include("sidebar.php");
  include("config.php");
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Sales Report
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Sales</a></li>
      <li class="active">Report</li>
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
              <th>Outlet Name</th>
              <th>Product Name</th>
              <th>Product Quantity</th>
              <th>Product total Price</th>
            </tr>
          </thead>

          <tbody class="scroll-pane">
            <?php
            if(isset($_GET['show_report'])) {
                $brand = $_GET['brand'];
                $branch = $_GET['branch'];
                $outlet = $_GET['outlet'];
                $start_date = $_GET['start_date'];
                $end_date = $_GET['end_date'];
	            $query = "SELECT * FROM sales_report WHERE brand_id = '$brand' OR branch_id = '$branch' AND outlet_id = '$outlet' AND (created_at BETWEEN $start_date AND $end_date)";
	            $result = mysqli_query($conn, $query);
	            if ($result->num_rows > 0) {
	            	while ($row = $result->fetch_assoc()) {
	                  $id = $row['id'];
	                  $brand_id = $row['brand_id'];
	                  $branch_id = $row['branch_id'];
	                  $outlet_id = $row['outlet_id'];
	                  $quantity = $row['quantity'];
	                  $product_id = $row['product_id'];
	                  $created_at = $row['created_at'];
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
                  $query = mysqli_query($conn,"SELECT * FROM outlet_table WHERE id = '$outlet_id'");
              
                  while($row=mysqli_fetch_array($query)) {
                    echo $name = $row['outlet_name'];
                  } 
                ?>
              </td>

              <td> 
                <?php 
                  $query = mysqli_query($conn,"SELECT * FROM product_table WHERE id = '$product_id'");
              
                  while($row=mysqli_fetch_array($query)) {
                    echo $name = $row['product_name'];
                  } 
                ?>
              </td>
              <td> <?php echo $quantity; ?></td>
              <td>
                <?php 
                  $query = mysqli_query($conn,"SELECT * FROM product_table WHERE id = '$product_id'");
              
                  while($row=mysqli_fetch_array($query)) {
                    echo $price = $row['price']*$quantity;
                   
                  } 
                ?>
              </td>
              
            </tr>

            <?php } } } ?>
          </tbody>
          
        </table>
      </div>
  </section>
</div>

<?php include('footer.php') ?>