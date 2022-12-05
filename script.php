<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Viggo's Guestbook</h1>

    <form action="script.php" method="post" enctype="multipart/form-data">
        " Name: "
        <input type="text" name="name" id="name">
        <br>
        <br>
        "Email: "
        <input type="text" name="email" id="email">
        <br>
        <br>
        " Homepage: "
        <input type="text" name="homepage" id="homepage">
        <br>
        <br>
        " Tel: "
        <input type="text" name="tel" id="tel">
        <br>
        <br>
        " Comment: "
        <input type="text" name="comment" id="comment">
        <br>
        <br>
        <input type="submit" value="Lägg till" id="submit">            header("location:fileUpload.php?uploadsuccess"); 

    </form>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inlamning8";
    $conn = new mysqli($servername, $username, $password, $dbname);


    $stmt = $conn->prepare("INSERT INTO Guestbook (name, email, homepage, comment, time) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $homepage, $comment, $timestamp);


    $name = $_POST["name"];
    $email = $_POST["email"];
    $homepage = $_POST["homepage"];
    $comment = $_POST["comment"];
    $timestamp = date("Y-m-d H:i:s");
    $sql = $stmt->execute();
    header("location:posts.php"); 


    $stmt->close();
    $conn->close();
    
    ?>
</body>

</html