<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('changeDateFormat')) {
    function changeDateFormat($format = 'd-m-Y', $givenDate = null)
    {
        return date($format, strtotime($givenDate));
    }
}

class C_API_TerminasiPelanggan extends CI_Controller
{
    public function ApiTerminasi()
    {
        // Mengambil data terminasi pelanggan
        $dataPelanggan = $this->M_TerminasiPelanggan->TerminasiPelanggan();

        // Menyiapkan data untuk dikirim sebagai respons JSON
        $responseData = array(
            'DataPelanggan' => $dataPelanggan,
        );

        // Mengirim respons dalam format JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($responseData));
    }
}
