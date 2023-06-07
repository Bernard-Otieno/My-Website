<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sidenav.css">
    <link rel="icon" href="images/developer.png">


    <title>Contact Info</title>
</head>
<body>
    <!-- The sidebar -->
<div class="sidebar">
  <div id="list-example" class="list-group">
  <img src="images/img.jpg" height="225px" alt="Avatar" class="me">
  <a class="list-group-item list-group-item-action" href="index.php">Home</a>
  <a class="list-group-item list-group-item-action" href="index.php">About Me</a>
  <a class="list-group-item list-group-item-action" href="Education.php">Education</a>
  <a class="list-group-item list-group-item-action" href="contact.php">Contact</a>
  <a class="list-group-item list-group-item-action" href="CV/Bernard Otieno CV.pdf"
   download="Mr.Bernard Otieno.pdf">
    <button type="button" class="btn btn-primary" >Download my CV</button>
</a>
</div>
</div>
<div class="progress"></div>
<!-- Page content -->

<div class="content">
  <div class="contact-section">
    <h2 class="ct-section-head">CONTACT ME</h2>
    <div class="row contact-fields">
      <div class="col-md-8 left-form">
       <form method="post" action="">
        <div class="form-group">
          <label class="sr-only" for="fname">First Name *</label>
          <input class="required form-control" id="fname" name="fname" placeholder="First Name&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="lname">Last Name *</label>
          <input class="required form-control" id="lname" name="lname" placeholder="Last Name&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="contactEmail">Email *</label>
          <input class="required form-control h5-email" id="contactEmail" name="contactEmail" placeholder="Email&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="contactPhone">Phone *</label>
          <input class="required form-control h5-phone" id="contactPhone" name="contactPhone" placeholder="Phone&nbsp;*" type="text"  required>
        </div>

        <div class="form-group">
          <label class="sr-only" for="comment">Type your message here</label>
          <textarea class="required form-control" id="comment" name="comment" placeholder="Type your message here&nbsp;*" rows="6" required></textarea>
        </div>

        <button class="btn btn-accent" type="submit">Submit</button>  
      </form>
    </div>
    <div class="col-md-4 contact-info">
      <div class="phone">
        <h2>Call</h2>
        <a href="tel:+5555555555">0755554444222</a>
      </div>
      <div class="email">
        <h2>Email</h2>
        <a href="mailto:bernard.otieno@strathmore.edu">Bernard.otieno@strathmore.edu</a>
      </div>
      <div class="location">
        <h2>Visit</h2>
        <p>Strathmore University</br>
        Madaraka </br>
        Nairobi </br>
       Kenya
        <br>
        <a class="btn btn-accent" href="https://goo.gl/maps/248xRTqsJy6imGTg9" target="_blank"><img src="https://www.solodev.com/assets/contact-us-page/map-marker.png" alt="Map Marker">Google Maps</a></p>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="footer">
    
 <svg width="10%" height="10%" viewBox="0 0 24 24">
  <path d="M21,9H15V22H13V16H11V22H9V9H3V7H21M12,2A2,2 0 0,1 14,4A2,2 0 0,1 12,6C10.89,6 10,5.1 10,4C10,2.89 10.89,2 12,2Z" />
</svg>

<script> 
    window.addEventListener(
    "scroll",
    () => {
        document.body.style.setProperty(
        "--scroll",
        window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
        );
    },
    false
    );

</script>
</div>

