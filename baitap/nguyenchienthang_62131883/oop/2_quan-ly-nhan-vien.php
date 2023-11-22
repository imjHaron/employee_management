<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="2_style.css">
</head>

<body>
<?php
    abstract class NhanVien{  
        protected $hoTen, $ngaySinh, $gioiTinh, $ngayVaoLam, $heSoLuong, $soCon;
        const luongCoBan = 3000000;
        
        public function setHoTen($hoTen){
            $this->hoTen = $hoTen;
        }
        public function getHoTen(){
            return $this->hoTen;
        }
        public function setNgaySinh($ngaySinh){
            $this->ngaySinh = $ngaySinh;
        }
        public function getNgaySinh(){
            return $this->ngaySinh;
        }
        public function setGioiTinh($gioiTinh){
            $this->gioiTinh = $gioiTinh;
        }
        public function getGioiTinh(){
            return $this->gioiTinh;
        }
        public function setNgayVaoLam($ngayVaoLam){
            $this->ngayVaoLam = $ngayVaoLam;
        }
        public function getNgayVaoLam(){
            return $this->ngayVaoLam;
        }
        public function setHeSoLuong($heSoLuong){
            $this->heSoLuong = $heSoLuong;
        }
        public function getHeSoLuong(){
            return $this->heSoLuong;
        }
        public function setSoCon($soCon){
            $this->soCon = $soCon;
        }
        public function getSoCon(){
            return $this->soCon;
        }
        
        abstract public function tinhTienLuong();
        abstract public function tinhTroCap();
        public function setTinhTienThuong(){
            return (date("d-m-Y") -  $this->ngayVaoLam + 1) * 1000000;
        }
    }

    class NhanVienVanPhong extends NhanVien{
        protected $soNgayVang;
        const dinhMucVang = 2; 
        const donGiaPhat = 100000;

        public function setSoNgayVang($soNgayVang){
            $this->soNgayVang = $soNgayVang;
        }
        public function getSoNgayVang(){
            return $this->soNgayVang;
        }

        function tinhTienPhat(){
            if($this->soNgayVang > self::dinhMucVang)
                return $this->soNgayVang * self::donGiaPhat;
        }
        function tinhTroCap(){
            if($this->gioiTinh == "Nữ")
                return 200000 * $this->soCon * 1.5;
            else
                return 200000 * $this->soCon;
        }
        function tinhTienLuong(){
            return self::luongCoBan * $this->heSoLuong; 
        }
    }

    class NhanVienSanXuat extends NhanVien{
        protected $soSanPham;
        const dinhMucSP = 100; 
        const donGiaSP = 100000;

        public function setSoSanPham($soSanPham){
            $this->soSanPham = $soSanPham;
        }
        public function getSoSanPham(){
            return $this->soSanPham;
        }

        function tinhTienThuong(){
            if($this->soSanPham > self::dinhMucSP)
                return (($this->soSanPham - self::dinhMucSP) * self::donGiaSP * 0.03);
            else
                return 0;
        }
        function tinhTroCap(){
            return $this->soCon * 120000;
        }
        function tinhTienLuong(){
            return ($this->soSanPham  * self::donGiaSP);
        }
    }

    $hoTen = NULL;
    if(isset($_POST['tinh_toan'])){
        if(isset($_POST['loai_nv']) && ($_POST['loai_nv'])=="Văn phòng"){
            $vp=new NhanVienVanPhong();
            if(isset($_POST['ho_ten'])){
                $hoTen = $_POST['ho_ten'];
                $vp->setHoTen($hoTen);
            }     

            if(isset($_POST['so_con']) && is_numeric($_POST['so_con'])){
                $soCon = $_POST['so_con'];
                $vp->setSoCon($soCon);
            }     
            else{
                $soCon = 0;
                $vp->setSoCon($soCon);
            }
            if(isset($_POST['ngay_sinh'])){
                $ngaySinh = $_POST['ngay_sinh'];
                $vp->setNgaySinh($ngaySinh);
            }     
            else{
                $ngaySinh = date("d-m-Y");
                $vp->setNgaySinh($ngaySinh);
            }
            if(isset($_POST['ngay_vao_lam'])){
                $ngayVaoLam = $_POST['ngay_vao_lam'];
                $vp->setNgayVaoLam($ngayVaoLam);
            }     
            else{
                $ngayVaoLam = date("d-m-Y");
                $vp->setNgayVaoLam($ngayVaoLam);
            }
            $vp->setGioiTinh($_POST['gioi_tinh']);

            if(isset($_POST['he_so_luong']) && is_numeric($_POST['he_so_luong'])){
                $heSoLuong = $_POST['he_so_luong'];
                $vp->setHeSoLuong($heSoLuong);
            }     
            else{
                $heSoLuong = 1;
                $vp->setHeSoLuong($heSoLuong);
            }
            if(isset($_POST['so_ngay_vang']) && is_numeric($_POST['so_ngay_vang'])){
                $soNgayVang = $_POST['so_ngay_vang'];
                $vp->setSoNgayVang($soNgayVang);
            } 
            else{
                $soNgayVang = 0;
                $vp->setSoNgayVang($soNgayVang);
            }
                         
            $TienLuong = $vp->tinhTienLuong();
            $TroCap = $vp->tinhTroCap();
            $TienThuong = 0;
            $TienPhat = $vp->tinhTienPhat();
            $ThucLinh = $TienLuong + $TroCap + $TienThuong - $TienPhat;
        }
        
        if(isset($_POST['loai_nv']) && ($_POST['loai_nv'])=="Sản xuất"){
            $sx = new NhanVienSanXuat();

            if(isset($_POST['ho_ten'])){
                $hoTen = $_POST['ho_ten'];
                $sx->setHoTen($hoTen);
            }     
            //Số con
            if(isset($_POST['so_con']) && is_numeric($_POST['so_con'])){
                $soCon = $_POST['so_con'];
                $sx->setSoCon($soCon);
            }     
            else{
                $soCon = 0;
                $sx->setSoCon($soCon);
            }
            //Ngày sinh
            if(isset($_POST['ngay_sinh'])){
                $ngaySinh = $_POST['ngay_sinh'];
                $sx->setNgaySinh($ngaySinh);
            }     
            else{
                $ngaySinh = date("d-m-Y");
                $sx->setNgaySinh($ngaySinh);
            }
            //Ngày vào làm
            if(isset($_POST['ngay_vao_lam'])){
                $ngayVaoLam = $_POST['ngay_vao_lam'];
                $sx->setNgayVaoLam($ngayVaoLam);
            }     
            else{
                $ngayVaoLam = date("d-m-Y");
                $sx->setNgayVaoLam($ngayVaoLam);
            }
            //Giới tính
            $sx->setGioiTinh($_POST['gioi_tinh']);
            //Hệ số lương
            $heSoLuong = 1;

            if(isset($_POST['so_san_pham']) && is_numeric($_POST['so_san_pham'])){
                $soSanPham = $_POST['so_san_pham'];
                $sx->setSoSanPham($soSanPham);
            }     
            else{
                $soSanPham = 0;
                $sx->setSoSanPham($soSanPham);
            }
            //Checked loại nhân viên là Nhân viên sản xuất
            $TienLuong = $sx->tinhTienLuong();
            $TroCap = $sx->tinhTroCap();
            $TienThuong = $sx->tinhTienThuong();
            $TienPhat = 0;
            $ThucLinh = $TienLuong + $TroCap + $TienThuong - $TienPhat;
        }
    }
?>
<form action="" method ="post">
        <table>     
        <tr bgcolor="white">
            <td colspan="4" align="center"><h3><font color="black">QUẢN LÝ NHÂN VIÊN</font></h3></td>
        </tr> 
        <tr>
            <td>Họ Và Tên</td>
            <td>
                <input type="text "size="40" name="ho_ten" value="<?php echo $hoTen ?>">
            </td>

            <td>Số Con</td>
            <td>
                <input type="number" name="so_con" size="20"  min="0" value="<?php echo $soCon ?>">
            </td>
        </tr>    
        <tr>
            <td>Ngày Sinh</td>
            <td>
                <input type="date" name="ngay_sinh" size="40" value="<?php echo $ngaySinh ?>">
               
            </td>

            <td>Ngày Vào Làm</td>
            <td>
                <input type="date" name="ngay_vao_lam" size="40"  value="<?php echo $ngayVaoLam ?>">
            </td>
        </tr>
        <tr>
            <td width="50px" >Giới Tính</td>
            <td>
                 <input type="radio" name="gioi_tinh" value="Nam" >Nam

                <input type="radio" name="gioi_tinh" value="Nũ" >
                <?php if(isset($_POST['gioi_tinh'])&&($_POST['gioi_tinh'])=="Nữ") ?>
                Nữ
             </td>
            <td>Hệ Số Lương</td>
            <td >
                <input type="number" size="40" name="he_so_luong" value="<?php echo $heSoLuong ?>">
            </td>
        </tr>
        </tr>
                <td>Loại nhân viên</td>
                <td>
                    <input type="radio" name="loai_nv" value="Văn phòng" /> Văn phòng
                </td>          
                <td>
                    <input type="radio" name="loai_nv" value="Sản xuất" 
                    <?php if(isset($_POST['loai_nv'])&&($_POST['loai_nv'])=="Sản xuất") echo 'checked="checked"'?> /> Sản xuất
                </td> 
        </tr>
      
        <tr>
            <td></td>
            <td >
                Số Ngày vắng <input type="number" size="20" name="so_ngay_vang" value="<?php echo $soNgayVang?>">
            </td>

            <td colspan="2">
                Số sản phẩm <input type="number" size="20" name="so_san_pham" value="<?php echo $soSanPham?>">
            </td>
        </tr>   
        <tr style="background-color: white;">
           
            <th colspan="4">
                <input type="submit"   value="Tính Lương" name="tinh_toan" />
                <a href="../oop/" >Trở về</a>
            </th> 
        </tr>
        <tr>
            <td   >Tiền Lương</td>
            <td >
                <input type="number" disabled="disable"  size="40" name="tien_luong" value="<?php echo $TienLuong; ?>">
               
            </td>

            <td   >Trợ Cấp</td>
            <td >
                <input type="number"  disabled="disable" size="40" name="tro_cap" value="<?php echo $TroCap; ?>">
            </td>
        </tr>
        <tr>
            <td   >Tiền Thưởng</td>
            <td >
                <input type="number"disabled="disable"  size="40" name="tien_thuong" value="<?php echo $TienThuong; ?>">
            </td>

            <td   >Tiền Phạt</td>
            <td >
                <input type="number" disabled="disable"  size="40" name="tien_phat" value="<?php echo $TienPhat; ?>">
            </td>
        </tr>
        <th colspan="4">

           
                Thực Lĩnh<input type="number"disabled="disable" size="40" name="thuc_linh" value="<?php echo $ThucLinh; ?>">
           
        </th>
             
        
        </table> 
        </form>
</body>
</html>
</body>
</html>