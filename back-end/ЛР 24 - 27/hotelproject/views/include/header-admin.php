<header class="header">
            <div class="header_container _container">
                <div class="header_menu menu">
                    <div class="menu_icon">
                        <span></span>
                    </div>    
                    <nav class="menu_body">
                        <ul class="menu_list">
                        <li><a href="<?php echo BASE_URL ?>" class="header_logo"><img src="icons/icons-header/header-logo.svg" alt="Logo"></a></li>
                        </ul>
                    </nav>   
                    </div>     
                <li class="user-menu">
    
                    <a href="authorization.php" class="header_logo-user"> <img src="icons/icons-header/user.svg" alt="User">
                    <?php echo $_SESSION['login']; ?>
                    </a>
                    <ul class="user-link">
                        <li><a href="<?php echo BASE_URL . "logout.php" ?>">Выход</a></li>
                    </ul>
      
                </li>
            
        </header>