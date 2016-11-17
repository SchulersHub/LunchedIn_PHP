<html>
    <head>
      <meta name="description" content="a site to coordinate mass lunch orders amongst a busy and hectic office">
      <title>Lunched In | Coordinate Your Lunch Order</title>

      <!-- CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
  		<!-- Oswald / Title Font -->
  		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
  		<!-- Ubuntu / Body Font -->
  		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>


      </head>

<section class='bg-one' id="about">
  <div class="container">
    <div class="row">
      <div class="title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <h2 style="text-transform:none;" data-wow-duration="500ms" data-wow-delay="500ms" class="animated fadeInRight">Welcome to Lunched<span class='color'>[in] </span></h2>
        <a class="btn btn-transparent" href="neworder.php">Start an Order</a>
        <form class="row" method="post" action="submit.php">
          <input type="submit" value="Look Up Order" class="btn btn-transparent" formaction="order.php"/>
          <input type="submit" value="Add to Order" class="btn btn-transparent"/>
          <input type="text" class="btn btn-transparent" name="orderNo" rows="1" cols="10" maxlength="6"/>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include("inc/footer.php");
