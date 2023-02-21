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