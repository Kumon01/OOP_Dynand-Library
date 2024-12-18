   <?php 
   if (!defined('SECURE_ACCESS')){
    DIE('Direct access not pemitted');
}
// if (isset($_SESSION['is_auth']) == false) {
//     header("location: /login");
// }
   include('templates/header.php')?>
   <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <a href="/"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Registration</h3>
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success text-center">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif ?>
                <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger text-center">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif ?>
                <form method="POST" action="/register">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="text" 
                        class="form-control" 
                        placeholder="Full Name"
                        name="name"
                        value="<?= isset($_SESSION['name']) ? $_SESSION['name'] : "" ?>">
                        
                    </div>
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                        <input type="text" 
                        class="form-control" 
                        placeholder="Username"
                        name="username"
                        value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : "" ?>">
                        
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                        <input type="password" 
                        class="form-control rounded-end" 
                        placeholder="Password"
                        name=password>
                        <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                    </div>
                    <div class="d-flex justify-content-between mb-25">
                        <div class="form-check">
                            <input class="form-check-input" 
                            type="checkbox" 
                            value="" 
                            id="loginCheckbox">
                            <label class="form-check-label text-white" for="loginCheckbox">
                                I agree <a href="#" class="text-white text-decoration-underline">Terms & Policy</a>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 login-btn">Sign up</button>
                </form>
            </div>
        </div>

        <?include('templates/footer.php')?>