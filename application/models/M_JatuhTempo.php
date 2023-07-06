<?php

class M_JatuhTempo extends CI_Model
{

    // Menampilkan Data Jatuh Tempo
    public function JatuhTempo($day)
    {
        $convertDate        = explode("-", $day);

        $tahun              = $convertDate[0];
        $bulan              = $convertDate[1];
        $tanggal            = $convertDate[2];

        if ($bulan == 02 && $tanggal == 28) {
            $query   = $this->db->query("SELECT 
                client.id, client.code_client, client.phone, client.name,  
                client.name_pppoe, client.password_pppoe, client.id_pppoe, client.address, client.email, 
                DAY(client.start_date) as tanggal, client.stop_date, client.description,
                data_pembayaran.order_id, data_pembayaran.gross_amount, data_pembayaran.biaya_admin, 
                data_pembayaran.nama_admin, data_pembayaran.nama, data_pembayaran.keterangan, data_pembayaran.payment_type, data_pembayaran.transaction_time, data_pembayaran.expired_date,
                data_pembayaran.bank, data_pembayaran.va_number, data_pembayaran.permata_va_number, data_pembayaran.payment_code, data_pembayaran.bill_key, 
                data_pembayaran.biller_code, data_pembayaran.pdf_url, data_pembayaran.status_code, paket.name as nama_paket, paket.price as harga_paket

                FROM client
                LEFT JOIN paket ON client.id_paket = paket.id
                LEFT JOIN data_pembayaran ON client.name_pppoe = data_pembayaran.nama

                AND MONTH(data_pembayaran.transaction_time) = '$bulan' AND YEAR(data_pembayaran.transaction_time) = '$tahun'

                WHERE client.start_date BETWEEN '2020-01-01' AND '$day'
                AND data_pembayaran.transaction_time IS NULL AND  client.stop_date IS NULL
                AND paket.name != 'Free 20 Mbps' AND DAY(client.start_date) >= '$tanggal'

                GROUP BY client.name_pppoe
                ORDER BY DAY(client.start_date) ASC");

            return $query->result_array();
        } else {
            $query   = $this->db->query("SELECT 
                client.id, client.code_client, client.phone, client.name,  
                client.name_pppoe, client.password_pppoe, client.id_pppoe, client.address, client.email, 
                DAY(client.start_date) as tanggal, client.stop_date, client.description,
                data_pembayaran.order_id, data_pembayaran.gross_amount, data_pembayaran.biaya_admin, 
                data_pembayaran.nama_admin, data_pembayaran.nama, data_pembayaran.keterangan, data_pembayaran.payment_type, data_pembayaran.transaction_time, data_pembayaran.expired_date,
                data_pembayaran.bank, data_pembayaran.va_number, data_pembayaran.permata_va_number, data_pembayaran.payment_code, data_pembayaran.bill_key, 
                data_pembayaran.biller_code, data_pembayaran.pdf_url, data_pembayaran.status_code, paket.name as nama_paket, paket.price as harga_paket

                FROM client
                LEFT JOIN paket ON client.id_paket = paket.id
                LEFT JOIN data_pembayaran ON client.name_pppoe = data_pembayaran.nama

                AND MONTH(data_pembayaran.transaction_time) = '$bulan' AND YEAR(data_pembayaran.transaction_time) = '$tahun'

                WHERE client.start_date BETWEEN '2020-01-01' AND '$day'
                AND data_pembayaran.transaction_time IS NULL AND  client.stop_date IS NULL
                AND paket.name != 'Free 20 Mbps' AND DAY(client.start_date) = '$tanggal'

                GROUP BY client.name_pppoe
                ORDER BY DAY(client.start_date) ASC");

            return $query->result_array();
        }
    }

    // Menampilkan Jumlah Jatuh Tempo
    public function JumlahJatuhTempo($day)
    {
        $convertDate        = explode("-", $day);

        $tahun              = $convertDate[0];
        $bulan              = $convertDate[1];
        $tanggal            = $convertDate[2];

        if ($bulan == 02 && $tanggal == 28) {
            $query   = $this->db->query("SELECT 
                client.id, client.code_client, client.phone, client.name,  
                client.name_pppoe, client.password_pppoe, client.id_pppoe, client.address, client.email, 
                DAY(client.start_date) as tanggal, client.stop_date, client.description,
                data_pembayaran.order_id, data_pembayaran.gross_amount, data_pembayaran.biaya_admin, 
                data_pembayaran.nama_admin, data_pembayaran.nama, data_pembayaran.keterangan, data_pembayaran.payment_type, data_pembayaran.transaction_time, data_pembayaran.expired_date,
                data_pembayaran.bank, data_pembayaran.va_number, data_pembayaran.permata_va_number, data_pembayaran.payment_code, data_pembayaran.bill_key, 
                data_pembayaran.biller_code, data_pembayaran.pdf_url, data_pembayaran.status_code, paket.name as nama_paket, paket.price as harga_paket

                FROM client
                LEFT JOIN paket ON client.id_paket = paket.id
                LEFT JOIN data_pembayaran ON client.name_pppoe = data_pembayaran.nama

                AND MONTH(data_pembayaran.transaction_time) = '$bulan' AND YEAR(data_pembayaran.transaction_time) = '$tahun'

                WHERE client.start_date BETWEEN '2020-01-01' AND '$day'
                AND data_pembayaran.transaction_time IS NULL AND  client.stop_date IS NULL
                AND paket.name != 'Free 20 Mbps' AND DAY(client.start_date) >= '$tanggal'

                GROUP BY client.name_pppoe
                ORDER BY DAY(client.start_date) ASC");

            return $query->num_rows();
        } else {
            $query   = $this->db->query("SELECT 
                client.id, client.code_client, client.phone, client.name,  
                client.name_pppoe, client.password_pppoe, client.id_pppoe, client.address, client.email, 
                DAY(client.start_date) as tanggal, client.stop_date, client.description,
                data_pembayaran.order_id, data_pembayaran.gross_amount, data_pembayaran.biaya_admin, 
                data_pembayaran.nama_admin, data_pembayaran.nama, data_pembayaran.keterangan, data_pembayaran.payment_type, data_pembayaran.transaction_time, data_pembayaran.expired_date,
                data_pembayaran.bank, data_pembayaran.va_number, data_pembayaran.permata_va_number, data_pembayaran.payment_code, data_pembayaran.bill_key, 
                data_pembayaran.biller_code, data_pembayaran.pdf_url, data_pembayaran.status_code, paket.name as nama_paket, paket.price as harga_paket

                FROM client
                LEFT JOIN paket ON client.id_paket = paket.id
                LEFT JOIN data_pembayaran ON client.name_pppoe = data_pembayaran.nama

                AND MONTH(data_pembayaran.transaction_time) = '$bulan' AND YEAR(data_pembayaran.transaction_time) = '$tahun'

                WHERE client.start_date BETWEEN '2020-01-01' AND '$day'
                AND data_pembayaran.transaction_time IS NULL AND  client.stop_date IS NULL
                AND paket.name != 'Free 20 Mbps' AND DAY(client.start_date) = '$tanggal'

                GROUP BY client.name_pppoe
                ORDER BY DAY(client.start_date) ASC");

            return $query->num_rows();
        }
    }

    // Menampilkan Jumlah Nominal Belum Lunas
    public function NominalJatuhTempo($day)
    {
        $convertDate        = explode("-", $day);

        $tahun              = $convertDate[0];
        $bulan              = $convertDate[1];
        $tanggal            = $convertDate[2];

        if ($bulan == 02 && $tanggal == 28) {
            $result   = $this->db->query("SELECT 
                SUM(paket.price) AS harga_paket
        
                FROM client 
                LEFT JOIN paket ON client.id_paket = paket.id
                LEFT JOIN data_pembayaran ON client.name_pppoe = data_pembayaran.nama
        
                AND MONTH(data_pembayaran.transaction_time) = '$bulan' AND YEAR(data_pembayaran.transaction_time) = '$tahun'
                
                WHERE client.start_date BETWEEN '2020-01-01' AND '$day'
                AND data_pembayaran.transaction_time IS NULL AND  client.stop_date IS NULL
                AND paket.name != 'Free 20 Mbps' AND DAY(client.start_date) >= '$tanggal'
                
                ");

            return $result->row();
            if ($result->num_rows() > 0) {
                return $result->row();
            } else {
                return false;
            }
        } else {
            $result   = $this->db->query("SELECT 
                SUM(paket.price) AS harga_paket
        
                FROM client 
                LEFT JOIN paket ON client.id_paket = paket.id
                LEFT JOIN data_pembayaran ON client.name_pppoe = data_pembayaran.nama
        
                AND MONTH(data_pembayaran.transaction_time) = '$bulan' AND YEAR(data_pembayaran.transaction_time) = '$tahun'
                
                WHERE client.start_date BETWEEN '2020-01-01' AND '$day'
                AND data_pembayaran.transaction_time IS NULL AND  client.stop_date IS NULL
                AND paket.name != 'Free 20 Mbps' AND DAY(client.start_date) = '$tanggal'
                
                ");

            return $result->row();
            if ($result->num_rows() > 0) {
                return $result->row();
            } else {
                return false;
            }
        }
    }

    // Invoice payment
    public function invoice()
    {
        $sql = "SELECT MAX(MID(order_id,8,4)) AS invoiceID 
        FROM data_pembayaran
        WHERE MID(order_id,4,4) = DATE_FORMAT(CURDATE(), '%y%m')";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $dataRow    = $query->row();
            $dataN      = ((int)$dataRow->invoiceID) + 1;
            $no         = sprintf("%'.04d", $dataN);
        } else {
            $no         = "0001";
        }

        $invoice = "INT" . date('ym') . $no;
        return $invoice;
    }

    // Pembayaran Pelanggan
    public function Payment($id_customer)
    {
        $query   = $this->db->query("SELECT 
            data_customer.id_customer, data_customer.kode_customer, data_customer.phone_customer, data_customer.nama_customer, data_customer.nama_paket, 
            data_customer.name_pppoe, data_customer.password_pppoe, data_customer.id_pppoe, data_customer.alamat_customer, data_customer.email_customer, 
            DAY(data_customer.start_date) as tanggal, data_customer.stop_date, data_customer.nama_area, data_customer.deskripsi_customer, data_customer.nama_sales,
            data_pembayaran.order_id, data_pembayaran.gross_amount, data_pembayaran.biaya_admin, 
            data_pembayaran.nama_admin, data_pembayaran.keterangan, data_pembayaran.payment_type, data_pembayaran.transaction_time, data_pembayaran.expired_date,
            data_pembayaran.bank, data_pembayaran.va_number, data_pembayaran.permata_va_number, data_pembayaran.payment_code, data_pembayaran.bill_key, 
            data_pembayaran.biller_code, data_pembayaran.pdf_url, data_pembayaran.status_code, data_paket.nama_paket as namaPaket, data_paket.harga_paket

            FROM data_customer
            LEFT JOIN data_paket ON data_customer.nama_paket = data_paket.nama_paket
            LEFT JOIN data_pembayaran ON data_customer.name_pppoe = data_pembayaran.name_pppoe

            WHERE data_customer.id_customer = '$id_customer'
    
            GROUP BY data_customer.name_pppoe
            ORDER BY DAY(data_customer.start_date) ASC");

        return $query->result_array();
    }

    // Check duplicate pembayaran
    public function CheckDuplicatePayment($bulan, $tahun, $nama)
    {
        $this->db->select('name_pppoe, nama_paket, status_code, transaction_time, MONTH(transaction_time) as bulan_payment, YEAR(transaction_time) as tahun_payment');
        $this->db->where('MONTH(transaction_time)', $bulan);
        $this->db->where('YEAR(transaction_time)', $tahun);
        $this->db->where('name_pppoe', $nama);

        $this->db->limit(1);
        $result = $this->db->get('data_pembayaran');

        return $result->row();
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
}
