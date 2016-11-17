<?php
include("inc/header.php");
?>

<section class="order-section">
  <div class="container">
    <div class="row">
        <h1><a href="index.php">Lunched<span class='color'>[in] </span></a></span> || ORDER#
        <?php
          $randnum= rand(100000,999999);

          echo $randnum;
        ?>
      </h1>

<!-- Contact Form -->

        <div>
          <h4>Enter Your Order Information:</h4>

          <form class="form-group" action="order.php" method="post">
            <div class="form-group">
              <label for="restaurant">Select Restaurant</label>
              <select class="form-control" name="restaurant" id="restaurant">
                <option value="">Choose One</option>
                <option value="panda">Panda Express</option>
                <option value="wendys">Wendy's</option>
                <option value="firehouse">Firehouse Subs</option>
              </select>
            </div>

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
              <label for="email">Email</label><input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
              <label for="order">Enter Order</table>
              <textarea rows="6" cols="60" placeholder="Order Here" class="form-control" name="order" id="order"></textarea>
            </div>
            <div class="form-group">
              <label for="payment">Select Payment Method</label>
              <select class="form-control" name="payment" id="payment">
                <option value="">Choose One</option>
                <option value="cash">Cash</option>
                <option value="card">Card</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div>
              <input type="submit" class="btn btn-transparent" value="Submit" id="submit">
            </div>
              <input type="hidden" name="neworder" value"1" id="neworder">
              <input type="hidden" name="orderNo" value="<?php echo $randnum?>" id="orderNo">
          </form>
        </div>
      </div>
    </div>
</section>
<?php
include("inc/footer.php");
?>
