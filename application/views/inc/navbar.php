<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Kuta Raja Lovers</a>
      <ul class="right hide-on-med-and-down">
        <li <?= (uri_string() == '' ? 'class="active"': ''); ?>><a href="<?= base_url() ?>">Home</a></li>
        <li <?= (uri_string() == 'klasemen' ? 'class="active"': ''); ?>><a href="<?= base_url() ?>klasemen">Klasemen</a></li>
        <li <?= (uri_string() == 'halte' ? 'class="active"': ''); ?>><a href="<?= base_url() ?>halte">Halte</a></li>
        <li <?= (uri_string() == 'login' ? 'class="active"': ''); ?>><a href="<?= base_url() ?>login">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="<?= base_url() ?>asset/img/office.jpg">
            </div>
            <a href="#user"><img class="circle" src="<?= base_url() ?>asset/img/yuna.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
          </div>
        </li>
        <li <?= (uri_string() == '' ? 'class="active"': ''); ?>><a href="<?= base_url() ?>">Home</a></li>
        <li <?= (uri_string() == 'klasemen' ? 'class="active"': ''); ?>><a href="<?= base_url() ?>klasemen">Klasemen</a></li>
        <li <?= (uri_string() == 'halte' ? 'class="active"': ''); ?>><a href="<?= base_url() ?>halte">Halte</a></li>
        <li <?= (uri_string() == 'login' ? 'class="active"': ''); ?>><a href="<?= base_url() ?>login">Login</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
