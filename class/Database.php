<?php
class Database {

  public static $instance;

  private function __construct() {
    $host = 'localhost';
    $dbname = 'test';
    $user = 'root';
    $password = '';

    try {
      self::$instance = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
      self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$instance->exec('SET NAMES utf8');
    } catch (PDOException $e) {
      die('Connection Error: ' . $e->getMessage());
    }
  }

  public static function conexao() {
    if (!isset(self::$instance))
      new Database();

    return self::$instance;
  }
}
