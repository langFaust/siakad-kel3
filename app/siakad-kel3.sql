CREATE DATABASE IF NOT EXISTS `siakad-kel3`;

USE `siakad-kel3`;

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nis VARCHAR(20) NOT NULL UNIQUE,
    nisn VARCHAR(20) NOT NULL UNIQUE,
    jenis_kelamin ENUM("L", "P") NOT NULL,
    alamat TEXT NOT NULL,
    tanggal_lahir DATE NOT NULL,
    no_telepon VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

-- INSERT INTO siswa (
--     nama, nis, nisn, jenis_kelamin, alamat, tanggal_lahir, no_telepon, email
--     )
--     VALUES
--     ("Galang Pratama", "12345", "123435566", "L", "Kp Banjaran", "2005-08-17","081382648264", "galangganteng@anuan.id"),
--     ("Gilang Pramana", "35353", "242546464", "L", "Kp Banjaran", "2005-08-17","083658276522", "gilanganuan@anuan.id"),
--     ("Daffa", "29387", "293578726", "L", "Kp Jajar", "2005-08-17","2953875628", "daffaanuan@anuan.id"),
--     ("Ilham", "23765", "257298572", "L", "Kp Jajar", "2005-08-17","57289572893", "ilhamanuan@anuan.id");

CREATE TABLE guru (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nip INT NOT NULL UNIQUE,
    jenis_kelamin ENUM("L", "P") NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    no_telepon VARCHAR(20) NOT NULL
);

-- INSERT INTO guru (
--     nama, nip, jenis_kelamin, email, no_telepon
--     )
--     VALUES
--     (
--         "Sukiyani",  "167284875", "P", "sukiyani@anuan.id", "081864827482"
--     ),
--     (
--         "Imron", "186347648", "L", "imron@anuan.id", "08137683653"
--     );


CREATE TABLE kelas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_kelas VARCHAR(20) NOT NULL,
    tingkat INT NOT NULL,
    jurusan_id INT NOT NULL,
    guru_id INT NOT NULL

    FOREIGN KEY (jurusan_id)
        REFERENCES jurusan(id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE

    FOREIGN KEY (guru_id)
        REFERENCES guru(id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);

CREATE TABLE jurusan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_jurusan VARCHAR(20) NOT NULL
);

CREATE TABLE mata_pelajaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_mapel VARCHAR(20) NOT NULL,
    guru_id INT NOT NULL,
    modul_id INT NOT NULL,

    FOREIGN KEY (guru_id)
        REFERENCES guru(id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE

    FOREIGN KEY (modul_id)
        REFERENCES modul(id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);

CREATE TABLE semester (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_semester TINYINT NOT NULL
);

CREATE TABLE tahun_ajaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tahun_mulai YEAR NOT NULL,
    tahun_selesai YEAR NOT NULL
);

CREATE TABLE jadwal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mata_pelajaran_id INT NOT NULL,
    guru_id INT NOT NULL,
    hari DATE NOT NULL,
    jam VARCHAR(10) NOT NULL,

    FOREIGN KEY (guru_id)
        REFERENCES guru(id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);

CREATE TABLE modul (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_modul VARCHAR(100) NOT NULL,
);

