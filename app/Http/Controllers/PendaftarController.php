<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\BerkasPendukung;
use App\Models\DataAwal;
use App\Models\DataDiri;
use App\Models\OrangTua;
use App\Models\NilaiRapor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendaftarController extends Controller
{
    function index()
    {
        $data_awal = DataAwal::all();
        $data_diri = DataDiri::all();
        $alamat = Alamat::all();
        $berkas_pendukung = BerkasPendukung::all();
        $orang_tua = OrangTua::all();
        $nilai_rapor = NilaiRapor::all();

        return response()->json([
            "status" => true,
            "message" => "Data berhasil ditambahkan",
            "data" => [
                "data_awal" => $data_awal->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "data_diri" => $data_diri->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "alamat" => $alamat->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "berkas_pendukung" => $berkas_pendukung->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "orang_tua" => $orang_tua->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "nilai_rapor" => $nilai_rapor->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ])
            ]
        ]);
    }

    function store(Request $request)
    {
        $payload = $request->all();
        
        $columns = [
            // Data Awal
            "jalur",
            "jurusan",
            "sekolah_asal",
            "nomor_ijazah",

            // Data Diri
            "nama_lengkap",
            "jenis_kelamin",
            "nisn",
            "tempat_lahir",
            "tanggal_lahir",
            "tinggi_badan",
            "berat_badan",
            "agama",
            "kewarganegaraan",
            "nomor_handphone",
            "email",
            "jumlah_saudara_kandung",
            "foto",

            // Data Alamat
            "alamat_jalan",
            "kelurahan",
            "kecamatan",
            "kota",
            "kode_pos",

            // Berkas Pendukung
            "kis",
            "kip",
            "kks",
            "sktm",

            // Data Orang Tua
            "nama_ayah",
            "tahun_lahir_ayah",
            "pendidikan_ayah",
            "pekerjaan_ayah",
            "penghasilan_bulanan_ayah",
            "nama_ibu",
            "tahun_lahir_ibu",
            "pendidikan_ibu",
            "pekerjaan_ibu",
            "penghasilan_bulanan_ibu",
            "nama_wali",
            "tahun_lahir_wali",
            "pendidikan_wali",
            "pekerjaan_wali",
            "penghasilan_bulanan_wali",

            // Data Nilai Rapor
            "indo_1",
            "indo_2",
            "indo_3",
            "indo_4",
            "indo_5",
            "eng_1",
            "eng_2",
            "eng_3",
            "eng_4",
            "eng_5",
            "mtk_1",
            "mtk_2",
            "mtk_3",
            "mtk_4",
            "mtk_5",
            "ipa_1",
            "ipa_2",
            "ipa_3",
            "ipa_4",
            "ipa_5",
            "ips_1",
            "ips_2",
            "ips_3",
            "ips_4",
            "ips_5",
        ];

        $data_awal = [
            'jalur' => $payload['jalur'],
            'jurusan' => $payload['jurusan'],
            'sekolah_asal' => $payload['sekolah_asal'],
            'nomor_ijazah' => $payload['nomor_ijazah'],
        ];

        $data_diri = [
            'nama_lengkap' => $payload['nama_lengkap'],
            'jenis_kelamin' => $payload['jenis_kelamin'],
            'nisn' => $payload['nisn'],
            'tempat_lahir' => $payload['tempat_lahir'],
            'tanggal_lahir' => $payload['tanggal_lahir'],
            'tinggi_badan' => $payload['tinggi_badan'],
            'berat_badan' => $payload['berat_badan'],
            'agama' => $payload['agama'],
            'kewarganegaraan' => $payload['kewarganegaraan'],
            'nomor_handphone' => $payload['nomor_handphone'],
            'email' => $payload['email'],
            'jumlah_saudara_kandung' => $payload['jumlah_saudara_kandung'],
            'foto' => $payload['foto'],
        ];

        $alamat = [
            'alamat_jalan' => $payload['alamat_jalan'],
            'kelurahan' => $payload['kelurahan'],
            'kecamatan' => $payload['kecamatan'],
            'kota' => $payload['kota'],
            'kode_pos' => $payload['kode_pos'],
        ];

        $berkas_pendukung = [
            'kis' => $payload['kis'],
            'kip' => $payload['kip'],
            'kks' => $payload['kks'],
            'sktm' => $payload['sktm'],
        ];

        $orang_tua = [
            'nama_ayah' => $payload['nama_ayah'],
            'tahun_lahir_ayah' => $payload['tahun_lahir_ayah'],
            'pendidikan_ayah' => $payload['pendidikan_ayah'],
            'pekerjaan_ayah' => $payload['pekerjaan_ayah'],
            'penghasilan_bulanan_ayah' => $payload['penghasilan_bulanan_ayah'],
            'nama_ibu' => $payload['nama_ibu'],
            'tahun_lahir_ibu' => $payload['tahun_lahir_ibu'],
            'pendidikan_ibu' => $payload['pendidikan_ibu'],
            'pekerjaan_ibu' => $payload['pekerjaan_ibu'],
            'penghasilan_bulanan_ibu' => $payload['penghasilan_bulanan_ibu'],
            'nama_wali' => $payload['nama_wali'],
            'tahun_lahir_wali' => $payload['tahun_lahir_wali'],
            'pendidikan_wali' => $payload['pendidikan_wali'],
            'pekerjaan_wali' => $payload['pekerjaan_wali'],
            'penghasilan_bulanan_wali' => $payload['penghasilan_bulanan_wali'],
        ];

        $nilai_rapor = [
            'indo_1' => $payload['indo_1'],
            'indo_2' => $payload['indo_2'],
            'indo_3' => $payload['indo_3'],
            'indo_4' => $payload['indo_4'],
            'indo_5' => $payload['indo_5'],
            'eng_1' => $payload['eng_1'],
            'eng_2' => $payload['eng_2'],
            'eng_3' => $payload['eng_3'],
            'eng_4' => $payload['eng_4'],
            'eng_5' => $payload['eng_5'],
            'mtk_1' => $payload['mtk_1'],
            'mtk_2' => $payload['mtk_2'],
            'mtk_3' => $payload['mtk_3'],
            'mtk_4' => $payload['mtk_4'],
            'mtk_5' => $payload['mtk_5'],
            'ipa_1' => $payload['ipa_1'],
            'ipa_2' => $payload['ipa_2'],
            'ipa_3' => $payload['ipa_3'],
            'ipa_4' => $payload['ipa_4'],
            'ipa_5' => $payload['ipa_5'],
            'ips_1' => $payload['ips_1'],
            'ips_2' => $payload['ips_2'],
            'ips_3' => $payload['ips_3'],
            'ips_4' => $payload['ips_4'],
            'ips_5' => $payload['ips_5'],
        ];

        $not_required = [
            'kis',
            'kip',
            'kks',
            'sktm',
            'nama_wali',
            'tahun_lahir_wali',
            'pendidikan_wali',
            'pekerjaan_wali',
            'penghasilan_bulanan_wali',
        ];

        foreach($columns as $col) {
            if (!isset($payload[$col]) && !in_array($col, $not_required)) {
                $message = "{$col} tidak boleh kosong";
                return response()->json([
                    "status" => false,
                    "message" => $message,
                    "data" => null
                ]);
            }
        }

        // Foto dianggap string 
        // $payload['foto'] = $request->file("foto")->store("images", "public");
        
        $tabel_data_awal = DataAwal::create($data_awal);
        $tabel_data_diri = DataDiri::create($data_diri);
        $tabel_alamat = Alamat::create($alamat);
        $tabel_berkas_pendukung = BerkasPendukung::create($berkas_pendukung);
        $tabel_orang_tua = OrangTua::create($orang_tua);
        $tabel_nilai_rapor = NilaiRapor::create($nilai_rapor);

        return response()->json([
            "status" => true,
            "message" => "Data berhasil ditambahkan",
            "data" => [
                "data_awal" => $tabel_data_awal->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "data_diri" => $tabel_data_diri->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "alamat" => $tabel_alamat->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "berkas_pendukung" => $tabel_berkas_pendukung->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "orang_tua" => $tabel_orang_tua->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ]),
                "nilai_rapor" => $tabel_nilai_rapor->makeHidden([
                    "id",
                    "created_at",
                    "updated_at"
                ])
            ]
        ]);

        // return response()->json([
        //     "status" => true,
        //     "message" => "Author berhasil ditambahkan",
        //     "data" => $author->makeHidden([
        //         "id",
        //         "created_at",
        //         "updated_at"
        //     ])
        // ]);
    }
}
