<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql="Select * from `users` where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $number=$row['number'];

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];

        $sql="update `users` set id=$id, name='$name', email='$email', number='$number'
        where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Updated successfully";
        }else{
            die(mysqli_error($con));
        }
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
        <div class="grid grid-flow-row justify-center">
            <form method="post">
                <div class="form-group py-1">
                    <label class="pr-3">Name</label>
                    <input type="text" class="form-control" name="name" required class="border-gray-800 w-52 value=" value="<?php echo $name;?>">
                </div>
                <div class="form-group py-1">
                    <label class="pr-3">Email</label>
                    <input type="email" class="form-control" name="email" required class="border-gray-800 w-52" value="<?php echo $email;?>">
                </div>
                <div class="form-group py-1">
                    <label class="pr-3">Phone Number</label>
                    <input type="number" class="form-control" name="number" required class="border-gray-800 w-52 value=" value="<?php echo $number;?>">
                </div>
                <div class="py-1">   
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 w-20 rounded" name="submit">Update</button>
                </div>
            </form>
        </div> 
    </div>
</body>
</html>