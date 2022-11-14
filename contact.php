<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <script src="style.js"></script>
    <link rel="icon" href="images/ethe.jpeg.png">
    <title>CONTACT</title>
</head>
<body id="contactBody">
    <div id="cursor"></div>
    <!-- NAVIGATION BAR -->
    <div id="forPhone"></div>
    <div id="NFT_Logo">
        <h1>NFT</h1>
    </div>
   
    <header id="wrapper">
        
        <div>            
            <ul>
            <li><a href="index.html"><i class="fa-solid fa-house"></i><p>Home</p></a></li>
            <li><a href="marketplace.html"><i class="fa-solid fa-indian-rupee-sign"></i><p>NFT Market Place</p></a></li>
                <li><a href="team.html"><i class="fa-solid fa-users"></i><p>Meet the Team</p></a></li>
                <li><a href="faq.html"><i class="fa-solid fa-copy"></i><p>FAQ</p></a></li>
                <li id="active"><a><i class="fa-solid fa-phone"></i><p>Contact</p></li></a>
            </ul>
        </div>
    </header>
<!-- FOR MOBILE -->
    <div id="barPocket">
        <div class="bar" id="bar1"></div>
        <div class="bar" id="bar2"></div>
        <div class="bar" id="bar3"></div>
    </div>

    <header id="wrapperPhone">
        
        <div>            
            <ul id="dropdown-content">
                <li><a href="index.html"><i class="fa-solid fa-house"></i><p>Home</p></a></li>
                <li><a href="marketplace.html"><i class="fa-solid fa-indian-rupee-sign"></i><p>NFT Market Place</p></a></li>
                <li><a href="team.html"><i class="fa-solid fa-users"></i><p>Meet the Team</p></a></li>
                <li><a href="faq.html"><i class="fa-solid fa-copy"></i><p>FAQ</p></a></li>
                <li id="active"><a><i class="fa-solid fa-phone"></i><p>Contact</p></li></a>
            </ul>
        </div>
    </header>
    <div id="contactPage">
        <h1>CONTACT</h1>
        <form action="contact.php" method="post">
            
            <label for="name1">NAME:</label>
            <input type="text" name="name1" placeholder="SURNAME FIRST" required><br>
            <label for="email">EMAIL:</label>
            <input type="email" name="email" placeholder="'example@example.com'" required ><br>
            <label for="contact" style="margin: 0 -3% 0 0;">CONTACT:</label>
            <input type="text" name="contact" required><br>
            <label for="address" style="margin: 0 -3% 0 0;">ADDRESS:</label>
            <input type="text" name="address" required><br>
            <label for="comment" style="margin: 0 -3% 0 0;">COMMENT:</label>
            <input type="text" name="comment" style="padding: 0 0 50% 0; border:2px solid #ff0; border-radius: 0 10% 0 10%; background:none;" required><br>
            <div id="submit">
            <input type="submit" placeholder="SUBMIT" name="submit" id="submit">
            </div>
        </form>
    </div>
    <script>
        const menu = document.querySelector('#barPocket');
        const dropDown = document.querySelector('#wrapperPhone');
    
    menu.addEventListener('click', function() {
        menu.classList.toggle('is-active');
        dropDown.classList.toggle('active');
        
    })
    </script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>
</html>

<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customersname = $_POST['name1'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    $query = "INSERT INTO users3 (customersname, email, contact, address, comment) VALUE ('$customersname', '$email', '$contact', '$address', '$comment')";
    mysqli_query($con, $query);
}
?>