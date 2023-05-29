# Tugas6Platform

Tugas 6 Pemrograman Berbasis Platform dengan materi Php

akun
usernname : admin, password : admin
usernname : user, password : user

Tugas to do list ini mengunakan Database phpmyadmin dengan 1 database bernama todolist dan
memiliki 2 table, table pertama bernama tb_login dengan kolom id, username, dan password. table kedua bernama tb_todolist dengan kolom id, id_login, task, dan status.

Login di dalam tugas ini sudah menggunakan session dan cookies.
session yang dibuat untuk session username dan id.

session id digunakan untuk mendifinisikan setiap akun dengan tugas dari setiap akun nya. (berada di file tampil.php)

cookie yang digunakan adalah username dengan masa 1 jam, jika memilih remmeber me maka cookie di set dalam 7 hari.

terdapat juga untuk menghapus session dan cookie dalam file logout.php.

untuk koneksi ke database saya menggunakan file bernama connect_mysql. yang akan digunakan untuk setiap crud dengan melakukan require.

Index tugas ini bernama todolist.php, tampil php adalah untuk menampilkan setiap tugas yang di tuliskan (READ)

Dalam insert akan meng inputkan id_login, tugas, dan status. id login didapat dari session sehingga nanti yang di tulis dialam table berisi id setiap akunya.

Update dan delete yang digunakan adalah id dari task nya.

Setiap file yang memakai session harus mencantum kan ssesion start agar session dapat dgunakan.
