<!DOCTYPE html>
<html>
  <head>
    	<meta charset="UTF-8">
    <title>Mobiles for Sale </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

  </head>
  <body>
    
    <header>
      <div class="main">
     <div class="logo">
       <img src="logo1.jpeg"  alt="logo" >
    
     <ul>
       <li> <a href="index.php">Home</a></li>
				<li> <a href="../mobile.php">Mobiles for Sale</a></li>
				<li> <a href="../About us.php">About Us</a></li>
				<li> <a href="../Contact us.php">Contact Us</a></li>
       <li> <a href="../Login.php">Login</a></li>
     </ul>
      </div>
    
    </header>
    <section style="font-size:25px;">
        <h2>Place Your Order</h2>
        <form action="submit.php" method="get">
          <label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

	 <input type="email" name="emailAddress" id="emailAddress" required size="25" placeholder="email Address" />
        </br>
		<label for="phone">Phone Number:</label>
		<input type="text" id="phone" name="phone" required>
            <select name="mobile-model" id="mobile-model">
                <option value="">Select Model</option>
                <option value="model-1">Iphone 14 Pro</option>
                <option value="model-2">Samsung Z Flip</option>
                <option value="model-3">Motrola Razr/option>
                <option value="model-4">Oneplus 10 Pro</option>
              <option value="model-5">Pixel 7 Pro</option>
              <option value="model-6">Samsung S23 ultra</option>
            </select>
            <button type="submit">Buy Now</button>
        </form>
    </section>

   <footer>
<div class="foot">
 <pre> 
<img src="logo1.jpeg"   alt="logo" >
<h3><i> Buy your dream </i></h3>
</pre>
 
  <br/>
<pre>
   <br/>
   <br/>
<h2><b> CONTACT </b></h2> 
  Phone: 416-825-0925<br/>
  Email: sukh@mobiles.com<br/>
  Address: 6 mountland road<br/>
        Brampton, Ontario
   
  </pre>
  
    <h2><b> MORE INFO </b></h2><br/>
      <ul>
        <li> <a href="../Contact us.php">Help Center</li><br/>
       <li> <a href="../About us.php">About us</li><br/>
       <li> <a href="../Contact us.php">Contact us</li><br/>
</div>

      
    </footer>
  </body>
</html>


 
    
