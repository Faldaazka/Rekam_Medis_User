<?php
class Common
{
    public function getAllRecords($connection) {
        $query = "SELECT * FROM pasien";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function deleteRecordById($connection,$id) {
        $query = "DELETE FROM pasien WHERE id_pasien='$id'";
        $result = $connection->query($query) or die("Error in query".$connection->error);
        return $result;
    }
}