<div class="container">
  <div class="page-header">
    <h1>Short and Share</h1>
    <p>Texto</p>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php if($error){ ?>
        <div class="alert alert-danger" role="alert"><?=$error?></div>
        <?php } ?>
        <form class="" action="<?php base_url() ?>" method="post">
          <label class="cold-md-8 col-md-offset-2">
            <input type="text" name="address" class="form-control" placeholder="URL">
          </label>
          <label  class="col-md-2">
            <input type="submit" class="btn btn-success" value="Encurtar">
          </label>
        </form>
        <div class="col-md-8 col-md-offset-2 col-sm-12">
          <?php if($short_url){ ?>
          <p class="text-center"><a href="<?php $short_url; ?>" target="_blank"><?php $short_url ?></a></p>
          <?php } ?>
      </div>
    </div>
  </div>
