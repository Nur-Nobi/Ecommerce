<?php include "inc/header.php"; ?>
<?php 
	$login = session::get("cuslogin");
	if($login == false){
		header("Location:login.php");
	}
?>
<?php
	if(isset($_GET['custId'])){
		$id = $_GET['custId'];
		$time = $_GET['time'];
		$price = $_GET['price'];
		$confirm = $ct->productShiftConfirm($id, $time, $price);
	}
?>
<style>
.tblone tr td{text-align:justify;}
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
			<div class="order">
				<h2>Your Ordered Details</h2>
				<table class="tblone">
							<tr>
								<th>NO</th>
								<th>Product Name</th>
								<th>Image</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Date</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						<?php 
							$cmrId = session::get("cmrId");
							$getOrder = $ct->getOrderProduct($cmrId);
							if($getOrder){
									$i=0;
									while($result = $getOrder->fetch_assoc()){	
										$i++;
							
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName'];?></td>
								<td><img src="admin/<?php echo $result['image'];?>" alt=""/></td>
								<td><?php echo $result['quantity'];?></td>
								<td>$ <?php 
									echo $result['price']; ?>
								</td>
								<td><?php echo $fm->formatdate($result['date']);?></td>
								<td>
									<?php 
										if($result['status'] == '0'){
											echo "pending";
										}elseif($result['status'] == '1'){ 
											echo "confirm";
										}else{
											echo "Ok";
										}	
									?>
								</td>
								<?php 
									if($result['status'] == '1'){ ?>
										<td><a href="?custId=<?php echo $cmrId; ?>& 
										price=<?php echo $result['price']; ?>&time=<?php echo $result['date']; ?>">Shifted</a></td>
								<?php	} elseif($result['status'] == '2'){ ?>
										<td>Ok</td>
								<?php } elseif($result['status'] == '0'){ ?>
										<td>N/A</td>	
								
								<?php }  ?>
							</tr>
						<?php } } ?>
							
					</table>
			</div>
		</div>
       <div class="clear"></div>
    </div>
 </div>
 
<?php include "inc/footer.php"; ?>