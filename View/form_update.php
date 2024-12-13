<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        $id = $_GET['id'];
        include("../Model/form.php");
        $model = new form_data();
        $select = $model->select_id($id);
        $select = $select->fetch_assoc();   
    ?>

    <form method="post" action="../Controller/update_form.php" enctype="multipart/form-data">
        <input type="text" value= <?php echo$id ?> name="txtid" style="display:none;">
    <table class="table table-dark table-striped" style="width: 600px; margin: 30px auto;">
        <tr>
            <th colspan="2" style="text-align: center; font-size: 20px;"> Sign Up Form</th>
        </tr>
        <tr>
            <td> User Name </td>
            <td> <input type="text" class="form-control"  name="txtusername" value="<?php echo$select['user_name'] ?> " > </td>
        </tr>
        <tr>
            <td> Email </td>
            <td> <input type="text" class="form-control"  name="txtemail" value="<?php echo$select['email'] ?> "></td>
        </tr>
        <tr>
            <td> Họ tên </td>
            <td> <input type="text" class="form-control"  name="txthoten" value="<?php echo$select['hoten'] ?> "></td>
        </tr>
        <tr>
            <td> Địa chỉ </td>
            <td> <input type="text" class="form-control"  name="txtdiachi" value="<?php echo$select['diachi'] ?> "></td>
        </tr>
        <tr>
            <td> Số điện thoại</td>
            <td> <input type="text" class="form-control"  name="txtsdt" value="<?php echo$select['sdt'] ?> "></td>
        </tr>
        <tr>
            <td> Avatar </td>
            <td> 
            <img class="rounded" width="165px" height="165px" src="../upload/<?php echo$select['avt'];?>">
            <input type="file" class="form-control"  name="txtavt">
            </td>
        </tr>
        <tr>
            <td> Giới tính </td>
            <td> 
                <select class="form-select" name="txtgioitinh">
                    <option value="Nam" <?php if ($select['gioitinh'] == 'Nam') echo 'selected'; ?>>Nam</option>
                    <option value="Nữ" <?php if ($select['gioitinh'] == 'Nữ') echo 'selected'; ?>>Nữ</option>
                    <option value="Khác" <?php if ($select['gioitinh'] == 'Khác') echo 'selected'; ?>>Khác</option>
                </select>    
            </td>
        </tr>
        <tr>
            <th colspan="2" style="text-align: center; font-size: 20px;"> <button type="submit" class="btn btn-success" name="txtupdate">Sửa</button></th>
        </tr>
    </table>
    </form>
    
</body>
</html>