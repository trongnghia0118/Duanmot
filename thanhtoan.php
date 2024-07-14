<!DOCTYPE html>
<html>
<head>
    <title>Trang Thanh Toán</title>
</head>
<body>
    <h2>Thanh toán</h2>
    <h3>Giày bạn đã chọn:</h3>
    <img src="link-to-your-shoe-image" alt="Giày">
    <p>Tên giày: <span id="shoe-name"></span></p>
    <p>Giá: <span id="shoe-price"></span></p>
    <form>
        <label for="fname">Tên đầy đủ:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="payment-method">Phương thức thanh toán:</label><br>
        <input type="radio" id="cash" name="payment-method" value="cash">
        <label for="cash">Tiền mặt</label><br>
        <input type="radio" id="bank-transfer" name="payment-method" value="bank-transfer">
        <label for="bank-transfer">Chuyển khoản</label><br>
        <input type="submit" value="Thanh toán">
    </form>
</body>
</html>
