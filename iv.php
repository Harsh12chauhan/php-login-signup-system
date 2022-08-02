<?php
session_start();
include_once('config.php');

$sql = "SELECT * FROM products ";
$result = mysqli_query($_SESSION['conn'],$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>bill-page</title>
</head>
<body>
<div class="container mt-5">
    <div class="container  text-center ">
    <h1>This is Bill Page</h1>
</div>
<div class="row clearfix">
    <div class="col-md-12 ">
        <table class="table table-bordered table-hover" id="tab_logic">
            <thead>
                <tr>
                    <th class="text-center">Sno.</th>
                    <th class="text-center"> Product ID </th>
                    <th class="text-center"> Product </th>
                    <th class="text-center"> Quantity </th>
                    <th class="text-center"> Price </th>
                </tr>
            </thead>
        <tbody>
            <?php
            if(mysqli_num_rows($result)>0){
                while($r = mysqli_fetch_array($result)) {
         echo " <tr id='addr0'>";
         echo "<td>".$r['psno']."</td>";
         echo '<td><input type="number" name="pid[]" placeholder="Enter Product ID" value="'.$r['pid'].'" class="form-control" readonly/></td>';
         echo '<td><input type="text" name="pname[]"  placeholder="Enter Product Name" value="'.$r['pname'].'" class="form-control qty dropdown" step="0" min="0"/></td>';
         echo '<td><input type="number" name="pquantity[]"  placeholder="Enter product Quantity" value="'.$r['pquantity'].'" class="form-control price" step="0.00" min="0"/></td>';
         echo '<td><input type="number" name="pprice[]"   placeholder="0.00" value="'.$r['pprice'].'" class="form-control total" readonly/></td>';
         echo " </tr>";
        }
    }
         ?>
          <tr id='addr1'></tr>
        </tbody>
    </table>
    </div>
  </div>
  <div class="row clearfix">
      <div class="col-md-12">
          <button id="add_row" class="btn btn-default pull-left">Add Row</button>
          <button id='delete_row' class="pull-right btn btn-default">Delete Row</button>
        </div>
  </div>
  <div class="row clearfix" style="margin-top:20px">
    <div class="pull-right col-md-4">
      <table class="table table-bordered table-hover" id="tab_logic_total">
          <tbody>
          <tr>
            <th class="text-center">Sub Total</th>
            <?php
           echo '<td class="text-center"><input type="text" name="sub_total"  value='.array_sum($_SESSION['price']).' class="form-control" id="sub_total" readonly/></td>';
           ?>
          </tr>
        </tbody>
    </table>
    </div>
  </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>