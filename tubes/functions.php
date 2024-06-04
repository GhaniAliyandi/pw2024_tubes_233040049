<?php
    $conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040049");

    function query($query) {
        global $conn;
     $result = mysqli_query($conn, $query);
     $rows = [];
      while($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
      }
      return $rows;
    }
     
    function tambah($data) {
        global $conn;
    
        
        // upload gambar
        $image = upload();
        if(!$image)  {
            return false;
        }
    
        $nama_game = htmlspecialchars($data["nama_game"]);
        $rilis = htmlspecialchars($data["rilis"]);
        $size = htmlspecialchars($data["size"]);
    
        $query = "INSERT INTO games VALUES
                (NULL, '$image', '$nama_game', '$rilis', '$size')
                ";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
    
    function upload() {
        $namafile = $_FILES['image']['name'];
        $ukuranfile = $_FILES['image']['size'];
        $error = $_FILES['image']['error'];
        $tmpName = $_FILES['image']['tmp_name'];
    
        if( $error === 4) {
            echo "
            <script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
            return false;
        }
    
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.' ,$namafile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "
            <script>
                alert('yang anda upload bukan gambar!');
            </script>";
            return false;
        }
    
        if( $ukuranfile > 1000000 ) {
            echo "
            <script>
                alert('yang anda upload bukan gambar!');
            </script>";
            return false;
        }
    
        $namafileBaru = uniqid();
        $namafileBaru .= '.';
        $namafileBaru .= $ekstensiGambar;
    
        move_uploaded_file($tmpName, '../tubes/img/' . $namafile);
    
        return $namafile;
    }
    
    function hapus($id) {
        global $conn;
        
        $gm = query("SELECT * FROM games WHERE id = $id");
        if($gm['image'] != 'nophoto.jpg') {
    
            unlink('../img/' . $gm['image']);
        }
        mysqli_query($conn, "DELETE FROM games WHERE id = $id");
    
        return mysqli_affected_rows($conn);
    }
    
    function edit($data)
{
    global $conn;

    $id = $data["id"];
    $nama_game = htmlspecialchars($data["nama_game"]);
    $rilis = htmlspecialchars($data["rilis"]);
    $size = htmlspecialchars($data["size"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['image']['error'] === 4) {
        $image = $gambarLama;
    } else {
        $image = upload();
    }


    $query = "UPDATE games SET
          image = '$image',
          nama_game='$nama_game',
          rilis = '$rilis',
          size = '$size'
          WHERE id=$id
          ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
    
    
function cari($keywoard)
{
    global $conn;

    $query = "SELECT * FROM games
        WHERE nama_game LIKE '%$keywoard%'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
    
    function login($data) {
        global $conn;
    
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);
        
        // cek dulu username nya
        if ($user = query("SELECT * FROM user WHERE username = '$username'")[0]) {
            if(password_verify($password, $user['password'])) {
    
                $_SESSION['login'] = true;
                header("Location: index.php");
                exit;
            }
        }
        }
    
    
    function registrasi($data)  {
        global $conn;
    
        $username = htmlspecialchars(strtolower($data['username']));
        $password1= mysqli_real_escape_string($conn, $data['password1']);
        $password2 = mysqli_real_escape_string($conn, $data['password2']);
    
        if(empty($username) || empty($password1) || empty($password2) ) {
            echo "<script>
                    alert('username /password tidak boleh kosong!')
                    document.location.href = 'registrasi.php'
                </script>";
            return false;
        }
    
        // jika username sudah ada
    
        if(query("SELECT * FROM user WHERE username = '$username'")) {
            echo "<script>
                    alert('username sudah terdaftar')
                    document.location.href = 'registrasi.php'
                </script>";
            return false;
        }
    
        if ($password1 !== $password2) {
            echo "<script>
                    alert('konfirmasi password tidak sesuai')
                    document.location.href = 'registrasi.php'
                </script>";
            return false;
        }
    
        // jika password < 5
        if(strlen($password1)< 5) {
            echo "<script>
                    alert('password terlalu pendek')
                    document.location.href = 'registrasi.php'
                </script>";
            return false;
        }
    
        // jika username & password sudah sesuai
        $password_baru = password_hash($password1, PASSWORD_DEFAULT);
        // insert ke tabel user
        $query = "INSERT INTO user VALUES
                (NULL, '$username', '$password_baru')";
        mysqli_query($conn, $query) or die (mysqli_error($conn));
        return mysqli_affected_rows($conn);
    }

?>
