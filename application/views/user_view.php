<?php
 echo "i am a view for user details.";
?>

<!DOCTYPE html>
<html>
<head>
 <title>user details</title>
</head>
<body>
 <table border="1">
  <tr>
   <th>No.</th>
   <th>Username</th>
   <th>Company</th>
  </tr>
  <tr>
   <td>1</td>
   <td><?= $userArray['username']; ?></td>
   <td><?= $userArray['company']; ?></td>
  </tr>
 </table>
</body>
</html>

<?php
 echo "<pre>";
 print_r($userArray);
 echo "</pre>";
?>
