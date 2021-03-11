<?php namespace Itrail\YouTubePlayList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItrailYoutubeplaylistBlocks extends Migration
{
    public function up()
    {
        Schema::create('itrail_youtubeplaylist_blocks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('playlist_title');
            $table->string('playlist_subtitle');
            $table->text('videos');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itrail_youtubeplaylist_blocks');
    }
}
