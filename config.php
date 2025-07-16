<?php
class config
{
    private $dbName = 'ozone';
    private $dbUser = 'root';
    private $dbPass = '';

    public function getDBInfo (): array
    {
        return ['name' => $this->dbName, 'user' => $this->dbUser, 'pass' => $this->dbPass];
    }
}
