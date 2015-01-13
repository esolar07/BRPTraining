<?php $page = "Book Now"; ?>

<?php include_once "head.php"; ?>

<div class="container">
	<div class="contact-form">
		<h3>CONTACT BRP TRAINING</h3>
		<form ction="confirm.php" method="post">
			<div class="contact-form-name">
				<label>First & Last Name:</label>
				<input type="text" id="name" placeholder="Your Name" name="name" pattern="[a-zA-Z0-9]+" required>
			</div>
			<br>
			<div class="contact-form-phone">
				<label>Phone Number:</label>
				<input type="text" id="phone" placeholder="Contact Number" pattern="^\d{3}-\d{3}-\d{4}$" required>
			</div>
			<br>
			<div class="contact-form-email">
				<label for="">Email:</label>
				<input type="text" id="email" placeholder="Email" value="" required aria-required="true">
			</div>
			<br>
			<div class="contact-form-msg">
				<label>Message:</label>
              	<textarea rows="10" cols="5" name="comments" class="required"></textarea>
			</div>
			<br>
			<a type="submit" value="Submit" href="#" class="submit">Submit</a>
		</form>	
	</div>
</div>


<?php include_once "footer.php"; ?>
