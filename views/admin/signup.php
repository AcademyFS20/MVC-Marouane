 <?php ob_start(); ?>
    
 <section class="container2">
        <div class="forme">

        <div class="form">
          <div class="logo2">
            <img class="imagesignup" src="https://grand-pavois.com/ftp_leni/Listes_WEB/Logos/20817/NBT-logotype-07.png">
          </div>
            <h1> Sign Up </h1>

            <?php if ($data['status']): ?>
                <p class="error" style='color:red'>
                <?=$data['error']?>
                </p>
            <?php else: ?>
                <?='';?>
            <?php endif;?>

            <form class= "signup" method="POST" enctype="multipart/form-data">

              <div class="mb-3 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control-plaintext" value="<?php if (isset($data['fname'])): echo $data['fname'];endif;?>"  name="firstname" placeholder="enter your first name">
                  </div>
                </div>
                <br>
                <div class="mb-3 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="lname" class="form-control-plaintext" value="<?php if (isset($data['lname'])): echo $data['lname'];endif;?>" name="lastname" placeholder="enter your last name">

                  </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" name="email" class="form-control-plaintext" value="<?php if (isset($data['email'])): echo $data['email'];endif;?>" name="email" id="staticEmail" placeholder="enter your email">
                    </div>
                  </div>
                <br>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label"> Password </label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="enter your password">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"> </label>
                    <div class="col-sm-10">
                      <input type="file" name="img" id="image" class="form-control" />
                          <i class="fas fa-file-upload"></i>
                          Choose your avatar </input>
                    </div>
                  </div>
                
                <br>
                <div class="col-auto">
                  <input type="submit" name="signup" id="signup" value="create" class="btn btn-primary mb-3"> Create an account </input>
                  <br></br>
                  
                  <i class="fas fa-user-edit"></i> <a href="<?=\Provider\Request::route("login")?>" class="account__group--item">Already have an account ?</a>
                </div>
            </form>
          </div>
        </div>

    </section>


<?php

$content = ob_get_clean();

require dirname(__DIR__).DIRECTORY_SEPARATOR . 'templates/template.php';



