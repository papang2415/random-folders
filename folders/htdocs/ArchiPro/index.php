<?php include('server.php');
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_phase = true;
        $rec = mysqli_query($db, "SELECT * FROM info WHERE id ='$id'");
        $record = mysqli_fetch_array($rec);
        $name = $record['username'];
        $address = $record['password'];
        $id = $record['id'];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PRACTICE</title>
    <link rel="stylesheet"  type="text/css"href="style.css">
</head>
<body class = "design">
<?php  if (isset($_SESSION['msg'])):?>
    <div class="msg">
        <?php 
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']); 
        ?>
    </div>
<?php endif?>
	<table>
        <thead>
            <tr>
                <th>Id Number</th>
                <th>Username</th>
                <th>Password</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($result)){?>
                <tr style = "background-color:lightgrey;">
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['password'];?></td>
                <td>
                    <a href="index.php?edit=<?php echo $row['id'];?>" style = "font-family:tahoma;
                     background: #228B22; color: white; border-radius: 3px; padding: 2px 5px; text-decoration: none;">Update</a>
                </td>
                <td>
                    <a class = "del_btn" href="server.php?delete=<?php echo $row['id'];?>"
                     style = "font-family:tahoma;" >Delete</a>
                </td>
            </tr>
           <?php }?>
        </tbody>
    </table>
    <form method="post" action="server.php" >
    <input type="hidden" name = "id" value="<?php echo $id?>">
		<div class="input-group">
			<label style = "font-family:tahoma;">Username</label>
			<input type="text" name="username" value="<?php echo $name;?>">
		</div>
		<div class="input-group">
			<label style = "font-family:tahoma;">Password</label>
			<input type="text" name="password" value="<?php echo $address;?>">
		</div>
		<div class="action">
            <?php if ($edit_phase == false):?> 
                <button type="submit" name="create" class="save_btn">Save</button>
            <?php else: ?> 
                <button type="submit" name="update" class="update_btn">Update</button>
            <?php endif ?>
            </div>
	</form>
</body>
</html>