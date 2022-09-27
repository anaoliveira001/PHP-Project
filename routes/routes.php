<?php
    if(isset($_GET['p'])){
        $p = $_GET['p'];
        if($p == 'home')
            include('content/pages/home.php');
        else if($p == 'contact')
            include('content/pages/contact.php');
        else if($p == 'blog' )
            include('content/pages/blog.php');
        else if($p == 'login' && empty($_SESSION['username']))
            include('content/pages/login.php');
        else if($p == 'register' && empty($_SESSION['username']))
            include('content/pages/register.php');
        else if($p == 'account' && !empty($_SESSION['username']))
            include('content/pages/account.php');
        else if($p == 'administration' && !empty($_SESSION['type']) && $_SESSION['type']==1)
            include('content/pages/administration.php');
        else if($p == 'logout' && !empty($_SESSION['username']))
            include('content/pages/logout.php');
        else
            include('content/pages/404.php');
    }else
        include('content/pages/home.php');
?>






