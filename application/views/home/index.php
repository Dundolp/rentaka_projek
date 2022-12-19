
     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Pengen Jalan-jalan, Tapi bingung mau sewa mobil dimana?</h1>
                                    <h6 data-aos="fade-up" data-aos-delay="300">Rentakā hadir dengan segala tawaran menariknya.</h6>

                                    <?php if($this->session->has_userdata('USERNAME')){
                                        
                                    } else {
                                      echo '<a href="'.base_url('index.php/registrasi/index').'" class="btn custom-btn bg-color mt-3 mr-3" data-aos="fade-up" data-aos-delay="600"  >Daftar</a>';
                                    }
                                    ?>
                                    

                                    <a href="#class" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Sewa Sekarang</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>        
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                

                <div class="mr-lg-auto mt-3 col-12">
                     <div class="about-working-hours">
                          <div>
                          <h2 class="mb-4 text-white text-center" data-aos="fade-up" data-aos-delay="500">Jam Buka</h2>
                          <table class="table table-bordered table-dark" data-aos="fade-up" data-aos-delay="900">
                          <thead>
                              <tr>
                                <th scope="col"><strong class="d-block text-center" data-aos="fade-up" data-aos-delay="600">Senin</strong></th>
                                <th scope="col"><strong class=" d-block text-center" data-aos="fade-up" data-aos-delay="700">Selasa</strong></th>
                                <th scope="col"><strong class=" d-block text-center" data-aos="fade-up" data-aos-delay="700">Sabtu</strong></th>
                                <th scope="col"><strong class=" d-block text-center" data-aos="fade-up" data-aos-delay="700">Rabu</strong></th>
                                <th scope="col"><strong class=" d-block text-center" data-aos="fade-up" data-aos-delay="700">Minggu</strong></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><p class=" d-block text-center" data-aos="fade-up" data-aos-delay="800">10:00 - 22:00 </p></td>
                                <td><p class=" d-block text-center" data-aos="fade-up" data-aos-delay="800"> 10:00 -  22:00</p></td>
                                <td><p class=" d-block text-center" data-aos="fade-up" data-aos-delay="800"> 10:00 -  22:00</p></td>
                                <td><p class=" d-block text-center" data-aos="fade-up" data-aos-delay="800"> 10:00 -  22:00</p></td>
                                <td><p class=" d-block text-center" data-aos="fade-up" data-aos-delay="800"> 10:00 -  22:00</p></td>
                              </tr>
                              
                            </tbody>
                            </table>
                          
                       
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>


     


     <!-- CLASS -->
     <?php if($this->session->has_userdata('USERNAME')){
                    echo '<section class="class section" id="class">
                    <div class="container">
                         <div class="row">
     
                                 <div class="col-lg-12 col-12 text-center mb-5">
                                     
                                     <h2 data-aos="fade-up" data-aos-delay="200">Mobil Yang kami Sediakan</h2>
                                  </div>
                                 <div class="col-lg-3 col-md-15 col-30" data-aos="fade-up" data-aos-delay="1000">
                                     <div class="class-thumb">
                                         <img src="'.base_url('images/class/ru.jpg').'" class="img-fluid" alt="Class">
     
                                         <div class="class-info">
                                             <h3 class="mb-1">Toyota</h3>
     
                                             <span><strong>Rush</strong>  </span>
                                             <div class="modal-footer">
                                             <p class="mt-3">100.000<span><strong>/hari</strong></span></p>
                                               <a href="'.base_url('index.php/sewa/sewa').'" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" >Sewa</a>
     
           
                                             </div>
                                         </div>
                                     </div>
                                 </div>
     
                                 <div class="col-lg-3 col-md-15 col-30" data-aos="fade-up" data-aos-delay="1000">
                                   <div class="class-thumb">
                                       <img src="'.base_url('images/class/ex.jpg').'" class="img-fluid" alt="Class">
     
                                       <div class="class-info">
                                           <h3 class="mb-1">Mitsubishi</h3>
     
                                           <span><strong>Xpander</strong>  </span>
     
                                           <div class="modal-footer">
                                           <p class="mt-3">200.000<span><strong>/hari</strong></span></p>
                                           <a href="'.base_url('index.php/sewa/sewa').'" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" >Sewa</a>
     
         
                                           </div>
                                       </div>
                                   </div>
                               </div>
     
                               <div class="col-lg-3 col-md-15 col-30" data-aos="fade-up" data-aos-delay="1000">
                                 <div class="class-thumb">
                                     <img src="'.base_url('images/class/er.jpeg').'" class="img-fluid" alt="Class">
     
                                     <div class="class-info">
                                         <h3 class="mb-1">Suzuki</h3>
     
                                         <span><strong>Ertiga</strong>  </span>
     
                                         <div class="modal-footer">
                                         <p class="mt-4">150.000<span><strong>/hari</strong>  </span></p>
                                         <a href="'.base_url('index.php/sewa/sewa').'" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" >Sewa</a>
     
       
                                         </div>
                                     </div>
                                 </div>
                             </div>
     
                             <div class="col-lg-3 col-md-15 col-30" data-aos="fade-up" data-aos-delay="1000">
                               <div class="class-thumb">
                                   <img src="'.base_url('images/class/mo.jpg').'" class="img-fluid" alt="Class">
     
                                   <div class="class-info">
                                       <h3 class="mb-1">Honda</h3>
     
                                       <span><strong>Mobilio</strong>  </span>
     
     
                                       <div class="modal-footer">
                                       <p class="mt-3">100.000<span><strong>/hari</strong></span></p>
                                       <a href="'.base_url('index.php/sewa/sewa').'" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" >Sewa</a>
     
     
                                       </div>
                                   </div>
                               </div>
                           </div>
     
                             
     
                         </div>
                    </div>
          </section>';
                   
                } else {
                    echo '<section class="class section" id="class">
                    <div class="container">
                         <div class="row">
     
                                 <div class="col-lg-12 col-12 text-center mb-5">
                                     
                                     <h2 data-aos="fade-up" data-aos-delay="200">Mobil Yang kami Sediakan</h2>
                                  </div>
                                 <div class="col-lg-3 col-md-15 col-30" data-aos="fade-up" data-aos-delay="1000">
                                     <div class="class-thumb">
                                         <img src="'.base_url('images/class/ru.jpg').'" class="img-fluid" alt="Class">
     
                                         <div class="class-info">
                                             <h3 class="mb-1">Toyota</h3>
     
                                             <span><strong>Rush</strong>  </span>
                                             <div class="modal-footer">
                                             <p class="mt-3">100.000<span><strong>/hari</strong></span></p>
                                               
     
           
                                             </div>
                                         </div>
                                     </div>
                                 </div>
     
                                 <div class="col-lg-3 col-md-15 col-30" data-aos="fade-up" data-aos-delay="1000">
                                   <div class="class-thumb">
                                       <img src="'.base_url('images/class/ex.jpg').'" class="img-fluid" alt="Class">
     
                                       <div class="class-info">
                                           <h3 class="mb-1">Mitsubishi</h3>
     
                                           <span><strong>Xpander</strong>  </span>
     
                                           <div class="modal-footer">
                                           <p class="mt-3">200.000<span><strong>/hari</strong></span></p>
                                           
     
         
                                           </div>
                                       </div>
                                   </div>
                               </div>
     
                               <div class="col-lg-3 col-md-15 col-30" data-aos="fade-up" data-aos-delay="1000">
                                 <div class="class-thumb">
                                     <img src="'.base_url('images/class/er.jpeg').'" class="img-fluid" alt="Class">
     
                                     <div class="class-info">
                                         <h3 class="mb-1">Suzuki</h3>
     
                                         <span><strong>Ertiga</strong>  </span>
     
                                         <div class="modal-footer">
                                         <p class="mt-4">150.000<span><strong>/hari</strong>  </span></p>
                                         
     
       
                                         </div>
                                     </div>
                                 </div>
                             </div>
     
                             <div class="col-lg-3 col-md-15 col-30" data-aos="fade-up" data-aos-delay="1000">
                               <div class="class-thumb">
                                   <img src="'.base_url('images/class/mo.jpg').'" class="img-fluid" alt="Class">
     
                                   <div class="class-info">
                                       <h3 class="mb-1">Honda</h3>
     
                                       <span><strong>Mobilio</strong>  </span>
     
     
                                       <div class="modal-footer">
                                       <p class="mt-3">100.000<span><strong>/hari</strong></span></p>
                                      
     
     
                                       </div>
                                   </div>
                               </div>
                           </div>
     
                             
     
                         </div>
                    </div>
          </section>';
                    
                }
                ?>
     

     
     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container ">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Jangan Ragu Untuk Bertanya Apa Saja</h2>

                        <?php echo form_open('komentar/save');?>
                        <input type="hidden" class="form-control" name="id_user" id="id_user">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">

                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            <!-- <input type="text" class="form-control" id="komentar" name="komentar" placeholder="Ketik pesan"> -->

                            <textarea class="form-control" rows="5" id="komentar" name="komentar" placeholder="Ketik Pesan"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Kirim Pesan</button>
                            <?php echo form_close(); ?>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12 card shadow">
                        <h2 class="mb-4 text-center" data-aos="fade-up" data-aos-delay="600"> Our  <span> Team</span></h2>

<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                    <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel" data-aos="fade-up" data-aos-delay="900">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-50 rounded-circle mx-auto border border-dark" src="<?php echo base_url('images/team/fikri.jpg')?>" alt="First slide">
                          <h4 class="mb-1  mt-2 text-center">Miftahul Fikri Pratama</h4>
                          <p class="mb-1  mt-2 text-center">As FrontEnd Developer</p>
                        <ul class="social-icon mt-3 text-center">
                            <li><a href="https://www.instagram.com/_mfikp23" class="fa fa-instagram"></a></li>
                      
                            <li><a href="https://www.github.com/MiftahulFikriPratama" class="fa fa-github"></a></li>
                        </ul>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-50 rounded-circle mx-auto border border-dark" src="<?php echo base_url('images/team/thio.png')?>" alt="Second slide">
                          <h4 class="mb-1  mt-2 text-center">Thio Pratama</h4>
                          <p class="mb-1  mt-2 text-center">As BackEnd Developer</p>
                          <ul class="social-icon mt-3 text-center">
                            <li><a href="https://www.instagram.com/thioprtma456" class="fa fa-instagram"></a></li>
                      
                            <li><a href="https://www.github.com/thiop2374" class="fa fa-github"></a></li>
                        </ul>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-50 rounded-circle mx-auto border border-dark" src="<?php echo base_url('images/team/dun.png')?>" alt="Second slide">
                          <h4 class="mb-1  mt-2 text-center">Wildani Fadhillah</h4>
                          <p class="mb-1  mt-2 text-center">As FullStack Developer</p>
                          <ul class="social-icon mt-3 text-center">
                            <li><a href="https://www.instagram.com/wildanfadhillah_" class="fa fa-instagram"></a></li>
                      
                            <li><a href="https://www.github.com/Dundolp" class="fa fa-github"></a></li>
                        </ul>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-50 rounded-circle mx-auto border border-dark" src="<?php echo base_url('images/team/vania.jpg')?>" alt="Third slide">
                          <h4 class="mb-1  mt-2 text-center">Nurhaliza Vania Akbarani</h4>
                          <p class="mb-1  mt-2 text-center">As BackEnd Developer</p>
                          <ul class="social-icon mt-3 text-center">
                            <li><a href="https://www.instagram.com/nr.vania" class="fa fa-instagram"></a></li>
                      
                            <li><a href="https://www.github.com/nurhaliza-vania1006" class="fa fa-github"></a></li>
                        </ul>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-50 rounded-circle mx-auto border border-dark" src="<?php echo base_url('images/team/zakiya.jpeg')?>" alt="Third slide">
                          <h4 class="mb-1  mt-2 text-center">Zakiyyah Nurfida</h4>
                          <p class="mb-1  mt-2 text-center">As BackEnd Developer</p>
                          <ul class="social-icon mt-3 text-center">
                            <li><a href="https://www.instagram.com/zakiyyahnrfi" class="fa fa-instagram"></a></li>
                      
                            <li><a href="https://www.github.com/zakiyyahnurfi" class="fa fa-github"></a></li>
                        </ul>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div> 



                        <!-- <div class="vidio-ap" data-aos="fade-up" data-aos-delay="900">
                            <iframe width="" height="365" src="https://www.youtube.com/embed/FCgvu5xIRV0" title="Video Animasi Promosi Rental Mobil" freborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       
                        </div> -->
                    </div>
          </div>
     </section>


     