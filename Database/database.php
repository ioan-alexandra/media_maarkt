<?php
class dbConnection
{
    private string $host = "remotemysql.com";
    private string $user = "ZnNBf5yJjd";
    private string $pwd = "f4AQMd4G3F";
    private string $name = "ZnNBf5yJjd";

    public function connect()
    {
      try{
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name;
        $pdo = new PDO($dsn, $this->user, $this->pwd);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, pDO::FETCH_ASSOC);

        return $pdo;
      } catch (PDOException $e) {
        echo "Connection Failed: " .$e->getMessage()
      }
    }
}
