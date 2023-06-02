<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Nous sommes une entreprise de décoration intérieure dont la mission est de rendre
             la vie dans une maison bien décorée accessible à tout le monde. Pour ce faire, 
             nous offrons des produits de qualité à des prix inférieurs à la compétition. 
             Nos articles sont de fabrication locale, afin d'assurer le délai de livraison 
             le plus court possible à nos clients. Nous vous offrons même la possibilité de 
             personnaliser vos commandes, afin que vous ayez exactement les meubles et 
             accessoires de vos rêves. N'hésitez pas à nous contacter afin de rejoindre nos 
             clients satisfaits à qui nous avons augmenté le plaisir de rentrer chez soi le soir,
              tellement c'est beau à voir. Merci.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Testimonies</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
            <p>J'ai été trés impressionné par la qualité du produit et le délai de livraison. Je recommanderais vos services à mes proches sans hésiter!</p>
         <h3>Gédéon Nsungi</h3>
      </div>  
        
      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
            <p>J'ai été trés impressionné par la qualité du produit et le délai de livraison. Je recommanderais vos services à mes proches sans hésiter!</p>
         <h3>Christian Mbayabu</h3>
      </div>    

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
            <p>J'ai été trés impressionné par la qualité du produit et le délai de livraison. Je recommanderais vos services à mes proches sans hésiter!</p>
         <h3>Antoine Gregoire</h3>
      </div>    

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>