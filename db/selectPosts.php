<?php
define('_DEFVAR', 1);
include('conn.php');


$sql = "SELECT *, username FROM posts JOIN `user` ON posts.user_id=user.id";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
  ?><div class="container"><?php
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="row">
        <div class="col py-2 border-bottom border-dark">
            <?= $row['title']?>
            <br>
            <?= $row['description']?>
            creat at <?= $row['datetime']?>
            BY 
            <?= $row['username']?>
            
          
         
        </div>
    </div>
    <?php
  }

  ?></div><?php

}









$conn->close();
?>