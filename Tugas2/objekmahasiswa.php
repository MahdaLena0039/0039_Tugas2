<?php
    require_once "mahasiswa.php";
    
    $mahasiswa1 = new mahasiswa("Mahda Lena","23.240.0039","Fikom", "Teknik Informatika","3P41", 3.48);

    $mahasiswa1->nama = "Mahda Lena";
    $mahasiswa1->nim = "23.240.0039";
    $mahasiswa1->fakultas = "Fikom";
    $mahasiswa1->prodi = "Teknik Informatika";
    $mahasiswa1->kelas = "3P41";
    $mahasiswa1->ipk = 3.48;
 

    echo "NAMA : $mahasiswa1->nama <br>";
    echo "NIM : $mahasiswa1->nim <br>";
    echo "FAKULTAS : $mahasiswa1->fakultas <br>";
    echo "PRODI : $mahasiswa1->prodi <br>";
    echo "KELAS : $mahasiswa1->kelas <br>";
    echo "IPK : $mahasiswa1->ipk <br>";
    
    echo $mahasiswa1->infomahasiswa();
    echo "<br />";
    var_dump($mahasiswa1);
    $Mmahasiswa2 = new mahasiswa("Josep Maria Marti","23.240.0021","Fikom", "Teknik Informatika", "3P41", 3.90);

    $Mmahasiswa2->nama = "Josep Maria Marti";
    $Mmahasiswa2->nim = "23.240.0021";
    $Mmahasiswa2->fakultas = "Fikom";
    $Mmahasiswa2->prodi = "Teknik Informatika";
    $Mmahasiswa2->kelas = "3P41";
    $Mmahasiswa2->ipk = 3.90;
    

    echo "NAMA : $Mmahasiswa2->nama <br>";
    echo "NIM : $Mmahasiswa2->nim <br>";
    echo "FAKULTAS : $Mmahasiswa2->fakultas <br>";
    echo "PRODI : $Mmahasiswa2->prodi <br>";
    echo "KELAS : $Mmahasiswa2->kelas <br>";
    echo "IPK : $Mmahasiswa2->ipk <br>";
  
    echo $Mmahasiswa2->infomahasiswa();
    echo "<br />";
    var_dump($Mmahasiswa2);
?>