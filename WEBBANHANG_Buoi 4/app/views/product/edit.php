<?php include 'app/views/shares/header.php'; ?> 

<!-- Link Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

<style>
  /* Global reset */
  body, html {
    height: 100%;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradient nền đẹp mắt */
    overflow-x: hidden;
  }

  /* Container */
  .container {
    max-width: 800px;
    margin: 40px auto;
    padding: 25px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 1;
  }

  h1 {
    text-align: center;
    color: #333;
    font-weight: 700;
    margin-bottom: 30px;
    font-size: 2rem;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  /* Alert for errors */
  .alert {
    margin-bottom: 20px;
    padding: 15px;
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 12px;
  }

  .form-group {
    margin-bottom: 25px;
  }

  label {
    font-weight: 600;
    color: #555;
    margin-bottom: 8px;
    display: block;
  }

  /* Input fields */
  input[type="text"], input[type="number"], textarea, select, input[type="file"] {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid #ddd;
    border-radius: 10px;
    background-color: #fafafa;
    font-size: 1.1rem;
    color: #333;
    transition: all 0.3s ease;
  }

  input[type="text"]:focus, input[type="number"]:focus, textarea:focus, select:focus {
    border-color: #2575fc; /* Màu xanh nổi bật khi focus */
    box-shadow: 0 0 15px rgba(37, 117, 252, 0.6);
    outline: none;
  }

  textarea {
    resize: vertical;
  }

  .form-group img {
    max-width: 100px;
    margin-top: 10px;
    display: block;
  }

  /* Submit Button */
  button {
    background-color: #2575fc;
    color: #fff;
    padding: 14px 20px;
    border: none;
    border-radius: 50px;
    font-size: 1.1rem;
    width: 100%;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  button:hover {
    background-color: #1e5bb5;
    box-shadow: 0 6px 15px rgba(30, 91, 181, 0.3);
  }

  button:active {
    transform: scale(0.98);
  }

  /* Secondary Button */
  .btn-secondary {
    background-color: #f1f1f1;
    border-radius: 50px;
    padding: 12px 25px;
    font-size: 1.1rem;
    color: #333;
    text-align: center;
    display: block;
    margin-top: 20px;
    width: 100%;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .btn-secondary:hover {
    background-color: #ddd;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .btn-secondary:active {
    transform: scale(0.98);
  }

  /* Custom form elements */
  select {
    padding: 12px 14px;
    font-size: 1.1rem;
    border-radius: 10px;
    background-color: #fafafa;
    border: 2px solid #ddd;
    transition: all 0.3s ease;
  }

  select:focus {
    border-color: #2575fc;
    box-shadow: 0 0 10px rgba(37, 117, 252, 0.4);
    outline: none;
  }

  input[type="file"] {
    padding: 10px;
    font-size: 1rem;
    color: #333;
  }

  /* Floating label effect */
  .form-group input:focus + label,
  .form-group select:focus + label,
  .form-group textarea:focus + label {
    font-size: 0.9rem;
    top: -10px;
    color: #2575fc;
    transition: all 0.3s ease;
  }

  /* Form focus animation */
  .form-group input:focus, 
  .form-group select:focus, 
  .form-group textarea:focus {
    box-shadow: 0 0 10px rgba(37, 117, 252, 0.6);
    border-color: #2575fc;
  }
</style>

<div class="container">
  <h1>Sửa sản phẩm</h1>

  <?php if (!empty($errors)): ?> 
      <div class="alert alert-danger"> 
          <ul> 
              <?php foreach ($errors as $error): ?> 
                  <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li> 
              <?php endforeach; ?> 
          </ul> 
      </div> 
  <?php endif; ?> 

  <form method="POST" action="/WEBBANHANG/Product/update" enctype="multipart/form-data" onsubmit="return validateForm();">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>"> 

    <div class="form-group">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required>
    </div>

    <div class="form-group">
        <label for="description">Mô tả:</label>
        <textarea id="description" name="description" class="form-control" required><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>

    <div class="form-group">
        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" class="form-control" step="0.01" value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" required>
    </div>

    <div class="form-group">
        <label for="category_id">Danh mục:</label>
        <select id="category_id" name="category_id" class="form-control" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category->id; ?>" <?php echo $category->id == $product->category_id ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="image">Hình ảnh:</label>
        <input type="file" id="image" name="image" class="form-control">
        <input type="hidden" name="existing_image" value="<?php echo $product->image; ?>">
        <?php if ($product->image): ?>
            <img src="/<?php echo $product->image; ?>" alt="Product Image">
        <?php endif; ?>
    </div>

    <button type="submit">Lưu thay đổi</button>
  </form>

  <a href="/WEBBANHANG/Product/list" class="btn btn-secondary">Quay lại danh sách sản phẩm</a>
</div>

<?php include 'app/views/shares/footer.php'; ?>
