<?php
require "./config/class.php";
$content_obj = new Db_functions();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST["content_title"] != "" && $_POST['content_desc'] != "") {

        $content_title = $_POST['content_title'];
        $content_desc = $_POST['content_desc'];
        $content_desc = urlencode($content_desc);



        $qry = "INSERT INTO `section_content`(`content_title`, `content_desc`) VALUES ('$content_title','$content_desc')";
        $qry_content_add = $content_obj->data_insert($qry);
        if ($qry_content_add == 1) {
            echo "<script>
            alert('Content Added');
            window.location.href='./new_content';
            </script>";
        }

    }


}

?>