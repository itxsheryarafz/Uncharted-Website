
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="css/Payment.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script type="text/javascript">
function buttonclick()
{
	alert('Data has been Saved');
}
function CreditCard()
{
	alert('Please Fill the info of Credit Card');
}
function Cash()
{
	alert('Cash on Delivery');
}
function Order()
{
	alert('Your Order has been placed');
}
function voucher()
{
	alert('Enter your Voucher No');
}
function Back()
{
	alert("Order has been Placed Successfully")
}
</script>

</head>
<body a link="black" vlink="Red">
<div class="header1">
			<a href="https://www.esrb.org/EPCConfirm/901/"><img class="image" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/ps4.png"></a>
			<a href="https://www.naughtydog.com/"><img class="image1" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/naughty-dog.png"></a>
			<a href="https://www.playstation.com/en-us/"><img class="image2" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/only-on-ps.png"></a>
		</div>
<br>
<br>
<br>
	<form Action="Paymentmethod.php"  method="POST">
		<div class="box">
		<h1>Delivery Details</h1>
			<br>
			<br>
			<p>Delivery time: 40 min</p>
			<br>
			<b> <p>Delivery Address</p> </b>
			<textarea name="address" rows="5" cols="20"></textarea>
		</div>
		
		<br>
		<div class="box1">
			<h1>Personal Details</h1>
			<br>
			<br>
			Name<input type="text" name="name" Value="Full Name"><br><br>
			Email<input type="text" name="email" Value="Email"> <br><br>
			Contact No<input type="text" name="no" Value="Contact Number">
			<br>
			<input type="submit" name="" value="Submit" onclick="buttonclick()">

		</div>
		</form>
		<br>
		<div class="box2">
			<h1>Payment</h1>
<br>
<br>
<center>
<button onclick="CreditCard()"><b>Credit Card</b></button>
<button onclick="Cash()"><b>Cash on Delivery</b></button>
</center>
	<br>
	<b>Credit Card/Debit Cash</b>
	<br>
	<br>
	Credit Card
	<br>
	<br>

	<input type="text" name="" values="Full Name" placeholder="Full Name On Card">
	<br>
	<br>
	<input type="text" name="" values="Credit Card Number" placeholder="Credit Card Number">
	<br>
	<br>
	<b>PAY BY CASH ON DELIVERY</b>
	<br>
Consider payment upon ordering for contactless delivery
	<br>
	<br>
	<br>
	<a href="" onclick="voucher()">Do you have a voucher</a>
	<br>
	<input type="text" name="" value="Voucher no">
	<br>
	<br>
<a href="front.html"><input type="submit" name="" value="Submit" onclick="Back()"></a>
I agree and I demand that you execute the ordered service before the end of the revocation 
period. I am aware that after complete fulfillment of the service I lose my right of recission.
Payment transactions will be processed abroad.




		</div>
</body>
</html>