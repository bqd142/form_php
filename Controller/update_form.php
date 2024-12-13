<?php
    include("../Model/form.php");
    if(isset($_POST['txtupdate'])){
        if(empty($_POST['txtusername']) || empty($_POST['txtemail']) ||empty($_POST['txthoten']) || empty($_POST['txtdiachi']) || empty($_POST['txtsdt']) || empty($_FILES['txtavt']['name']) || empty($_POST['txtgioitinh']) ){
            echo "<script>alert('Vui lòng nhập đủ thông tin');
             window.location.href = '../View/form.html';
            </script>";
        }
        else{
           $model = new form_data();
           move_uploaded_file($_FILES['txtavt']['tmp_name'],'../upload/'.$_FILES['txtavt']['name']);
           $update = $model->update_form($_POST['txtid'], $_POST['txtusername'], $_POST['txtemail'], $_POST['txthoten'], $_POST['txtdiachi'], $_POST['txtsdt'],$_FILES['txtavt']['name'], $_POST['txtgioitinh']);
            if($update){
                echo "<script>alert('Thành công');
             window.location.href = '../View/form_select.php';
            </script>";
            }
        }
    }
?>