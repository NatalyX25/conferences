<?php
/**
 * Created by PhpStorm.
 * User: retimeradm
 * Date: 17/05/18
 * Time: 08:48 PM
 */

require_once 'connection.php';

class Model
{
    const dsn = 'mysql:dbname=conference_app;port=8080;host=localhost';
    const user = 'root';
    const pass = '123';

    /** @var PDO  */
    public $connection;

    public function __construct()
    {

        try{
            $this->connection = new PDO(self::dsn, self::user, self::pass);
        }catch (Exception $exception){
            echo $exception->getMessage();
        }

    }
}