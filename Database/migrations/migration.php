<?php
namespace Database\migrations;
interface migration
{
    public function create_table($tableName);
}