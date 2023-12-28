<!doctype html>
<html lang="en">

<head>
    <title>quan ly san pham</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../QLsanPham/list-product.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .muc-con {
        height: 100px;
    }

    .right {
        width: 1480px;
    }

    .td {
        width: 1480px
    }
</style>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
    require_once '../connect.php';
    session_start();

    // if (!isset($_SESSION['username'])) {
    //     header("location:../QLusers/dangnhap.php");
    //     die;
    // }
    // if (isset($_SESSION['username'], $_SESSION['password'])) {
    //     $username = $_SESSION['username'];
    //     $password = $_SESSION['password'];
    //     if (time() - $_SESSION['login_time_stamp'] > 600) {
    //         session_destroy();
    //         header('location:dangnhap.php');
    //     }
    // }
    ?>
    <div class="wrapper">
        <header>
            <div class="title-adm">
                <h3>Xin chào</h3>
            </div>
            <div class="product-log">
                <nav>
                    <ul id="main">
                        <li><a href="../khachHang/Trang-chu.php"><i class="fas fa-home"></i> Trang chủ</a></li>
                        <li><a href="../QLusers/dangnhap.php"><i class="fas fa-power-off"></i> Đăng xuất</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="content">
            <div class="right">
                <?php
                $sql = "select * from orderschitiet";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $orders = $stmt->fetchAll();

                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $date = date("Y-m-d H:i:s", time());
                ?>

                <div class="td">Giỏ hàng của ban </div>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product Id</th>
                            <th>Product Quantity</th>
                            <th>Price</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Date-order</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $o) : ?>
                            <tr>
                                <td class="name"><?= $o['maHD'] ?></td>
                                <td class="sl"><?= $o['productId']  ?></td>
                                <td class="sl"><?= $o['soLuong']  ?></td>
                                <td class="sl"><?= $o['donGia']  ?></td>
                                <td class="sl"><?= $o['phone']  ?></td>
                                <td class="sl"><?= $o['address']  ?></td>
                                <td class="sl"><?= $o['dateoder']  ?></td>
                                <td class="sl"> <img src="../QLsanPham/img/<?= $o['img']  ?>" alt="" width="120px"> </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>

</html>