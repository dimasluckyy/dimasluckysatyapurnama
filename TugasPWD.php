<?php
class Pegawai {
    
    public  $nama = "",
            $jenis_kelamin = "",
            $jabatan = "",
            $status = "",
            $gaji = "";

public function __construct($nama, $jenis_kelamin, $jabatan, $status, $gaji) {

    $this->nama = $nama;
    $this->jenis_kelamin = $jenis_kelamin;
    $this->jabatan = $jabatan;
    $this->status = $status;
    $this->gaji = $gaji;
}
    
public function label() {
return "$this->nama, $this->jenis_kelamin, $this->jabatan, $this->status, $this->gaji";
}
}

    $pegawai1 = new Pegawai("Dimas","Laki-laki","HRD","belum menikah","10000000");
    echo "Pegawai 1 : $pegawai1->nama, $pegawai1->jenis_kelamin, $pegawai1->jabatan, $pegawai1->status, $pegawai1->gaji";
    echo "<br>";