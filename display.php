<?php
    include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Add User</title>
</head>
<body>
    <div class="flex my-8 container bg-blue-100 pl-24"> 
        <button class="bg-blue-500 hover:bg-blue-700 active:bg-blue-300 text-white font-bold py-1 px-1 rounded"><a href="index.php">Add User</a></button>
    </div>
    <div class="flex justify-center">
        <table class="border-separate px-8 w-[45rem]">
            <thead class="border border-solid">
                <tr>
                    <th class="border border-black">ID</th>
                    <th class="border border-black">Name</th>
                    <th class="border border-black">Email</th>
                    <th class="border border-black">Number</th>
                </tr>
            </thead>
            <tbody>

            <?php

                $sql="Select * from `users`";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $number=$row['number'];
                        echo '<tr>
                        <td class="border border-black">'.$id.'</td>
                        <td class="border border-black">'.$name.'</td>
                        <td class="border border-black">'.$email.'</td>
                        <td class="border border-black">'.$number.'</td>
                        <td class="grid grid-cols-2">
                            <button class="flex flex-wrap mx-2 px-5 bg-blue-500 hover:bg-blue-700 active:bg-blue-300 text-white font-bold py-1 px-1 rounded"><a href="update.php"></a>Update</button>
                            <button class="flex flex-wrap mx-2 px-5 bg-red-500 hover:bg-red-700 active:bg-blue-300 text-white font-bold py-1 px-1 rounded"><a href="delete.php"></a>Delete</button>
                        </td>
                        </tr>';
                    }
                }
            ?>
            
            </tbody>
        </table>
    </div>
</body>
</html>