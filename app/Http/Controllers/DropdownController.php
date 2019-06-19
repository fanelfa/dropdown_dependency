<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{
    public function getProvinsi()
    {
        $countries = DB::table('indoregion_provinces')->pluck("name", "id");
        return view('dropdown2', compact('countries'));
    }

    public function getKota($id)
    {
        $states = DB::table( "indoregion_regencies")->where("province_id", $id)->pluck("name", "id");
        return json_encode($states);
    }

    public function getKecamatan($id)
    {
        $kecamatan = DB::table("indoregion_districts")->where("regency_id", $id)->pluck("name", "id");
        return json_encode($kecamatan);
    }

    public function getDesa($id)
    {
        $desa = DB::table("indoregion_villages")->where("district_id", $id)->pluck("name", "id");
        return json_encode($desa);
    }
}
