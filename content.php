<?php
require "./header.php";
$content_fetch = new Db_functions();
?>

<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Content</h6>
                <a class="btn btn-primary btn-sm" href="./new_content">
                    <i class=" fa fa-plus"></i> Add new
                </a>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Sno</th>
                            <th>Title</th>
                            <th>Desreption</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $qry = "SELECT * FROM `section_content`";
                        $result = $content_fetch->data_fetch($qry);




                        ?>

                        <?php

                        if ($result != 0) {


                            $sno = 0;
                            foreach ($result as $key => $content_data) {
                                $sno++;
                        ?>
                                <tr>
                                    <td><a href="#">
                                            <?= $sno ?>
                                        </a></td>
                                    <td>
                                        <?= $content_data['content_title']; ?>
                                    </td>
                                    <td>
                                        <?= substr(urldecode($content_data['content_desc']), 0, 50) . "..." ?>
                                    </td>
                                    <td>
                                        <?= $content_data['created_date'] ?>
                                    </td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td><a href="" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>

                        <?php }
                        } else {

                            echo "No Cotent Found";
                        }
                        ?>






                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
<?php
require "./footer.php";
?>