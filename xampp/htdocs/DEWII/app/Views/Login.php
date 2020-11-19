<?= $this->extend('Layoutdewi/template'); ?>
<?= $this->section('content'); ?>



<form action = "Login/verif/" method="post">
  <div class="form-group">
  <h1 class="text-center text primary mt-3"></h1> 
  <h1 class="text-hide" style="background-image: url('logo unila');">Bootstrap</h1>


    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<?= $this->endSection(); ?>