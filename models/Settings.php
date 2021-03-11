<?php  namespace Itrail\YouTubePlayList\Models;

use Model;

class Settings extends Model
{
    public $implement      = ['System.Behaviors.SettingsModel'];
    public $settingsCode   = 'block_settings';
    public $settingsFields = 'fields.yaml';
    
    public function initSettingsData()
    {
        $this->block_api = "";
    }
}