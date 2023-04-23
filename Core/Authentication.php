<?php

class Authentication
{

    /**
     * @var Database
     */
    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function userLogin($username, $password){

        $password = trim($password);

        $sql = "SELECT * FROM users WHERE username = ? LIMIT 1";
        $stmt = $this->db->prepare($sql);

        $stmt->bind_param("s", $username);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $hashed_password = $row['password'];

            if (password_verify($password, $hashed_password)){
                return true;
            } else {
                echo "The password you have entered is incorrect.";
            }

            $result->close();
        } else {
            echo "Error in statement execution: " . $stmt->error;
        }

        $stmt->close();

    }

}