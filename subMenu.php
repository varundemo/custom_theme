<?php
class subMenu extends Walker_Nav_Menu {
    function end_el(&$output, $item, $depth=0, $args=array()) {
        // echo "<pre>";
        // print_r($args);

        // die("end menu");

    if( 'Portfolio' == $item->title ){
        // echo "<pre>";
        // print_r($item);
        // die();
        $output .= '<div class="dropdown-menu dropdown-megamenu">
                                            <ul class="megamenu">
                                                <li>
                                                    <ul class="dropdown-submenu clearfix">
                                                        <li class="submenu-heading">Development</li>
                                                        <li><a href="https://technisun.com/service/php-development">PHP</a></li>
                                                        <li><a href="https://technisun.com/service/node.js-development">Node.JS</a></li>
                                                        <li><a href="https://technisun.com/service/asp.net-development">ASP.Net</a></li>
                                                        <li><a href="https://technisun.com/service/laravel-development">Laravel</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-submenu clearfix">
                                                        <li class="submenu-heading">Designing</li>
                                                        <li><a href="https://technisun.com/service/ui-ux-designing">UI &amp; UX</a></li>
                                                        <li><a href="https://technisun.com/service/website-designing">Website</a></li>
                                                        <li><a href="https://technisun.com/service/responsive-designing">Responsive</a></li>
                                                        <li><a href="https://technisun.com/service/parallax-designing">Parallax</a></li>
                                                        <li><a href="https://technisun.com/service/graphic-designing">Graphic</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-submenu clearfix">
                                                        <li class="submenu-heading">Digital Marketing</li>
                                                        <li><a href="https://technisun.com/service/seo">SEO</a></li>
                                                        <li><a href="https://technisun.com/service/smo-smm">SMO/SMM</a></li>
                                                        <li><a href="https://technisun.com/service/pay-per-click">Pay Per Click</a></li>
                                                        <li><a href="https://technisun.com/service/reputation-management">Reputation Management</a></li>
                                                        <li><a href="https://technisun.com/service/email-marketing">E-mail Marketing</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-submenu clearfix">
                                                        <li class="submenu-heading">Mobile Applications</li>
                                                        <li><a href="https://technisun.com/service/android-app-development">Android App</a></li>
                                                        <li><a href="https://technisun.com/service/ios-app-development">iOS App</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-submenu clearfix">
                                                        <li class="submenu-heading">CMS Development</li>
                                                        <li><a href="https://technisun.com/service/wordpress-development">WordPress</a></li>
                                                        <li><a href="https://technisun.com/service/joomla-development">Joomla</a></li>
                                                        <li><a href="https://technisun.com/service/drupal-development">Drupal</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-submenu clearfix">
                                                        <li class="submenu-heading">eCommerce</li>
                                                        <li><a href="https://technisun.com/service/magento-development">Magento</a></li>
                                                        <li><a href="https://technisun.com/service/woocommerce-development">WooCommerce</a></li>
                                                        <li><a href="https://technisun.com/service/nopcommerce-development">nopCommerce</a></li>
                                                        <li><a href="https://technisun.com/service/opencart-development">OpenCart</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>';
                }
        $output .= "</li>\n";  
    }
}