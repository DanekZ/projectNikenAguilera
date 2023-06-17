<?php 

function koneksi(){
  return mysqli_connect('localhost','root','','dbpetpals');
}

function perintahquery($perintahquery){
  $conn = koneksi();
  $result = mysqli_query($conn,$perintahquery);

  //jika data username hanya satu
  if(mysqli_num_rows($result) == 1){
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }

  return $rows;
}

function registrasi($data){
    $conn = koneksi();
    $username = htmlspecialchars($data['username']);
    $email = htmlspecialchars($data['email']);
    $konfirmasi_password = htmlspecialchars($data['konfirmasi_password']);
    $password = htmlspecialchars($data['password']);
    
    //cek username dan password tidak boleh kosong
    if(empty($username) || empty($email) || empty($password) || empty($konfirmasi_password)){
      echo "<script>
            alert('formulir registrasi tidak boleh kosong');
            document.Location.href = 'registrasi.php';
      </script>";
      return false;
    }

    //cek jika username sudah terdaftar
    if (perintahquery("SELECT * FROM registrasi WHERE username = '$username'")) {
      echo "<script>
            alert('username sudah terdaftar');
            document.Location.href = 'registrasi.php';
      </script>";
      return false;
    }

    if($password !== $konfirmasi_password){
      echo "<script>
            alert('konfirmasi password salah');
            document.Location.href = 'registrasi.php';
      </script>";
      return false;
    }

    $query = "INSERT INTO registrasi 
            VALUES(null,'$username','$email','$password')
            ";

    // melakukan perintah query
    mysqli_query($conn,$query);

    // periksa database sudah terjadi penambahan data atau belum
    return mysqli_affected_rows($conn);

}

function saran($data){
  $conn = koneksi();
  $email = htmlspecialchars($data['email']);
  $tema = htmlspecialchars($data['tema']);
  $saran = htmlspecialchars($data['saran']);

  if(empty($email) || empty($tema) || empty($saran)){
    echo "<script>
          alert('formulir saran tidak boleh kosong');
          document.location.href = 'saran.php';
    </script>";
    return false;
  }

  $query = "INSERT INTO saran
  VALUES(null,'$email','$tema','$saran')
  ";

// melakukan perintah query
mysqli_query($conn,$query);

// periksa database sudah terjadi penambahan data atau belum
return mysqli_affected_rows($conn);

}


?>