<h1>Subscribe</h1>
<div class="container">
<form action="" method="post">
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Full Name"  name="user">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Email" name="email">
  </div>
  <!--Radio Buttons -->
  <div class="form-check col">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="snail">
    <label class="form-check-label" for="flexRadioDefault1">
        Snail Mail
    </label>
    </div>
  <div class="form-check col">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="email" checked>
    <label class="form-check-label" for="flexRadioDefault2">
    Email Mail
    </label>
</div>
</div>
<div class="row">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="php" id="flexCheckDefault" name="learn[]">
  <label class="form-check-label" for="flexCheckDefault">
    Default checkbox
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="js" id="flexCheckChecked" name="learn[]" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Checked checkbox
  </label>
</div>
</div>
<select name="sel" class="form-select" aria-label="Default select example">
  <option value="0" selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
    <button class="btn btn-primary">Click Here</button>

</form>
</div>