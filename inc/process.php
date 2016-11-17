
<?php
include("connection.php");
if (isset($_POST['neworder'])) {
      $sql = "INSERT INTO `lunch_requests`(`id`,
        `Order_Email`,
        `Order_Name`,
        `Order_Number`,
        `Order_Text`,
        `Payment_Type`)
        VALUES (
          NULL,
          :orderEmail,
          :orderName,
          :orderNo,
          :orderOrder,
          :orderPayment
        )";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':orderEmail',$_POST['email'], PDO::PARAM_STR);
        $stmt->bindParam(':orderName',$_POST['name'], PDO::PARAM_STR);
        $stmt->bindParam(':orderNo', $_POST['orderNo'], PDO::PARAM_INT);
        $stmt->bindParam(':orderOrder', $_POST['order'], PDO::PARAM_STR);
        $stmt->bindParam(':orderPayment', $_POST['payment'], PDO::PARAM_STR);
        $stmt->execute();
} elseif (isset($_POST['edit'])) {
  $sql = "UPDATE `lunch_requests` SET `Order_Email` = :orderEmail,
  `Order_Name` = :orderName,
  `Order_Number` = :orderNo,
  `Order_Text` = :orderOrder,
  `Payment_Type` = :orderPayment
  WHERE `id` = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':orderEmail',$_POST['email'], PDO::PARAM_STR);
  $stmt->bindParam(':orderName',$_POST['name'], PDO::PARAM_STR);
  $stmt->bindParam(':orderNo', $_POST['orderNo'], PDO::PARAM_INT);
  $stmt->bindParam(':orderOrder', $_POST['order'], PDO::PARAM_STR);
  $stmt->bindParam(':orderPayment', $_POST['payment'], PDO::PARAM_STR);
  $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
  $stmt->execute();
} elseif (isset($_POST['delete'])){
    $delete = "DELETE FROM lunch_requests WHERE id = :id";
    $stmt = $db->prepare($delete);
    $stmt->bindParam(':id',$_POST['id'],PDO::PARAM_INT);
    $stmt->execute();
}
