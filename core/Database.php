<?php

namespace app\core;

class Database
{
    public \PDO $pdo;

    public function __construct(array $config)
    {
        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';

        $this->pdo = new \PDO($dsn, $user, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function applyMigrations()
    {
        $this->createMigrationsTable();
        $this->getApplaiedMigrations();

        $files = scandir(Application::$ROOT_DIR, 'migrations');

        HelperFunctions::dd($files);
    }

    public function createMigrationsTable()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            migration VARCHAR(255),
                            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP        
    
                                ) ENGINE=INNODB;
                           ");
    }

    public function getApplaiedMigrations()
    {
        $statment = $this->PDO->prepare("SELECT migration FROM migrations");
        $statment->execute();

        return $statment->fetchAll(\PDO::FETCH_COLUMN);
    }
}