<?php include 'app/views/shares/header.php'; ?>

<!-- Error messages display -->
<?php
if (isset($errors)) {
    echo "<ul class='text-center text-danger mb-4'>";
    foreach ($errors as $err) {
        echo "<li>$err</li>";
    }
    echo "</ul>";
}
?>

<!-- Registration Form -->
<div class="card-body p-5 text-center">
    <form class="user" action="/webbanhang/account/save" method="post">
        <h2 class="fw-bold mb-4 text-white">Create an Account</h2>
        <p class="text-white-50 mb-5">Please fill in the details to register!</p>

        <!-- Username & Fullname Row -->
        <div class="form-group row mb-4">
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Full Name" required>
            </div>
        </div>

        <!-- Password & Confirm Password Row -->
        <div class="form-group row mb-4">
            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
            </div>
        </div>

        <!-- Register Button -->
        <div class="form-group text-center">
            <button class="btn btn-primary btn-lg px-5 py-3 rounded-pill text-uppercase">Register</button>
        </div>
    </form>
</div>

<?php include 'app/views/shares/footer.php'; ?>

<!-- Additional Styles -->
<style>
    body {
        background: linear-gradient(135deg, #667eea, #764ba2);
        font-family: 'Poppins', sans-serif;
    }
    .card-body {
        background: rgba(0, 0, 0, 0.8);
        border-radius: 1.5rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    }
    h2 {
        color: #fff;
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 20px;
    }
    p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 1.1rem;
    }
    .form-control-user {
        border-radius: 12px;
        padding: 14px 20px;
        font-size: 1rem;
        background: rgba(255, 255, 255, 0.1);
        border: 1.5px solid rgba(255, 255, 255, 0.2);
        color: #fff;
        transition: all 0.3s ease;
    }
    .form-control-user::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }
    .form-control-user:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: #667eea;
        box-shadow: 0 0 8px rgba(102, 126, 234, 0.5);
        outline: none;
    }
    .form-group.row .col-sm-6 {
        margin-bottom: 15px;
    }
    .btn-primary {
        background: linear-gradient(45deg, #667eea, #764ba2);
        border: none;
        font-weight: 600;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        background: linear-gradient(45deg, #5563c1, #5a40a4);
        box-shadow: 0 4px 10px rgba(85, 99, 193, 0.6);
    }
    .text-danger {
        font-size: 1rem;
        margin-bottom: 10px;
    }
    .text-danger li {
        list-style-type: none;
        margin: 5px 0;
    }
    @media (max-width: 767px) {
        .form-group.row .col-sm-6 {
            padding-right: 0;
            padding-left: 0;
        }
    }
</style>
