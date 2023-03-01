<?php

    function cek_ready_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('id_pegawai');
        if ($user_session) {
            redirect('Admin/Dashboard');
        }
    }
    function cek_no_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('id_pegawai');
        if (!$user_session) {
            redirect('Auth');
        }
    }
?>