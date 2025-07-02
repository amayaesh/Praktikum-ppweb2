<?php

class Kunjungan {
    public $id;
    public $fullstamp;
    public $fullname;
    public $email;
    public $jenis_kunjungan_id;

    private static function connect() {
        $conn = mysqli_connect("localhost","root", "", "bukutamu");

        if(!$conn) {
            die("Connection failed" .mysqli_connect_error());
        }
    
        return $conn;
    }

    public function save() {
        $conn = self::connect();
        $query = "INSERT INTO kunjungan (fullname, email,jenis_kunjungan_id)
                    VALUES ('". $this->fullname ."','".$this->email ."', ". $this->jenis_kunjungan_id . ")";
        
        mysqli_query($conn, $query);
        $insert_id = mysqli_insert_id($conn);
        mysqli_close($conn);
    }

    public static function getAll() {
        $conn = self::connect();

        $query = "SELECT * FROM jenis_kunjungan";
        $result = mysqli_query($conn, $query);
        // Eksekusi Query
        $result = mysqli_query($conn, $query);
        // Close Connection
        mysqli_close($conn);

        $entries = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $entry = new JenisKunjungan();
            $entry->id = $row['id'];
            $entry->name = $row['name'];
            $entry->display_name = $row['display_name'];
            array_push($entries, $entry);
        }
        
        return $entries;
    }
        
}