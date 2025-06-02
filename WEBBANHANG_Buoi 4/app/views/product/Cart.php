<?php include 'app/views/shares/header.php'; ?> 

<!-- Link Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

<style>
  /* Background gradient cho trang giỏ hàng */
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    margin: 0;
    height: 100%;
  }

  /* Container chính cho giỏ hàng */
  .container {
    max-width: 800px;
    margin: 50px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    z-index: 1;
  }

  h1 {
    text-align: center;
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
  }

  /* Phần tử sản phẩm trong giỏ hàng */
  .list-group-item {
    display: flex;
    justify-content: space-between;
    padding: 15px;
    margin-bottom: 20px;
    background-color: #fafafa;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }

  .list-group-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  }

  .list-group-item h2 {
    font-size: 1.5rem;
    color: #333;
    font-weight: 600;
  }

  .list-group-item p {
    color: #666;
    font-size: 1.1rem;
    margin: 8px 0;
  }

  /* Hình ảnh sản phẩm */
  .list-group-item img {
    max-width: 100px;
    border-radius: 8px;
    margin-right: 20px;
  }

  /* Nút "Tiếp tục mua sắm" và "Thanh toán" */
  .btn {
    background-color: #2575fc;
    color: #fff;
    padding: 14px 30px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 50px;
    text-align: center;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }

  .btn:hover {
    background-color: #1e5bb5;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    transform: translateY(-3px);
  }

  .btn:active {
    transform: translateY(1px);
  }

  /* Màu sắc thông báo khi giỏ hàng trống */
  .empty-cart {
    text-align: center;
    font-size: 1.2rem;
    color: #ff6f61;
    font-weight: 600;
  }

  /* Footer */
  .footer {
    text-align: center;
    color: #aaa;
    font-size: 0.9rem;
    margin-top: 50px;
  }
</style>

<div class="container">
  <h1>Giỏ hàng</h1>

  <?php if (!empty($cart)): ?> 
    <ul class="list-group"> 
        <?php foreach ($cart as $id => $item): ?> 
            <li class="list-group-item"> 
                <div>
                    <h2><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h2> 
                    <?php if ($item['image']): ?> 
                        <img src="/webbanhang/<?php echo $item['image']; ?>" alt="Product Image">
                    <?php endif; ?> 
                    <p>Giá: <?php echo htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8'); ?> VND</p> 
                    <p>Số lượng: <?php echo htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8'); ?></p> 
                </div>
            </li> 
        <?php endforeach; ?> 
    </ul> 
  <?php else: ?> 
    <p class="empty-cart">Giỏ hàng của bạn đang trống.</p> 
  <?php endif; ?> 

  <a href="/webbanhang/Product" class="btn">Tiếp tục mua sắm</a> 
  <a href="/webbanhang/Product/checkout" class="btn">Thanh Toán</a> 
</div>

<?php include 'app/views/shares/footer.php'; ?>
