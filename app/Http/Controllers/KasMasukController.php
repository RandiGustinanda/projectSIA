<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $km = \App\Models\KasMasuk::All();
        return view( 'kasmasuk.kasmasuk' , ['kasmasuk' => $km]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $akun = \App\Models\Akun::All();
        $akun2 = Akun::paginate(3);
        $AWAL = 'KM';
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII"
        ,"IX","X", "XI","XII");
        $noUrutAkhir = \App\Models\KasMasuk::max('id');
        $nomorawal=$noUrutAkhir+1;
        $no = 1;
            if($noUrutAkhir) {
                //echo "No urut surat di database : " . $noUrutAkhir;
                //echo "<br>";
                $nomor=sprintf($AWAL . '-' ."%05s", abs($noUrutAkhir + 1));
            }
            else{
                //echo "No urut surat di database : 0" ;
                //echo "<br>";
                $nomor=sprintf($AWAL . '-' ."%05s", $no);
            }
            return view('kasmasuk.input', ['nomor'=>$nomor,'nomorawal'=>$nomorawal,'akun'=>$akun,'akn'=>$akun2]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save_km = new \App\Models\KasKeluar;
        $save_km->nokm=$request->get('notrans');
        $save_km->tglkm=$request->get('tgltr');
        $save_km->memokm=$request->get('memo');
        $save_km->jmkm=$request->get('total');
        $save_km->save();
        //Menyimpan Data Ke Tabel Buku_Besar
        $savebb= new \App\Models\BukuBesar;
        $savebb->idtrans=$request->get('idkm');
        $savebb->notran=$request->get('notrans');
        $savebb->catatan=$request->get('memo');
        $savebb->jmldb=$request->get('total');
        $savebb->jmlcr=0;
        $savebb->save();
        //Menyimpan Data Ke Tabel Kas_Keluar_det
        for($i=1;$i<=3;$i++)
        {
            $idkk=$request->get('idkk');
            $idakn=$request->get('idakun'.$i);
            $nil=$request->get('txt'.$i);
                if($idakn==0 or $nil==0 or empty($idakn))
                {
                    return redirect()->route( 'kaskeluar.index' );
                }
                else{
                    $savedet = new \App\Models\KasKeluarDet;
                    $savedet->idkk=$idkk;
                    $savedet->idakun=$idakn;
                    $savedet->nilcr=$nil;
                    $savedet->save();
                }
}
return redirect()->route( 'kaskeluar.index' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
