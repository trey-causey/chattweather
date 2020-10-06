<main class="row">
  <div class="cell cell--s well--l">
      <div class="mbl">
          <form class="" action="index.php" method="post">
              <label for="date">Date of Sighting</label><br>
              <input type="text" name="date" value="">
              <hr>

              <label for="email">Email</label><br>
              <input type="text"  name="email" value="">
              <hr>

              <label for="zipcode">Zipcode</label><br>
              <input type="text"  name="zipcode" id="zipcode" value="">
              <hr>

              <label for="desc">Describe The Sighing</label><br>
              <textarea name="desc" rows="8" cols="40"></textarea>
              <br>

              <input type="submit" value="submitter" onclick="checkZip($('#zipcode').val())">

          </form>
      </div>
  </div>


</main>