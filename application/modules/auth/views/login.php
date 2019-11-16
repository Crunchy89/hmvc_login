
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8 animate fadeUp">
    <form class="login-form" action="<?=site_url('auth/index')?>" method="post">
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4 center-align">Sign in</h5>
        </div>
      </div>
      <?=$this->session->flashdata('message');?>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="username" type="text" name="username" value="<?= set_value('username')?>">
          <?php if(form_error('username')):?>
          <label for="username" class="center-align red-text"><?=form_error('username')?></label>
          <?php else:?>
          <label for="username" class="center-align">Username</label>
          <?php endif;?>
        </div>
      </div>               

      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" name="password">
          <?php if(form_error('password')):?>
          <label for="password" class="center-align red-text"><?=form_error('password')?></label>
          <?php else:?>
          <label for="password" class="center-align">Password</label>
          <?php endif;?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field center-align col s12">
          <p class="margin medium-small"><a href="<?=site_url('auth/register')?>">Register Now!</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
        </div>
      </div>
    </div>

