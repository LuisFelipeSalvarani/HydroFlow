<?php

class User extends Model {

    protected static $tableName = "users";
    protected static $columns = [
        'user_Id',
        'name'
    ];
}