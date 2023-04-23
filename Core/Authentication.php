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

        $sql = "SELECT * FROM `users` WHERE username = :uid LIMIT 1";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":uid", $username);

        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $hashed_password = $row['password'];

            if (password_verify($password, $hashed_password)){

                $role = $row['role'];
                $user_id = $row['user_id'];

                if ($role == 'Editor-In-Chief'){

                    Session::set('role', $role);
                    Session::set('isLoggedIn', true);
                    Session::set('user_id', $user_id);

                    return true;

                } else if ($role == 'Admin') {

                    Session::set('role', $role);
                    Session::set('isLoggedIn', true);
                    Session::set('user_id', $user_id);

                    return true;

                } else if ($role == 'Editor') {
                    Session::set('role', $role);
                    Session::set('isLoggedIn', true);
                    Session::set('user_id', $user_id);

                    return true;
                } else if ($role == 'Author'){
                    Session::set('role', $role);
                    Session::set('isLoggedIn', true);
                    Session::set('user_id', $user_id);

                    return true;
                } else if ($role == 'Reader') {
                    Session::set('role', $role);
                    Session::set('isLoggedIn', true);
                    Session::set('user_id', $user_id);

                    return true;
                } else {

                    echo "No role specified";

                }

            } else {
                echo "The password you have entered is incorrect.";
            }

        } else {
            echo "Error in statement execution ";
        }
    }

}