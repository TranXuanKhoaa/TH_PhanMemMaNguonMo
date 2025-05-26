<?php include 'app/views/shares/header.php'; ?>

<div class="container py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5 fw-bold text-primary">
            <i class="fas fa-edit me-2"></i>Sửa sản phẩm
        </h1>
        <a href="/WEBBANHANG/Product/list" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Quay lại
        </a>
    </div>

    <!-- Error messages -->
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <ul class="mb-0">
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- Edit Form -->
    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="/WEBBANHANG/Product/update" enctype="multipart/form-data" onsubmit="return validateForm();">
                <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                
                <div class="mb-3">
                    <label for="name" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" 
                           value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Mô tả</label>
                    <textarea class="form-control" id="description" name="description" rows="3" 
                              required><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Giá</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="price" name="price" step="0.01" 
                               value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" required>
                        <span class="input-group-text">₫</span>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="category_id" class="form-label">Danh mục</label>
                    <select class="form-select" id="category_id" name="category_id" required>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>" <?php echo $category->id == $product->category_id ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="image" class="form-label">Hình ảnh</label>
                    <input class="form-control" type="file" id="image" name="image">
                    <input type="hidden" name="existing_image" value="<?php echo $product->image; ?>">
                    
                    <?php if ($product->image): ?>
                        <div class="mt-3">
                            <p class="mb-1">Ảnh hiện tại:</p>
                            <img src="/<?php echo $product->image; ?>" 
                                 alt="Product Image" 
                                 class="img-thumbnail" 
                                 style="max-width: 200px;">
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="fas fa-save me-1"></i> Lưu thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>