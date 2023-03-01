<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penggajianModel extends CI_Model
{

    public function get_pegawaipagination($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan');
        $this->db->order_by('nama_pegawai', 'ASC');
        $this->db->limit($limit, $offset);

        return $this->db->get();
    }

    public function cek_user($username, $password)
    {
        $kondisi = array(
            'username' => $username,
            'password' => md5($password)
        );

        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->where($kondisi);
        $this->db->limit(1);
        return $this->db->get();
    }

    public function getPagination($limit, $start)
    {
        $this->db->select('pegawai.*', 'hak_akses.*');
        $this->db->join('akses', 'akses.hak_akses = pegawai.hak_akses');
        return $this->db->get('pegawai', $limit, $start)->result_array();
    }

    public function countAllpegawai()
    {
        return $this->db->get('pegawai')->num_rows();
    }

    public function filter()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from dborang where Name like '%$cari%' ");
        return $data->result();
    }

    public function absensi()
    {

        $idp = $this->session->userdata('id_pegawai');
        $date = date('d-m-Y');
        $query = $this->db->query("SELECT * FROM kehadiran WHERE tgl = '$date' AND id_pegawai = $idp")->reeult();
        $check = count($query);
    }

    public function create($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function get_allpegawai()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->order_by('nama_pegawai', 'ASC');

        return $this->db->get();
    }

    public function getDataPagination($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('jabatan');
        $this->db->order_by('nama_jabatan', 'ASC');
        $this->db->limit($limit, $offset);

        return $this->db->get();
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('jabatan');
        $this->db->order_by('nama_jabatan', 'ASC');

        return $this->db->get();
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function hitung_kehadiran()
    {
        $bulan = $this->input->get('bulan');
        $tahun = $this->input->get('tahun');

        $query = $this->db->query("SELECT kehadiran.id_kehadiran, kehadiran.id_pegawai, kehadiran.id_jabatan, pegawai.nik, pegawai.nama_pegawai, pegawai.jenis_kelamin, pegawai.status, 
        jabatan.nama_jabatan, gaji.gaji_pokok,
        COUNT(CASE WHEN kehadiran.id_keterangan = '1' then 1 ELSE NULL END) as 'total_hadir', 
        COUNT(CASE WHEN kehadiran.id_keterangan = '2' then 2 ELSE NULL END) as 'total_sakit', 
        COUNT(CASE WHEN kehadiran.id_keterangan = '3' then 2 ELSE NULL END) as 'total_alfa',
        COUNT(CASE WHEN kehadiran.id_bekerja = '1' then 1 ELSE NULL END) as 'total_wfo', 
        COUNT(CASE WHEN kehadiran.id_bekerja = '2' then 2 ELSE NULL END) as 'total_wfh' 
        from kehadiran INNER JOIN pegawai ON pegawai.id_pegawai = kehadiran.id_pegawai
        INNER JOIN jabatan ON jabatan.id_jabatan = kehadiran.id_jabatan
        INNER JOIN keterangan ON keterangan.id_keterangan = kehadiran.id_keterangan
        INNER JOIN gaji ON gaji.id_gaji = jabatan.id_gaji
        WHERE month(kehadiran.tgl) = '$bulan' and year(kehadiran.tgl) = '$tahun'
        GROUP BY pegawai.id_pegawai");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function hitung_hadir()
    {

        $query = $this->db->query("SELECT kehadiran.id_kehadiran, kehadiran.id_pegawai, kehadiran.id_jabatan, pegawai.nik, pegawai.nama_pegawai, 
        pegawai.tgl_join, kehadiran.status_transfer, pegawai.jenis_kelamin, pegawai.status, 
        jabatan.nama_jabatan, jabatan.gaji_harian, kehadiran.tgl,
        COUNT(CASE WHEN kehadiran.id_keterangan = '1' then 1 ELSE NULL END) as 'total_hadir',
        COUNT(CASE WHEN kehadiran.id_keterangan = '3' then 2 ELSE NULL END) as 'total_alfa',
        COUNT(CASE WHEN kehadiran.id_bekerja = '1' then 1 ELSE NULL END) as 'total_wfo', 
        COUNT(CASE WHEN kehadiran.id_bekerja = '2' then 2 ELSE NULL END) as 'total_wfh' 
        from kehadiran INNER JOIN pegawai ON pegawai.id_pegawai = kehadiran.id_pegawai
        INNER JOIN jabatan ON jabatan.id_jabatan = kehadiran.id_jabatan
        INNER JOIN keterangan ON keterangan.id_keterangan = kehadiran.id_keterangan
        GROUP BY pegawai.id_pegawai LIMIT 5");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function slip_gaji()
    {
        $bulan = $this->input->get('bulan');
        $tahun = $this->input->get('tahun');

        $query = $this->db->query("SELECT kehadiran.id_kehadiran, kehadiran.id_pegawai, kehadiran.id_jabatan, pegawai.nik, 
        pegawai.nama_pegawai, pegawai.jenis_kelamin, pegawai.status, jabatan.nama_jabatan,pegawai.tgl_join,
        kehadiran.status_transfer, gaji.gaji_pokok, gaji.uang_makan,
        COUNT(CASE WHEN kehadiran.id_keterangan = '1' then 1 ELSE NULL END) as 'total_hadir', 
        COUNT(CASE WHEN kehadiran.id_keterangan = '2' then 2 ELSE NULL END) as 'total_sakit', 
        COUNT(CASE WHEN kehadiran.id_keterangan = '3' then 2 ELSE NULL END) as 'total_alfa',
        COUNT(CASE WHEN kehadiran.id_bekerja = '1' then 1 ELSE NULL END) as 'total_wfo', 
        COUNT(CASE WHEN kehadiran.id_bekerja = '2' then 2 ELSE NULL END) as 'total_wfh' 
        from kehadiran INNER JOIN pegawai ON pegawai.id_pegawai = kehadiran.id_pegawai
        INNER JOIN jabatan ON jabatan.id_jabatan = kehadiran.id_jabatan
        INNER JOIN keterangan ON keterangan.id_keterangan = kehadiran.id_keterangan
        INNER JOIN gaji ON gaji.id_gaji = jabatan.id_gaji
        INNER JOIN bekerja ON bekerja.id_bekerja = kehadiran.id_bekerja
        WHERE month(kehadiran.tgl) = '$bulan' and year(kehadiran.tgl) = '$tahun'
        GROUP BY pegawai.id_pegawai");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function cetak_hadir()
    {

        // $where = array('id_pegawai' => $id);

        $query1 = $this->db->query("SELECT kehadiran.id_kehadiran, kehadiran.id_pegawai, kehadiran.id_jabatan, pegawai.nik, pegawai.nama_pegawai, pegawai.tgl_join, pegawai.status_transfer, pegawai.bukti_transfer, pegawai.jenis_kelamin, pegawai.status, jabatan.nama_jabatan, jabatan.gaji_harian,
        COUNT(CASE WHEN kehadiran.id_keterangan = '1' then 1 ELSE NULL END) as 'total_hadir',
        COUNT(CASE WHEN kehadiran.id_keterangan = '3' then 2 ELSE NULL END) as 'total_alfa' 
        from kehadiran INNER JOIN pegawai ON pegawai.id_pegawai = kehadiran.id_pegawai
        INNER JOIN jabatan ON jabatan.id_jabatan = kehadiran.id_jabatan
        INNER JOIN keterangan ON keterangan.id_keterangan = kehadiran.id_keterangan
        
        GROUP BY kehadiran.id_pegawai");
        if ($query1->num_rows() > 0) {
            return $query1->result();
        }
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function search_jabatan($keywoard)
    {
        $this->db->select('jabatan.*, gaji.*');
        $this->db->from('jabatan');
        $this->db->join('gaji', 'gaji.id_gaji = jabatan.id_gaji');
        $this->db->like('nama_jabatan', $keywoard);
        return $this->db->get()->result();
    }

    public function search_kelgaji($keywoard)
    {
        $this->db->select('gaji.*');
        $this->db->from('gaji');
        $this->db->like('gaji_pokok', $keywoard);
        return $this->db->get()->result();
    }


    public function search_pegawai($search)
    {
        $this->db->select('pegawai.*, jabatan.*');
        $this->db->from('pegawai');
        $this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan');
        $this->db->like('nik', $search);
        $this->db->or_like('nama_pegawai', $search);
        return $this->db->get()->result();
    }
    public function search_datagaji($search)
    {
        $this->db->query("SELECT kehadiran.id_pegawai, kehadiran.id_jabatan, pegawai.nik, pegawai.nama_pegawai, pegawai.tgl_join, pegawai.status_transfer, pegawai.bukti_transfer, pegawai.jenis_kelamin, pegawai.status, jabatan.nama_jabatan, jabatan.gaji_harian, COUNT(CASE WHEN kehadiran.id_keterangan = '1' then 1 ELSE NULL END) as 'total_hadir', COUNT(CASE WHEN kehadiran.id_keterangan = '3' then 2 ELSE NULL END) as 'total_alfa' from kehadiran INNER JOIN pegawai ON pegawai.id_pegawai = kehadiran.id_pegawai INNER JOIN jabatan ON jabatan.id_jabatan = kehadiran.id_jabatan INNER JOIN keterangan ON keterangan.id_keterangan = kehadiran.id_keterangan GROUP BY pegawai.id_pegawai LIMIT 5");
        $this->db->like('nik', $search);
        $this->db->or_like('nama_pegawai', $search);
        $query = $this->db->get('kehadiran');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
}
