SELECT m.NM_Mhs

FROM Mahasiswa AS m

LEFT JOIN (SELECT MAX(VALUE) FROM Nilai AS n ON n.NIM = m.NIM)
LEFT JOIN Mata_Kuliah AS mk ON mk.Kode_MK = n.Kode_MataKuliah

WHERE mk.Kode_MK = 'MK303'
