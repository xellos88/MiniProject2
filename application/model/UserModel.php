<?php
namespace application\model;

class UserModel extends Model{
    public function getUser($arrUserInfo, $pwFlg = true) {
        $sql = " SELECT * FROM user_info WHERE u_id = :id AND del_flg = '0' ";

        //PW 추가할 경우
        if($pwFlg){
            $sql .= " and u_pw = :pw";
        }
        $prepare = [
            ":id"   =>$arrUserInfo["id"]
        ];
        
        //PW 추가할 경우
        if($pwFlg){
            $prepare [":pw"]= $arrUserInfo["pw"];
        }

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt -> fetchAll();
        } catch (Exception $e) {
            echo "UserModel -> getUser Error: ".$e->getMessage();
            exit();
        }

        return $result;
    }
        
    //insert user
    public function insertUser($arrUserInfo){
        $sql = "INSERT INTO user_info(u_id, u_pw, u_name) VALUES(:u_id, :u_pw, :u_name)";

        $prepare = [
            ":u_id" => $arrUserInfo["id"]
            ,":u_pw"  => $arrUserInfo["pw"]
            ,":u_name" => $arrUserInfo["name"]
        ];

        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            echo "UserModel -> insertUser Error: ".$e->getMessage();
            return false;
        }
    }
    
    //update user
    public function updateUser($arrUserInfo){
        $sql = "UPDATE user_info SET u_pw=:u_pw, u_name=:u_name WHERE u_id=:u_id";
    
        $prepare = [
            ":u_id" => $arrUserInfo["id"]
            ,":u_pw" => $arrUserInfo["pw"]
            ,":u_name" => $arrUserInfo["name"]
        ];
    
        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            echo "UserModel -> updateUser Error: ".$e->getMessage();
            return false;
        }
    }

    //delete user
    public function deleteUser($userId) {
        $sql = "UPDATE user_info SET del_flg='1' WHERE u_id=:u_id";
    
        $prepare = [
            ":u_id" => $userId
        ];
    
        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            echo "UserModel -> deleteUser Error: ".$e->getMessage();
            return false;
        }
    }
    
}
