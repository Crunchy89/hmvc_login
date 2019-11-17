<div class="col s12 m12 l12">
    <div id="Form-advance" class="card card card-default scrollspy">
<h3 class="center-align animate fadeUp">Edit Data</h3>
        <div class="card-content">
<h4 class="card-title animate fadeUp">Form Advance</h4>
        <?=$this->session->flashdata('ada')?>
            <form class="col s12" action="<?=site_url('admin/form_edit_user')?>" method="post">
                <div class="row">
                    <div class="input-field col s12 animate fadeLeft">
                        <input type="hidden" name="id" value="<?=$this->uri->segment('3')?>">
                        <input id="nama" type="text" name="nama" value="<?=$user['nama_lengkap']?>">
                        <?php if(form_error('nama')):?>
                        <label for="nama" class="center-align red-text"><?=form_error('nama')?></label>
                        <?php else:?>
                        <label for="nama" class="center-align">Nama Lengkap</label>
                        <?php endif;?>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6 s12  animate fadeRight">
                        <div class="select-wrapper">
                            <select tabindex="-1" name="level" id="level">
                                <option value="<?=$user['level']?>">Choose Level</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select></div>
                        <?php if(form_error('level')):?>
                        <label for="level" class="center-align red-text"><?=form_error('level')?></label>
                        <?php else:?>
                        <label for="level" class="center-align">Level</label>
                        <?php endif;?>
                    </div>
                    <div class="input-field col m6 s12  animate fadeLeft">
                        <div class="select-wrapper">
                            <select tabindex="-1" name="status" id="status">
                                <option value="<?=$user['status']?>">Choose Status</option>
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select></div>
                        <?php if(form_error('status')):?>
                        <label for="status" class="center-align red-text"><?=form_error('status')?></label>
                        <?php else:?>
                        <label for="status" class="center-align">Status</label>
                        <?php endif;?>
                    </div>
                </div>
                <div class="row animate fadeUp">
                    <div class="input-field col m6 s12">
                        <a href="<?=site_url('admin/user')?>" class="btn red waves-effect waves-light right">Kembali
                            <i class="material-icons left">replay</i>
                        </a>
                    </div>
                    <div class="input-field col m6 s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit">Simpan
                            <i class="material-icons right">sd_card</i>
                        </button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>