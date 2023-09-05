SELECT mhs_nama
FROM tb_mahasiswa
WHERE mhs_id = (
    SELECT mhs_id
    FROM tb_mahasiswa_nilai
    WHERE mk_id = (
        SELECT mk_id
        FROM tb_matakuliah
        WHERE mk_kode = 'MK303'
    )
    ORDER BY nilai DESC
    LIMIT 1
);
