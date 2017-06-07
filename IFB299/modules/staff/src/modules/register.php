<?php
  include('../../../../includes/index.php');
?>
 <h1 id="page-title">Sign up</h1>
<form id="details" >
<h3>Surname:	&nbsp;<input type="text" name="surname" placeholder="Enter your last name"  required></h3>

<h3>Street address: </h3>
<textarea  name="address" placeholder="Enter your address"  required></textarea>
<br>
<h3>Select you current State: 	&nbsp;
<select name="State">
<option value="QLD">QLD</option>
<option value="NSW">New South Wales</option>
<option value="VIC">Victoria</option>
<option value="SA">South Australia</option>
<option value="WA">Western Australia</option>
<option value="TAS">Tasmania</option>
<option value="ACT">Australian Capital Terriority</option>
<option value="NT">Northern Terriority</option>
</select>
</h3>
<h3>Enter your email address: &nbsp;<input type="email" name="email address" placeholder="abc@gmail.com" required ></h3>
<h3>Telephone : &nbsp; <input type="tel" id="tel" name="tel" pattern="\d{10}" placeholder="Please enter a 10 digit telephone number" required /></h3>
<h3>Please enter your password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" 
type="password" required 
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
																	if(this.checkValidity()) form.pwd2.pattern = this.value;
"></h3>

<h3>Please re-enter your password: <input title="Please re-enter the password correctly" type="password" name="pwd2" required ></h3>
<input type="submit" value="Submit">
<input type="reset" value="Reset">

</form>
<?php
  include('../../../../includes/footer.php')
?>
