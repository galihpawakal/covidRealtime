<?php

namespace App\Controllers;

class Covid extends BaseController
{
    public function index()
    {
        $url = "https://data.covid19.go.id/public/api/update.json";
        $dataJson = file_get_contents($url);
        $dataArray = json_decode($dataJson, true); //objek => , true = array
        $dataharian = $dataArray['update']['harian'];
        foreach ($dataharian as $values) {
            $labels[] = $values['key_as_string']; //sebagai tanggal
            $jumlahpositif[] = $values['jumlah_positif']['value']; // jumlah postif
            $jumlahsembuh[] = $values['jumlah_sembuh']['value']; //jumlah sembuh
            $jumlahdirawat[] = $values['jumlah_dirawat']['value']; //jumlah di rawat
            $jumlahmeninggal[] = $values['jumlah_meninggal']['value']; //jumlah di rawat


        }
        $data['labels'] = "'" . implode("','", $labels) . "'";
        $data['jumlahpositif'] = implode(",", $jumlahpositif);
        $data['jumlahsembuh'] = implode(",", $jumlahsembuh);
        $data['jumlahdirawat'] = implode(",", $jumlahdirawat);
        $data['jumlahmeninggal'] = implode(",", $jumlahmeninggal);

        return view('covid_view', $data);
    }
}
