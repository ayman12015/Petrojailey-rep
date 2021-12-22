
      <div class="content">
        <section class="front container-fluid px-0">
          <div data-drupal-messages-fallback="" class="hidden"></div>
          <div id="block-petronas-content" class="block block-system block-system-main-block">


            <div class="content">
              <div class="landing-page">

                <div
                  class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items" height="1000px">
                  <div class="field__item">
                    <div class="standardImage-slider">
                      <div class="loading-container">

                      </div>

                      <div id="component657" class="owl-carousel owl-theme">

                      <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo ' <div class="banner" dir="rtl">';
												}else {
													echo '<div class="banner">';
												}
												?>
                        
                          <img class=" background bk-absolute " height="677px"
                            src="<?php echo base_url('assets/img/slidee3.jpg')?>" />
                            


                          <div class="container" >
                            <div class="row">
                              <div class="col-md-6 offset-md-1">
                                <div class="banner-description">
                                <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '  <div class="landing-section-title" style="color: #ffffff; margin-left:100px; " dir="rtl">';
												}else {
													echo ' <div class="landing-section-title" style="color: #ffffff; " >';
												}
												?>
                         
                                 <?php echo $this->lang->line('titleslide1'); ?></div>
                                  <br>
                                   <div class="landing-section-title" style="color: #ffffff;font-size: 20px;"><?php echo $this->lang->line('titleslide1prgraph'); ?></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo ' <div class="banner" dir="rtl">';
												}else {
													echo '<div class="banner">';
												}
												?>
                          <img class=" background bk-absolute " height="677px"
                            src="<?php echo base_url('assets/img/petro-slide1.jpg')?>" />


                          <div class="container">
                            <div class="row">
                              <div class="col-md-6 offset-md-1">
                                <div class="banner-description">
                                <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '  <div class="landing-section-title" style="color: #ffffff; margin-left:144px; " dir="rtl">';
												}else {
													echo ' <div class="landing-section-title" style="color: #ffffff; " >';
												}
												?>
                                   <?php echo $this->lang->line('titleslide2'); ?></div>
                                  <br>
                                  <div class="landing-section-title" style="color: #ffffff; font-size: 20px;"><?php echo $this->lang->line('titleslide1prgraph1'); ?></div>
                                </div>
                                
                              </div>
                            </div>
                            
                       
                          </div>
                        </div>

                        <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo ' <div class="banner" dir="rtl">';
												}else {
													echo '<div class="banner">';
												}
												?>
                          <img class=" background bk-absolute " height="677px"
                            src="<?php echo base_url('assets/img/mora.jpg')?>" />


                          <div class="container">
                            <div class="row">
                              <div class="col-md-6 offset-md-1">
                                <div class="banner-description">
                                <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '  <div class="landing-section-title" style="color: #ffffff; margin-left:322px; " dir="rtl">';
												}else {
													echo ' <div class="landing-section-title" style="color: #ffffff;" >';
												}
												?>
                                   <?php echo $this->lang->line('titleslide3'); ?></div>
                                  
                                  <div class="landing-section-title" style="color: #ffffff; font-size: 22px;"><?php echo $this->lang->line('titleslide1prgraph2'); ?></div>
                                </div>
                                
                              </div>
                            </div>
                            
                       
                          </div>
                        </div>
                        




                      </div>

                      <div class="icon-group-container">
                        <div class="mouse-icon-group">
                          <div class="icon mouse-icon"></div>
                          <div class="icon arrow-icon"></div>
                          <div class="icon arrow-icon"></div>
                        </div>
                      </div>

                    </div>
                  </div>


                </div>

                <div class="footer-content" style="background-color: #ffffff;">
                  <div class="container-fluid"> 
                    <div class="row" >
                      <div class="col-lg-6 news-letter-outer">
                        <div class="newsletter">
                          <div class="newsletter-container">

                          <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo ' <div class="newsletter-title" style="font-style: sans-serif;" dir="rtl">';
												}else {
													echo ' <div class="newsletter-title" style="font-style: sans-serif;">';
												}
												?>
                            <?php echo $this->lang->line('position'); ?></div>
                            <div class="newsletter-description" style="font-size: 22px;">	<span style="font-size: 40px; color: blue;">&#8221;</span>
                             <?php echo $this->lang->line('posdiscrip'); ?> <span style="font-size: 40px; color: blue;">&#8221;</span></div><br><br><hr style="color: #374bd3;">
                              <div class="newsletter-description" style="color: #374bd3;font-size:18px;">
                              <?php echo $this->lang->line('namnn'); ?> <div class="newsletter-description"  style="color: #374bd3;">
                              <?php echo $this->lang->line('posiooo'); ?></div><hr style="color: #374bd3;"></div>
                               
                            <div class="newsletter-email">
                              <p v-if="errors.length">
                                <b-alert show="" variant="danger">
                                  <p v-for="error in errors" class="newsletter-description"></p>
                                </b-alert>
                              </p>
                              <div v-if="successes.length">
                                <p v-for="success in successes" class="newsletter-description"></p>
                              </div>
                              <div v-else="">

                              </div>

                              <form id="newsletter-email-form">
                                <div class="alert alert-danger hidden" role="alert"></div>
                                <p class="newsletter-description hidden"></p>

                              
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="row">
                          <div class="col-sm no-padding footer-content-link">
                            <a href="join-us.html" target="_self">
                              
                            </a>
                          </div>
                          <div class="col-sm no-padding footer-content-link">
                            <a href="" target="_self">
                              <img class="background footer-content-link-container"
                                src="<?php echo base_url('./assets/img/profile/image1.jpg')?>" width="800px" height="550px">
                                
                              
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  
                </div>
                <div class="field__item">
                  <div class="FW2-4" id="paragraph-55">
                    <div class="" style="background-color: #454545;">

                      <img  class=" background bk-img bk-absolute lazy " width="1800px" height="722px"
                        src="<?php echo base_url('assets/img/homepage-about-section-bg-desktop_3.jpg')?>" />
                      <div class="bk-loading">
                        <div class="bk-loading">


                          <div class="padding-default" style="padding-top: 163px; padding-bottom: 305px;">
                          <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="container" dir="rtl">';
												}else {
													echo ' <div class="container" >';
												}
												?>
                            
                              <div class="row">
                                <div class="offset-md-1 col-md-3 col-lg-2 no-padding">
                                  <div class="borderonright animatable fadeInLeft">
                                    <div>
                                      <div class="front-fortune-container">
                                        <div><img alt="" class="img-fluid" data-entity-type="" data-entity-uuid=""
                                            src="<?php echo base_url('assets/img/homepage-fortune-500-v2.png')?>"></div>
                                        <!--Hide><div class="front-global"><span class="p-white">Global 500<sup>®</sup></span></div><-->

                                        <div class="front-2017rank">
                                          <div class="p-white">2019&nbsp;RANK</div>
                                        </div>

                                        <div class="number-font front-184"><span class="p-white odometer"
                                            data-odo="158">158</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-7 col-lg-4 ">
                                  <div class="right-content">
                                    <div class="animatable fadeInRight">
                                      <div class="front-aboutus"><span class="p-white"> <?php echo $this->lang->line('aboutus'); ?></span></div>

                                      <p> <strong><span class="p-white front-aboutus-content" style="font-size: 22px;">
                                      <?php echo $this->lang->line('describition'); ?> </span></strong></p>

                                    </div>
                                    <div class="cta animatable fadeInRight cta-white">

                                      <div
                                        class="field field--name-field-call-to-action field--type-link field--label-hidden field__item">
                                        <a href="<?php echo base_url('home/about');?>" target="">More Information</a></div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style="height: 10px;" class="test">

                    </div>
                    <div class="field__item">
                      <div class="two-columns">
                        <div class="" style="background-color: ;">
                          <img class=" background bk-img bk-absolute lazy " width= "1700px" height="655px"
                            src="<?php echo base_url('./assets/img/partner1.jpg')?>" />

                          <div class="container">
                            <div class="padding-default" style="padding-top: 360px; padding-bottom: 90px;">

                              <div class="row">
                                <div class="col-md-10 offset-md-1">
                                  <div></div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-10 offset-md-1">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div>
                                        <div class="col-md-9" style="padding:0">
                                          <div class="landing-section-title" style="color: #374bd3;"><?php echo $this->lang->line('parnersec1'); ?>
                                          </div>

                                          <div>&nbsp;</div>

                                          <div class="body-text" style="font-size:18px;"><?php echo $this->lang->line('parnersec1descri'); ?></div>

                                          <div class="cta cta-green"></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div></div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="field__item">
                      <div class="four-columnspto">
                        <div class="columnspto-fixed-left">
                          <div class="columnspto-left-container animatable fadeInLeft ">
                            <div class="columnspto-left-maintext">
                              <div>
                                <div class="four-columns-pto-title"><span class="p-green"><?php echo $this->lang->line('invoo'); ?></span></div>

                                <div class="body-text"><?php echo $this->lang->line('invdescr'); ?></div>
                              </div>
                            </div>
                            <div class="cta columnspto-left-cta cta-green">

                             

                            </div>
                          </div>
                        </div>
                        <div class="columnspto-scroll-right">
                          <ul class="rb-grid">

                            <li class="col-4 background columnspto-no-padding">
                              <div class=" columnspto-background-outer">
                                <img class="background columnspto-background-inner"
                                  src="<?php echo base_url('./assets/img/kold.jpeg')?>" />
                               
                              </div>

                              <div class="expandable columnspto-one align-top">
                                <div class="columnspto-title">
                                  <p style="text-transform:none"><?php echo $this->lang->line('projects'); ?></p>
                                </div>
                              </div>
                              <div class="rb-overlay">
                                <div class="rb-close">close</div>
                                <div class="rb-week">

                                

                                  <div class="background columnspto-expand"
                                    style="background-image: url('<?php echo base_url('./assets/img/kold.jpeg')?>"
                                    <div class="container">
                                      <div class="row">
                                        <div class="offset-md-2 col-md-6">
                                          <div class="enlarge-content">
                                            <div class="enlarge-content-header">
                                              <div class="enlarge-content-title">
                                                <p style="text-transform:none"><?php echo $this->lang->line('projects'); ?></p>

                                              </div>
                                            </div>
                                            <div class="enlarge-content-body">
                                              <div class="body-text"><?php echo $this->lang->line('projectdesc'); ?></div>

                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  
                                </div>

                              </div>
                            </li>
                            <li class="col-4 background columnspto-no-padding">
                              <div class=" columnspto-background-outer">
                             
                              <div class="background columnspto-background-inner"
                                  style="background-image: url('./assets/img/homepage-highlight-02_0.jpg');">
                                </div>
                                  
                              
                              </div>

                              <div class="expandable columnspto-one align-top">
                                <div class="columnspto-title">
                                  <p style="text-transform:none"><?php echo $this->lang->line('projectdesc'); ?></p>
                                </div>
                              </div>
                              <div class="rb-overlay">
                                <div class="rb-close">close</div>
                                <div class="rb-week">
                                <div class="background columnspto-expand"
                                    style="background-image: url('./assets/img/homepage-highlight-02_0.jpg')">
                                    <div class="container">
                                      <div class="row">
                                        <div class="offset-md-2 col-md-6">
                                          <div class="enlarge-content">
                                            <div class="enlarge-content-header">
                                              <div class="enlarge-content-title">
                                                <p style="text-transform:none"><?php echo $this->lang->line('project2'); ?></p>

                                              </div>
                                            </div>
                                            <div class="enlarge-content-body">
                                              <div class="body-text">Our floating Liquefied Natural Gas (LNG) facility,
                                                the Petrojailey , is the first of its kind in
                                                the world. It gives us capabilities to extract, process, liquefy, store
                                                and offload gas completely offshore, to monetise gas from stranded
                                                fields
                                                which were previously deemed uneconomical to develop.</div>

                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </li>

                            <li class="col-4 background columnspto-no-padding">
                              <div class=" columnspto-background-outer">
                                <div class="background columnspto-background-inner"
                                  style="background-image: url('./assets/img/homepage-highlight-03_1.jpg');">
                                </div>
                              </div>

                              <div class="expandable columnspto-one align-top">
                                <div class="columnspto-title">
                                  <p style="text-transform:none"><?php echo $this->lang->line('project2'); ?></p>
                                </div>
                              </div>
                              <div class="rb-overlay">
                                <div class="rb-close">close</div>
                                <div class="rb-week">
                                  <div class="background columnspto-expand"
                                    style="background-image: url('./assets/img/homepage-highlight-03_1.jpg')">
                                    <div class="container">
                                      <div class="row">
                                        <div class="offset-md-2 col-md-6">
                                          <div class="enlarge-content">
                                            <div class="enlarge-content-header">
                                              <div class="enlarge-content-title">
                                                <p style="text-transform:none">Technology Challenge</p>

                                              </div>
                                            </div>
                                            <div class="enlarge-content-body">
                                              <div class="body-text">We practice open innovation through crowdsourcing,
                                                challenging innovative minds from across the globe. If you have a
                                                solution
                                                that can potentially solve our problems, we would love to hear about it!
                                              </div>

                                             
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </li>
                            

                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col left-line" style="background-color: #ffffff;">
                        <div class="sponsorship-right">
                          <center>
                            <hr style="width: 350px;background-color: crimson;">
                            <h1 style="color: #161644;"><?php echo $this->lang->line('client'); ?></h1>
                            <hr style="width: 350px;background-color: crimson;">
                          </center>
                          <div class="right-container">
                            <div class="right-inner">
                              <div class="container-fluid entites-icon">
                                <div style="margin-left: 30px;" class="row">
                                  <div class="entity-icon-container col-lg col-6">
                                    
                                      <img src="<?php echo base_url('./assets/img/dal.png')?>" alt=""
                                        class="img-fluid entity-icon-img">
                                    
                                  </div>
                                  <div class="entity-icon-container col-lg col-6">
                                  <img src="<?php echo base_url('./assets/img/dal.png')?>" alt=""
                                        class="img-fluid entity-icon-img">
                                  </div>
                                  <div class="entity-icon-container col-lg col-6">
                                  <img src="<?php echo base_url('./assets/img/dal.png')?>" alt=""
                                        class="img-fluid entity-icon-img">
                                  </div>
                                  <div class="entity-icon-container col-lg col-6">
                                  <img src="<?php echo base_url('./assets/img/dal.png')?>" alt=""
                                        class="img-fluid entity-icon-img">
                                  </div>
                                
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                   