<?php ob_start();?>

<main>
        <div class="grid-container">

            <header class="header">
                <p class="head">
                    PROFILE
                </p>
            </header>

            <aside class="aside">
                
                    
                    <ul>
                        <a href="#"> 
                            <img class="avatar" src="assets/avatar.png" alt="profile">
                        </a>

                            <?php if (\Provider\Session::isSession('name')): ?>
                            <?=debug(\Provider\Session::getFlash('name'))?>
                            <?php endif;?>

                        <li> </li>
                        <li><a href="#">User Name</a></li>
                        <li><a href="#">Change Name</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="#"> Users Online</a></li>
                    </ul>
                   
            
            </aside>

            <section class="content">
                <div class="beginchat">

                    <div class="columnchat">
                        <div class="rowchat">
                            <i class="fas fa-user-circle"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtext">
                            <p class="flextext"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>
                    <div class="columnchat">
                        <div class="rowchat">
                            <i class="fas fa-user-circle"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtext">
                            <p class="flextext"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>
                    <div class="columnchat">
                        <div class="rowchat">
                            <i class="fas fa-user-circle"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtext">
                            <p class="flextext"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>


                    <div class="columnchatright">
                        <div class="rowchatright">
                            <i class="fas fa-user-circleright"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtextright">
                            <p class="flextextright"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>

                    <div class="columnchatright">
                        <div class="rowchatright">
                            <i class="fas fa-user-circleright"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtextright">
                            <p class="flextextright"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>

                    <div class="columnchatright">
                        <div class="rowchatright">
                            <i class="fas fa-user-circleright"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtextright">
                            <p class="flextextright"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>

                    <div class="columnchatright">
                        <div class="rowchatright">
                            <i class="fas fa-user-circleright"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtextright">
                            <p class="flextextright"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>
                    <div class="columnchat">
                        <div class="rowchat">
                            <i class="fas fa-user-circle"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtext">
                            <p class="flextext"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>
                    <div class="columnchat">
                        <div class="rowchat">
                            <i class="fas fa-user-circle"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtext">
                            <p class="flextext"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>
                    <div class="columnchatright">
                        <div class="rowchatright">
                            <i class="fas fa-user-circleright"></i>
                            <p> M.XXXXX</p>
                            <p> 1 day ago </p>
                        </div>
                        <div class="rowtextright">
                            <p class="flextextright"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis nisl blandit, rutrum eros sit amet, imperdiet leo. Donec sed lectus fringilla ipsum ornare bibendum vitae ac nunc. Vestibulum consectetur urna sed velit rutrum tempus vel non est</p>
                        </div>
                    </div>
                </div>
                <div>
                    
                </div>
               
            </section>

            <footer class="forma">
                <div class="input">
                    <input class="message" width="400px" height="100px" type="input" value="Enter your message..."/>
                </div>

                <div class="file">
                    <button type="file" class="form-control"> 
                        <i class="fas fa-file-upload"></i>
                        Choisir un fichier </button> <p> Aucun fichier choisi</p>
                </div>
                <div class="chat__emoji">
                    <img src="./assets/emoji/emoji1.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji2.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji3.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji4.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji5.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji6.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji7.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji8.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji9.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji10.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji11.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji12.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji13.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji14.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji15.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji16.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji17.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji18.png" class="chat__emoji--img" />
                    <img src="./assets/emoji/emoji19.png" class="chat__emoji--img" />
                </div>
            </footer>
            
        </div>
    </main>

<?php
$content = ob_get_clean();

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates/template.php';
