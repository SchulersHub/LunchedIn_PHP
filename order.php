<?php
include("inc/header.php");
include("inc/process.php");
include("inc/connection.php");

//include("inc/delete.php");
?>
      <h1><a href="index.php">Lunched<span class='color'>[in] </span></a></span> || ORDER#
        <?php
        if (!$_POST) {
          header('Location: index.php');
        } elseif (!$_POST["orderNo"]) {
          header('Location: submit.php');
        } else {
        $randnum = $_POST["orderNo"];
        echo $randnum;
      }
        ?> </h1>



  <section id="request" class="bg-one">
    <div class="container">
      <div class="row">
          <div class="title text-center wow fadeInDown">
              <h2>Current<span class="color"> Order</span></h2>
              <div class="border"></div>
          </div>
        <?php
          try {
            $lunch_order = $db->prepare("SELECT *
              FROM `lunch_requests`
              WHERE `Order_Number`= ?
              ");
              $lunch_order->bindParam(1, $randnum, PDO::PARAM_INT);
              $lunch_order->execute();
              $lunch_order = $lunch_order->fetchAll(PDO::FETCH_ASSOC);
              foreach($lunch_order as $item) {
                echo "
                <article>
                <div class='request'>
                <div class='request-title'>
                <h3>" . $item["Order_Name"] . "</h3>
                </div>
                <ul style='word-wrap: break-word'>
                  <li><strong>Order: </strong>".$item["Order_Text"]."</li>
                  <li><strong>Payment: </strong>".$item["Payment_Type"]."</li>
                </ul>
                <form method='post' style='float: left;'>
                <input type='hidden' name='id' value=".$item["id"]." >
                <input type='hidden' name='orderNo' value=".$item["Order_Number"].">
                <input type='hidden' name='edit' value='1'>
                <input type='submit'  value='Edit' formaction='submit.php' class='btn btn-transparent'>
                </form>
                <form method='post'>
                <input type='hidden' name='id' value=".$item["id"]." >
                <input type='hidden' name='delete' value='1'>
                <input type='hidden' name='orderNo' value=".$item["Order_Number"].">
                <input type='submit'  value='Delete' formaction='?' class='btn btn-transparent'>
                </form>
                </div>
                </article>
                ";}
          } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
          }
        ?>



      </div>
    </div>
  </section>



<?php
include("inc/footer.php");
 ?>
