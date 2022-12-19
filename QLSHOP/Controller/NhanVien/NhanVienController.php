<?php
    require_once('Model/NhanVien/NhanVienModel.php');
    class NVcontroller{
        public function ViewNV(){
            $nv = new NVModel();
            $data = $nv->GetDataNV();
            require_once('View/NhanVien/NhanVien.php');
        }
        public function ViewEditNV(){
            require_once('View/NhanVien/addNV.php');
        }
        public function AddNV($tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$anh,$machucvu){
            $nv = new NVModel();
            if($tenNV ==''||$ngaysinh ==''||$gioitinh ==''||$diachi ==''||$sdt ==''||$anh ==''||$machucvu ==''){
                $this->ViewEditNV();
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                $check = $nv -> CheckNV($tenNV,$diachi);
                if($check == 1){
                    $this->ViewEditNV();
                    echo ';Nhân viên đã tồn tại!';
                }else{
                    $nv->AddNV($tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$anh,$machucvu);
                    $this->ViewNV();
                    echo'Thêm thành công !';
                }
            }
        }
        public function updateNV($id,$tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$anh,$machucvu){
            $nv = new NVModel();
            if($tenNV ==''||$ngaysinh ==''||$gioitinh ==''||$diachi ==''||$sdt ==''||$anh ==''||$machucvu ==''){
                $this->ViewEditNV();
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                    $nv->UpdateNV($id,$tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$anh,$machucvu);
                    echo'Sửa thành công !';
                }
            }
        public function ViewDataID($id){
            $nv = new NVModel();
            $dataID = $nv->GetDataNVID($id);
            require_once('View/NhanVien/editNV.php');
        }
        public function DeleteNV($id){
            $nv = new NVModel();
            $nv->DeleteNV($id);
            $this->ViewNV();
            echo 'Xóa thành công';
        }
        public function SearchNV($key){
            $nv = new NVModel();
            $data = $nv->SearchNV($key);
            require_once('View/NhanVien/NhanVien.php');
        }
    }
?>