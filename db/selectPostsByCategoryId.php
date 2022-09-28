<?php

include('conn.php');


$sql = "SELECT *, username, categories.name FROM posts JOIN `user` ON posts.user_id=user.id
JOIN categories ON posts.id=categories.id";



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

            categroy: <?= $row['name']?>
            
          
         
        </div>
    </div>
    <?php
  }

  ?></div><?php

}



$conn->close();
?>