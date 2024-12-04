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
                    <h1 style="color: #e65a26">Comments - Reviews</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="page=admin&controller=layouts&action=index" style="color: #e65a26">Home</a></li>
                        <li class="breadcrumb-item active">Comments - Reviews</li>
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
                            <div class="row">
                                <div class="col-12">
                                    <table id="giaotrinhofkh" class="table table-bordered table-striped" style="margin-top:6px;">
                                        <thead>
                                            <tr class="text-center" style="color: #e65a26">
                                                <th style="width: 220px;">No.</th>
                                                <th style="width: 220px;">Article</th>
                                                <th style="width: 220px;">Date</th>

                                                <th style="width: 260px;">Content</th>
                                                <th style="width: 230px;">Author</th>
                                                <th style="width: 130px;">Status</th>
                                                <th style="width: 100px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $index = 1;

                                            foreach ($comments as $comment) {
                                                $status = ($comment->approved) ? 'Show' : 'Hidden';
                                                $button = ($comment->approved) ? "<button data-toggle='tooltip' data-placement='top' title='Hide comment' class=\"btn-hide btn btn-secondary btn-xs\" style=\"margin-right: 5px\" data-id='$comment->id' ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-x-lg\" viewBox=\"0 0 16 16\">
                                                      <path fill-rule=\"evenodd\" d=\"M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z\"/>
                                                      <path fill-rule=\"evenodd\" d=\"M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z\"/>
                                                      </svg></button>" : "<button data-toggle='tooltip' data-placement='top' title='Show comment' class=\"btn-hide btn btn-success btn-xs\" style=\"margin-right: 5px\" data-id='$comment->id' > <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check-lg\" viewBox=\"0 0 16 16\">
                                                      <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/>
                                                    </svg></button>";
                                                echo
                                                "<tr class=\"text-center\">
                                                    <td >"
                                                    . $index .
                                                    "</td>
                                                    <td >"
                                                    . $comment->news_title .
                                                    "</td>
                                                    <td >
                                                       " .  date('h:i:sa - d/m/Y', strtotime($comment->date))  . "
                                                    </td>
                                                    
                                                    <td>
                                                       " . $comment->content . "
                                                    </td>    
                                                    <td>
                                                    " . $comment->user_id . "
                                                    <td >
                                                      " . $status . "
                                                    </td>   
                                                 </td>             
                                                    <td style=\"width:150px;\"> " .
                                                    $button . "
                                                    <button data-toggle='tooltip' data-placement='top' title='Delete' class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-id='$comment->id' ><i style=\"font-size:17px;\" class=\"fas fa-trash\"></i></button>
                                                  </td>                                                                                                                                                                                       
                                                </tr>";
                                                $index++;
                                            }
                                            ?>
                                        </tbody>
                                        <div class="modal fade" id="HideStudentModal" tabindex="-1" role="dialog" aria-labelledby="HideStudentModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hide or show comment</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <form action="index.php?page=admin&controller=comments&action=hide" method="post">
                                                        <div class="modal-body"><input type="hidden" name="id" />
                                                            <p>Are you sure?</p>
                                                        </div>
                                                        <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-outline-light btn-info" type="submit">Update</button></div>
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
                                                    <form action="index.php?page=admin&controller=comments&action=delete" method="post">
                                                        <div class="modal-body"><input type="hidden" name="id" />
                                                            <p>Are you sure you want to delete comment?</p>
                                                        </div>
                                                        <div class="modal-footer"><button class="btn btn-secondary btn-outline-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-danger btn-outline-light" type="submit">Delete</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="EditStudentModal" tabindex="-1" role="dialog" aria-labelledby="EditStudentModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit comment</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <form action="index.php?page=admin&controller=comments&action=edit" enctype="multipart/form-data" method="post">
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12"><label>ID</label> <input class="form-control" type="text" placeholder="Name" name="id" readonly /></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12"><label>Content </label><input class="form-control" type="text" name="title" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Edit</button></div>
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
        </div>
    </section>




</div>


<?php
require_once('views/admin/footer.php'); ?>

<!-- Add Javascripts -->
<script src="public/plugins/moment/moment.min.js"></script>
<script src="public/js/comments/index.js"></script>

</body>

</html>