<?php 
    require_once('Model/dbModel.php');
    class NVModel extends dbModel{
        public function GetDataNV(){
            $table = 'nhanvien';
            $this->connect();
            $data = $this->getAllData($table);
            return $data;
        }
        public function AddNV($tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$anh,$machucvu){
            $this->connect();
            $this->execute("INSERT INTO `nhanvien`(`MaNhanVien`, `TenNhanVien`,`NgaySinh`, `GioiTinh`, `DiaChi`, `SoDT`, `Image`, `MaChucVu`) VALUES (null,'$tenNV', '$ngaysinh','$gioitinh','$diachi','$sdt','$anh','$machucvu')");
        }
        public function CheckNV($tenNV,$diachi){
            $this -> connect();
            $sql = $this->execute("select * from nhanvien where TenNCC = '$tenNV' and DiaChi ='$diachi'");
            $rs =  $this->num_rows($sql);
            if($rs==1){
                return 1;
            }
            else{
                return 0;
            }
         }
         public function GetDataNVID($idNV){
            $this -> connect();
            $table = 'nhanvien';
            $idname = 'MaNhanVien';
            $dataID = $this->getDataID($table,$idname,$idNV);
            return $dataID;
         }
         public function UpdateNV($id,$tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$anh,$machucvu){
            $this -> connect();
            $sql = "UPDATE `nhanvien` SET `TenNhanVien`='$tenNV',`NgaySinh`='$ngaysinh',`GioiTinh`='$gioitinh',`DiaChi`='$diachi',`SoDT`='$sdt',`Image`='$anh',`MaChucVu`='$machucvu' WHERE `MaNhanVien`='$id'";
            $this->execute($sql);
         }
         public function DeleteNV($XoaID){
            $this -> connect();
            $sql = "DELETE FROM `nhanvien` WHERE MaNhanVien = '$XoaID'";
            $this->execute($sql);
         }
         public function SearchNV($key){
            $this -> connect();
            $table = 'nhanvien';
            $Searchname = 'TenNhanVien';
            $idname ='MaNhanVien';
            $dataID = $this->SearchData($table,$Searchname,$key,$idname);
            return $dataID;
         }
         public function GetDataNhanVien(){
            $table = 'nhanvien';
            $this->connect();
            $data = $this->getAllData($table);
            return $data;
        }
}
?>