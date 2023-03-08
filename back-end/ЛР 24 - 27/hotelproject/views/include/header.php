<header class="header">
            <div class="header_container _container">
                <div class="header_menu menu">
                    <div class="menu_icon">
                        <span></span>
                    </div>
                    <nav class="menu_body">
                        <ul class="menu_list">
                        <li><a href="<?php echo BASE_URL ?>" class="header_logo"><img src="icons/icons-header/header-logo.svg" alt="Logo"></a></li>
                        <li><a href="index.php#about_block" class="menu_link">О нас</a></li>
                        <li><a href="<?php echo BASE_URL . "rooms.php"?>" class="menu_link">Апартаменты</a></li>
                        <li><a href="<?php echo BASE_URL . "reviews.php"?>" class="menu_link">Отзывы</a></li>
                        <li><a href="index.php#contacts_block" class="menu_link">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <li class="user-menu">
                <?php if (isset($_SESSION['id'])): ?>
                    <div class="header_logo-user"> <img src="icons/icons-header/user.svg" alt="User">
                    <?php echo $_SESSION['login']; ?>
                </div>
                    <ul class="user-link">

                <?php if ($_SESSION['admin']): ?>
                        <li><a href="apartments.php">Админ панель</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo BASE_URL . "logout.php" ?>">Выход</a></li>
                    </ul>
                    <?php else: ?>
                         <img src="icons/icons-header/user.svg" alt="User">
                    <ul class="user-link">
                        <li><a href="<?php echo BASE_URL . "authorization.php" ?>">Войти</a></li>
                        <li><a href="<?php echo BASE_URL . "registration.php" ?>">Регистрация</a></li>
                    </ul>
                <?php endif; ?>
               
                
                </li>
            </div>
        </header>