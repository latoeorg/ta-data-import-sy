<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('o_e_e_summaries', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('jobOrderID')->nullable();
            $table->string('productID')->nullable();
            $table->string('productNAME')->nullable();
            $table->string('toolingID')->nullable();
            $table->string('machineID')->nullable();
            $table->integer('Machine_Tonnage')->nullable();
            $table->timestamp('Start_Time')->nullable();
            $table->string('Shift_ID')->nullable();
            $table->integer('Output')->nullable();
            $table->integer('BlackDot')->nullable();
            $table->integer('Buble')->nullable();
            $table->integer('BurnMark')->nullable();
            $table->integer('Dented')->nullable();
            $table->integer('Discoloration')->nullable();
            $table->integer('DragMark')->nullable();
            $table->integer('Flahes')->nullable();
            $table->integer('FlowMark')->nullable();
            $table->integer('OilyMark')->nullable();
            $table->integer('OverCut')->nullable();
            $table->integer('PinBroken')->nullable();
            $table->integer('PinMark')->nullable();
            $table->integer('Scratches')->nullable();
            $table->integer('Shiny')->nullable();
            $table->integer('ShortMolding')->nullable();
            $table->integer('SilverStreak')->nullable();
            $table->integer('SinkMark')->nullable();
            $table->integer('WeldLine')->nullable();
            $table->integer('WhiteM')->nullable();
            $table->integer('Reject_Total')->nullable();
            $table->decimal('ActualCycleTime', 8, 2)->nullable();
            $table->decimal('PlanCycleTime', 8, 2)->nullable();
            $table->decimal('DMC', 8, 2)->nullable();
            $table->decimal('JOS', 8, 2)->nullable();
            $table->decimal('MB', 8, 2)->nullable();
            $table->decimal('MOC', 8, 2)->nullable();
            $table->decimal('MOR1', 8, 2)->nullable();
            $table->decimal('MOR2', 8, 2)->nullable();
            $table->decimal('MSSD', 8, 2)->nullable();
            $table->decimal('NMP', 8, 2)->nullable();
            $table->decimal('NPO', 8, 2)->nullable();
            $table->decimal('PA', 8, 2)->nullable();
            $table->decimal('PM', 8, 2)->nullable();
            $table->decimal('QP', 8, 2)->nullable();
            $table->decimal('T', 8, 2)->nullable();
            $table->decimal('TPM', 8, 2)->nullable();
            $table->decimal('Downtime_Total', 8, 2)->nullable();
            $table->decimal('Available_T', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('o_e_e_summaries');
    }
};
