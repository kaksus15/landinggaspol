<?php

namespace Database\Seeders;

use App\Models\Instansi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instansi = [
            [
                'instansi' => 'SEKRETARIAT DAERAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BAGIAN TATA PEMERINTAHAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BAGIAN KESEJAHTERAAN RAKYAT',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BAGIAN ADMINISTRASI PEMBANGUNAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BAGIAN PEREKONOMIAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BAGIAN PENGADAAN BARANG DAN JASA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BAGIAN ORGANISASI',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BAGIAN UMUM',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BAGIAN HUKUM',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'INSPEKTORAT DAERAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BADAN PERENCANAAN PEMBANGUNAN, PENELITIAN DAN PENGEMBANGAN DAERAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BADAN PENANGGULANGAN BENCANA DAERAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BADAN PENDAPATAN DAERAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'BADAN KESATUAN BANGSA DAN POLITIK DAERAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS ARSIP DAN PERPUSTAKAAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PERIKANAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS KESEHATAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS KOPERASI USAHA MIKRO DAN PERDAGANGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS KEBUDAYAAN DAN PARIWISATA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PEKERJAAN UMUM',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PERUMAHAN RAKYAT DAN KAWASAN PEMUKIMAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PENDIDIKAN PEMUDA DAN OLAHRAGA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS KOMUNIKASI INFORMATIKA DAN STATISTIK',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PENGELOLAAN SUMBER DAYA AIR DAN PENATAAN RUANG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PERHUBUNGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PERINDUSTRIAN DAN TENAGA KERJA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PERTANIAN DAN KETAHANAN PANGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PETERNAKAN DAN KESEHATAN HEWAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS SOSIAL',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'DINAS LINGKUNGAN HIDUP DAN PENGELOLAAN SAMPAH',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'SATUAN POLISI PAMONG PRAJA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN BANJARHARJO',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN BANTARKAWUNG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN BREBES',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN BULAKAMBA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN BUMIAYU',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN JATIBARANG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN KERSANA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN KETANGGUNGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN LARANGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN LOSARI',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN PAGUYANGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN SALEM',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN SIRAMPOG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN SONGGOM',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN TANJUNG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN TONJONG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KECAMATAN WANASARI',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KELURAHAN BREBES',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KELURAHAN GANDASULI',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KELURAHAN LIMBANGAN KULON',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KELURAHAN LIMBANGAN WETAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KELURAHAN PASARBATANG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'RUMAH SAKIT UMUM DAERAH BREBES',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'RUMAH SAKIT UMUM DAERAH BUMIAYU',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'RUMAH SAKIT UMUM IR. SUKARNO KETANGGUNGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'SEKRETARIS KOMISI PEMILIHAN UMUM',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN BANJARHARJO',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN BANTARKAWUNG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN BREBES',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN BULAKAMBA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN BUMIAYU',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN JATIBARANG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN KERSANA',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN KETANGGUNGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN LARANGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN LOSARI',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN PAGUYANGAN',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN SALEM',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN SIRAMPOG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN SONGGOM',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN TANJUNG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN TONJONG',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi' => 'KOORDINATOR WILAYAH KECAMATAN SATUAN PENDIDIKAN KECAMATAN WANASARI',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert Seeds Instansi
        Instansi::insert($instansi);
    }
}
