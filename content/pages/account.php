


<h1>my account</h1>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                    <i class="bi-bootstrap fs-1"></i>
                </a>
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                            <i class="bi-house fs-1"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                            <i class="bi-speedometer2 fs-1"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                            <i class="bi-table fs-1"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                            <i class="bi-heart fs-1"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                            <i class="bi-people fs-1"></i>
                        </a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle h2"></i>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>




<?php include('db/getUserById.php')?>


<div class="row">
    <div class="col">
        <form action="db/updateUser.php" method="post">
            <div class="mb-3">
                <label for="form-username" class="form-label">Username</label>
                <input type="text" class="form-control" id="form-username" name="form-username" value="<?=$row['username']?>" required readonly>
            </div>
            <div class="mb-3">
                <label for="form-password" class="form-label">Password</label>
                <input type="password" class="form-control" id="form-password" name="form-password" value="*********" readonly>
            </div>
            <div class="mb-3">
                <label for="form-name" class="form-label">Name</label>
                <input type="text" class="form-control" id="form-name" name="form-name" value="<?=$row['name']?>" required readonly>
            </div>
            <div class="mb-3">
                <label for="form-email" class="form-label">Email</label>
                <input type="email" class="form-control" id="form-email" name="form-email" value="<?=$row['email']?>" required readonly>
            </div>
           
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <button id="account_btn_edit" type="button" class="btn btn-primary" onclick="account_edit()">Edit</button>
                        <button id="account_btn_cancel" type="button" class="btn btn-danger" onclick="account_cancel()">Cancel</button>
                        <button id="account_btn_save" type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                    <div class="col text-end">
                        <button id="account_btn_delete" type="button" class="btn btn-danger" onclick="window.location.replace('db/deleteUser.php')">Delete Account</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col">
        <form action="db/uploadImg.php" method="post" enctype="multipart/form-data">
        <?php if($row['photo']=='') { ?>
            <img class="w-50" src="img/users/user_img.png" alt="" style="width: 50px;">
        <?php }else{ ?>
            <img class="w-50" src="img/users/<?=$row['photo']?>" alt="" style="with: 50px">
        <?php } ?>
            <input type="file" name="form-img" id="form-img">
            <button class="btn btn-info" type="submit">Edit</button>
        </form>
    </div>