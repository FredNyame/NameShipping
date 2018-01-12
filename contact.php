<?php 
 $pageTitle = 'Contact us for all your enquires';
 include ('includes/header.php');
?>

<div class="form-container">
	<div class="container">
		<div class="headForm">
			<h1>Get in touch</h1>
			<p>Please use the form below to enqiure more on specific issues such as delivery and puck up and also feel free to reach out with any questions you have about how we could help with your items.</p>
		</div>
 	<form class="contact-form" action="" method="post">
 		<div class="input-container">
 			<label for="firstname"><i class="fa fa-user" aria-hidden="true"></i>First name <span>*</span></label>
 			<div class="input-content">
 				<input type="text" name="firstname" placeholder="e.g Kwabena" id="firstname"> 
 				<p class="error">First name field is required</p>
 			</div>		
 		</div>
 		<div class="input-container">
 			<label for="lastname"><i class="fa fa-user-circle" aria-hidden="true"></i>Last name <span>*</span></label>
 			<div class="input-content">
 				<input type="text" name="lastname" placeholder="e.g Owusu" id="lastname">
 				<p class="error">Last name field is required</p>
 			</div>
 		</div>
 		<div class="input-container">
 			<label for="email"><i class="fa fa-envelope-open" aria-hidden="true"></i>Email <span>*</span></label>
 			<div class="input-content">
 				<input type="text" name="email" placeholder="example@gmail.com" id="email">
 				<p class="error">Email field is required</p>
 			</div>
 		</div>
 		
 		<!--<label for="phone"><i class="fa fa-mobile" aria-hidden="true"></i>Phone<span>*</span></label>
 		<input type="text" name="phone" placeholder="+0012345904842">-->
 		<div class="input-container">
 			<label for="subject"><i class="fa fa-comments" aria-hidden="true"></i>Subject <span>*</span></label>
 			<div class="input-content">
 				<select name="subject" id="subject">
 					<option value="no selection" selected>Select a subject</option>
 					<option value="pickup">Pickup</option>
 					<option value="Packaging">Packaging</option>
 					<option value="Delivery">Delivery</option>
 				</select>
 				<p class="error">Subject field is required</p>
 			</div>
 		</div>
 		<div class="input-container">
 			<label for="message"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Enquiry message <span>*</span></label>
 			<div class="input-content">
 				<textarea name="message" rows="8" cols="30" placeholder="What are you enquring about?" id="message"></textarea>
 				<p class="error">Message field is required</p>
 			</div>
 		</div>
 		<input type="submit" name="submit" value="Send Message" id="submit">
 		<span class="success">Thank you for contacting us, message sent!</span>
 	</form>
 </div>
</div>
<?php 
 include ('includes/footer.php');
?>