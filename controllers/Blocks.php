<?php namespace Itrail\YouTubePlayList\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Blocks extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'itrail.ypl.manage_videos' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Itrail.YouTubePlayList', 'main-menu-item', 'side-menu-item');
    }
}
