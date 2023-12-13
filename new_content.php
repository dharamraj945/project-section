<?php
include "./header.php";
?>
<style>
    .ck-editor__editable_inline {
        min-height: 150px;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

            </div>
            <div class="card-body">
                <form action="./content_backend" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input name="content_title" required="" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="" placeholder="Title">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Descripition</label>
                        <textarea required="required" name="content_desc" class="form-control" id="editor"> </textarea>

                    </div>

                    <div class="button">

                        <button name="add_content" class="btn btn-primary" type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
<?php
include "./footer.php";
?>