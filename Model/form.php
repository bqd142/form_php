<?php
    include ("connect.php");
    class form_data{
        public function insert_form($username, $Email ,$Ten,$diachi, $sdt, $avt, $gioitinh){
            global $conn;
            $sql="insert into user_inf (user_name, email, hoten, diachi, sdt, avt, gioitinh)
                                values('$username', '$Email' ,'$Ten','$diachi', '$sdt', '$avt', '$gioitinh')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_form(){
            global $conn;
            $sql="SELECT * FROM user_inf";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_id($id){
            global $conn;
            $sql="SELECT * FROM user_inf where id_user='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function delete_form($id){
            global $conn;
            $sql="DELETE FROM user_inf where id_user='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function update_form($id,$username, $Email ,$Ten,$diachi, $sdt, $avt, $gioitinh){
            global $conn;
            $sql="UPDATE user_inf
                  SET  user_name ='$username', email='$Email', hoten = '$Ten', diachi = '$diachi', sdt ='$sdt',avt='$avt', gioitinh = '$gioitinh'
                  where id_user='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        


        

    }
?>