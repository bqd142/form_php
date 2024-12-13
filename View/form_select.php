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
    <form method="post">
    <table class="table table-dark table-striped" style="width:800px; margin: 30px auto;">
        <?php 
            include("../Model/form.php");
            $model = new form_data();
            $select = $model->select_form();
        ?>
        <tr>
            <th>user name</th>
            <th>email</th>
            <th>họ tên</th>
            <th>địa chỉ</th>
            <th>số điện thoại</th>
            <th>avatar</th>
            <th>Giới tính</th>
            <th>Thao tác</th>
        </tr>
        <?php foreach($select as $row){ ?>
            <tr>
                <td><?php echo $row['user_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['hoten'] ?></td>
                <td><?php echo $row['diachi'] ?></td>
                <td><?php echo $row['sdt'] ?></td>
                <td><img class="rounded" width="165px" height="165px" src="../upload/<?php echo$row['avt'];?>"></td>
                <td><?php echo $row['gioitinh'] ?></td>
               <td> 
               <a href="form_update.php?id=<?php echo $row['id_user']?>"
               
                >update
                    </a>|
                <a href="../Controller/delete_form.php?id=<?php echo $row['id_user']?>"
                onClick="if(confirm('Bạn có chắc chắn xóa')) return true; 
                            else return false;"
                >Xoá
                    </a>
               </td>
            </tr>
        <?php } ?>


    </table>
    </form>
</body>
</html>