<?php
// Mengurusi data GajiKaryawan
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GajiKaryawan extends Model
{
    use HasFactory;

    protected $guarded = [];
    // spesifikasi table
    public $table = "gajipegawai_2111501769";
    // deaktivasi column created_at dan updated_at
    public $timestamps = false;
    // Mengurusi inputtan dari form_gaji_karyawan
    public function input(Request $request){
        // 1 | Ambil data dari form
        // NIP karyawan
        $nip = $request->input('nip');
        // Nama karyawan
        $nama = $request->input('nama');
        // Jenis kelamin dari radio
        $jenkel = $request->input('rjk');
        // Status dari radio
        $status = $request->input('radiostatus');
        // Gaji Pokok
        $gajipokok = $request->input('gajipokok');
        // 1b | Tentukan nilai variable 

        // tunjangan keluarga
        if($status=="nikah"){
            $tunjangankeluarga = 250000;
        }else{
            $tunjangankeluarga = 0;
        }

        // pajak
        if($jenkel=="L"){
            // jika jenkel laki-laki
            $pajak = (10/100)*($gajipokok+$tunjangankeluarga);
        }else{
            // jika jenkel perempuan
            $pajak = (5/100)*($gajipokok+$tunjangankeluarga);
        }
        
        // perhitungan gaji total
        $gajitotal = $gajipokok+$tunjangankeluarga-$pajak;
        // 1c | Cek jikalau ada
        // 2 | Simpan data kedalam database
        GajiKaryawan::create([
            'nip'=>$nip,
            'nama'=>$nama,
            'jeniskelamin'=>$jenkel,
            'status'=>$status,
            'gapok'=>$gajipokok,
            'tunjangankeluarga'=>$tunjangankeluarga,
            'pajak'=>$pajak,
            'total'=>$gajitotal
        ]);

        // kembalikan user ke laman form_gaji_karyawan
        return redirect()->intended('/form_gaji_karyawan');
    }

    // menampilkan laman form_gaji_karyawan
    public function laman(){
        return view('form_gaji_karyawan',[
            'title'=>'Form Gaji Karyawan PT XYZ'
        ]);
    }

    // tampilkan data dari database
    public function retrieve(){
        return view('daftar_gaji_karyawan',[
            'title'=>'Daftar Gaji Karyawan PT XYZ',
            'karyawan'=>GajiKaryawan::all()
        ]);
    }
}
