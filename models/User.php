<?php

namespace Models;

use Providers\Database;

class User extends Database
{
    public function getRowbyEmail($email)
    {
        $this->query('SELECT * FROM user WHERE email=:email');
        $this->bind(':email', $email);
        $this->exec();
        return $this->rowCount();
    }

    public function updateStatus($status, $email)
    {
        $this->query('UPDATE user SET is_conected=:status WHERE email=:email');
        $this->bind(':status', $status);
        $this->bind(':email', $email);
        $this->exec();
    }


    public function getUser($email)
    {

        $this->query('SELECT id_user,firstname,lastname,is_connected,email,password FROM user WHERE email=:email');
        $this->bind(':email', $email);
        return $this->single();
    }

    //Prevent SQL injections in email input
    public function getEmail($email) 
    {
        $this->query('SELECT email FROM user WHERE email=:email');
        $this->bind(':email', $email);
        $this->exec();
        return $this->rowCount();
    }

    public function insertData($email, $password, $first, $last, $avatar, $status)
    {
        $this->query('INSERT INTO user(firstname,lastname,password,is_connected,avatar,email) VALUES (:first,:last,:password,:status,:avatar,:email)');
        $this->bind(':first', $first);
        $this->bind(':last', $last);
        $this->bind(':password', $password);
        $this->bind(':status', $status);
        $this->bind(':avatar', $avatar);
        $this->bind(':email', $email);
        return $this->exec();
    }

    public function getConnected($status, $email)
    {
        $this->query('SELECT id_user,firstname,lastname,is_connected FROM user where is_connected=:status AND email=:email');
        $this->bind(':status', $status);
        $this->bind(':email', $email);
        return $this->single();
    }
}