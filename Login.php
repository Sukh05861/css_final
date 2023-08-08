<!DOCTYPE html>
<html>
  <head>
    	<meta charset="UTF-8">
      <title> Mobiles for Sale </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="style.css">
     
    
  </head>
  <body>
    <!---- header tag--->
   <header>
      <div class="main">
      <div class="logo">
       <img src="logo1.jpeg"  alt="logo" >
      <ul>
        <li> <a href="../index.php">Home</a></li>
				<li> <a href="../mobile.php">Cars for Sale</a></li>
				<li> <a href="../About us.php">About Us</a></li>
				<li> <a href="../Contact us.php">Contact Us</a></li>
        <li> <a href="Login.php">Login</a></li>
      </ul>
      </div> 
    </header>

        <!-- main tag--->
    <main>
       <form action="Message.php" method="get">
       <div class="form-box">
         <h1> Login Here</h1>

        <div class="input-box">
          <i class="fa fa-envelope" ></i>
          <label for="emailAddress"> </label>
          <input type="email" name="emailAddress" id="emailAddress" required size="25" placeholder="email Address" />
        </div>
         
        <div class="input-box">
          <i class="fa fa-key" ></i>
          <input type="password" id="password" name="password" required size="25" placeholder="Password">
        </div>
         
         <button type="submit" class="login-btn"> LOGIN</button>
      </div>
       </form> 
    </main>
    
    <footer>
      <!-- footer tag-->
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