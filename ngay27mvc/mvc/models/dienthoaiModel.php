<?php

class DienthoaiModel extends Database {


    public function listData($keyword = "") {
        echo "<br> " . __METHOD__;
        // $this->connection

        $sql = "SELECT *
        FROM dienthoai 
        LEFT JOIN hang_dienthoai
        ON dienthoai.ma_hang = hang_dienthoai.ma_hang";

        if ($keyword != "") {
            $sql .= " WHERE dienthoai.ten_dienthoai LIKE '%$keyword%'";
        }

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $data = $stmt->fetchAll();

        return $data;
    }


    public function delete($id) {

        $sql = "DELETE FROM dienthoai WHERE ma_dienthoai = $id";
        return $this->connection->exec($sql);
    }


}
