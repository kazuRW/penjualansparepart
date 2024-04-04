<?php
defined('BASEPATH') OR exit('Tidak ada Halaman Akses');

class Ongkoskirim extends CI_Controller {

    public function index()
    {

        // menampilkan kota dari API Raja Ongkir
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: 42786554a696314293041fc9ce5ee72d"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        // echo "cURL Error #:" . $err;
        $data['kota'] = array('error'=>true);
        } else {
        // echo $response;
        $data['kota'] = json_decode($response);
        }
        // print_r($data['kota']);
        $this->load->view('ongkoskirim',$data);
    }

    // cek ongkir
    function cekongkir()
    {

        $asal_kota = $this->input->post('asal');
        $tujuan_kota = $this->input->post('tujuan');
        $berat = $this->input->post('berat');
        $kurir = $this->input->post('kurir');   
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "origin=".$asal_kota."&destination=".$tujuan_kota."&weight=".$berat."&courier=".$kurir,
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 42786554a696314293041fc9ce5ee72d"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        // echo "cURL Error #:" . $err;
        $data['hasil'] = array('error'=>true);
        } else {
        // echo $response;
        $data['hasil'] = json_decode($response);
        }
        // print_r($data['hasil']);
        $this->load->view('hasil', $data);
    }
}