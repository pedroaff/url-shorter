<div class="container">
  <?php if($error){ ?>
    <div class="alert alert-danger" role="alert"><?=$error?></div>
  <?php } ?>
  <div class="cold-md-4 col-md-offset-1">
    <h2 class="col-md-12">Login</h2>
    <form action="<?=base_url('login')?>" method="post">
      <label class="cold-md-12">
        <input type="text" name="email" placeholder="Email" required="required" class="form-control"/>
      </label>
      <label class="col-md-12">
        <input type="password" placeholder="Password" class="form-control" name="passw" required="required"/>
      </label>
      <label class="cold-md-12">
        <input type="submit" value="Log in" class="btn btn-success"/>
      </label>
    </form>
  </div>
  <div class="cold-md-4 col-md-offset-1">
    <h2 class="col-md-12">Register</h2>
    <form action="<?=base_url('user/register')?>" method="post">
      <label class="col-md-12">
        <input type="text" class="form-control" placeholder="Name" name="name"/>
      </label>
      <label class="col-md-12">
        <input type="password" placeholder="Password" class="form-control" name="passw" required="required"/>
      </label>
      <label class="col-md-12">
        <input type="submit" class="btn btn-success" value="Go"/>
      </label>
    </form>
  </div>
</div>
