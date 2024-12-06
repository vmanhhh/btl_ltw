<?php
require_once('connection.php');


class User
{
    public $username;
    public $profile_photo;
    public $fname;
    public $lname;
    public $gender;
    public $birthday;
    public $phone;
    public $createAt;
    public $updateAt;
    public $password; 

    public function __construct($username, $profile_photo, $fname, $lname, $gender, $birthday, $phone, $createAt, $updateAt, $password)
    {
        $this->username = $username;
        $this->profile_photo = $profile_photo;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->phone = $phone;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->password = $password;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query(
            "SELECT *
            FROM user;"
        );
        $users = [];
        foreach($req->fetch_all(MYSQLI_ASSOC) as $user) {
            $users[] = new User(
                $user['username'],
                $user['profile_photo'],
                $user['fname'],
                $user['lname'],
                $user['gender'],
                $user['birthday'],
                $user['phone'],
                $user['createAt'],
                $user['updateAt'],
                '' // Do not return password
            );
        }
        return $users;
    }

    static function get($username)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            SELECT username, profile_photo, fname, lname, gender, birthday, phone, createAt, updateAt 
            FROM user
            WHERE username = '$username'
            ;"
        );
    
        // Check if the query returned any results
        if ($req->num_rows === 0) {
            return null; // or handle accordingly based on your logic
        }
    
        $result = $req->fetch_assoc();
        $user = new User(
            $result['username'],
            $result['profile_photo'],
            $result['fname'],
            $result['lname'],
            $result['gender'],
            $result['birthday'],
            $result['phone'],
            $result['createAt'],
            $result['updateAt'],
            '' // Do not return password
        );
    
        return $user;
    }
    

    static function insert($username, $profile_photo, $fname, $lname, $gender, $birthday, $phone, $password)
    {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO user (username, profile_photo, fname, lname, gender, birthday, phone, createAt, updateAt, password)
            VALUES ('$username', '$profile_photo', '$fname', '$lname', $gender, $birthday, '$phone', NOW(), NOW(), '$password_hash')
            ;");
        return $req;
    }

    static function delete($username)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM user WHERE username = '$username';");
        return $req;
    }

    static function update($username, $profile_photo, $fname, $lname, $gender, $birthday, $phone)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            UPDATE user
            SET profile_photo = '$profile_photo', fname = '$fname', lname = '$lname', gender = $gender, birthday = $birthday, phone = '$phone', updateAt = NOW()
            WHERE username = '$username'
            ;"
        );
        return $req;
    }

    static function validation($username, $password)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM user WHERE username = '$username'");
        if (@password_verify($password, $req->fetch_assoc()['password']))
            return true;
        else
            return false;
    }

    static function validateRegister($username)
    {
        $db = DB::getInstance();

        $stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $stmt->close();
            return false;
        }

        $stmt->close();
        return true;
    }

    static function changePassword($username, $oldpassword, $newpassword)
    {
        if (User::validation($username, $oldpassword)) {
            $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
            $db = DB::getInstance();
            $req = $db->query(
                "UPDATE user
                SET password = '$password_hash', updateAt = NOW()
                WHERE username = '$username';");
            return $req;
        } else {
            return false;
        }
    }

    static function changePassword_($username, $newpassword)
    {
        $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "UPDATE user
            SET password = '$password_hash', updateAt = NOW()
            WHERE username = '$username';");
        return $req;
    }
}

?>