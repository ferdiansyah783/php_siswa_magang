<?php


$data_siswa=[];

while(true){
    //data siswa
    $siswa=&$data_siswa;

    //banner apk
    tampil("Data siswa magang TOP");
    tampil("======================");

    //user memilih imput menu
    $input_siswa=readline("masukan data siswa !");

    //validasi huruf1
    if(!preg_match("/^[a-zA-Z]*$/",$input_siswa) || empty($input_siswa)){
        echo "\n";
        echo "tolong masukan huruf !"."\n";
        continue;
    }


    $siswa[]=$input_siswa;

    //muncul data siwa magang
    $nomor=1;
    foreach($siswa as $key){
        tampil("$nomor.$key");
        $nomor++;
    }

    //tanya user untuk memasukan data lagi
    $tanya=readline("tambah data (yes/no)?");
    if($tanya=="no"){
        tampil("terimakasih");
    break;
    }
}

function tampil($pesan){
    echo $pesan."\n";
}
//
function tanyaUser(){
    $tanya=readline("tambah data (yes/no)?");

    if($tanya=="no"){
        tampil("terimaksaih");
        exit;
    }
}
//
function tampilData($data){
    
}
//
function menuaplikasi(){
    $data=["input data","update data","delete data","lihat data"];

}