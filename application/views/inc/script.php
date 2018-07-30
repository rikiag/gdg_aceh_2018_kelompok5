<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/materialize.js"></script>
  <script src="<?php echo base_url() ?>asset/js/init.js"></script>

  <?php if (isset($script)) { $this->load->view($script); } ?>
