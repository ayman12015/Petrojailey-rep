<div class="content">
    <section class="section">
      <div data-drupal-messages-fallback="" class="hidden"></div>
      <div id="block-Petrojailey-content" class="block block-system block-system-main-block">


        <div class="content">
          <div class="contact">
            <div class="subpage-image subpage-banner-contact-us">
              <div class="inner-banner">
                <div class="background bk-img bk-absolute lazy" data-src="<?php echo base_url('./assets/img/banner-contactus.jpg')?>">
                  <div class="bk-loading">

                  </div>
                </div>


                <div class="container">
                  <div class="row">
                    <div class="col-md-10 offset-md-1">
                      <div class="align-center">
                        <div class="banner-title white-title">
                          Petrojailey
                        </div>
                        <h1 class="banner-subtitle white-title">
                        <?php echo $this->lang->line('contact'); ?>
                        </h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="block block-system block-system-breadcrumb-block">


              <div class="content">


                <nav role="navigation" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.htm">Home</a>
                    </li>
                    <li class="active breadcrumb-item">
                      Contact Us
                    </li>
                  </ol>
                </nav>

              </div>
            </div>



            <div class="container information-container">
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <div class="row">


                    <div class="col-md-4 no-padding">
                      <div class="Petrojailey-map">
                        <iframe
                          src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d72938.71885404816!2d32.61463364586369!3d16.098191079491514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z2YXYtdmB2KfZhyDYp9mE2KzZitmE2Yo!5e0!3m2!1sen!2s!4v1597148107498!5m2!1sen!2s"
                          width="1000px" height="500px" frameborder="0" style="border:0"></iframe>
                      </div>
                    </div>




                  </div>
                </div>
              </div>
            </div>
           

            <?php if($this->session->userdata('site_lang') == 'arabic'){ 
												echo '  <div class="container" dir="rtl"> ';
												}else {
													echo ' <div class="container" > ';
												}
												?>

            
              <div class="row"> 
                  <div class="col">
                      <div class="card">
                          <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> <?php echo $this->lang->line('contacts'); ?>
                          </div>
                          <div class="card-body">
                              <form method="post" action="<?php echo base_url('home/contact');?>">
                              <div class="form-group">
                              
                                    
                              <input type="text" class="form-control"name="service_name" aria-describedby="emailHelp" placeholder="<?php echo $this->lang->line('selectworkgg'); ?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="name"><?php echo $this->lang->line('name'); ?></label>
                                      <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="<?php echo $this->lang->line('enternn'); ?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="email"><?php echo $this->lang->line('email'); ?></label>
                                      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="<?php echo $this->lang->line('emailent'); ?>" required>
                                    
                                  </div>

                                  <div class="form-group">
                                      <label for="email"><?php echo $this->lang->line('phonent'); ?></label>
                                      <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="<?php echo $this->lang->line('phonent'); ?>" required>
                                    
                                  </div>
                                  <div class="form-group">
                                      <label for="message"><?php echo $this->lang->line('message'); ?></label>
                                      <textarea class="form-control" name="message" rows="6" required></textarea>
                                  </div>
                                  <div class="mx-auto">
                                  <button type="submit" class="btn btn-primary text-right"><?php echo $this->lang->line('save'); ?></button></div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-sm-4">
                      <div class="card bg-light mb-3">
                          <div class="card-header bg-success text-white text-uppercase" style="background-color: #007bff;"><i class="fa fa-home"></i> <?php echo $this->lang->line('adress'); ?></div>
                          <div class="card-body">
                              <p>Khartoum ,SUDAN</p>
                              <p>334 Street</p>
                             
                              <p>Email : email@example.com</p>
                              <p>Tel. +33 12 56 11 51 84</p>
          
                          </div>
          
                      </div>
                  </div>
              </div>
          </div>

           

          



            <div
              class="field field--name-field-bottom-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
              
              <div class="field__item">

                <div class="one-column">
                  <div class="" style="background-color: #ffffff;">
                    <div class="background bk-img bk-absolute lazy"
                      data-src="/sites/default/files/2018-08/contact-us-landing-career-bg-desktop_3.jpg">

                    </div>

                    <div class="container">
                      <div class="row">
                        <div class="col-md-10 offset-md-1">
                          <div class="onecolumn padding-default"
                            style="text-align: left; padding-top: 80px; padding-bottom: 220px;">
                            <div>
                              <div class="landing-section-title"><span class="p-white">Interested in Working</span>
                              </div>

                              <div class="landing-section-title"><span class="p-white">For Petrojailey?</span></div>
                            </div>
                            <div class="cta cta-white">

                              <div
                                class="field field--name-field-call-to-action field--type-link field--label-hidden field__item">
                                <a href="join-us\career-opportunities.html" target="">Join Us</a></div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>


    </section>
  </div>