<?php



namespace Model\ClassDatabase;

use \PDO;
use \PDOException;


//Obejeto de conxexão e execução de comandos no banco de dados
class ConnectionMySql{

  //Dados da conexãp com o banco
  const HOST = 'localhost';
  const NAME = 'counterskins';
  const USER = 'admin';
  const PASS = 'admin147';


  private $table; //Nome da tabela
  private $connection;  //Instancia de conexão com o banco de dados

  //Set um nome da tabela
  public function setTable($table){
      $this->table = $table;
  }
 
  //Método responsável por criar uma conexão com o banco de dados
  public function executeConnection($table = null){
    $this->table = $table;
    try{
      $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      die('ERROR: '.$e->getMessage());
    }

  }

  // Executa um sql no banco de qualquer tipo
  public function execute($query,$params = []){
    try{
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    }catch(PDOException $e){
      die('ERROR: '.$e->getMessage());
    }
  }


  //Executa um Insert
  public function insert($values){
    $fields = array_keys($values);
    $binds  = array_pad([],count($fields),'?');
    $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
    $this->execute($query,array_values($values));
    return $this->connection->lastInsertId();
  }


 //Executa um Select
  public function select($where = null, $order = null, $limit = null, $fields = '*'){
    $where = strlen($where) ? 'WHERE '.$where : '';
    $order = strlen($order) ? 'ORDER BY '.$order : '';
    $limit = strlen($limit) ? 'LIMIT '.$limit : '';
    $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
    return $this->execute($query);
  }

  //Executa um Update
  public function update($values,$where){
    $fields = array_keys($values);
    $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
   
    $this->execute($query,array_values($values));
    return true;
  }


  //Executa um Delete
  public function delete($where){
    $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
    $this->execute($query);
    return true;
  }

}

?>