<?php

namespace App\Providers;

use App\Http\Traits\SystemSettingTrait;
use Gate;
use Illuminate\Support\ServiceProvider;

/**
 * Class TemplateServiceProvider
 * @package App\Providers
 */
class TemplateServiceProvider extends ServiceProvider
{
    use SystemSettingTrait;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            /*global variables*/
            $seo_meta = $this->getSeoMeta();
            $system_settings = $this->getSystemSettings();
            $logged_user = auth()->user();
            $logged_in = auth()->check();
            /*global variables*/

            /*Admin*/
            /**
             * config.php
             *
             * Author: pixelcave
             *
             * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
             *
             */

            /* Template variables */
            $admin_template = array(
                'name' => $seo_meta['name'],
                'version' => '1.0',
                'author' => $seo_meta['author'],
                'robots' => $seo_meta['robots'],
                'title' => $seo_meta['title'],
                'description' => $seo_meta['description'],
                // true                     enable page preloader
                // false                    disable page preloader
                'page_preloader' => true,
                // true                     enable main menu auto scrolling when opening a submenu
                // false                    disable main menu auto scrolling when opening a submenu
                'menu_scroll' => true,
                // 'navbar-default'         for a light header
                // 'navbar-inverse'         for a dark header
                'header_navbar' => 'navbar-inverse',
                // ''                       empty for a static layout
                // 'navbar-fixed-top'       for a top fixed header / fixed sidebars
                // 'navbar-fixed-bottom'    for a bottom fixed header / fixed sidebars
                'header' => 'navbar-fixed-top',
                // ''                                               for a full main and alternative sidebar hidden by default (> 991px)
                // 'sidebar-visible-lg'                             for a full main sidebar visible by default (> 991px)
                // 'sidebar-partial'                                for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                // 'sidebar-partial sidebar-visible-lg'             for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                // 'sidebar-mini sidebar-visible-lg-mini'           for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                // 'sidebar-mini sidebar-visible-lg'                for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)
                // 'sidebar-alt-visible-lg'                         for a full alternative sidebar visible by default (> 991px)
                // 'sidebar-alt-partial'                            for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                // 'sidebar-alt-partial sidebar-alt-visible-lg'     for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)
                // 'sidebar-partial sidebar-alt-partial'            for both sidebars partial which open on mouse hover, hidden by default (> 991px)
                // 'sidebar-no-animations'                          add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!
                'sidebar' => 'sidebar-visible-lg sidebar-mini sidebar-no-animations',
                // ''                       empty for a static footer
                // 'footer-fixed'           for a fixed footer
                'footer' => '',
                // ''                       empty for default style
                // 'style-alt'              for an alternative main style (affects main page background as well as blocks style)
                'main_style' => '',
                // ''                           Disable cookies (best for setting an active color theme from the next variable)
                // 'enable-cookies'             Enables cookies for remembering active color theme when changed from the sidebar links (the next color theme variable will be ignored)
                'cookies' => '',
                // 'night', 'amethyst', 'modern', 'autumn', 'flatie', 'spring', 'fancy', 'fire', 'coral', 'lake',
                // 'forest', 'waterlily', 'emerald', 'blackberry' or '' leave empty for the Default Blue theme
                'theme' => 'flatie',
                // ''                       for default content in header
                // 'horizontal-menu'        for a horizontal menu in header
                // This option is just used for feature demostration and you can remove it if you like. You can keep or alter header's content in page_head.blade.php
                'header_content' => '',
                'active_page' => url()->current() /*basename($_SERVER['PHP_SELF'])*/
            );

            /* Primary navigation array (the primary navigation will be created automatically based on this array, up to 3 levels deep) */
            $admin_primary_nav = array(
                array(
                    'name' => 'Dashboard',
                    'url' => url('admin/dashboard'),
                    'icon' => 'fa fa-dashboard'
                ),
                array(
                    'name' => 'Front-end Site',
                    'url' => url(''),
                    'never_active' => true,
                    'icon' => 'fa fa-paper-plane-o'
                ),
            );

            if ($logged_in) {
//                if ($logged_user->hasAnyPermission([
//                    'Create Post',
//                    'Read Post',
//                    'Update Post',
//                    'Delete Post'
//                ])
//                ) {
//                    $admin_primary_nav[] = array(
//                        'name' => 'Posts',
//                        'url' => url('admin/posts'),
//                        'icon' => 'fa fa-newspaper-o'
//                    );
//                }

                if ($logged_user->hasAnyPermission([
                    'Create Page',
                    'Read Page',
                    'Update Page',
                    'Delete Page'
                ])
                ) {
                    $admin_primary_nav[] = array(
                        'name' => 'Pages',
                        'url' => url('admin/pages'),
                        'icon' => 'fa fa-archive'
                    );
                }

                if ($logged_user->hasAnyPermission([
                    'Create Home Slide',
                    'Read Home Slide',
                    'Update Home Slide',
                    'Delete Home Slide'
                ])
                ) {
                    $admin_primary_nav[] = array(
                        'name' => 'Home Slides',
                        'url' => url('admin/home_slides'),
                        'icon' => 'fa fa-sliders'
                    );
                }

                if ($logged_user->hasAnyPermission([
                    'Read Contact',
                ])
                ) {
                    $admin_primary_nav[] = array(
                        'name' => 'Contacts',
                        'url' => url('admin/contacts'),
                        'icon' => 'fa fa-phone'
                    );
                }

                if ($logged_user->hasAnyPermission([
                    'Create User',
                    'Read User',
                    'Update User',
                    'Delete User',
                    'Create Permission',
                    'Read Permission',
                    'Update Permission',
                    'Delete Permission',
                    'Create Permission Group',
                    'Read Permission Group',
                    'Update Permission Group',
                    'Delete Permission Group',
                    'Create Role',
                    'Read Role',
                    'Update Role',
                    'Delete Role'
                ])
                ) {

                    $user_management_tab = [];

                    if ($logged_user->hasAnyPermission([
                        'Create User',
                        'Read User',
                        'Update User',
                        'Delete User'
                    ])
                    ) {
                        $user_management_tab[] = [
                            'name' => 'Users',
                            'url' => url('admin/users'),
                        ];
                    }

                    if ($logged_user->hasAnyPermission([
                        'Create Permission',
                        'Read Permission',
                        'Update Permission',
                        'Delete Permission'
                    ])
                    ) {
                        $user_management_tab[] = [
                            'name' => 'Permissions',
                            'url' => url('admin/permissions'),
                        ];
                    }

                    if ($logged_user->hasAnyPermission([
                        'Create Permission Group',
                        'Read Permission Group',
                        'Update Permission Group',
                        'Delete Permission Group'
                    ])
                    ) {
                        $user_management_tab[] = array(
                            'name' => 'Permission Groups',
                            'url' => url('admin/permission_groups'),
                        );
                    }

                    if ($logged_user->hasAnyPermission([
                        'Create Role',
                        'Read Role',
                        'Update Role',
                        'Delete Role'
                    ])
                    ) {
                        $user_management_tab[] = [
                            'name' => 'Roles',
                            'url' => url('admin/roles'),
                        ];
                    }

                    $admin_primary_nav[] = array(
                        'name' => 'User Management',
                        'icon' => 'fa fa-users',
                        'sub' => $user_management_tab
                    );
                }

                if ($logged_user->hasAnyPermission([
                    'Create System Setting',
                    'Read System Setting',
                    'Update System Setting',
                    'Delete System Setting'
                ])
                ) {
                    $admin_primary_nav[] = array(
                        'name' => 'System Settings',
                        'url' => url('admin/system_settings'),
                        'icon' => 'fa fa-gears'
                    );
                }
            }
            /*Admin*/

            /*Front end*/
            /**
             * config.php
             *
             * Author: pixelcave
             *
             * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
             *
             */

            /* Template variables */
            $front_template = array(
                'name' => $seo_meta['name'],
                'version' => '1.0',
                'author' => $seo_meta['author'],
                'robots' => $seo_meta['robots'],
                'title' => $seo_meta['title'],
                'description' => $seo_meta['description'],
                // true             for a boxed layout
                // false            for a full width layout
                'boxed' => false,
                'active_page' => url()->current() /*basename($_SERVER['PHP_SELF'])*/
            );

            /* Primary navigation array (the primary navigation will be created automatically based on this array, up to 3 levels deep) */
            $front_primary_nav = array(
                array(
                    'name' => 'Home',
                    'url' => url('/'),
                    'never_active' => true,
                ),
                array(
                    'name' => 'About',
                    'sub' => array(
                        array(
                            'name' => 'About Us',
                            'url' => url('/about-us')
                        ),
                    )
                ),
                array(
                    'name' => 'Contact Us',
                    'url' => url('/contact-us'),
                ),
            );
            /*Front end*/

            $view
                ->with('admin_template', $admin_template)
                ->with('system_settings', $system_settings)
                ->with('logged_user', $logged_user)
                ->with('logged_in', $logged_in)
                ->with('admin_primary_nav', $admin_primary_nav)
                ->with('front_template', $front_template)
                ->with('front_primary_nav', $front_primary_nav);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}