<?php 
include '../extends/header.php';
 $ervice_quer ="SELECT * FROM services";
 $services =mysqli_query($db,$service_query);


?>

<div class="row">
    <div class="col-12">
<div class="card">
    <div class="card-header d-flex justfy-content-between align-items-end">
<h4>Services List</h4>
 <a href=""  class="btn btn-primary"> 
    <i class="material-icons">add</i>create</a>
    </div>
    <div class="card-body">
    <div class="example-content">
    <table class="table">
         <thead class="table-dark">
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Icon</th>
                 <th scope="col">Title</th>
                 <th scope="col">Status</th>
                 <th scope="col">Action</th>
             </tr>
         </thead>
         <tbody>
              <?php foreach($services as $service): ?>
             <tr>
                 <th scope="row">1</th>
                 <td>
                    <i class="fa-2x <?=$service['icon'] ?>"></i>
                 </td>
                 <td>
                     <?=$service['title']  ?>
                 </td>
                 <td>
                  <a href="#" class="badge bg-danger text-white"><?=$service['status']  ?></a>
                 </td>
                 <td>@mdo</td>
            
             </tr>
             <?php endforeach; ?>
         </tbody>
             </table>
        </div>
    </div>
</div>
    </div>
</div>
<?php 
include '../extends/footer.php';

?>