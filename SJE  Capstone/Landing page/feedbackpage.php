<html>
<head>

<title>Feedback form</title>
<link rel="stylesheet" href="Directories/css/feedback.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="feedback.js"></script>






<div class="navbar">
<div class="logo">
    SAN JUAN SCHOOL ELMS

</div>


<a class="btn">
<span></span>
<span></span>
<span></span>
</a>


<div class="menu">

  
   <a href="Landing_Page.php">Home</a>

</div>
</div>
<div class="header">
  <section id="contact-form">
    <h2>Feedback</h2>
    <form id="contact" name="contact" accept-charset="utf-8">
      <label><input name="name" type="text" placeholder="Name"/></label>
      <label><input name="email" type="email" placeholder="Email"/></label>
      <label><textarea name="message" placeholder="Message"></textarea></label>
      <input name="submit" type="submit" value="Send"/>
    </form>
    <center>
      <p >Name are optional, email are required. Fill in the form fields to send your Feedback (Your email will not be published)</p>

    </center>
  </section>

</div>


</head>



<!-- FOOTER -->
<div class="w-full py-1 px-2 clearfix" style="border-top: 1px solid rgba(0,0,0,0.12);">

        <span class="float-left">
        Contact Us <a href="#" class="styled-link">Here</a>
        </span>
        <span class="float-right">
          <a href="#"><span>Facebook</span></a>
         <a href="#"><span>Youtube</span></a>
         <a href="#"><span>Google</span></a>
         <a href="#" class="styled-link">Capstone</a>
        </span>


</div>



<script type="text/javascript">

$(".btn").on("click",function(){
  $('.menu').toggleClass("show");
});


</script>


</body>
</html>
