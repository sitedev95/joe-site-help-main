<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width,
    initial-scale=1.0">
    <title>Photo Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
  <div class="bodyContainer">
  <section class="header">
    <img src="images/aerial photo1.jpeg" alt="filler photo" class="headerImage">
    <h1>Name here</h1>
    </section>
  <h2 class="description"> (Insert location here) Real Estate Photography & Video</h2>
   
    <h3 class="carouselStyling">Photo Examples</h3>
  

     <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/joephoto1.jpeg" class="d-block mx-auto w-100" alt="blue apartment living room">
        </div>
        <div class="carousel-item">
          <img src="images/joephoto2.jpeg" class="d-block mx-auto w-100" alt="white bathroom">
        </div>
        <div class="carousel-item">
          <img src="images/joephoto3.jpeg" class="d-block mx-auto w-100" alt="white bedroom">
      </div>
        <div class="carousel-item">
          <img src="images/joephoto4.jpeg" class="d-block mx-auto w-100" alt="bathroom w/ city view">
      </div>
        <div class="carousel-item">
          <img src="images/joephoto5.jpeg" class="d-block mx-auto w-100" alt="kitchen w/ city view">  
          </div>  
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
     
      </div>

      <h3 class="carouselStyling">Video Examples</h3>

      <div id="carouselExample1" class="carousel slide">
        <div class="carousel-inner iframe-carousel-inner">
          <div class="carousel-item active">
            <div class="iframe-container-style">
              <iframe width="100%" height="100%" 
              src="https://www.youtube.com/embed/UWV7VLkzu6U?si=Au3t-tHMiY6pJsoQ" title="YouTube video player" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
              referrerpolicy="strict-origin-when-cross-origin" 
              allowfullscreen 
              class="iframe-style"></iframe>
            </div>
          </div>
          <div class="carousel-item">
            <div class="iframe-container-style">
            <iframe width="100%" height="100%" 
            src="https://www.youtube.com/embed/DjKNhblMRA0?si=OZyfoTSiL0HFxzQE" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen
            class="iframe-style"></iframe>
            </div>
          </div>
          <div class="carousel-item">
            <div class="iframe-container-style">
            <iframe width="100%" height="100%" 
            src="https://www.youtube.com/embed/XcilWjG7uQk?si=FFphHALi2RUEhj1T" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen
            class="iframe-style"></iframe>
            </div>
        </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>


            <h3 class="carouselStyling">Aerial Photo Examples</h3>

            <div id="carouselExample2" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/aerial photo1.jpeg" class="d-block mx-auto w-100" alt="aerial shot of house with lots of trees">
                </div>
                <div class="carousel-item">
                  <img src="images/aerial photo2.jpeg" class="d-block mx-auto w-100" alt="aerial shot of blue and white house">
                </div>
                <div class="carousel-item">
                  <img src="images/aerial photo3.jpeg" class="d-block mx-auto w-100" alt="aerial photo of house with big yard">
              </div>
                <div class="carousel-item">
                  <img src="images/aerial photo4.jpeg" class="d-block mx-auto w-100" alt="aerial photo of row homes in city">
              </div> 
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              </div>       

      
    </div>
    
    <!-- contact form -->
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$fname = $email = $address = $subject = $phone = "";
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form class="form-container" method="post" action="/action.php">  
    <label for="fname">Name</label>
    <input type="text" name="fname" value="<?php echo $fname;?>">
    <br>

    <label for="address">Address</label>
    <input type="text" name="address" value="<?php echo $address;?>">
    <br>

    <label for="email">Email Address</label>
    <input type="email" name="email" value="<?php echo $email;?>">
    <br>

    <label for="phone">Phone Number</label>
    <input type="phone" name="phone" value="<?php echo $phone;?>">
    <br>

    <label for="subject">Subject</label>
    <textarea name="subject" rows="5" cols="40"><?php echo $subject;?></textarea>

    <br><br>
    <input type="submit" name="submit" value="Submit">  
</form>
   

<!-- end of body container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="script.js"></script>

  </body>




</html>