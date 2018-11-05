<?php include "inc/header.php"; ?>
<?php 
	$login = session::get("cuslogin");
	if($login == false){
		header("Location:login.php");
	}
?>
<?php 
	if(isset($_GET['orderid']) && $_GET['orderid'] == 'order'){
		$cmrId = session::get("cmrId");
		$insertOrder = $ct->orderProduct($cmrId);
		$deldata = $ct->delcustomerCart();
		header("Location:success.php");
	}
?>
<style>
.division{width:50%; float:left;}
.tblone{width:500px; margin:0 auto; border:2px solid #ddd;}
.tblone tr td{text-align:justify;}

.tbltwo{float:right;text-align:left; width=60%; border:2px solid #ddd; margin-right:14px; margin-top:12px;}
.tbltwo tr td{text-align:justify; padding:7px 15px;}
.ordernow{padding-bottom:30px}
.ordernow a{width:200px; margin:20px auto 0;text-align:center; padding:5px; font-size:30px; display:block;
background:#ff0000; color:#fff; border-radius:3px;}
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
			<div class = "division">
					<table class="tblone">
							<tr>
								<th>NO</th>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total Price</th>
							</tr>
						<?php 
							$getpd = $ct->getCartProd();
							if($getpd){
									$i=0;
									$sum=0;
									$qnt = 0;
									while($result = $getpd->fetch_assoc()){	
										$i++;
							
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName'];?></td>
								<td>$ <?php echo $result['price'];?></td>
								<td><?php echo $result['quantity'];?></td>
								<td>$ <?php 
									$total = $result['price'] * $result['quantity'];
									echo $total;?>
								</td>
							</tr>
						<?php
							$qnt = $qnt + $result['quantity'];
							$sum = $sum + $total;
							session::set("sum", $sum);
							session::set("qnt", $qnt);
						?>
						<?php } } ?>
							
					</table>
						<table class="tbltwo">
							<tr>
								<td>Sub Total</td>
								<td>:</td>
								<td>$ <?php echo $sum; ?></td>
							</tr>
							<tr>
								<td>VAT</td>
								<td>:</td>
								<td>10% ($<?php echo $vat = $sum * 0.1;?>)</td>
							</tr>
							<tr>
								<td>Grand Total</td>
								<td>:</td>
								<td>$ <?php
									$vat = $sum * 0.1;
									$gtotal = $sum + $vat;
									echo $gtotal;
								?></td>
							</tr>
							<tr>
								<td>Quantity</td>
								<td>:</td>
								<td><?php echo $qnt;?></td>
							</tr>
					   </table>
			</div>
			
			<div class = "division">
				<?php 
					$id = session::get("cmrId");
					$getdata = $cmr->getCustomerData($id);
					if($getdata){
						while($result = $getdata->fetch_assoc()){
			
				?>
				<table class="tblone">
					<tr>
						<td colspan = "3"><h2>User Profile Details</h2></td>
					</tr>
					<tr>
						<td width="20%">Name</td>
						<td width="5%">:</td>
						<td><?php echo $result['name']; ?></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td>:</td>
						<td><?php echo $result['phone']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><?php echo $result['email']; ?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td>:</td>
						<td><?php echo $result['address']; ?></td>
					</tr>
					<tr>
						<td>City</td>
						<td>:</td>
						<td><?php echo $result['city']; ?></td>
					</tr>
					<tr>
						<td>Zipcode</td>
						<td>:</td>
						<td><?php echo $result['zip']; ?></td>
					</tr>
					<tr>
						<td>Country</td>
						<td>:</td>
						<td><?php echo $result['country']; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><a href = "editprofile.php" >Update Details</a></td>
					</tr>
					
				</table>
			<?php } } ?>
			</div>
 		</div>
	</div>
	<div class="ordernow"><a href="?orderid=order">Order</a></div>
</div>
	
<?php include "inc/footer.php"; ?>