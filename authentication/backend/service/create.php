<?php 
include '../extends/header.php';
include '../../public/fonts/fonts.php'; 
?>
<?php if(): ?>
<div class="row">
    <div class="col-12">
        <div class="alert alert-customt" role="alert">
            <div class="custom-alert-icon  icon-success"><i class="material-icons-outlienddonr"></i></i>
        <div class="alert-content">
            <span class="alert-title">Successfull added 4 accounts</span>
        </div>
    </div>
        
        </div>
    </div>
</div>
<? endif; unset($_SESSION['service_insert']) ?>


<div class="row">
    <div class="coll-12">
        <div class="card">
    <div class="card-header">
        <h4>Service Add</h4>
    </div>
    <div class="card-body">
        <form action="" method="Post">
    <label for="exampleInputEmail1" class="form-label my-2">Service Title</label>
<input name ="title" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<label for="exampleInputEmail1" class="form-label my-2">Service Description</label>
<textarea name="dezcription" type="email" class="form-control" rows="5"></textarea>

<label for="exampleInputEmail1" class="form-label my-2">Icon</label>
<input name="icon" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<div class="card my-2">
<div class="card-body fa-2x" style="overflow-y: scroll; overflow-x:hidden;height:300px">
    <span class="m-2">
    <?php foreach($fonts as $font):?>
        <span class="m-2">>
    <i onclick="myfun(event)" class="<?= $font?>"></i>
        </span>
    <?php endforeach; ?>
    
</div>
</div>

<button type="submit" class="btn btn-primary my-5"><i class="material-icons">add</i>reate</button>
        </form>


        </div>
    </div>
</div>
<script>
    $input = document.querySelector('#hudai');
    functionmyfun(e){
        $input.vlaue = e.target.classlector('#hudai');
    }
</script>



<?php 
include '../extends/footer.php';

?>