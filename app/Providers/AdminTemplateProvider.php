<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Traits\SystemSettingTrait;

class AdminTemplateProvider extends ServiceProvider
{
    use SystemSettingTrait;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['admin.layouts.base', 'admin.layouts.auth', ], function ($view) {
            /*global variables*/
            $seo_meta = $this->getSeoMeta();
            $system_settings = $this->getSystemSettings();
            $logged_user = auth()->user();
            $logged_in = auth()->check();
            /*global variables*/

            $admin_primary_nav = $this->getAdminNav();
            $admin_template = $this->getAdminConfig($seo_meta);

            $view->with(compact(
                'admin_template',
                'system_settings',
                'logged_user',
                'logged_in',
                'admin_primary_nav'
            ));
        });
    }

    private function getAdminNav()
    {
        $navigation = [
            [
                'name' => 'Dashboard',
                'url' => url('admin/dashboard'),
                'icon' => 'fa fa-dashboard'
            ],
            [
                'name' => 'Front-end Site',
                // 'url' => (auth()->user()->getRoleNames()->first() !== 'Chapter Admin' ? url('/') : url('/' . auth()->user()->ChapterSlug)) ,
                'url' => url('/'),
                'never_active' => true,
                'icon' => 'fa fa-paper-plane-o'
            ],
        ];

        if (auth()->check()) {
            if ($this->hasCrudAccessFor('Page')) {
                array_push($navigation, [
                    'name' => 'Pages',
                    'url' => url('admin/pages'),
                    'icon' => 'fa fa-archive'
                ]);
            }

            if ($this->hasCrudAccessFor('Home Slide')) {
                array_push($navigation, [
                    'name' => 'Home Slides',
                    'url' => url('admin/home_slides'),
                    'icon' => 'fa fa-sliders'
                ]);
            }

            if (auth()->user()->can('Read Contact')) {
                array_push($navigation, [
                    'name' => 'Contacts',
                    'url' => url('admin/contacts'),
                    'icon' => 'fa fa-phone'
                ]);
            }

            if (auth()->user()->can('Read Faq')) {
                array_push($navigation, [
                    'name' => 'FAQs',
                    'url' => url('admin/faqs'),
                    'icon' => 'fa fa-phone'
                ]);
           }

           if (auth()->user()->can('Read Event')) {
                array_push($navigation, [
                    'name' => 'Events',
                    'url' => url('admin/events'),
                    'icon' => 'fa fa-phone'
                ]);
           }

            array_push($navigation, [
                'name' => 'Chapter Events',
                'url' => url('admin/chapter_events'),
                'icon' => 'fa fa-phone'
            ]);

           if (auth()->user()->can('Read Chapter')) {
                array_push($navigation, [
                    'name' => 'Chapters',
                    'url' => url('admin/chapters'),
                    'icon' => 'fa fa-phone'
                ]);
           }

           if (auth()->user()->can('Read Gallery')) {
                array_push($navigation, [
                    'name' => 'Galleries',
                    'url' => url('admin/galleries'),
                    'icon' => 'fa fa-phone'
                ]);
           }

           if (auth()->user()->can('Read Benefits')) {
                array_push($navigation, [
                    'name' => 'Benefits',
                    'url' => url('admin/benefits'),
                    'icon' => 'fa fa-phone'
                ]);
           }

           if (auth()->user()->can('Read Webinars')) {
                array_push($navigation, [
                    'name' => 'Media',
                    'url' => url('admin/webinars'),
                    'icon' => 'fa fa-phone'
                ]);
           }
        
           if (auth()->user()->can('Read Media Category')) {
            array_push($navigation, [
                'name' => 'Media Categories',
                'url' => url('admin/media_categories'),
                'icon' => 'fa fa-phone'
            ]);
           }

           if ($this->hasCrudAccessFor('Board Member')) {
                $board_member_tab = [];

                array_push($board_member_tab, [
                    'name' => 'Executives',
                    'url' => route('admin.board_members.executives'),
                ]);

                array_push($board_member_tab, [
                    'name' => 'Delegates',
                    'url' => route('admin.board_members.delegates')
                ]);

                array_push($navigation, [
                    'name' => 'Board Members',
                    'icon' => 'fa fa-users',
                    'sub' => $board_member_tab
                ]);
           }

            array_push($navigation, [
                'name' => 'Chapter Board',
                'url' => url('admin/chapter_board_members'),
                'icon' => 'fa fa-users'
            ]);

            if ($this->hasCrudAccessFor('User') || $this->hasCrudAccessFor('Permission') || $this->hasCrudAccessFor('Permission Group') || $this->hasCrudAccessFor('Role')) {
                $user_management_tab = [];

                if ($this->hasCrudAccessFor('User')) {
                    array_push($user_management_tab, [
                        'name' => 'Users',
                        'url' => url('admin/users'),
                    ]);
                }


                if ($this->hasCrudAccessFor('Permission')) {
                    array_push($user_management_tab, [
                        'name' => 'Permissions',
                        'url' => url('admin/permissions'),
                    ]);
                }

                if ($this->hasCrudAccessFor('Permission Group')) {
                    array_push($user_management_tab, [
                        'name' => 'Permission Groups',
                        'url' => url('admin/permission_groups'),
                    ]);
                }

                if ($this->hasCrudAccessFor('Role')) {
                    array_push($user_management_tab, [
                        'name' => 'Roles',
                        'url' => url('admin/roles'),
                    ]);
                }

                array_push($navigation, [
                    'name' => 'User Management',
                    'icon' => 'fa fa-users',
                    'sub' => $user_management_tab
                ]);
            }

            if ($this->hasCrudAccessFor('System Setting')) {
                array_push($navigation, [
                    'name' => 'System Settings',
                    'url' => url('admin/system_settings'),
                    'icon' => 'fa fa-gears'
                ]);
            }
        }

        return $navigation;
    }

    private function hasCrudAccessFor($module)
    {
        return auth()->user()->hasAnyPermission([
            "Create {$module}",
            "Read {$module}",
            "Update {$module}",
            "Delete {$module}",
        ]);
    }

    private function getAdminConfig($seo_meta)
    {
        return [
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
        ];
    }
}
