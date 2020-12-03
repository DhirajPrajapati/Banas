<?php 

include('includes/header.php');
include('includes/navbar.php');

?>


<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-12">
            <div class="userbox">
              <a href="user_detail.php"><img src="img/details.jpg" class="img-fluid rounded" alt="" /></a>
              <div class="overlay-text">
                <h2 class="text">User Details</h2>
              </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-12">
            <div class="userbox">
            <a href="user_contact.php"><img src="img/contact.jpg" class="img-fluid rounded" alt="" /></a>
              <div class="overlay-text">
                <h2 class="text">User Contact</h2>
              </div>
            </div>
        </div>
    </div>
</div>


<?php 

include('includes/scripts.php');
include('includes/footer.php');

?>