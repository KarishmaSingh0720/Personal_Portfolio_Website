<?php

class AdminController
{
    public function __construct()
    {
        $db = new DatabaseConnection();
        $this->conn=$db->conn;
    }

    public function getData()
    {
        $get_data = "SELECT *,GROUP_CONCAT(tb_technology.tech_image) AS 'tech_images',
                    GROUP_CONCAT(tb_technology.tech_name) AS 'tech_names',
                    GROUP_CONCAT(tb_technology.tech_des SEPARATOR '|' ) AS 'tech_des' FROM `tb_admin`
                    INNER JOIN tb_social ON tb_admin.id=tb_social.admin_id
                    INNER JOIN tb_about ON tb_admin.id=tb_about.admin_id
                    INNER JOIN tb_technology ON tb_admin.id=tb_technology.admin_id GROUP BY tb_admin.id";
        $result = $this->conn->query($get_data);
        $row = $result->fetch_assoc();        
        return $row;
    }
}