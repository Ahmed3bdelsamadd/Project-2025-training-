
<?php require_once 'inc/header.php';
require('inc/connection.php');
?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <!-- <h4>Best Offer</h4> -->
            <!-- <h2>New Arrivals On Sale</h2> -->
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <!-- <h4>Flash Deals</h4> -->
            <!-- <h2>Get your best products</h2> -->
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <!-- <h4>Last Minute</h4> -->
            <!-- <h2>Grab last minute deals</h2> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Posts</h2>
              <!-- <a href="products.html">view all products <i class="fa fa-angle-right"></i></a> -->
            </div>
          </div>
          <?php 
          $query =mysqli_query($con, "SELECT * FROM posts ");
          $posts= mysqli_fetch_all($query, MYSQLI_ASSOC);
          foreach ( $posts as $post){
          ?>
          <div class= "col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/<?php echo $post ['image'];?>" alt=""></a>
              <div class="down-content">
                <a href="#"><h4><?php echo $post ['title'];?>></a>
                <h6>created_at</h6>
                <p> <?php echo $post ['body'];?></p>
                <!-- <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span> -->
                <div class="d-flex justify-content-end">
                  <a href="viewPost.php?postid=<?php echo $post ['id'];?> "></a>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
         

 
    
<?php require_once 'inc/footer.php' ?>
