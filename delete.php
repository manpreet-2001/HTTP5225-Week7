<?php
require('connect.php');

if(isset($_GET['id'])){
  $id = intval($_GET['id']);
  $query = "DELETE FROM schools WHERE id = $id";
  $result = mysqli_query($connect, $query);

  if($result){
    header('Location: index.php');
    exit();
  } else {
    echo "Failed to delete school: " . mysqli_error($connect);
  }
} else {
  echo "Invalid request. No ID specified.";
}
?>
