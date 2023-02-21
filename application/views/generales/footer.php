        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-2022 ©.</p>
              </div>
              <div class="col-md-6">
              </div>
            </div>
          </div>
        </footer>
        </div>
        </div>
        <script>
          var base_url = "<?php echo base_url(); ?>";
        </script>
        <?php foreach ($estilosjs as $estilo) : ?>
          <script src="<?php echo base_url() . $estilo; ?>"></script>
        <?php endforeach ?>
        </body>
        </html>