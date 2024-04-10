<?php
include("./connection.php");
include("./header.php");
$data = $_GET['rrno'];
//echo($data);

//$query = "select cust_id from account";
$query = "select account.account_id,account.cust_id,customer.cust_name,invoice.net_amount,invoice.due_date from account join customer on account.cust_id=customer.cust_id join invoice on account.account_id=invoice.account_id where account.account_id=$data";
$result = mysqli_query($con,$query);

if($result){
    ?>
    <div class="card w-75 my-3" style="margin:auto">
  <div class="card-header">
    Bill details
  </div>


    <?php
        if(mysqli_num_rows($result)<1){
            echo "<span class='m-3'>No data found</span></div>";

        }
    while($row = mysqli_fetch_assoc($result)){
      //  echo var_dump($row);

        ?>
          <table class="table w-50 table-success table-striped-columns my-5" style="margin:auto">
            <tr>
                <td>Account ID</td>
                <td><?php echo $row['account_id']?></td>
            </tr>
            <tr>
                <td>Customer ID</td>
                <td><?php echo $row['cust_id']?></td>
            </tr>
            <tr>
                <td>Customer Name</td>
                <td><?php echo $row['cust_name']?></td>
            </tr>
            <tr>
                <td>Net Amount</td>
                <td><?php echo $row['net_amount']?></td>
            </tr>
            <tr>
                <td>Due Date</td>
                <td><?php echo $row['due_date']?></td>
            </tr>
        </table>
        </div>
        <div style="display:flex; justify-content:center">
            <form action="paybill.php">
            <input type="number" name="accid" hidden value="<?php echo $data ?>">
            <input class="btn btn-danger m-3" type="button" value="Cancel"/>
            <input class="btn btn-success m-3" type="submit" value="Pay now"/>
            </form>
        </div>
        <?php


    }
}
else{
    ?>
    </div>
    <?php
    echo(mysqli_error($con));
}


include "./aboutus.php"
?>