<?php
$active_page_name = '';
$page_name = '';
$pageName = basename($_SERVER['PHP_SELF']);
//echo basename($_SERVER['PHP_SELF']);

if ($pageName === 'index.php') {
    $active_index_name = 'current';
} else if ($pageName === 'about.php') {
    $active_about_name = 'current';

    $page_name = 'service page';
} else if ($pageName === 'services.php') {
    $active_services_name = 'current';
} else if ($pageName === 'contact.php') {
    $active_contact_name = 'current';
} else {
    $active_page_name = '';
}

?>
            
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__left">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="<?php echo $active_index_name ?>">
                                            <a href="index">Home </a>
                                           
                                        </li>
                                        <li class="<?php echo $active_about_name ?>">
                                            <a href="about">About </a>
                                        </li>
                                      
                                        <li class="<?php echo $active_services_name ?>">
                                            <a href="services">Services </a>
                                        </li>


                                        <li class="<?php echo $active_contact_name ?>">
                                            <a href="contact">Contact </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </nav>