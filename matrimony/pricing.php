<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pricing</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />



    <!-- custome css file link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">


        <?php @include 'header.php'; ?>

        <section class="pricing">

            <h1 class="heading">our pricing</h1>

            <div class="box-container">

                <div class="box">
                    <h3>basic plan</h3>
                    <div class="price">Rs.3,00,000/-</div>
                    <div class="list">
                        <p><i class="fas fa-check"></i> photography</p>
                        <p><i class="fas fa-check"></i> bride makeup</p>
                        <p><i class="fas fa-check"></i> wedding ceremony</p>
                        <p><i class="fas fa-check"></i> meals & drinking</p>
                        <p><i class="fas fa-check"></i> guest invitations</p>
                    </div>
                    <a href="contact.php" class="btn">choose plan</a>
                </div>


                <div class="box">
                    <h3>premium plan</h3>
                    <div class="price">Rs.8,00,000/-</div>
                    <div class="list">
                        <p><i class="fas fa-check"></i> photography</p>
                        <p><i class="fas fa-check"></i> bride makeup</p>
                        <p><i class="fas fa-check"></i> wedding ceremony</p>
                        <p><i class="fas fa-check"></i> meals & drinking</p>
                        <p><i class="fas fa-check"></i> guest invitations</p>
                    </div>
                    <a href="contact.php" class="btn">choose plan</a>
                </div>

                <div class="box">
                    <h3>ultimate plan</h3>
                    <div class="price">Rs.15,00,000/-</div>
                    <div class="list">
                        <p><i class="fas fa-check"></i> photography</p>
                        <p><i class="fas fa-check"></i> bride makeup</p>
                        <p><i class="fas fa-check"></i> wedding ceremony</p>
                        <p><i class="fas fa-check"></i> meals & drinking</p>
                        <p><i class="fas fa-check"></i> guest invitations</p>
                    </div>
                    <a href="contact.php" class="btn">choose plan</a>
                </div>

            </div>

        </section>

        <section class="reviews">
        
        <h1 class="heading">happy clients</h1>

        <div class="swiper reviews-slider">

               <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                   <img src="images/review-1.jpg" alt="">
                   <h3>john deo</h3>
                   <p>Photo Review Magazine quarterly print edition is superbly designed with high production values, format 25% larger than A4, and is printed on FSC 
                    approved paper from responsible sources.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div> 

                <div class="swiper-slide slide">
                   <img src="images/review-2.jpg" alt="">
                   <h3>john deo</h3>
                   <p>Photo Review Magazine quarterly print edition is superbly designed with high production values, format 25% larger than A4, and is printed on FSC 
                    approved paper from responsible sources.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                   <img src="images/review-3.jpg" alt="">
                   <h3>john deo</h3>
                   <p>Photo Review Magazine quarterly print edition is superbly designed with high production values, format 25% larger than A4, and is printed on FSC 
                    approved paper from responsible sources.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                   <img src="images/review-4.jpg" alt="">
                   <h3>john deo</h3>
                   <p>Photo Review Magazine quarterly print edition is superbly designed with high production values, format 25% larger than A4, and is printed on FSC 
                    approved paper from responsible sources.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                   <img src="images/review-5.webp" alt="">
                   <h3>john deo</h3>
                   <p>Photo Review Magazine quarterly print edition is superbly designed with high production values, format 25% larger than A4, and is printed on FSC 
                    approved paper from responsible sources.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                   <img src="images/review-6.webp" alt="">
                   <h3>john deo</h3>
                   <p>Photo Review Magazine quarterly print edition is superbly designed with high production values, format 25% larger than A4, and is printed on FSC 
                    approved paper from responsible sources.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

</div>

<div class="swiper-pagination"></div>

        </div>

        </section>




        <?php @include 'footer.php'; ?>

    </div>














    <!--swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>