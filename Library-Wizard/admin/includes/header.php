<div class="navbar navbar-inverse set-radius-zero" style="border: none;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php">
                <img src="assets/img/logo1.png" class="img-fluid" style="width: 250px; height: auto;" />
            </a>
        </div>

        <div class="right-div" style="margin-top: 15px;">
            <a href="logout.php" class="btn btn-danger" style="background-color: #f44336; border: none;">LOG ME OUT</a>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section" style="background-color: #e8f5e9; border-bottom: 5px solid #4CAF50;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="dashboard.php" class="menu-top-active" style="color: #4CAF50;">DASHBOARD</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"
                                style="color: #4CAF50;">Categories <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php">Add
                                        Category</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="manage-categories.php">Manage Categories</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"
                                style="color: #4CAF50;">Authors <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add-author.php">Add
                                        Author</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="manage-authors.php">Manage Authors</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"
                                style="color: #4CAF50;">Books <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.php">Add
                                        Book</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-books.php">Manage
                                        Books</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"
                                style="color: #4CAF50;">Issue Books <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.php">Issue New
                                        Book</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                        href="manage-issued-books.php">Manage Issued Books</a></li>
                            </ul>
                        </li>
                        <li><a href="reg-students.php" style="color: #4CAF50;">Reg Students</a></li>
                        <li><a href="change-password.php" style="color: #4CAF50;">Change Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>