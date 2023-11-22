<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Your Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5">
        <form action="2.4_xuly.php" id="form1" name="ThiDH" method="post">
            <h1 class="text-center">NHẬP THÔNG TIN</h1>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="hoten">Họ tên</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="hoten" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="diachi">Địa chỉ</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="diachi" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="sdt">Số điện thoại</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="sdt" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="email">Email</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="email" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="gioitinh">Giới tính</label>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="nam" name="gioitinh" value="Nam">
                        <label class="form-check-label" for="nam">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="nu" name="gioitinh" value="Nữ">
                        <label class="form-check-label" for="nu">Nữ</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="quoctich">Quốc tịch</label>
                <div class="col-sm-9">
                    <select class="form-select" name="quoctich" id="inlineFormCustomSelectPref">
                        <option selected>--Việt Nam--</option>
                        <option value="American">American</option>
                        <option value="Thailan">Thailan</option>
                        <option value="Korean">Korean</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="monhoc">Môn Học</label>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="monhoc[]" type="checkbox" id="php" value="PHP">
                        <label class="form-check-label" for="php">PHP</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="monhoc[]" type="checkbox" id="csharp" value="C#">
                        <label class="form-check-label" for="csharp">C#</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="monhoc[]" type="checkbox" id="python" value="Python">
                        <label class="form-check-label" for="python">Python </label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="ghichu">Ghi chú</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="ghichu" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-9 offset-3">
                    <button type="submit" class="btn btn-danger px-5" name="tinh">Gửi</button>
                    <button type="reset" class="btn btn-danger px-5" name="">Hủy</button>
                    <a href="../form/" class="btn btn-primary px-5 offset-4">Trở về</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Chèn Bootstrap JS và Popper.js từ CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
