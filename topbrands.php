<?php include "inc/header.php"; ?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Acer</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	    <div class="section group">
			<?php 
				$getAcer = $pd->ProductFromAcer();
				if($getAcer){
					while($result = $getAcer->fetch_assoc()){
					
			?>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="details.php?proid=<?php echo $result['productId'];?>">
						<img src="admin/<?php echo $result['image']; ?>" alt=""/></a>
					 <h2><?php echo $result['productName'];?></h2>
					 <p><?php echo $fm->textshorten($result['body'],60); ?></p>
					 <p><span class="price">$<?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
					 class="details">Details</a></span></div>
				</div>
			<?php } } ?>
		</div>
		<div class="content_bottom">
    		<div class="heading">
    		<h3>Samsung</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
					$getSamsung = $pd->ProductFromSamsung();
					if($getSamsung){
						while($result = $getSamsung->fetch_assoc()){
						
				?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php?proid=<?php echo $result['productId'];?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/></a>
						 <h2><?php echo $result['productName'];?></h2>
						 <p><?php echo $fm->textshorten($result['body'],60); ?></p>
						 <p><span class="price">$<?php echo $result['price'];?></span></p>
						 <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
						 class="details">Details</a></span></div>
					</div>
				<?php } } ?>
				
			</div>
	<div class="content_bottom">
    		<div class="heading">
    		<h3>Iphpne</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
					$getIphone = $pd->ProductFromIphone();
					if($getIphone){
						while($result = $getIphone->fetch_assoc()){
						
				?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php?proid=<?php echo $result['productId'];?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/></a>
						 <h2><?php echo $result['productName'];?></h2>
						 <p><?php echo $fm->textshorten($result['body'],60); ?></p>
						 <p><span class="price">$<?php echo $result['price'];?></span></p>
						 <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
						 class="details">Details</a></span></div>
					</div>
				<?php } } ?>
			</div>
		<div class="content_top">
    		<div class="heading">
    		<h3>Canon</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	    <div class="section group">
			<?php 
				$getCanon = $pd->ProductFromCanon();
				if($getCanon){
					while($result = $getCanon->fetch_assoc()){
					
			?>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="details.php?proid=<?php echo $result['productId'];?>">
						<img src="admin/<?php echo $result['image']; ?>" alt=""/></a>
					 <h2><?php echo $result['productName'];?></h2>
					 <p><?php echo $fm->textshorten($result['body'],60); ?></p>
					 <p><span class="price">$<?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
					 class="details">Details</a></span></div>
				</div>
			<?php } } ?>
		</div>
		
		<div class="content_top">
    		<div class="heading">
    		<h3>Nikon</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	    <div class="section group">
			<?php 
				$getNikon = $pd->ProductFromNikon();
				if($getNikon){
					while($result = $getNikon->fetch_assoc()){
					
			?>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="details.php?proid=<?php echo $result['productId'];?>">
						<img src="admin/<?php echo $result['image']; ?>" alt=""/></a>
					 <h2><?php echo $result['productName'];?></h2>
					 <p><?php echo $fm->textshorten($result['body'],60); ?></p>
					 <p><span class="price">$<?php echo $result['price'];?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
					 class="details">Details</a></span></div>
				</div>
			<?php } } ?>
		</div>
    </div>
 </div>
<?php include "inc/footer.php"; ?>