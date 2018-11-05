<?php include "inc/header.php"; ?>
<?php 
	$login = session::get("cuslogin");
	if($login == false){
		header("Location:login.php");
	}
?>
<style>
.Psuccess{width:500px; min-height:200px; text-align:center; border:1px solid #ddd; margin:0 auto; padding:20px;}
.Psuccess h2{border-bottom:1px solid #ddd; margin-bottom:20px; padding-bottom:10px;}
.Psuccess p{line-height:25px;font-size:18px;text-align:left;}
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
			<div class = "Psuccess">
				<h2>Success</h2>
				<?php
					$cmrId = session::get("cmrId");
					$amount = $ct->payableAmount($cmrId);
					if($amount){
						$sum = 0;
						while($result = $amount->fetch_assoc()){
							$price = $result['price'];
							$sum = $sum+$price;
						}
					}
				?>
				<p>Total Payable Amount(Including Vat) : $
					<?php 
						$vat = $sum * 0.1;
						$total = $sum+$vat;
						echo $total;
					?>
				</p>
				<p>Thanks for Purchase. Receive Your Order successfully. We Will Contact You As Soon As Possible With
				Delivary Details. Here is Your Order Details...<a href="orderdetails.php">Visit Here..</a></p>

			</div>
 		</div>
	</div>
</div>
	
<?php include "inc/footer.php"; ?>