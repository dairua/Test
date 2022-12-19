<?php 
    require_once('dbModel.php');
    class KHModel extends dbModel{
        public function GetDataKH(){
            $table = 'khachhang';
            $this->connect();
            $data = $this->getAllData($table);
            return $data;
        }
        public function AddKH($ten,$ngaysinh,$gioitinh,$diachi,$sdt){
            $this->connect();
            $this->execute("INSERT INTO `khachhang`(`MaKH`, `TenKH`, `NgaySinh`, `GioiTinh`, `DiaChi`, `SDT`) VALUES (null,'$ten','$ngaysinh','$gioitinh','$diachi','$sdt')");
        }
        public function CheckKH($ten,$sdt){
            $this -> connect();
            $sql = $this->execute("select * from khachhang where TenKH = '$ten' and SDT='$sdt'");
            $rs =  $this->num_rows($sql);
            if($rs==1){
                return 1;
            }
            else{
                return 0;
            }
         }
         public function GetDataKHID($idkh){
            $this -> connect();
            $table = 'khachhang';
            $idname = 'MaKH';
            $dataID = $this->getDataID($table,$idname,$idkh);
            return $dataID;
         }
         public function UpdateKH($id,$ten,$ngaysinh,$gioitinh,$diachi,$sdt){
            $this -> connect();
            $sql = "UPDATE `khachhang` SET `TenKH`='$ten',`NgaySinh`='$ngaysinh',`GioiTinh`='$gioitinh',`DiaChi`='$diachi',`SDT`='$sdt' WHERE `MaKH`='$id'";
            $this->execute($sql);
         }
         public function DeleteKH($XoaID){
            $this -> connect();
            $sql = "DELETE FROM `khachhang` WHERE MaKH = '$XoaID'";
            $this->execute($sql);
         }
         public function SearchKH($key){
            $this -> connect();
            $table = 'khachhang';
            $Searchname = 'TenKH';
            $idname ='MaKH';
            $dataID = $this->SearchData($table,$Searchname,$key,$idname);
            return $dataID;
         }
         public function GetDataKhachHang(){
            $table = 'khachhang';
            $this->connect();
            $data = $this->getAllData($table);
            return $data;
        }
}
?>