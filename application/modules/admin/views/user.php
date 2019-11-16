<h3 class="center-align">Users Menu</h3>

<div class="row">
<?=$this->session->flashdata('message');?>
<a href="<?=site_url('admin/form_tambah_user')?>" class="btn tooltipped green animate fadeUp"  data-position="top" data-tooltip="Tambah User"><i class="material-icons ">add</i></a>

<table class="striped highlight responsive-table animate fadeLeft">
        <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Username</th>
              <th>Level</th>
              <th>Status</th>
              <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
        <?php $i=1;
        foreach($user as $row):?>
          <tr>
            <td><?=$i++?></td>
            <td><?=$row->nama_lengkap?></td>
            <td><?=$row->username?></td>
            <td><?=$row->level?></td>
            <td><?=$row->status?></td>
            <td>
            <a href="<?=site_url('admin/form_edit_user/').$row->id_pengguna?>" class="btn tooltipped blue"  data-position="top" data-tooltip="Edit"><i class="material-icons ">create</i></a>
            <a href="<?=site_url('admin/deleteUser/').$row->id_pengguna?>" class=" btn tooltipped red"  data-position="top" data-tooltip="Hapus""><i class="material-icons">delete</i></a>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>

</div>