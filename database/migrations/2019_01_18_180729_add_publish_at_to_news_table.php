<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPublishAtToNewsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('news', function (Blueprint $table) {
      $table->timestamp('publish_at')->useCurrent()->after('created_at');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('news', function (Blueprint $table) {
      $table->dropColumn('publish_at');
    });
  }
}
