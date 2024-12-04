<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page=admin&controller=login&action=index");
}
?>
<?php
require_once('views/admin/header.php');
?>

<?php
require_once('views/admin/content_layouts.php');
?>

<!-- Code -->
<div class="content-wrapper">
    <!-- Add Content -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: #e65a26">News management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="page=admin&controller=layouts&action=index"
                                style="color: #e65a26">Home</a></li>
                        <li class="breadcrumb-item active">News management</li>
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
                            <button class="btn" style="background-color: #e65a26; color: white" type="button"
                                data-toggle="modal" data-target="#addUserModal">New</button>
                            <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog"
                                aria-labelledby="addUserModal" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">New article</h5><button class="close" type="button"
                                                data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form id="form-add-student"
                                            action="index.php?page=admin&controller=news&action=add"
                                            enctype="multipart/form-data" method="post">
                                            <div class="modal-body">
                                                <div class="form-group"><label>Title</label><input class="form-control"
                                                        type="text" placeholder="Title" name="title" /></div>

                                                <div class="form-group"> <label>Description</label> <textarea
                                                        class="form-control" placeholder="Description"
                                                        name="description" rows="5"></textarea></div>
                                                <div class="form-group"> <label>Content</label> <textarea
                                                        class="form-control" placeholder="Content" name="content"
                                                        rows="10"></textarea></div>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Close</button><button class="btn btn-primary"
                                                    type="submit">New</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <table id="TAB-news" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center" style="color: #e65a26">
                                        <th scope="col">No.</th>
                                        <th scope="col">Date </th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Content</th>
                                        <th style="width:150px;" scope="col">Status</th>
                                        <th style="width:150px;" scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $index = 1;

                                    foreach ($news as $new) {
                                        $status = ($new->status) ? 'Show' : 'Hidden';
                                        $button = ($new->status) ? "<button class=\"btn-hide btn btn-secondary btn-xs\" style=\"margin-right: 5px\" data-id='$new->id' ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-x-lg\" viewBox=\"0 0 16 16\">
                                                      <path fill-rule=\"evenodd\" d=\"M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z\"/>
                                                      <path fill-rule=\"evenodd\" d=\"M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z\"/>
                                                      </svg></button>" : "<button class=\"btn-hide btn btn-success btn-xs\" style=\"margin-right: 5px\" data-id='$new->id' > <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check-lg\" viewBox=\"0 0 16 16\">
                                                      <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/>
                                                    </svg></button>";
                                        echo
                                            "<tr >
                                                    <td class=\"text-center\">"
                                            . $index .
                                            "</td>
                                                    
                                                    <td class=\"text-center\">
                                                      " . date('h:i - d/m/Y', strtotime($new->date)) . "
                                                    </td>   

                                                    <td>
                                                       " . $new->title . "
                                                    </td    > 
                                                    <td>
                                                     " . $new->description . "
                                                    </td> 
                                                    <td>
                                                       " . $new->content . "
                                                    </td>   
                                                    
                                                    <td class=\"text-center\">
                                                       " . $status . "
                                                    </td>      
                                                    <td style=\"width:150px;\" class=\"text-center\"> " .
                                            $button . "
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" style=\"margin-right: 5px\" data-id='$new->id'  data-description='$new->description' data-content='$new->content' data-title='$new->title' > <i style=\"font-size:17px;\" class=\"fas fa-edit\" ></i></button>
                                                    <button class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-id='$new->id' ><i style=\"font-size:17px;\" class=\"fas fa-trash\"></i></button>
                                                  </td>                                                                                                                                                                                       
                                                </tr>";
                                        $index++;
                                    }
                                    ?>
                                </tbody>
                                <div class="modal fade" id="EditStudentModal" tabindex="-1" role="dialog"
                                    aria-labelledby="EditStudentModal" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit</h5><button class="close" type="button"
                                                    data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="index.php?page=admin&controller=news&action=edit"
                                                enctype="multipart/form-data" method="post">
                                                <div class="modal-body">
                                                    <input class="form-control" type="hidden" placeholder="Name"
                                                        name="id" />
                                                    <div class="form-group"><label>Title </label><input
                                                            class="form-control" type="text" name="title" /></div>
                                                    <div class="form-group"> <label>Description</label> <textarea
                                                            class="form-control" name="description" rows="5"></textarea>
                                                    </div>
                                                    <div class="form-group"> <label>Content</label> <textarea
                                                            class="form-control" name="content" rows="10"></textarea>
                                                    </div>

                                                </div>
                                                <div class="modal-footer"><button class="btn btn-secondary"
                                                        type="button" data-dismiss="modal">Close</button><button
                                                        class="btn btn-info" type="submit">Edit</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="DeleteStudentModal" tabindex="-1" role="dialog"
                                    aria-labelledby="DeleteStudentModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete</h5><button class="close" type="button"
                                                    data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="index.php?page=admin&controller=news&action=delete"
                                                method="post">
                                                <div class="modal-body"><input type="hidden" name="id" />
                                                    <p>Do you want to delete this article?</p>
                                                </div>
                                                <div class="modal-footer"><button
                                                        class="btn btn-secondary btn-outline-light" type="button"
                                                        data-dismiss="modal">Close</button><button
                                                        class="btn btn-danger btn-outline-light"
                                                        type="submit">Delete</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="HideStudentModal" tabindex="-1" role="dialog"
                                    aria-labelledby="HideStudentModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hide or show this article</h5><button
                                                    class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="index.php?page=admin&controller=news&action=hide"
                                                method="post">
                                                <div class="modal-body"><input type="hidden" name="id" />
                                                    <p>Do you want to proceed?</p>
                                                </div>
                                                <div class="modal-footer"><button
                                                        class="btn btn-secondary btn-outline-light" type="button"
                                                        data-dismiss="modal">Close</button><button
                                                        class="btn btn-info btn-outline-light"
                                                        type="submit">Update</button></div>
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

<!-- Add Javascripts -->
<script src="public/js/news/index.js"></script>

</body>

</html>