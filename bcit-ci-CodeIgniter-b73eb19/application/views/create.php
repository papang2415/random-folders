<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD CodeIgniter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="contianer">
            <a href="#" class="navbar-brand">CRUD APP - Create User</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px;">
        <h3>Create User</h3>
        <hr>
        <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
                        <?php echo form_error('name');?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" value="<?php echo set_value('email');?>" class="form-control">
                        <?php echo form_error('email');?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>