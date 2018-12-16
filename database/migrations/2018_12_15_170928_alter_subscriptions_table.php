<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscription', function ( $table) {
          $table->timestamp('firstBillingDate')->nullable();
          $table->timestamp('ends_at')->nullable();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('subscription', function (Blueprint $table) {
        $table->dropColumn('firstBillingDate');
      });
    }
}
