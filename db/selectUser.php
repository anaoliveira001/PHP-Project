<?php
define('_DEFVAR', 1);
include('conn.php');





$sql = "SELECT username FROM `user`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  ?><div class="container"><?php
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="row">
        <div class="col py-2 border-bottom border-dark">
        
            by <?= $row['username']?>
        </div>
    </div>
    <?php
  }
  ?></div><?php
}
$conn->close();
?>