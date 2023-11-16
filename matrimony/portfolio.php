<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

     
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">


    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>



   <!-- custome css file link -->
   <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">


<?php @include 'header.php'; ?>

<section class="portfolio">

  <h1 class="heading">our portfolio</h1>

  <div class="portfolio-container">

     <a href="images/portimg-1.jpg" class="box">
        <div class="image">
       <img src="images/portimg-1.jpg" alt="">
       </div>
       <h3>wedding ceremony</h3>

     </a>

     <a href="images/portimg-2.jpg" class="box">
     <div class="image">
       <img src="images/portimg-2.jpg" alt="">
       </div>
       <h3>wedding ceremony</h3>

     </a>

     <a href="images/portimg-3.webp" class="box">
     <div class="image">
       <img src="images/portimg-3.webp" alt="">
       </div>
       <h3>wedding ceremony</h3>

     </a>

     <a href="images/portimg-4.png" class="box">
     <div class="image">
       <img src="images/portimg-4.png" alt="">
       </div>
       <h3>wedding ceremony</h3>

     </a>

     <a href="images/portimg-5.jpg" class="box">
     <div class="image">
       <img src="images/portimg-5.jpg" alt="">
       </div>
       <h3>wedding ceremony</h3>

     </a>


     <a href="images/portimg-6.webp" class="box">
     <div class="image">
       <img src="images/portimg-6.webp" alt="">
       </div>
       <h3>wedding ceremony</h3>

     </a>


  </div>

</section>


<?php @include 'footer.php'; ?>

</div>












<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!--swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="script.js"></script>

<script>

   lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>