<?php
if (isset($_SESSION['active_user'])) {
} else {
    header("location:./login");
}
