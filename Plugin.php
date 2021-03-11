<?php namespace Itrail\YouTubePlayList;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Itrail\YouTubePlayList\Components\YoutubePlayer'  => 'youtubeplayer',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'YouTube API',
                'description' => 'YouTube API settings.',
                'category'    => 'Misc',
                'icon'        => 'icon-play',
                'class'       => 'Itrail\YouTubePlayList\Models\Settings',
                'sort'        => 100,
            ]
        ];
    }
}
