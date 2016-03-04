<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('slug');
			$table->string('title');
			$table->text('description');
			$table->float('goal');
			$table->boolean('private');
			$table->integer('num_guests');
			$table->timestamps();
			$table->timestamp('publish_date');
			$table->timestamp('due_by_date');
			$table->timestamp('event_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
