<!DOCTYPE html>
<html lang="en">
<head>

     <title>Rentakā - Rental Mobil</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
     <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css')?>">
     <link rel="stylesheet" href="<?php echo base_url('css/aos.css')?>">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo base_url('css/tooplate-gymso-style.css')?>">


    
<!-- Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!-- <img class="logo" src="<?php echo base_url('rentaka.svg')?>" alt="" width="50px"> -->
            <a class="navbar-brand" href="index"><img class="logo" width="150px" src="<?php echo base_url('rentaka.png')?>" alt="" width="50px"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                   

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll" data-aos="fade-up" data-aos-delay="10">Sewa Mobil</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll" data-aos="fade-up" data-aos-delay="10">Tentang Kami</a>
                    </li>

                    <?php if($this->session->userdata('ROLE')==='administrator'){
                        ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/sewa/index')?>" class="nav-link smoothScroll" data-aos="fade-up" data-aos-delay="10">Halaman Admin</a>
                    </li>
                     <?php   
                    }
                    ?>
                </ul>
                <ul>
                <?php if($this->session->has_userdata('USERNAME')){
                    echo '<a href="#" class="btn custom-btn bg-color mr-3" data-aos="fade-up" data-aos-delay="10" >Hallo, '.$this->session->userdata('USERNAME').'</a>';
                    echo '<a href="'.base_url('index.php/login/logout').'" class="btn custom-btn bg-color " data-aos="fade-up" data-aos-delay="10" >Keluar</a>';
                } else {
                    echo '<a href="'.base_url('index.php/login/index').'" class="btn custom-btn bg-color mr-3" data-aos="fade-up" data-aos-delay="10">Masuk</a>';
                    echo '<a href="'.base_url('index.php/registrasi/index').'" class="btn custom-btn bg-color " data-aos="fade-up" data-aos-delay="10">Daftar</a>';
                }
                ?>
                        
                    
                </ul>
                <!-- <ul>
                        
                </ul> -->
            </div>

        </div>
    </nav>