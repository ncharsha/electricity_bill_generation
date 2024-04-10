<?php
include "./connection.php";
include "./header.php";
$accid = $_GET['accid'];

$query = "select * from invoice where account_id=$accid";
$result = mysqli_query($con,$query);

if($result){
    while($row = mysqli_fetch_assoc($result)){
    //echo var_dump($row);
    ?>

<table class="table w-50 table-striped my-3" style="margin:auto;border:black; border-style:dotted">
  <tr>
    <th colspan=2 style="text-align:center">INVOICE</td>
</tr>
<tr>
    <td>Invoice Id</td>
    <td><?php echo $row['invoice_id']?></td>
</tr>
<tr>
    <td>electricityboard  Id</td>
    <td><?php echo $row['electricityboard_id'] ?></td>
</tr>
<tr>
    <td>Account Id</td>
    <td><?php echo $row['account_id'] ?></td>
</tr>
<tr>
    <td>Tariff Id</td>
    <td><?php echo $row['tariff_id'] ?></td>
</tr>
<tr>
    <td>Reading Date</td>
    <td><?php echo $row['readingdate'] ?></td>
</tr>
<tr>
    <td>Bill Number</td>
    <td><?php echo $row['bill_no'] ?></td>
</tr>
<tr>
    <td>Present Reading</td>
    <td><?php echo $row['present_reading'] ?></td>
</tr>
<tr>
    <td>Previous Reading</td>
    <td><?php echo $row['previous_reading'] ?></td>
</tr>
<tr>
    <td>Fixed Charge</td>
    <td><?php echo $row['fixes_change'] ?></td>
</tr>
<tr>
    <td>Energy Charge</td>
    <td><?php echo $row['energy_charge'] ?></td>
</tr>
<tr>
    <td>Tax</td>
    <td><?php echo $row['tax'] ?></td>
</tr>
<tr>
    <td>Bill Amount</td>
    <td><?php echo $row['bill_amunt'] ?></td>
</tr>
<tr>
    <td>Previous Balance</td>
    <td><?php echo $row['previous_balance'] ?></td>
</tr>
<tr>
    <td>Others</td>
    <td><?php echo $row['others'] ?></td>
</tr>
<tr>
    <td>Credit</td>
    <td><?php echo $row['credit'] ?></td>
</tr>
<tr>
    <td>Consession</td>
    <td><?php echo $row['consession'] ?></td>
</tr>
<tr>
    <td>Net Amount</td>
    <td><?php echo $row['net_amount'] ?></td>
</tr>
<tr>
    <td>Due Date</td>
    <td><?php echo $row['due_date'] ?></td>
</tr>
</table>

<?php
    }
}
$query2 = "update invoice set net_amount=0 where account_id=$accid";
$result2 = mysqli_query($con,$query2);
if($result2){
    //echo "updated";
}
else{
    //echo mysqli_error($con);
}
include "./aboutus.php";
?>