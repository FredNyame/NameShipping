<?php 
$pageTitle = "Pick my items | Use form to fill out your items you want to be pick up and ship";
include("includes/header.php");
?>

<div class="pickup-container">
	<div class="container">
		<div class="info-head">
			<h1>Pick my item</h1>
			<p>Please use the form below to fill your information to help us come pick up your items.</p>
		</div>
		<div class="pickup-form-container">
			<form class="pickup-form" action="" method="post" id="pickupForm">
				<div class="name-container">
					<div class="first-name">
						<label for="firstname">First name</label>
						<input type="text" name="firstname" placeholder="e.g Kwame" id="firstname">
					</div>
					<div class="last-name">
						<label for="lastname">Last name</label>
						<input type="text" name="lastname" placeholder="e.g Owusu" id="lastname">
					</div>
				</div>
				<div class="email-container">
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="e.g example.gmail.com" id="email">
				</div>
				<div class="phone-container">
					<label for="phone">Phone</label>
					<input type="tel" name="phone" placeholder="e.g +241-454-2345" id="phone">
				</div>
				<div class="address-container">
					<label for="street">Address</label>
					<input type="address" name="street" placeholder="e.g 123 metropilotan Ave" id="street">
				</div>
				<div class="city-state-container">
					<div class="city-contain">
						<label for="city">City</label>
						<input type="text" name="city" placeholder="e.g Bronx" id="city">
					</div>
					<div class="city-contain">
						<label for="state">State</label>
					<select name="state">
						<option value="">Choose...</option>
						<option value="Connecticut">Connecticut</option>
						<option value="Delaware">Delaware</option>
						<option value="Georgia">Georgia</option>
						<option value="New Jersey">New Jersey</option>
						<option value="New York">New York</option>
						<option value="Maryland">Maryland</option>
						<option value="Massachusetts">Massachusetts</option>
						<option value="Pennsylvania">Pennsylvania</option>
						<option value="Rhode Island">Rhode Island</option>
						<option value="Virginia">Virginia</option>
					</select>
					</div>
					<div class="city-contain">
						<label for="zipcode">Zipcode</label>
						<input type="text" name="zipcode" placeholder="12045">
					</div>
				</div>
				<div class="date-container">
					<label for="date">Avaibility(Date)</label>
					<input type="date" name="date" id="pickupdate">
				</div>
				<div class="list-area">
					<label for="List">List your items</label>
					<textarea name="list" rows="8" cols="30" placeholder="List all items to be pick" id="list"></textarea>
				</div>
				<input type="submit" name="submit" id="sendInfor" value="Pick my item">
			</form>
		</div>
	</div>
</div>

<?php 
 include ("includes/footer.php")
?>