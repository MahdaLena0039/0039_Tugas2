<?php
    class mahasiswa
    {
        var $nama;
        var $nim;
        var $fakultas;
        var $prodi;
        var $kelas;
        var $ipk;

        function __construct(String $nama, $nim, $fakultas, $prodi, $ipk)
        {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->fakultas = $fakultas;
            $this->prodi = $prodi;
            $this->kelas = $kelas;
            $this->ipk = $ipk;
        }

        function infomahasiswa()
        {
            return "$this->nama, $this->nim, $this->fakultas, $this->prodi, $this->kelas, $this->ipk;";
        }
    }
?>