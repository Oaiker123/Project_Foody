<?php 
        function insert_lienhe($name, $email, $sdt, $noidung){
            $sql="insert into baiviet(name,email,sdt,noidung) values('$name','$email','$sdt','$noidung')";
            pdo_execute($sql);
        }
        function delete_lienhe($id){
            $sql = "delete from baiviet where id =".$id;
            pdo_execute($sql);
        }
    
        function loadall_lienhe(){
            $sql = "select * from baiviet order by id";
            $listlienhe =pdo_query($sql);
            return $listlienhe;
        }
    
?>