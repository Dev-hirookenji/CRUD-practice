<?php
    include "connect.php"
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $number=$_POST["mobile"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CRUD Practice</title>
</head>
<body>
    <div class="container mx-auto pt-16" >
        <div class="grid grid-flow-row justify-center space-y-1">
            <form action="post">
                <label class="pr-3">Name</label>
                <input type="text" class="form-control w-52" id="name" placeholder="Enter your name" required class="border-gray-800">
            </form>
            <form action="post">
                <label class="pr-3">Email</label>
                <input type="email" class="form-control w-52" id="email" placeholder="Enter your email" required class="border-gray-800">
            </form>
            <form action="post">
                <label class="pr-3">Phone Number</label>
                <input type="number" class="form-control w-52" id="number" placeholder="Enter your Phone number" required class="border-gray-800">   
            </form>
            <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 w-20 rounded" name="submit">Submit</button> 
        </div> 
    </div>
</body>
</html>