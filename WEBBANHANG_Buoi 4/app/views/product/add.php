<?php include 'app/views/shares/header.php'; ?> 

<!-- Link Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

<style>
  /* Background gradient nhẹ nhàng */
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    margin: 0;
    height: 100%;
  }

  .container {
    max-width: 800px;
    margin: 50px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
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

  /* Cải tiến form */
  .form-group {
    margin-bottom: 25px;
  }

  label {
    font-weight: 600;
    color: #444;
  }

  .form-control {
    width: 100%;
    padding: 12px 18px;
    border-radius: 10px;
    border: 2px solid #ddd;
    background: #f7f7f7;
    transition: all 0.3s ease;
    font-size: 1.1rem;
  }

  .form-control:focus {
    border-color: #6a11cb;
    box-shadow: 0 0 5px rgba(106, 17, 203, 0.6);
    outline: none;
  }

  /* Hiệu ứng nút bấm */
  button.btn-primary {
    background-color: #2575fc;
    color: #fff;
    padding: 14px 30px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 50px;
    border: none;
    width: 100%;
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
  }

  button.btn-primary:hover {
    background-color: #1e5bb5;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

  button.btn-primary:active {
    transform: scale(0.98);
  }

  /* Hiệu ứng nút "Quay lại danh sách sản phẩm" */
  .btn-secondary {
    background-color: #aaa;
    color: #fff;
    padding: 12px 20px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
    width: 100%;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
  }

  .btn-secondary:hover {
    background-color: #888;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

  .btn-secondary:active {
    transform: scale(0.98);
  }

  /* Hiệu ứng lỗi */
  .alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
    padding: 20px;
    margin-bottom: 25px;
    border-radius: 8px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  }

  .alert-danger ul {
    margin: 0;
    padding-left: 20px;
  }

  .alert-danger li {
    list-style-type: none;
    font-size: 1rem;
  }

  /* Cải tiến các phần tử trong form */
  textarea.form-control {
    height: 120px;
  }
</style>

<div class="container">
  <h1>Thêm sản phẩm mới</h1>

  <?php if (!empty($errors)): ?> 
    <div class="alert alert-danger"> 
        <ul> 
            <?php foreach ($errors as $error): ?> 
                <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li> 
            <?php endforeach; ?> 
        </ul> 
    </div> 
  <?php endif; ?> 

  <form method="POST" action="/WEBBANHANG/Product/save" enctype="multipart/form-data" onsubmit="return validateForm();">
    <div class="form-group">
      <label for="name">Tên sản phẩm:</label>
      <input type="text" id="name" name="name" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="description">Mô tả:</label>
      <textarea id="description" name="description" class="form-control" required></textarea>
    </div>

    <div class="form-group">
      <label for="price">Giá:</label>
      <input type="number" id="price" name="price" class="form-control" step="0.01" required>
    </div>

    <div class="form-group">
      <label for="category_id">Danh mục:</label>
      <select id="category_id" name="category_id" class="form-control" required>
        <?php foreach ($categories as $category): ?> 
          <option value="<?php echo $category->id; ?>"><?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group">
      <label for="image">Hình ảnh:</label>
      <input type="file" id="image" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
  </form>

  <a href="/WEBBANHANG/Product/list" class="btn btn-secondary mt-2">Quay lại danh sách sản phẩm</a>
</div>

<?php include 'app/views/shares/footer.php'; ?>
