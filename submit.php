<?php
include("inc/header.php");
include("inc/connection.php");
$orderName = "Name";
$orderText = "Order";
$paymentType = "Choose One";
$orderEmail = "Email";



if (isset($_POST['orderNo'])) {
  if(isset($_POST['edit'])) {
    try {
      $lunch_order = $db->prepare("SELECT *
        FROM `lunch_requests`
        WHERE `id`= ?
        ");
        $lunch_order->bindParam(1, $_POST['id'], PDO::PARAM_INT);
        $lunch_order->execute();
        $lunch_order = $lunch_order->fetchAll(PDO::FETCH_ASSOC);
        foreach($lunch_order as $item){
          $orderName = $item["Order_Name"];
          $orderText = $item["Order_Text"];
          $paymentType = $item["Payment_Type"];
          $orderEmail = $item["Order_Email"];
        };} catch (PDOException $e) {
          echo "Error: ".$e->getMessage();
        }
      }
   } else {
     header('location:index.php');
   }

?>
<section class="order-section">
  <div class="container">
    <div class="row">
      <h1><a href="index.php">Lunched<span class='color'>[in] </span></a></span> || ORDER#
        <?php
        $randnum = $_POST["orderNo"];
        echo $randnum;
        ?>
      </h1>

<!-- Order Form -->

        <div>
          <h4>Enter Your Order Information:</h4>
          <form class="form-group" action="order.php" method="post">
            <div class="form-group">
              <label for="name">Name</label><input type="text" value="<?php echo $orderName ?>" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
              <label for="email">Email</label><input type="email" value=<?php echo "$orderEmail" ?> class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
              <label for="order">Enter Order</table>
              <textarea rows="6" cols="60" class="form-control" name="order" id="order"><?php echo "$orderText" ?></textarea>
            </div>
            <div class="form-group">
              <label for="payment">Select Payment Method</label>
              <select  class="form-control" name="payment" id="payment">
                <option value="<?php echo ucwords($paymentType, ' '); ?>"><?php echo $paymentType ?></option>
                <option value="cash">Cash</option>
                <option value="card">Card</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div>
              <input type="hidden" name="orderNo" value="<?php echo $randnum?>" id="orderNo">
              <?php if(isset($_POST['edit'])){
                echo "<input type='hidden' name='id' value=".$_POST['id'].">
                      <input type='hidden' name='edit' value='1' id='edit'>
                      <input type='submit' class='btn btn-transparent' value='Update Order' id='submit'>";
              } else {
                echo "<input type='hidden' name='neworder' value='1' id='neworder'>
                      <input type='submit' class='btn btn-transparent' value='Submit' id='submit'>";
              }?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php
//include("inc/currentOrder.php"); //add the existing items from the order to the top of the page
include("inc/footer.php");
?>
