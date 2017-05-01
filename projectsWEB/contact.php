<?php include("master.php") ?>

  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" style="color:black;" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="phoneNumber">Phone Number</label>
      <input type="phone" class="form-control" id="phoneNumber" aria-describedby="emailHelp" placeholder="Enter phone number">

    </div>


    <div class="form-group">
      <label for="exampleTextarea">Questions or Comments...</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>

    <fieldset class="form-group">
      <legend></legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio"  class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Email me please!
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
          Call me please!
        </label>
      </div>
      <div class="form-check ">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3"  value="option3" >
          Either is convient: Email or Phone!
        </label>
      </div>
    </fieldset>

    <button type="submit" style="color:white; background-color:rgb(73, 72, 69);" class="btn btn-primary">Submit</button>
  </form>


<?php include("footer.php") ?>