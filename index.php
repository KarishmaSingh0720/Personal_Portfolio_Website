<?php
    include_once('config/config.php');
    include_once('controller/AdminController.php');
    include_once('include/header.php');
    include_once('include/navbar.php');
    $admin=new AdminController;
    $row=$admin->getData();       
   
?>

        
                    
    <!-- Home -->
    <section id="home" class="text-light text-center text-sm-start position-relative">
        <img src="img/background.jpg" class="vh-100 w-100">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="d-sm-flex align-items-center justify-content-start">
                <div>
                    <h1 class="fw-bold display-1">I'M <span class="typed text-pink" data-typed-items="<?= $row['name']?>,<?= $row['profile']?>"></span></h1>
                    <p class="lead">
                        <?= $row['profile']?>
                    </p>
                    <div class="d-sm-flex gap-3">
                        <?php if($row['gmail']){ ?>
                        <a href="<?= $row['gmail']?>" target="_blank" class="text-light"><i class="fa-brands fa-google fa-lg"></i></a>
                        <?php } ?>
                        <?php if($row['linkedin']){ ?>
                        <a href="<?= $row['linkedin']?>" target="_blank" class="text-light"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                        <?php } ?>
                        <?php if($row['github']){ ?>
                        <a href="<?= $row['github']?>" target="_blank" class="text-light"><i class="fa-brands fa-github fa-lg"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .Home -->

    <!-- About Me -->
    <section id="about" class="py-5 bg-light">
        <h1 class="text-center fw-bold py-4">ABOUT ME</h1>
        
        <div class="container shadow bg-white py-3">
            <div class="row">
                <div class="col-lg-6 p-3">
                    <div class="mb-3">
                        <p class="text-uppercase text-pink bg-dark p-2 text-center">
                            Generic Information
                        </p>
                        <div class="row mb-2 ">
                            <div class="col-3">Name:</div>
                            <div class="col-9 text-secondary"><?= $row['name']?></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3">Profile:</div>
                            <div class="col-9 text-secondary"><?= $row['tag']?></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3">Email:</div>
                            <div class="col-9 text-secondary"><?= $row['email']?></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3">Phone:</div>
                            <div class="col-9 text-secondary"><?= $row['contact']?></div>
                        </div>
                    </div>
                    <div class="mb-3">    
                        <p class="text-uppercase text-pink bg-dark p-2 text-center">Summary</p>
                        <?php $summary=explode('  ',$row['summary']);
                            foreach($summary as $des){
                        ?>
                        <p class="text-secondary">
                          <?= $des ?>
                        </p>
                        <?php
                            }
                        ?>
                  </div>
                </div>
                <div class="col-lg-6 p-3">
                    <p class="text-uppercase text-pink bg-dark p-2 text-center">My Skills & Knowledge</p>
                    <ul class="list-group p-4">
                        <?php $skills=explode('.',$row['skill']);
                        foreach($skills as $skill){
                        ?>
                        <li class="text-secondary py-2"><?= $skill ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="mb-3">
                        <a href="resume.php" target="_blank" class="btn text-pink btn-dark btn-lg">Download Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .About Me -->

    <!-- Technology -->
    <section id="technology" class="py-5 bg-dark">       
        <h1 class="text-center fw-bold py-4 text-light">TECHNOLOGY & TOOLS</h1> 
        <div class="container">
            <div class="row">
               <?php 
                    $tech_images=explode(',',$row['tech_images']);
                    $tech_names=explode(',',$row['tech_names']);
                    $tech_des=explode('|',$row['tech_des']);  
                    
                    foreach($tech_images as $key => $image){ 
                ?>
                <div class="col-md-4 d-flex text-center py-3 ">    
                    <div class="card bg-white">
                        <div class="card-body">
                          <div class="h1"><img src="<?= $image ?>" alt="" width="50" height="50" class="img-fluid"></div>
                        </div>    
                        <h3 class="card-title"><?= $tech_names[$key] ?></h3>
                        <p class="card-text p-3">
                            <?= ($tech_des[$key]) ?>
                        </p>
                    </div>  
                </div>
                <?php
                    }
                ?>            
            </div>
        </div>
    </section>
    <!-- .Technology -->

    <!-- Contact -->
    <section id="contact" class="py-5 bg-light">
         <h1 class="text-center fw-bold py-4 text-dark">CONTACT ME</h1>
         <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-30">GET IN TOUCH</h2>
                    <ul class="list-unstyled">
                        <?php
                            $address=explode('.',$row['address']);
                            foreach($address as $address){  
                        ?>
                        <li><span><?= $address ?></span></li>
                        <?php
                            }
                        ?>
                        <li><span><?= $row['contact']?></span></li>
                        <li><span><?= $row['email']?></span></li>
                    </ul>
                </div>
                <div class="col-md-6">
                <div id="message"></div>
                <form id="contact-form" method="POST">
                <div class="row gy-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" id="message" placeholder="Message" rows="6" required></textarea>
                    </div>
                  </div>
                  <div class="d-grid d-block">
                    <input type="submit" class="btn btn-dark text-pink p-3" id="sendMail" value="Send message">
                  </div>
                </div>
                </form>
                </div>
            </div>
            
         </div>
    </section>
    <!-- .Contact -->
  
<?php
include_once('include/footer.php');
include_once('include/script.php');
?>