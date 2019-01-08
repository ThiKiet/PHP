<?php
// Kết nối database tintuc
 $connect = new mysqli('localhost', 'root', '', 'db2');

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $connect->connect_error);
    exit();
}
mysqli_set_charset($connect,"utf8");

//Lấy dữ liệu từ view.php bằng phương thức GET.
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql     = "SELECT * FROM products WHERE id='$id'";
    $ket_qua = $connect->query($sql);

    while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
        $product_name       = $row['product_name'];
        $price        = $row['price'];
        $quantity = $row['quantity'];
        $category_id     = $row['category_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Truyền dữ liệu vào form. -->
        <center>
            <form action="process.php" method="post" enctype="multipart/form-data" style="border: 1px solid red; width: 350px;">
                <legend>UPDATE SẢN PHẨM</legend>
            
                <div class="form-group" style="width: 300px;">
                    <label for="">Bạn đang chỉnh sửa dòng có ID = </label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>"><?php echo $id; ?>
                    <br>
                    <label for="">TÊN SẢN PHẨM</label>
                    <input type="text" name="product_name" class="form-control" value="<?php echo $product_name; ?>">
                    <br>
                    <label for="">GIÁ</label>
                    <input type="number" name="price" class="form-control" value="<?php echo $price; ?>">
                    <br>
                    <label for="">SỐ LƯỢNG</label>
                    <input type="number" name="quantity" class="form-control" value="<?php echo $quantity; ?>">
                    <br>
                    <label for="">LOẠI</label> 
                    <input type="number" name="category_id" class="form-control" value="<?php echo $category_id; ?>">
                </div>
            
                <button type="submit" class="btn btn-danger">Gửi</button>

            </form>
        </center>
    </body>
</html>

<?php 
        } //Đóng vòng lặp while.
    } //Đóng câu lệnh if.

    //Đóng kết nối database tintuc
    $connect->close();
?>