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

<nav class="main-menu main-menu-two clearfix">
    <div class="main-menu-two__wrapper clearfix">
        <div class="container">
            <div class="main-menu-two__wrapper-inner clearfix">
                <div class="main-menu-two__left">
                    <div class="main-menu-two__logo">
                        <a href="index"><img src="assets/images/resources/logo-1.png" alt=""></a>
                    </div>
                    <div class="main-menu-two__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="dropdown <?php echo $active_index_name ?> megamenu">
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
                <div class="main-menu-two__right">
                    <div class="main-menu-two__search-call">
                        <div class="main-menu-two__call">
                            <div class="main-menu-two__call-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="main-menu-two__call-content">
                                <p class="main-menu-two__call-sub-title">Call Anytime</p>
                                <h4 class="main-menu-two__call-number"><a href="tel:+2348100965509">+234
                                        810 096 5509</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>