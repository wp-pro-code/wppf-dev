<?php

declare(strict_types=1);

namespace WPP\WPPF;

require_once 'vendor/autoload.php';

/**
 * Initializes the child theme.
 *
 * @return void
 */
function load_child_theme()
{
    $config = new Helpers\Config();

    new Helpers\SVG_Support();

    new Enqueue_Assets([
        'prefix'  => $config->path['prefix-'],
        'version' => $config->admin['version']
    ]);

    Pages\Changelog::init($config->string['name_tm']);
    Pages\Legal_Center::init();
    Pages\Legal_Policy_Terms_Conditions::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_Acceptable_Use::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_EULA::init($config->string['name_tm'], $config->admin, $config->content['legal_strings'], $config->min_req,);
    Pages\Legal_Policy_Privacy::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_Cookie::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_Refund::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_Disclaimer::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_Accessibility::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_Trademark::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_Copyright::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_Image::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
    Pages\Legal_Policy_Logo::init($config->string['name_tm'], $config->admin, $config->content['legal_strings']);
}

load_child_theme();
