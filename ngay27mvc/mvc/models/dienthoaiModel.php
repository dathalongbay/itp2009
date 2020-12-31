<?php

class DienthoaiModel extends Database {


    public function listData() {
        echo "<br> " . __METHOD__;
        // $this->connection

        $sql = "SELECT * FROM dienthoai";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $data = $stmt->fetchAll();

        return $data;
    }


}
