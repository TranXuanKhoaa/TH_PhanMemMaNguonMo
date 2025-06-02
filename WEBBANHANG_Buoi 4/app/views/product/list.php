<?php include 'app/views/shares/header.php'; ?>

<!-- Page Title -->
<h1 class="text-center mb-5 text-white">Danh sách sản phẩm</h1>

<!-- Add New Product Button -->
<a href="/webbanhang/Product/add" class="btn btn-success mb-4 px-4 py-3 rounded-pill shadow-lg text-white fw-bold">
    <i class="fas fa-plus me-2"></i> Thêm sản phẩm mới
</a>

<!-- Product List -->
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php foreach ($products as $product): ?>
        <div class="col">
            <div class="card shadow-sm border-0 rounded-lg bg-light">
                <div class="card-body">
                    <!-- Product Name -->
                    <h5 class="card-title text-center">
                        <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="text-dark text-decoration-none">
                            <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    </h5>
                    
                    <!-- Product Image -->
                    <?php if ($product->image): ?>
                        <img src="/webbanhang/<?php echo $product->image; ?>" alt="Product Image" class="card-img-top rounded-3" style="max-height: 200px; object-fit: cover;">
                    <?php endif; ?>

                    <!-- Product Description -->
                    <p class="card-text text-muted mt-2">
                        <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>
                    </p>

                    <!-- Product Price -->
                    <p class="text-primary fw-bold">Giá: <?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?> VND</p>

                    <!-- Product Category -->
                    <p class="text-secondary">Danh mục: <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></p>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-between mt-3">
                        <div class="d-flex gap-2">
                            <?php if (SessionHelper::isAdmin()): ?>
                                <!-- Edit Button -->
                                <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" class="btn btn-warning btn-sm px-3 rounded-pill shadow-sm text-white">
                                    <i class="fas fa-edit"></i> Sửa
                                </a>

                                <!-- Delete Button -->
                                <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" class="btn btn-danger btn-sm px-3 rounded-pill shadow-sm">
                                    <i class="fas fa-trash"></i> Xóa
                                </a>
                            <?php endif; ?>

                            <!-- Add to Cart Button -->
                            <a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" class="btn btn-primary btn-sm px-3 rounded-pill shadow-sm">
                                <i class="fas fa-cart-plus"></i> Thêm vào giỏ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'app/views/shares/footer.php'; ?>

<!-- Additional Styles -->
<style>
    body {
        background: linear-gradient(135deg, #667eea, #764ba2);
        font-family: 'Poppins', sans-serif;
    }
    h1 {
        font-size: 2.5rem;
        color: #fff;
        font-weight: 600;
        text-transform: uppercase;
    }
    .btn {
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }
    .card {
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    .card-body {
        padding: 20px;
    }
    .card-img-top {
        border-radius: 12px;
        object-fit: cover;
    }
    .row-cols-1 {
        margin-bottom: 30px;
    }
    .text-muted {
        font-size: 0.9rem;
    }
    .text-primary {
        color: #5c6bc0;
    }
    .text-secondary {
        color: #616161;
    }
    .gap-2 {
        gap: 10px;
    }
    .shadow-sm {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    .rounded-pill {
        border-radius: 50px;
    }
    .btn-warning,
    .btn-danger,
    .btn-primary {
        transition: all 0.3s ease;
    }
    .btn-warning:hover {
        background-color: #ffb74d;
    }
    .btn-danger:hover {
        background-color: #e57373;
    }
    .btn-primary:hover {
        background-color: #3b5998;
    }
</style>
