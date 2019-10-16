<?php 
    // Koneksi ke database
    $conn = mysqli_connect("localhost","root","","musicplayer");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;

        $penyanyi    = htmlspecialchars($data["penyanyi"]);
        $judul       = htmlspecialchars($data["judul"]);
        $lagu        = uploadGambar();
        $gambar      = uploadLagu();
        if (!uploadGambar()) {
            return false;
        } elseif (!uploadLagu()) {
            return false;
        }

        $query   = "INSERT INTO mlist VALUES(0, '$penyanyi', '$judul', '$gambar', '$lagu')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function uploadGambar(){
        $namaFile = $_FILES["gambar"]['name'];
        $ukuranFile = $_FILES["gambar"]['size'];
        $error = $_FILES["gambar"]['error'];
        $tmpFile = $_FILES["gambar"]['tmp_name'];

        if ($error === 4) {
            echo "<script>alert('Tolong upload gambar terlebih dahulu')</script>";
            return false;
        }
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>alert('Yang anda upload bukan gambar')</script>";
            return false;
        }
        $namafb = uniqid();
        $namafb .= '.';
        $namafb .= $ekstensiGambar;
        move_uploaded_file($tmpFile, 'img/'.$namafb);
        return $namafb;
    }
    function uploadLagu(){
        $namaFile = $_FILES['lagu']['name'];
        $ukuranFile = $_FILES['lagu']['size'];
        $error = $_FILES['lagu']['error'];
        $tmpFile = $_FILES['lagu']['tmp_name'];

        if ($error === 4) {
            echo "<script>alert('Tolong upload lagu terlebih dahulu')</script>";
            return false;
        }
        $ekstensiGambarValid = ['mp3', 'ogg'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>alert('Yang anda upload bukan lagu')</script>";
            return false;
        }
        $namafb = uniqid();
        $namafb .= '.';
        $namafb .= $ekstensiGambar;
        move_uploaded_file($tmpFile, 'song/'.$namafb);
        return $namafb;
    }
    function hapus($id){
        global $conn;
        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        $penyanyi    = htmlspecialchars($data["penyanyi"]);
        $judul       = htmlspecialchars($data["judul"]);
        $gambarLama  = htmlspecialchars($data["gambarLama"]);
        $laguLama    = htmlspecialchars($data["laguLama"]);
        if ($_FILES['lagu']['error'] === 4) {
            $lagu = $laguLama;
        } else {
            $lagu = uploadLagu();
        }
        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = uploadGambar();
        }
        $query = "UPDATE mahasiswa SET 
                    penyanyi    = '$penyanyi',
                    judul     = '$judul', 
                    gambar = '$gambar', 
                    lagu   = '$lagu', 
                    WHERE id=$id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        global $conn;
        $query = "SELECT * 
                FROM mahasiswa 
                WHERE nama LIKE '%$keyword%' OR nim = '$keyword'";
        return query($query);
    }
?>