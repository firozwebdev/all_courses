<?php
class CreateUsersTable
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add column here
            $table->string('phone_number');
        });
    }
}

class RenameEmailColumn
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Rename column here
            $table->renameColumn('email', 'new_email');
        });
    }
}