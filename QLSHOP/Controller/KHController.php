<?php
    require_once('Model/khachhang.php');
    class KHcontroller{
        public function ViewKH(){
            $KH = new KHModel();
            $data = $KH->getDataKH();
            require_once('View/KhachHang/khachhang.php');
        }
        public function ViewEditKH(){
            require_once('View/KhachHang/addkh.php');
        }
        public function addKH($ten,$ngaysinh,$gioitinh,$diachi,$sdt){
            $kh = new KHModel();
            if($ten ==''||$ngaysinh ==''||$gioitinh ==''||$diachi ==''||$sdt ==''){
                $this->ViewEditKH();
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                $check = $kh -> CheckKH($ten,$sdt);
                if($check == 1){
                    $this->ViewEditKH();
                    echo 'Khách hàng đã tồn tại !';
                }else{
                    $kh->AddKH($ten,$ngaysinh,$gioitinh,$diachi,$sdt);
                    $this->ViewEditKH();
                    echo'Thêm thành công !';
                }
            }
        }
        public function updateKH($id,$ten,$ngaysinh,$gioitinh,$diachi,$sdt){
            $kh = new KHModel();
            if($ten ==''||$ngaysinh ==''||$gioitinh ==''||$diachi ==''||$sdt ==''){
                $this->ViewDataID($id);
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                    $kh->UpdateKH($id,$ten,$ngaysinh,$gioitinh,$diachi,$sdt);
                    $this->ViewKH();
                    echo'Sửa thành công !';
                }
            }
        public function ViewDataID($id){
            $kh = new KHModel();
            $dataID = $kh->GetDataKHID($id);
            require_once('View/KhachHang/editkh.php');
        }
        public function DeleteKH($id){
            $kh = new KHModel();
            $kh->DeleteKH($id);
            $this->ViewKH();
            echo 'Xóa thành công';
        }
        public function SearchKH($key){
            $kh = new KHModel();
            $data = $kh->SearchKH($key);
            require_once('View/KhachHang/khachhang.php');
        }

    }
?>