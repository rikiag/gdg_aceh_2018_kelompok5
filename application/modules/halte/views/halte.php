<div class="container">
    <div class="section">

      <!--   Data Section   -->
      <div class="row">
        <div class="col s12 m12">
          <div class="card white">
            <div class="card-content ">
              <span class="card-title">Halte</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
      </div>

      <!--   Add Section   -->
      <div class="row">
        <div class="col s12 m12">
          <div class="card white">
            <div class="card-content ">
              <span class="card-title center-align">Tambah Halte</span>
              <div class="row">
                <?= form_open('halte/add', 'class="col s12 m8 offset-m2"'); ?>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="nama" name="nama" type="text" class="validate" required>
                      <label for="nama">Nama Halte</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 m6">
                      <input id="lat" name="lat" type="text" class="validate" required>
                      <label for="lat">Latitude</label>
                    </div>
                    <div class="input-field col s12 m6">
                      <input id="lng" name="lng" type="text" class="validate" required>
                      <label for="lng">Longitude</label>
                    </div>
                  </div>
                  <div class="row center-align">
                    <button class="waves-effect waves-light btn" type="submit">Tambah</button>
                  </div>
                <?= form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
