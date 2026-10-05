USE praktikum_web_2401020137;

INSERT INTO program_studi (nama_prodi) VALUES
    ('Informatika Maritim'),
    ('Teknologi Informasi');

INSERT INTO mahasiswa
    (nim, nama, email, usia, program_studi_id)
VALUES
    ('2401020101', 'Rizky Maulana',
     'rizky.maulana@example.com', 20, 1),

    ('2401020102', 'Nadia Putri',
     'nadia.putri@example.com', 19, 1),

    ('2401020103', 'Fajar Ramadhan',
     'fajar.ramadhan@example.com', 21, 2),

    ('2401020199', 'Mahasiswa Sementara',
     'sementara.p4@example.com', 20, 2);

UPDATE mahasiswa
SET email = 'rizky.maulana.updated@example.com'
WHERE nim = '2401020101';

DELETE FROM mahasiswa
WHERE nim = '2401020199';

SELECT m.nim, m.nama, m.email, m.usia,
       p.nama_prodi
FROM mahasiswa AS m
JOIN program_studi AS p
    ON p.id = m.program_studi_id
ORDER BY m.nim;