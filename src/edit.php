<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Chỉnh sửa thông tin người hiến máu</title>
  </head>
  <body>
    <header>
        <div class="container-fluid border-bottom border-1 border-dark">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Quản trị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản lý tài khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Chỉnh sửa thông tin người hiến máu</h2>
                    <form action="process-edit.php" method="post">
                        <div class="row mb-3">
                            <label for="txtHoTen" class="col-sm-2 col-form-label">Họ và tên</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtHoTen" name="txtHoTen">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtgioitinh" class="col-sm-2 col-form-label">Giới tính</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtgioitinh" name="txtgioitinh">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txttuoi" class="col-sm-2 col-form-label">Tuổi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txttuoi" name="txttuoi">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="txtnhommau" class="col-sm-2 col-form-label">Nhóm máu</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtnhommau" name="txtnhommau">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="txtndk" class="col-sm-2 col-form-label">Ngày đăng ký</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtndk" name="txtndk">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtMobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtMobile" name="txtMobile">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" name="btnSave">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
