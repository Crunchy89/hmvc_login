<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function user_rules(){
    return [
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
      'field' => 'level',
      'label' => 'Level',
      'rules'  => 'required',
      'errors' => array(
          'required' => 'Field %s tidak boleh kosong'
      )
      ],
      [
        'field' => 'status',
        'label' => 'Status',
        'rules'  => 'required',
        'errors' => array(
            'required' => 'Field %s tidak boleh kosong'
        )
        ]

    ];
  }

  public function edit_rules(){
    return [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules'  => 'trim|required',
        'errors' => array(
            'required' => 'Field %s tidak boleh kosong'
        )
        ],
    [
      'field' => 'level',
      'label' => 'Level',
      'rules'  => 'required',
      'errors' => array(
          'required' => 'Field %s tidak boleh kosong'
      )
      ],
      [
        'field' => 'status',
        'label' => 'Status',
        'rules'  => 'required',
        'errors' => array(
            'required' => 'Field %s tidak boleh kosong'
        )
        ]
    ];
  }

    public function getUser(){
      return  $this->db->get('pengguna')->result();
    }
    public function getUser_where($id){
      return  $this->db->get_where('pengguna',['id_pengguna' => $id ])->row_array();
    }

    public function user_save(){
    $nama=htmlspecialchars($this->input->post('nama'));
    $username=htmlspecialchars($this->input->post('username'));
    $password=htmlspecialchars($this->input->post('password'));
    $level=htmlspecialchars($this->input->post('level'));
    $status=htmlspecialchars($this->input->post('status'));
    $cek=$this->db->get_where('pengguna',['username' => $username])->row_array();
    if($cek){
        $this->session->set_flashdata('ada','<div class="card-alert card red lighten-5">
        <div class="card-content red-text center-align">
        <p>Username sudah terpakai</p>
        </div>
        </div>');
        redirect('admin/form_tambah_user');
    }else{
        $this->db->set('nama_lengkap',$nama);
        $this->db->set('username',$username);
        $this->db->set('password',$password);
        $this->db->set('level',$level);
        $this->db->set('status',$status);
        $this->db->insert('pengguna');
        $this->session->set_flashdata('message','<div class="card-alert card green lighten-5">
        <div class="card-content green-text center-align">
        <p>User berhasil ditambah</p>
        </div>
        </div>');
        redirect('user');
    }
    }

    public function user_edit(){
    
    $id=htmlspecialchars($this->input->post('id'));
    $nama=htmlspecialchars($this->input->post('nama'));
    $level=htmlspecialchars($this->input->post('level'));
    $status=htmlspecialchars($this->input->post('status'));
    $this->db->set('nama_lengkap',$nama);
    $this->db->set('level',$level);
    $this->db->set('status',$status);
    $this->db->where('id_pengguna',$id);
    $this->db->update('pengguna');
    $this->session->set_flashdata('message','<div class="card-alert card green lighten-5">
        <div class="card-content green-text center-align">
        <p>Data Berhasil Diubah</p>
        </div>
        </div>');
        redirect('admin/user');
    }

    public function user_delete(){
      $id=$this->uri->segment('3');
      $this->db->where('id_pengguna',$id);
      $this->db->delete('pengguna');
      redirect('admin/user');
    }

    public function signOut(){
    $this->session->unset_userdata('siteman');
    $this->session->unset_userdata('id');
    $this->session->unset_userdata('nama');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
	$this->session->sess_destroy();
	redirect('auth');
    }

}