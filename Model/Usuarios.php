<?php

require_once 'Database.php';

class Usuarios {
    public $ID;
    public $nombre;
    public $apellidos;
    public $direccion;
    public $email;
    public $telefono;
    public $categorías;
    public $password;
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }
    
    public function setID($ID) { $this->ID = $ID; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setApellidos($apellidos) { $this->apellidos = $apellidos; }
    public function setDireccion($direccion) { $this->direccion = $direccion; }
    public function setEmail($email) { $this->email = $email; }
    public function setTelefono($telefono) { $this->telefono = $telefono; }
    public function setCategorias($categorías) { $this->categorías = $categorías; }
    public function setPassword($password) { $this->password = $password; }

    public function GetAllUsers() {
        $sql = "SELECT * FROM usuarios";
        $result = $this->conn->query($sql);
        $users = array();

        while ($row = $result->fetch_assoc()) {
            $user = new Usuarios();
            $user->setID($row['ID']);
            $user->setNombre($row['Nombre']);
            $user->setApellidos($row['Apellidos']);
            $user->setDireccion($row['Direccion']);
            $user->setEmail($row['email']);
            $user->setTelefono($row['telefono']);
            $user->setCategorias($row['categoria']);
            $user->setPassword($row['password']);

            $users[] = $user;
        }
        return $users;
    }

    // Método para buscar usuarios por nombre y apellidos (combinados)
    public function SearchUsersByName($name) {
        $sql = "SELECT * FROM usuarios WHERE CONCAT(nombre, ' ', apellidos) LIKE ?";
        $stmt = $this->conn->prepare($sql);
        $searchTerm = '%' . $name . '%';
        $stmt->bind_param('s', $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();
        $users = array();

        while ($row = $result->fetch_assoc()) {
            $user = new Usuarios();
            $user->setID($row['ID']);
            $user->setNombre($row['Nombres']);
            $user->setApellidos($row['Apellidos']);
            $user->setDireccion($row['Direccion']);
            $user->setEmail($row['email']);
            $user->setTelefono($row['telefono']);
            $user->setCategorias($row['categoria']);
            $user->setPassword($row['password']);

            $users[] = $user;
        }
        return $users;
    }

    // Método para buscar usuarios por ID
    public function SearchUsersByID($ID) {
        $sql = "SELECT * FROM usuarios WHERE ID LIKE ?";
        $stmt = $this->conn->prepare($sql);
        $searchTerm = '%' . $ID . '%';
        $stmt->bind_param('s', $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();
        $users = array();

        while ($row = $result->fetch_assoc()) {
            $user = new Usuarios();
            $user->setID($row['ID']);
            $user->setNombre($row['Nombres']);
            $user->setApellidos($row['Apellidos']);
            $user->setDireccion($row['Direccion']);
            $user->setEmail($row['email']);
            $user->setTelefono($row['telefono']);
            $user->setCategorias($row['categoria']);
            $user->setPassword($row['password']);

            $users[] = $user;
        }
        return $users;
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM usuarios WHERE email = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user = new Usuarios();
            $user->setID($row['ID']);
            $user->setNombre($row['Nombres']);
            $user->setApellidos($row['Apellidos']);
            $user->setDireccion($row['Direccion']);
            $user->setEmail($row['email']);
            $user->setTelefono($row['telefono']);
            $user->setCategorias($row['categoria']);
            $user->setPassword($row['password']);
            return $user;
        } else {
            return null; // o false si prefieres
        }
    }
}
?>
