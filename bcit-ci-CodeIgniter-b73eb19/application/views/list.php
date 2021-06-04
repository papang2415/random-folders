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
            <a href="#" class="navbar-brand">CRUD APP - List Of Users</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px;">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    $success = $this->session->userdata('success');
                    if($success != "") {
                ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
                <?php 
                }
                ?>
                 <?php 
                    $failure = $this->session->userdata('failure');
                    if($failure != "") {
                ?>
                <div class="alert alert-success"><?php echo $failure; ?></div>
                <?php 
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <h3>View Users</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8">
                <table class="table table-striped border">
                    <tr>
                        <th class="text-center bg-dark text-light">ID</th>
                        <th class="text-center bg-dark text-light">Name</th>
                        <th class="text-center bg-dark text-light">Email</th>
                        <th width="60" class="text-center bg-dark text-light">Edit</th>
                        <th width="70" class="text-center bg-dark text-light">Delete</th>
                    </tr>

                    <?php if(!empty($users)) {foreach($users as $user) {?>
                    <tr>
                        <td><?php echo $user['user_id']?></td>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['email']?></td>
                        <td class="d-flex justify-content-between">
                            <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id'] ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } } else {?>
                    <tr>
                        <td colspan="5">Records not Found!</td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</body>


<!-- https://www.youtube.com/watch?v=v6LzNJZ_KLU  ===== YOUTUBE TUTORIAL -->

</html>