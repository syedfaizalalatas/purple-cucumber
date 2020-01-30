<?php
 //echo "i am a view for user details.";
?>

<!DOCTYPE html>
<html>
<head>
 <title>user details</title>
</head>
<body>
 <table border="1">
  <tr>
   <th>User Id</th>
   <th>User Name</th>
   <th>Company Name</th>
  </tr>
  <?php 
   foreach ($userArray as $key => $value) {
    ?>
    <tr>
     <td>&nbsp;<?= $value['id']; ?></td>
     <td>&nbsp;<?= $value['username']; ?></td>
     <td>&nbsp;<?= $value['company']; ?></td>
    </tr>
    <?php
   }
  ?>
 </table>
</body>
</html>

<?php
 //echo "<pre>";
 //print_r($userArray);
 //echo "</pre>";
?>
