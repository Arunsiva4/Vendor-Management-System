<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Details</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
       
        
        header{
            width: 100%;
            background-color: burlywood;
            position: relative;
            top: 20px;
        }

        header ul {
			list-style-type: none;
			margin: 0px;
			padding: 20px;
            text-align: center;
		}
		header li {
			display: inline-block;
            text-align: center;
		}
		header li a {
			color: #333;
			text-decoration: none;
            margin: 0 30px;
		}
        button{
            width: 100px;
            height: 30px;
            font-size: small;
            font-weight: bold;
        }

        .details{
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: center;
        }

        .good{
            background-color: green;
            color: white;
            border: 0;
            border-radius: 5px;
        }

        .bad{
            background-color: red;
            color: white;
            border: 0;
            border-radius: 5px;
            
        }
        table {

    height: 100px;
    width:100%;
    border-collapse: collapse;
    /* border: 1px solid grey; */
    margin: 100px;
    padding: 20px;



    }

    th{
    background-color:rgb(56, 56, 70);
    color:white;
    text-align: center;
    border: 1px solid grey;
    padding: 15px;
    font-size: 20px;
    }
    tbody tr{
    text-align: center;
    border-bottom: 1px solid grey;
    }
    tbody tr td{
    border: 1px solid grey;
    padding: 15px;
    font-size: 18px;
    }

    tbody:nth-child(odd){
    background-color:#b6aeae;
    }


      

    
    </style>
</head>
<?php
    
    $servername="localhost";
    $username="root";
    $password="";
    $database="mini_proj";
    $id=1;
    $con=mysqli_connect($servername,$username,$password);

     mysqli_select_db($con,$database); 

     $result=mysqli_query($con,"SELECT*FROM vendor_details WHERE id ='$id'");
    
    if(mysqli_num_rows($result)==0){
        echo"<script>alert('No Result');</script>";

    }

    else{
        $q1=mysqli_fetch_assoc($result);

        $v_name=$q1['v_name'];
        $v_pass=$q1['v_pass'];
        $mobile=$q1['mobile'];
        $shop=$q1['shop'];
        $address=$q1['address'];

    }
    
    
    ?>
<body>
    <header>
        <ul>
            <li><a href="#"><button class="good">Add New</button></a></li>
            <li><a href="#" style="font-weight: bold;font-size: large;">Vendor Details</a></li>           
            <li><a href="#"><button class="bad">Delete</button></a></li>
        </ul>
    </header>
    <div class="details">
   <table>
    <thead>
        <tr>
            <th>Vendor Name</th>
            <th>Password</th>
            <th>Shop Name</th>
            <th>Contact</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo"$v_name"; ?></td>
        
        
            <td><?php echo"$v_pass"; ?></td>
        
        
            <td><?php echo"$shop"; ?></td>
       
            <td><?php echo"$mobile"; ?></td>
        
            <td><?php echo"$address"; ?></td>
        </tr>
    </tbody>
   </table>
  </div>
</body>
</html>