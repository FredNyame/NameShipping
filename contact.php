<?php 
 $pageTitle = 'Contact us for all your enquires';
 include ('includes/header.php');
 include ('includes/contactprocess.php');
?>

<div class="form-container">
	<div class="container">
		<div class="headForm">
			<h1>Get in touch</h1>
			<p>Please use the form below to enqiure more on specific issues such as delivery and puck up and also feel free to reach out with any questions you have about how we could help with your items.</p>
		</div>
 	<form class="contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
 		<div class="input-container">
 			<label for="firstname"><i class="fa fa-user" aria-hidden="true"></i>First name <span>*</span></label>
 			<div class="input-content">
 				<input type="text" name="firstname" placeholder="e.g Kwabena" id="firstname" value="<?php echo isset($_POST['firstname']) ? $firstname : ''; ?>"> 
 				<p class="error"><?php echo $firstnameErr; ?></p>
 			</div>		
 		</div>
 		<div class="input-container">
 			<label for="lastname"><i class="fa fa-user-circle" aria-hidden="true"></i>Last name <span>*</span></label>
 			<div class="input-content">
 				<input type="text" name="lastname" placeholder="e.g Owusu" id="lastname" value="<?php echo isset($_POST['lastname']) ? $lastname : ''; ?>">
 				<p class="error"><?php echo $lastnameErr; ?></p>
 			</div>
 		</div>
 		<div class="input-container">
 			<label for="email"><i class="fa fa-envelope-open" aria-hidden="true"></i>Email <span>*</span></label>
 			<div class="input-content">
 				<input type="text" name="email" placeholder="example@gmail.com" id="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
 				<p class="error"><?php echo $emailErr; ?></p>
 			</div>
 		</div>
 		
 		<!--<label for="phone"><i class="fa fa-mobile" aria-hidden="true"></i>Phone<span>*</span></label>
 		<input type="text" name="phone" placeholder="+0012345904842">-->
 		<div class="input-container">
 			<label for="subject"><i class="fa fa-comments" aria-hidden="true"></i>Subject <span>*</span></label>
 			<div class="input-content">
 				<select name="subject" id="subject">
 					<option value="">Select a subject</option>
 					<option value="Pickup" <?php echo $subject == 'Pickup' ? 'selected' : ''; ?> >Pickup</option>
 					<option value="Packaging" <?php echo $subject == 'Packaging' ? 'selected' : ''; ?> >Packaging</option>
 					<option value="Delivery" <?php echo $subject == 'Delivery' ? 'selected' : ''; ?> >Delivery</option>
 				</select>
 				<p class="error"><?php echo $subjectErr; ?></p>
 			</div>
 		</div>
 		<div class="input-container">
 			<label for="message"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Enquiry message <span>*</span></label>
 			<div class="input-content">
 				<textarea name="message" rows="8" cols="30" placeholder="What are you enquring about?" id="message" ><?php echo isset($_POST['$message']) ? $message : ''; ?></textarea>
 				<p class="error"><?php echo $messageErr; ?></p>
 			</div>
 		</div>
 		<input type="submit" name="submit" value="Send Message" id="submit">
 		<span class="success"><?php echo $success; ?></span>
 	</form>
 </div>
</div>
<?php 
 include ('includes/footer.php');
?>