<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->text("doc_number");
            $table->text("doc_name");
            $table->text("doc_department");
            $table->text("doc_type");
            $table->date("doc_approval_date");
            $table->text("doc_uploaded_by");
            $table->text("doc_document");
            $table->text("doc_remarks");
            $table->text("doc_ext");
            $table->tinyInteger("doc_status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
