<?php
	require_once('layout/header.php');
?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Sửa Nhân Viên</h3>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post">
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Tên Nhân Viên:</label>
						  <td><input type="text" class="form-control" value="<?php echo $dataID['TenNhanVien']?>" name="tenNV"></td>
						</div>
						<div class="form-group">
						  <label for="pwd">Địa Chỉ:</label>
						  <input type="text" class="form-control" value="<?php echo $dataID['DiaChi']?>" name="diachi">
						</div>

						<button class="btn btn-success"><input type="submit" name="SuaNV" value ="Lưu Nhân Viên" style="background: none; border: none; color: #fff;"></button>
					</div>
					<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
							<label for="usr">Số Điện Thoại:</label>
							<input type="text" class="form-control" value="<?php echo $dataID['SoDT']?>" name="SoDT" minlength="10" maxlength="10">
						</div>
						<div class="form-group">
							<label for="usr">Ảnh:</label>
							<!-- <input type="file" id="Image" name="anh" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"> -->
							<input type="file" value="<?php echo $dataID['Image']?>" name="anh" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
						</div>
						<div class="form-group">
							<label for="usr">Ngày Sinh:</label>
							<input type="date" class="form-control" value="<?php echo $dataID['NgaySinh']?>" name="ngaysinh">
						</div>
						<div class="form-group">
						  <label for="usr">Giới Tính:</label>
						  <select name="gioitinh" id="">
								<option value="Nam" <?php if ($dataID['GioiTinh'] == 'Nam') {
														echo ("selected");
													} ?>>Nam</option>
								<option value="Nữ" <?php if ($dataID['GioiTinh'] == 'Nữ') {
														echo ("selected");
													} ?>>Nữ</option>
							</select>
						</div>
						<div class="form-group">
							<label for="usr">Chức Vụ:</label>
							<input type="text" class="form-control" value="<?php echo $dataID['MaChucVu']?>" name="chucvu">
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>


	<!-- <form  method="post" >
		<table border="1" class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
					<td colspan="2" align="center">Cập Nhập nhân viên</td>
					
					<tr>
						<td >Tên nhân viên: </td>
						<td><input type="text" value="<?php echo $dataID['TenNhanVien']?>" name="tenNV"></td>
					</tr>

                    <tr>
						<td >Ngày sinh: </td>
						<td><input type="date" value="<?php echo $dataID['NgaySinh']?>" name="ngaysinh"></td>
					</tr>

                    <tr>
						<td >Giới tính: </td>
						<td><input type="text" value="<?php echo $dataID['GioiTinh']?>" name="gioitinh"></td>
					</tr>

                    <tr>
						<td >Địa chỉ: </td>
						<td><input type="text" value="<?php echo $dataID['DiaChi']?>" name="diachi"></td>
					</tr>

					<tr>
						<td>SĐT: </td>
						<td><input type="number" value="<?php echo $dataID['SoDT']?>" name="SoDT" minlength="10" maxlength="10"></td>
					</tr>
					<tr>
						<td>Ảnh: </td>
						<td><input type="text" value="<?php echo $dataID['Image']?>" name="anh"></td>
					</tr>

				<tr>
					<td>Chức vụ: </td>
					<td>
						<input type="text" value="<?php echo $dataID['MaChucVu']?>" name="chucvu">
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="SuaNV" value ="Cập Nhập"></td>
				    <td><input type="reset" value ="Reset"></td>
				</tr>
				</div>				
			</thead>
		</table>
	</form> -->
<?php
	require_once('layout/footer.php');
?>