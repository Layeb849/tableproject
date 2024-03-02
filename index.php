<?php
if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Age = $_POST['age'];
    $Address = $_POST['address'];

    $conn = mysqli_connect('localhost', 'root', '', 'mcet');
    $data = "INSERT INTO bayodata (Name, Age, Address) VALUES('$Name',$Age, '$Address')";
    $sql = mysqli_query($conn, $data);
    if ($sql) {
        echo 'inserted';
    } else {
        echo 'not';
    }
}
?>





<form action="" method="post">



    <label for="">Name:</label> <input type="text" name="name"><br /> <br />
    <label for="">Age:</label> <input type="text" name="age"><br /> <br />
    <label for="">Address:</label> <input type="text" name="address"><br /> <br />
    <input type="submit" value="submit" name="submit">
</form>