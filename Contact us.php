

<!DOCTYPE html>
<html>
  <head>
    	<meta charset="UTF-8">
      <title> Mobiles for Sale </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="style.css">
     
  </head>
  <body>
    <!-- header tag-->
    <header>
      <div class="main">
      <div class="logo">
        <img src="logo1.jpeg"  alt="logo" >
      <ul>
        <li> <a href="../index.php">Home</a></li>
				<li> <a href="../mobile.php">Cars for Sale</a></li>
				<li> <a href="../About us.php">About Us</a></li>
				<li> <a href="Contact us.php">Contact Us</a></li>
        <li> <a href="../Login.php">Login</a></li>
      </ul>
      </div>
      
    </header>
  <!---- main tag-->
<main>
    <section class="contact">
     <div class="content">
       <h2> Connect with us and Help us to improve</h2><br/>
       <p> We would love to respond to your queries and help you succeed.<br/>Feel free to get in touch with us.</p>
     </div>
     <div class="container">
      <div class="containerFor">
        <div class="box">
          <div class="icon">
           <i class="fa fa-map-marker" ></i>
          </div>
          <div class="text">
            <h3> <b>Address</b></h3>
            <p> 6 mountland Road, <br/>
               Brampton,Ontario<br/>
                 L6P1Z9<br/></p>
          </div>
        </div>
        
        <div class="box">
          <div class="icon"> 
            <i class="fa fa-phone" ></i>
          </div>
          
          <div class="text">
            <h3> <b>Phone</b></h3>
            <p> 416-825-0925</p>
          </div>
        </div>
        
        <div class="box">
          <div class="icon">
          <i class="fa fa-envelope" ></i>
          </div>
          
          <div class="text">
            <h3><b>Email</b></h3>
            <p> sukh@mobiles.com</p>
          </div>
        </div>

       <form action="msg.php" method="get">
        <div class="Contact-form">
          <h1> Send Message</h1>
        
        <div class="text-box">
          <label for="fName"> </label>
          <input type="text" name="fName" id="fName" required size="25" placeholder="First Name" />
        </div>

        <div class="text-box">
            <input type="text" id="lname" name="lname" required  size="25" placeholder="Last Name" />
        </div>

        <div class="textarea">
             <textarea rows="4" cols="70" placeholder="Enter your queries/ feedback here..."></textarea>
        </div>
        
          <button type="submit" class="send-btn"> SEND</button>
       </div>
 
        </form>
        </div>
     </div>
   </section>  
    </main>
    
    <!--- footer tag--->
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