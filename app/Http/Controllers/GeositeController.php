<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Penginapan;
use App\Models\Fasilitas;
use App\Models\Geosite;

class GeositeController extends Controller
{
    /**
     * Helper: ambil data berdasarkan nama geosite
     */
    private function geositeData(string $keyword): array
    {
        $geosite = Geosite::whereRaw(
            'LOWER(nama) LIKE ?',
            ['%' . strtolower($keyword) . '%']
        )->first();

        $geositeId = $geosite?->id;

        return [
            'umkm' => $geositeId
                ? Umkm::where('geosite_id', $geositeId)
                    ->where('status', true)
                    ->get()
                : collect(),

            'penginapan' => $geositeId
                ? Penginapan::where('geosite_id', $geositeId)
                    ->where('status', true)
                    ->get()
                : collect(),

            'fasilitas' => $geositeId
                ? Fasilitas::where('geosite_id', $geositeId)
                    ->where('status', true)
                    ->get()
                : collect(),
        ];
    }

    public function tuktuk_siadong()
    {
        $data = $this->geositeData('tuktuk');

        return view('geosite.Tuktuk_Siadong', $data);
    }


    public function bukit_beta_tuktuk()
    {
        $data = $this->geositeData('beta');

        return view('geosite.Bukit_Beta_Tuktuk', $data);
    }


    public function desa_tomok()
    {
        $data = $this->geositeData('tomok');

        return view('geosite.Desa_Tomok', $data);
    }


    public function makam_raja_sidabutar()
    {
        $data = $this->geositeData('sidabutar');

        return view('geosite.Makam_Raja_Sidabutar', $data);
    }


    public function pertunjukan_sigalegale()
    {
        $data = $this->geositeData('sigale');

        return view('geosite.Pertunjukan_Sigalegale', $data);
    }


    public function batu_marhosa()
    {
        $data = $this->geositeData('marhosa');

        return view('geosite.Batu_Marhosa', $data);
    }

   
    public function pasar_souvenir_tomok()
    {
        $data = $this->geositeData('souvenir');

        return view('geosite.Pasar_Souvenir_Tomok', $data);
    }


    public function huta_siallagan()
    {
        $data = $this->geositeData('siallagan');

        return view('geosite.Huta_Siallagan', $data);
    }


    public function kursi_batu_persidangan()
    {
        $data = $this->geositeData('persidangan');

        return view('geosite.Kursi_Batu_Persidangan', $data);
    }


    public function museum_huta_siallagan()
    {
        $data = $this->geositeData('museum');

        return view('geosite.Museum_Huta_Siallagan', $data);
    }


    public function rumah_adat_batak_ambarita()
    {
        $data = $this->geositeData('ambarita');

        return view('geosite.Rumah_Adat_Batak_Ambarita', $data);
    }
}