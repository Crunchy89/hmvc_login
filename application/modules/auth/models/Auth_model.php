<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{
    
public function reg_rules(){
    return[
        [
            'field' => 'nama',
            'label' => 'Nama',
            'rules'  => 'trim|required',
            'errors' => array(
                'required' => 'Field %s tidak boleh kosong'
            )
        ],
        [
            'field' => 'username',
            'label' => 'Username',
            'rules'  => 'trim|required',
            'errors' => array(
                'required' => 'Field %s tidak boleh kosong'
            )
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules'  => 'required|min_length[6]',
            'errors' => array(
                'required' => 'Field %s tidak boleh kosong',
                'min_length' => '%s minimal 6 karakter'

            )
        ],
        [
            'field' => 'password2',
            'label' => 'Confirm Password',
            'rules'  => 'required|matches[password]|min_length[6]',
            'errors' => array(
                'required' => 'Field %s ini tidak boleh kosong',
                'matches' => '%s tidak sama',
                'min_length' => '%s minimal 6 karakter'
            )
        ]

    ];
}

public function log_rules(){
    return [
        [
            'field' => 'username',
            'label' => 'Username',
            'rules'  => 'trim|required',
            'errors' => array(
                'required' => 'Field %s tidak boleh kosong'
            )
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules'  => 'required|min_length[6]',
            'errors' => array(
                'required' => 'Field %s tidak boleh kosong',
                'min_length' => '%s minimal 6 karakter'

            )
        ]
    ];
}

public function save(){
    $nama=htmlspecialchars($this->input->post('nama'));
    $username=htmlspecialchars($this->input->post('username'));
    $password=htmlspecialchars($this->input->post('password'));
    $cek=$this->db->get_where('pengguna',['username' => $username])->row_array();
    if($cek){
        $this->session->set_flashdata('ada','<div class="card-alert card red lighten-5">
        <div class="card-content red-text center-align">
        <p>Username sudah terpakai</p>
        </div>
        </div>');
        redirect('auth/register');

    }else{
        $this->db->set('nama_lengkap',$nama);
        $this->db->set('username',$username);
        $this->db->set('password',$password);
        $this->db->set('level','User');
        $this->db->set('status','inactive');
        $this->db->insert('pengguna');
        $this->session->set_flashdata('message','<div class="card-alert card green lighten-5">
        <div class="card-content green-text center-align">
        <p>Akun berhasil dibuat, Silahkan Login !!!</p>
        </div>
        </div>');
        redirect('auth');
    }
}

public function signIn(){
    $username=htmlspecialchars($this->input->post('username'));
    $password=htmlspecialchars($this->input->post('password'));
    $cek=$this->db->get_where('pengguna',['username' => $username])->row_array();
    if($cek){
        if($password == $cek['password']){
            $data=[
                'siteman' => $cek['id_pengguna']
            ];
            $this->session->set_userdata($data);
            redirect('admin');
        }else{
            $this->session->set_flashdata('message','<div class="card-alert card red lighten-5">
        <div class="card-content red-text center-align">
        <p>Username Atau Password salah</p>
        </div>
        </div>');
        redirect('auth');
        }
    }else{
        $this->session->set_flashdata('message','<div class="card-alert card red lighten-5">
        <div class="card-content red-text center-align">
        <p>Akun tidak ditemukan silahkan buat akun</p>
        </div>
        </div>');
        redirect('auth');
    }
}

}