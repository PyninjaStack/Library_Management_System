<div class="navbar navbar-inverse set-radius-zero" style=" border: none;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php">
                <img src="assets/img/logo.png" class="img-fluid" style="width: 200px; height: auto;" />
            </a>
        </div>
        <?php if ($_SESSION['login']) { ?>
            <div class="right-div" style="margin-top: 15px;">
                <a href="logout.php" class="btn btn-danger" style="background-color: #f44336; border: none;">LOG ME OUT</a>
            </div>
        <?php } ?>
    </div>
</div>
<!-- LOGO HEADER END-->
<?php if ($_SESSION['login']) { ?>
    <section class="menu-section" style="background-color: #e8f5e9; border-bottom: 5px solid #4CAF50;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active" style="color: #4CAF50;">DASHBOARD</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"
                                    style="color: #4CAF50;">Account <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My
                                            Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1"
                                            href="change-password.php">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="issued-books.php" style="color: #4CAF50;">Issued Books</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="menu-section" style="background-color: #e8f5e9; border-bottom: 5px solid #4CAF50;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="adminlogin.php" style="color: #4CAF50;">Admin Login</a></li>
                            <li><a href="signup.php" style="color: #4CAF50;">User Signup</a></li>
                            <li><a href="index.php" style="color: #4CAF50;">User Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>