<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gericht</title>
    <?php wp_head();?>
</head>

<body <?php body_class() ?>>
    <header>
        <div class="container container-header">
            <div class="header" id="header">
                <div class="menu-btn" id="headerMenuBtn">
                    <span class="menu-box">
                        <span class="menu-line"></span>
                        <span class="menu-line"></span>
                        <span class="menu-line"></span>
                        <span class="menu-line"></span>
                    </span>
                </div>
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
                </div>

                <nav class="menu-main" id="headerMenuMain">
                    <?php wp_nav_menu([
                    'theme_location' => 'header-main',
                    'container' => null,
                    'menu_class' => 'nav',
                    'menu_id' => 'nav'
                    ]); ?>
                </nav>

                <nav class="menu-right">
                    <?php wp_nav_menu([
                    'theme_location' => 'header-right',
                    'container' => null,
                    'menu_class' => 'nav',
                    'menu_id' => 'nav'
                    ]); ?>
                    <span class="header-nav-img">
                        <svg width="2" height="57" viewBox="0 0 2 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 0V57" stroke="url(#paint0_radial_572_128)"/>
                            <defs>
                            <radialGradient id="paint0_radial_572_128" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1.5 28.5) rotate(90) scale(28.5 0.5)">
                            <stop offset="0.588542" stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            </defs>
                        </svg>
                    </span>
                    <nav class="menu-right-small" >
                        <ul class="menu-right-small-items">
                            <li class="button-log-in">
                                <a class="button-log-in-link" href="<?php echo get_permalink(22); ?>">
                                    <svg class="svg-icon button-log-in-img" style="width: 1em; height: 1em;vertical-align: middle;fill: #FFFFFF;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M523.085714 20.571429c-174.285714-0.457143-327.657143 89.714286-415.314285 225.942857-3.885714 6.057143 0.457143 14.057143 7.657142 14.057143h80.342858c5.485714 0 10.628571-2.4 14.057142-6.628572 8-9.714286 16.571429-19.085714 25.6-28 37.257143-37.142857 80.571429-66.4 128.8-86.742857 49.828571-21.028571 102.857143-31.771429 157.6-31.771429 54.742857 0 107.771429 10.628571 157.6 31.771429 48.228571 20.342857 91.542857 49.6 128.8 86.742857 37.257143 37.142857 66.4 80.457143 86.857143 128.571429C916.228571 404.342857 926.857143 457.257143 926.857143 512c0 54.742857-10.742857 107.657143-31.771429 157.485714-20.342857 48.114286-49.6 91.428571-86.857143 128.571429s-80.571429 66.4-128.8 86.742857A403.2 403.2 0 0 1 521.828571 916.571429c-54.742857 0-107.771429-10.742857-157.6-31.771429A404.388571 404.388571 0 0 1 235.428571 798.057143c-9.028571-9.028571-17.485714-18.4-25.6-28-3.428571-4.228571-8.685714-6.628571-14.057142-6.628572H115.428571c-7.2 0-11.657143 8-7.657142 14.057143C195.314286 913.371429 348 1003.428571 521.828571 1003.428571c269.942857 0 489.142857-217.257143 491.885715-486.4C1016.457143 243.542857 796.914286 21.257143 523.085714 20.571429zM378.308571 640v-86.857143h-358.857142c-5.028571 0-9.142857-4.114286-9.142858-9.142857v-64c0-5.028571 4.114286-9.142857 9.142858-9.142857h358.857142v-86.857143c0-7.657143 8.914286-12 14.857143-7.2l162.171429 128a9.142857 9.142857 0 0 1 0 14.4l-162.171429 128c-5.942857 4.685714-14.857143 0.457143-14.857143-7.2z"  /></svg>
                                </a>
                            </li>
                            <li class="button-book-a-table">
                                <a class="button-book-a-table-link" href="<?php echo get_permalink(24); ?>">
                                    <img class="button-book-a-table-img" src="<?php echo get_template_directory_uri() . '/assets/images/header/bookatable.png' ?>" alt="icon">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </nav>
            </div>
        </div>
    </header>
    <div class="background">
        <img class="background-img" src="<?php echo get_template_directory_uri() . '/assets/images/body/Vector1514.svg' ?>" style=" max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); height: 100%" alt="">


