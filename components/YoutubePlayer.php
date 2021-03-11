<?php namespace Itrail\YouTubePlayList\Components;

use Cms\Classes\ComponentBase;
use Itrail\YouTubePlayList\Models\Block;
use Itrail\YouTubePlayList\Models\Settings;

class YoutubePlayer extends ComponentBase
{
    public $block;

    public function componentDetails()
    {
        return [
            'name'        => 'YouTube Play List',
            'description' => 'Adds a YouTube Play List.'
        ];
    }

    public function defineProperties()
    {
        return [
            'block' => [
                'title'       => 'Block',
                'description' => 'Select block to display',
                'type'        => 'dropdown'
            ],
        ];
    }

    public function getBlockOptions()
    {
        return array_add(Block::all()->lists('title', 'id'), '', '-none-');
    }

    public function onRun()
    {
        $this->addCss('/plugins/itrail/youtubeplaylist/assets/css/RYPP.css');
        $this->addJs('/plugins/itrail/youtubeplaylist/assets/js/RYPP.js');

        $this->block = $this->page['block'] = Block::find($this->property('block'));
        $this->block_api = $this->page['block_api'] = Settings::get('block_api');
    }

}