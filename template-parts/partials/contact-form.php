<?php global $redux ?>
<form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
	<div class="row">
		<div class="col-12">
			<div class="form-group">
				<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
				          onfocus="this.placeholder = ''"
				          onblur="this.placeholder = '<?php echo $redux['contact-form-message-placeholder'] ?>'"
				          placeholder='<?php echo $redux['contact-form-message-placeholder'] ?>'></textarea>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
				       onblur="this.placeholder = '<?php echo $redux['contact-form-name-placeholder'] ?>'"
				       placeholder='<?php echo $redux['contact-form-name-placeholder'] ?>'>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
				       onblur="this.placeholder = '<?php echo $redux['contact-form-email-placeholder'] ?>'"
				       placeholder='<?php echo $redux['contact-form-email-placeholder'] ?>'>
			</div>
		</div>
	</div>
	<div class="form-group mt-3">
		<button type="submit" class="button button-contactForm btn_1">
			<?php echo $redux['contact-form-submit-text'] ?>
		</button>
	</div>
</form>