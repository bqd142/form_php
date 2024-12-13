<?php
include ("../Model/form.php");
$id = $_GET['id'];
$model = new form_data();
$delete = $model->delete_form($id);
if($delete){
    echo "<script>alert('Xoá thành công');
             window.location.href = '../View/form_select.php';
            </script>";
}


?>