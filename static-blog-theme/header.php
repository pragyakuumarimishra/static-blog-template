<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h2><a href="<?php echo home_url(); ?>">My Static Blog</a></h2>
        <button class="menu-toggle" aria-label="Toggle menu">&#9776;</button>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
        <button class="dark-mode-toggle" aria-label="Toggle dark mode">🌙</button>
    </header>
</body>
</html>
