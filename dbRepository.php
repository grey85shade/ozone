 <?php

 class dbRepository {

    private $con;

    function __construct() 
    {
        $servername = "localhost";
        $config = new config();
        $dbInfo = $config->getDBInfo();

        // Create connection
        $this->con = new mysqli($servername, $dbInfo['user'], $dbInfo['pass'], $dbInfo['name']);
        // Check connection
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }
    function  __destruct()
    {
        $this->con->close();
    }

    public function getUser ($user) {
        
        $sql = "SELECT * FROM users where user = '".$user."'";
        $result = $this->con->query($sql);

        if ($result->num_rows === 1) {
            //return $result->fetch_all(MYSQLI_ASSOC);
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function getLinksByUser ($id)
    {
        $sql = "SELECT * FROM links where id_user = ".$id;
        $result = $this->con->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return null;
        }
    }

    public function getGruposByUser ($id)
    {
        $sql = "SELECT * FROM link_groups where id_user = ".$id;
        $result = $this->con->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return null;
        }
    }

 }