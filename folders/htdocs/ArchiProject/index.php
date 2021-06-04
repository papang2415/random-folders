<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
    <link rel="stylesheet"  type="text/css"href="style.css">
</head>
<body>
	<table>
        <thead>
            <tr>
                <th>FullName</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>DaryllVildosola</td>
                <td>Sorsogon Malabuyoc</td>
                <td>
                    <a href="#">Update</a>
                </td>
                <td>
                    <a href="#">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
    <form method="post" action=".php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="create" >Save</button>
		</div>
	</form>
</body>
</html>