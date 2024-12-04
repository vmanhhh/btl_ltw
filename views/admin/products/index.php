<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page=admin&controller=login&action=index");
}
?>

<?php
require_once('views/admin/header.php'); ?>

<!-- Add CSS -->


<?php
require_once('views/admin/content_layouts.php'); ?>

<!-- Code -->
<div class="content-wrapper">
	<!-- Add Content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: #e65a26">Products management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="page=admin&controller=layouts&action=index" style="color: #e65a26">Home</a></li>
                        <li class="breadcrumb-item active">Products management</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header-->
                        <div class="card-body">
                        <button class="btn" type="button" data-toggle="modal" data-target="#addUserModal" style="background-color: #e65a26; color: white;">New</button>
                        <div class="modal fade" id="addUserModal"  aria-labelledby="addUserModal" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">New sản phẩm</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form id="form-add-student" action="index.php?page=admin&controller=products&action=add" enctype="multipart/form-data" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div  class="col-6"><label>Product name</label><input class="form-control" type="text" placeholder="Product name" name="name" /></div>
                                                
                                            </div>
                                            
                                            <div class="form-group"> <label>Description</label> <textarea class="form-control" name="description" rows="5"></textarea></div>
                                            <div class="form-group"> <label>Content</label> <textarea class="form-control" name="content" rows="10"></textarea></div>
                                            <div class="form-group"> <label>Image </label>&nbsp <input type="file" name="fileToUpload" id="fileToUpload" /></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        <button class="btn btn-success" type="submit">New</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            <div class="row"></div>
                                <table id="TAB-product" class="table table-bordered table-striped"> 
                                    <thead>
                                        <tr  class="text-center" style="color: #e65a26" >
                                            <th scope="col">No.</th>
                                            <th scope="col">Product name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Content</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody> 
                                        <?php
                                            
                                            $index = 1;

                                            foreach ($products as $product) {  
                                                                                         
                                                echo 
                                                "<tr class=\"text-center\">
                                                    <td>"
                                                        . $index. 
                                                    "</td>
                                                    <td>
                                                       ". $product->name."
                                                    </td>
                                                    <td>
                                                    " .  $product->description."
                                                    </td>   
                                                    <td>
                                                     " .  $product->content."
                                                    </td> 
                                                    <td>
                                                    <img style=\"width: 300px; height:300px;\" src='$product->img'>
                                                    </td>   
                                                    <td class='d-flex'>
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" style=\"margin-right: 5px;\" data-id='$product->id' data-name='$product->name' data-price='$product->price' data-description='$product->description' data-content='$product->content' data-img='$product->img'> <i style=\"font-size:17px;\" class=\"fas fa-edit\" ></i></button>
                                                    <button class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-id='$product->id' ><i style=\"font-size:17px;\" class=\"fas fa-trash\"></i></button> 
                                                    </td>     
                                                    <td style='display: none;'></td>   
                                                </tr>";
                                                $index++;
                                            }
                                        ?>
                                    </tbody>
                                    <div class="modal fade" id="EditStudentModal" tabindex="-1" role="dialog" aria-labelledby="EditStudentModal" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form id="form-edit-student" action="index.php?page=admin&controller=products&action=edit" enctype="multipart/form-data" method="post">
                                                    <div class="modal-body">
                                                         <div  class="col-12"><input class="form-control" type="hidden" placeholder="Name" name="id"  readonly/></div>
                                                        <div class="row">
                                                            <div  class="col-6"><label>Product name</label><input class="form-control" type="text" placeholder="Product name" name="name" /></div>
                                                            
                                                        </div>
                                                        
                                                        <div class="form-group"> <label>Description</label> <textarea class="form-control" name="description" rows="5"></textarea></div>
                                                        <div class="form-group"> <label>Content</label> <textarea class="form-control" name="content" rows="10"></textarea></div>
                                                        
                                                        <div class="form-group"> <label> Image </label>&nbsp <input type="file" name="fileToUpload" id="fileToUpload" /></div>

                                                    </div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-info formedit" type="submit">Update</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="DeleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="DeleteStudentModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="index.php?page=admin&controller=products&action=delete" method="post">
                                                    <div class="modal-body"><input type="hidden" name="id" />
                                                        <p>Bạn có chắc chắn muốn Delete sản phẩm này?</p>
                                                    </div>
                                                    <div class="modal-footer"><button class="btn btn-secondary btn-outline-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-danger btn-outline-light" type="submit">Delete</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<?php
require_once('views/admin/footer.php'); ?>
<script src="public/js/products/index.js"></script>
<!-- Add Javascripts -->


</body>

</html>