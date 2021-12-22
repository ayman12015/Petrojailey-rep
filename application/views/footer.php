<div id="footer">
        <div class="container-fluid">


          <div role="navigation" aria-labelledby="block-footer-menu" id="block-footer" class="footer-menu">


            <li class="menu">
              <a href="<?php echo base_url('home/about');?>" data-drupal-link-system-path="node/300" style="font-size:22px;">  <?php echo $this->lang->line('aboutus'); ?></a>
            </li>
            
            

            <li class="menu">
              <a href="<?php echo base_url('home/joinus');?>" data-drupal-link-system-path="node/254" style="font-size:22px;">  <?php echo $this->lang->line('joinus'); ?></a>
            </li>

            <li class="menu">
              <a href="<?php echo base_url('home/contact');?>" data-drupal-link-system-path="node/82" style="font-size:22px;">  <?php echo $this->lang->line('contact'); ?></a>
            </li>

            <li class="menu">
            <select onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
                           <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                           <option value="arabic" <?php if($this->session->userdata('site_lang') == 'arabic') echo 'selected="selected"'; ?>>العربيه</option>
    
                        </select>
            </li>

          </div>





          <div role="navigation" aria-labelledby="block-socialmedia-menu" id="block-socialmedia" class="footer-social">


            <li class="media">
              <i class="fa fa-facebook"></i>
            </li>

            <li class="media">
              <a href="" class="youtube" target="_blank">youtube</a>
            </li>

            <li class="media">
              <a href="" class="instagram" target="_blank">Instagram</a>
            </li>

            <li class="media">
              <a href="" class="facebook" target="_blank">FACEBOOK</a>
            </li>

            <li class="media">
              <a href="" class="linkedin" target="_blank">linkedin</a>
            </li>



          </div>


        </div>
        <div class="footer-bottom">
          <div class="copyright">
            <p style="font-size: 15px;color: #0000ff;">Copyright 2020 &copy; <strong>PETROJUILEY</strong>. All rights
              reserved.</p>
          </div>






        </div>
      </div>

    </div>

    <div id="searchoverlay" class="modal fade search-overlay" ref="searchmodal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              x
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <form method="GET" action="">
                    <div class="input-group">
                      <input type="text" placeholder="Search" name="" class="form-control">
                      <div class="input-group-append">
                        <input type="submit" class="btn btn-search">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  
  <script src="<?php echo base_url('assets/sites/default/files/js/js__WkOP5Tq3sT9PXtry8hBiip8FdMp1tda9h0wpZ1i8Yg.js')?>"></script>

</body>

</html>

