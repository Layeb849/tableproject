<?php
  $con = mysqli_connect('localhost', 'root', '','mcet');
  $sqli= "SELECT * FROM bayodata";
  $data = mysqli_query($con, $sqli);
  if(isset($_GET['delet_id'])){
    $id = $_GET['delet_id'];
    $delet_id = "DELETE * FROM bayodata WHERE id = $id";
    mysqli_query($con, $delet_id);
    header('location : table.php');
  }
?>

<table border="3" cellpadding="10">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Age</td>
            <td>Address</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php

while($bd = mysqli_fetch_assoc($data)){
    echo '<tr>';
    echo '<td>' . $bd['id'] . '</td>';
    echo '<td>' . $bd['Name'] . '</td>';
    echo '<td>' . $bd['Age'] . '</td>';
    echo '<td>' . $bd['Address'] . '</td>';
    echo '<td>
       <a href="?delet_id=' . $bd['id'] . '">Delet</a>
       <a href="?edit_id=' . $bd['id'] . '">Edit</a>
      </td>';
    echo '</tr>';
  }
  ?>

        <!-- <tr>
            <td>123</td>
            <td>Layeb</td>
            <td>50</td>
            <td>magura</td>
        </tr> -->
    </tbody>
    
</table>