<?php

class ContactController
{
    public function __construct()
    {
        $db = new DatabaseConnection();
        $this->conn=$db->conn;
    }

    public function sendMail($name,$email,$subject,$message)
    {
        $contact_query="INSERT INTO tb_contact VALUES ('','$name','$email','$subject','$message')";
        $result=$this->conn->query($contact_query);
        return $result;
    }
}