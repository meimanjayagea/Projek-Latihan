create database crud;
use crud;

CREATE TABLE `users` (
  `id` int(5) NOT NULL auto_increment,
  `nama` varchar(100),
  `email` varchar(100),
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE 'mahasiswa'(
'id_mhs' INT (10) NOT NULL PRIMARY KEY,
'nama' VARCHAR (100),
'email' VARCHAR (100),
'jenis kelamin' enum('L','P') DEFAULT NULL,
PRIMARY KEY ('id_mhs')
);