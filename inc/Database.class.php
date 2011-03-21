<?php
/**
 * Created by Ryan J | ryanjayako@gmail.com
 * Date:
 * Version : v1.1
 */

include("config.ini");


class Database
{

    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $database = DATABASE;
    private $db = NULL;
    public $result = NULL;
    public $numRow = NULL;
    public $assocResult = NULL;


    public function __construct()
    {

        $this->db = mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->database, $this->db);
    }

    public function doQuery($query)
    {

        $result = mysql_query($query, $this->db);

        return $result;
    }

    public function numRows($result)
    {
        $numRow = mysql_num_rows($result);

        return $numRow;
    }


    public function __destruct()
    {

        $this->result = NULL;
        $this->numRow = NULL;

    }
}


?>