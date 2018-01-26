<?php 
$pageTitle = "Pick my items | Use form to fill out your items you want to be pick up and ship";
include("includes/header.php");
include("includes/form-pickup.php");
?>

<div class="pickup-container">
	<div class="container">
		<div class="info-head">
			<h1>Pick my item</h1>
			<p>Please use the form below to fill your information to help us come pick up your items.</p>
		</div>
		<div class="pickup-form-container">
			<form class="pickup-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="pickupForm">
				<div class="name-container">
					<div class="first-name">
						<label for="firstname">First name</label>
						<input type="text" name="firstname" placeholder="e.g Kwame" id="firstname" value="<?php echo isset($_POST['firstname']) ? $firstname : ''; ?>">
						<p class="error-form"><?php echo $firstnameErr; ?></p>
					</div>
					<div class="last-name">
						<label for="lastname">Last name</label>
						<input type="text" name="lastname" placeholder="e.g Owusu" id="lastname" value="<?php echo isset($_POST['lastname']) ? $lastname : ''; ?>">
						<p class="error-form"><?php echo $lastnameErr; ?></p>
					</div>
				</div>
				<div class="email-container">
					<label for="email">Email</label>
					<input type="text" name="email" placeholder="e.g example.gmail.com" id="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
					<p class="error-form"><?php echo $emailErr; ?></p>
				</div>
				<div class="phone-container">
					<label for="phone">Phone</label>
					<input type="tel" name="phone" placeholder="e.g +241-454-2345" id="phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
					<p class="error-form"><?php echo $phoneErr; ?></p>
				</div>
				<div class="address-container">
					<label for="street">Address</label>
					<input type="address" name="street" placeholder="e.g 123 metropilotan Ave" id="street" value="<?php echo isset($_POST['street']) ? $address : ''; ?>">
					<p class="error-form"><?php echo $streetErr; ?></p>
				</div>
				<div class="city-state-container">
					<div class="city-contain">
						<label for="city">City</label>
						<input type="text" name="city" placeholder="e.g Bronx" id="city" value="<?php echo isset($_POST['city']) ? $city : ''; ?>">
						<p class="error-form"><?php echo $cityErr; ?></p>
					</div>
					<div class="city-contain-select">
						<label for="state">State</label>
					<select name="state">
						<option value="">Choose...</option>
						<option value="Connecticut" <?php echo ($state == 'Connecticut') ? 'selected' : ''; ?> >Connecticut</option>
						<option value="Delaware" <?php echo ($state == 'Delaware') ? 'selected' : ''; ?> >Delaware</option>
						<option value="Georgia" <?php echo ($state == 'Georgia') ? 'selected' : ''; ?> >Georgia</option>
						<option value="New Jersey" <?php echo ($state == 'New Jersey') ? 'selected' : ''; ?> >New Jersey</option>
						<option value="New York" <?php echo ($state == 'New York') ? 'selected' : ''; ?> >New York</option>
						<option value="Maryland" <?php echo ($state == 'Maryland') ? 'selected' : ''; ?> >Maryland</option>
						<option value="Massachusetts" <?php echo ($state == 'Massachusetts') ? 'selected' : ''; ?> >Massachusetts</option>
						<option value="Pennsylvania" <?php echo ($state == 'Pennsylvania') ? 'selected' : ''; ?> >Pennsylvania</option>
						<option value="Rhode Island" <?php echo ($state == 'Rhode Island') ? 'selected' : ''; ?> >Rhode Island</option>
						<option value="Virginia" <?php echo ($state == 'Virginia') ? 'selected' : ''; ?> >Virginia</option>
					</select>
					<p class="error-form"><?php echo $stateErr; ?></p>
					</div>
					<div class="city-contain">
						<label for="zipcode">Zipcode</label>
						<input type="text" name="zipcode" placeholder="12045" id="zipcode" value="<?php echo isset($_POST['zipcode']) ? $zipcode : ''; ?>">
						<p class="error-form"><?php echo $zipcodeErr; ?></p>
					</div>
				</div>
				<div class="date-container">
					<label for="date">Avaibility(Date)</label>
					<input type="date" name="date" id="pickupdate" value="<?php echo isset($_POST['date']) ? $date : ''; ?>">
					<p class="error-form"><?php echo $dateErr; ?></p>
				</div>
				<div class="list-area">
					<label for="List">List your items</label>
					<textarea name="list" rows="8" cols="30"  placeholder="List all items to be pick" id="list"> <?php echo isset($_POST['list']) ? $list : ''; ?> </textarea>
					<p class="error-form"><?php echo $listErr; ?></p>
				</div>
				<input type="submit" name="submit" id="sendInfor" value="Pick my item">
				<p class="success"><?php echo $success; ?></p>
			</form>
		</div>
	</div>
</div>

<?php 
 include ("includes/footer.php")
?>