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
        $this->connection = new PDO(self::dsn, self::user, self::pass);
        var_dump($this->connection); die;

//        try{
//            $this->connection = new PDO(self::dsn, self::user, self::pass);
//            var_dump($this->connection); die;
//        }catch (Exception $exception){
//            echo $exception->getMessage();
//        }

    }
}