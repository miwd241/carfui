<?php
include '../extends/header.php';
?>
<div class="row">
    <div class="col ">
        <div class="page-description">
            <h1>settings</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4>password updater</h4>
            </div>

            <form action="setting_manage.php" metod="POST">
            <div class="class-boy">
            <label for="exampleInputEmail1" class="form-label">Current password</label>
<input type="text" name= "oldpasss" class="form-control" id="exampleInputEmail1"
 aria-describedby="emailHelp">
 <label for="exampleInputEmail1 my-2" class="form-label">New password</label>
 <input type="text" name= "newpass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 <label for="exampleInputEmail1 my-2" class="form-label">CConfirm password</label>
 <input type="text" name= "cpass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

 <!--php success code---->
 
<?php if(isset($_SESSION['pass_update'])) :?>

<div id="emailHelp" class="form-text text-success" 
><?=$_SESSION['pass_update']?>

</div>
<?php endif; unset($_SESSION['pass_error']) ;?> 
<!--- php success code --> 
<!--php error code---->
<?php if(isset($_SESSION['pass_error'])) :?>

<div id="emailHelp" class="form-text"><?=$_SESSION['pass_error']?>

</div>
<?php endif; unset($_SESSION['pass_error']) ;?>
<!--- php error code -->
<div class="d-grid gap-2 mt-3">
    <button class="btn btn-primary" name="passubtn" type="submit">update</button>
     
</div>
            </div>
            </form>
        </div>
<!--imageb part start--->
<div class="col -6">
        <div class="card">
            <div class="card-header">
                <h4>Image update</h4>
            </div>

            <form action="setting_manage.php" metod="POST" enctype="multipart/foprm-data">
            <div class="class-boy">
 <label for="exampleInputEmail1 my-2" class="form-label">profilee Picture</label>
 <input type="file" name= "image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<div class="d-grid gap-2 mt-3">
    <button class="btn btn-primary" name="imageubtn" type="submit">update</button>
     
</div>
            </div>
            </form>
        </div>
<!--imageb part end--->




    </div>
</div>


<?php
include '../extends/footer.php';
?>