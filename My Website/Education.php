<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="education.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sidenav.css">
    <link rel="icon" href="images/developer.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <title>Education</title>
        
    <script>
    window.console = window.console || function(t) {};
    </script>

    <script>
    if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
    }
    </script>

</head>
<body translate="no" >

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
<h1 class="ml11">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">Education</span>
  </span>
</h1>
<table class="container">
	<thead>
		<tr>
			<th><h1>Certificate</h1></th>
			<th><h1>School</h1></th>
			<th><h1>Year of Comlpetion</h1></th>
			<th><h1>Grade Attained</h1></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>KCPE</td>
			<td>Green Garden Shool</td>
			<td>2015</td>
			<td>B</td>
		</tr>
		<tr>
			<td>KCSE</td>
			<td>Nova Pioneer School</td>
			<td>2019</td>
			<td>B</td>
		</tr>
		<tr>
			<td>Bachelors in Business and Information Technology</td>
			<td>Strathmore University</td>
			<td>2023</td>
			<td>First class</td>
		</tr>
	</tbody>
</table>
<h1 class="ml11">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">Skills</span>
  </span>
</h1>
<!-- <style>
    hr {
display: block;
height: 1px;
border: 0;
border-top: 1px solid #ccc;
margin: 1em 0;
padding: 0;
}
</style> -->
       
   
        <p class="h4">This is an illustration of a project known as<strong> Master Rotation Plan (MRP).</strong></p>
        <p><strong>REQUIREMENTS:<em>To construct a web based system 
            capable of rotating student nurses at will.</strong></em></p>
        <p>This project required extensive knowledge in web site design.</p>
        <p>In essence HTML PHP Javascript and the laravel framework.</p>
        <p>The project is currently running in within Kenyatta University Hospital.</p>
        
   <!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="images/MRP 1.png" width="95%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="images/MRP 2.png" width="95%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="images/MRP 3.png" width="95%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="images/MRP 4.png" width="95%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="images/MRP 5.png" width="95%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="images/MRP 6.png" width="95%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="images/MRP 7.png"  width="95%">
<!-- </div> -->
<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
<span class="dot" onclick="currentSlide(6)"></span>
<span class="dot" onclick="currentSlide(7)"></span>


</div>

<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</div>

   



 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script><script>

        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml11 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.ml11 .line',
            scaleY: [0,1],
            opacity: [0.5,1],
            easing: "easeOutExpo",
            duration: 700
        })
        .add({
            targets: '.ml11 .line',
            translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
            easing: "easeOutExpo",
            duration: 700,
            delay: 100
        }).add({
            targets: '.ml11 .letter',
            opacity: [0,1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: (el, i) => 34 * (i+1)
        }).add({
            targets: '.ml11',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });

        </script>





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

</body>
</html>