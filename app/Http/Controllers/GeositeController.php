<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Sejarah;
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
             'sejarah' => $geositeId
                ? Sejarah::where('geosite_id', $geositeId)
                    ->where('status', true)
                    ->get()
                : collect(),
        
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

public function pelabuhan_ambarita()
{
    $data = $this->geositeData('pelabuhan');

    return view('geosite.Pelabuhan_Ambarita', $data);
}

public function air_terjun_sigarantung()
{
    $data = $this->geositeData('sigarantung');

    return view('geosite.Air_Terjun_Sigarantung', $data);
}

public function tomok_parsaoran()
{
    $data = $this->geositeData('tomok');

    return view('geosite.Tomok_Parsaoran', $data);
}

public function huta_siallagan()
{
    $data = $this->geositeData('siallagan');

    return view('geosite.Huta_Siallagan', $data);
}
}