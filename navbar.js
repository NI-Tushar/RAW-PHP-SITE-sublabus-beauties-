function navbarfunc() {
    let elem1 = document.createElement('div');
    elem1.className = 'headerbar fixed-top';
  

    elem1.innerHTML = '<div class="headerbar fixed-top">'+
                        '<div class="blank1"></div>'+
                        '<div class="logobar">'+
                            '<div class="logo">'+
                                '<img src="images/logo/sb_logo.png" alt="" />'+
                            '</div>'+
                        '</div>'+
                        '<div class="headitem">'+
                            '<ul class="headlinks">'+
                                '<a href="https://www.facebook.com/Sublabus-Beauties-100783695107934" id="contact" class="contact-1"><img src="images/logo/facebook.png" alt=""/></a>'+
                                '<a class="contact-1" href="" onClick="whatsappfunc()"><img src="images/logo/whatsapp.png" alt="" />'+
                                    '<font>+88 01777608508</font>'+
                                '</a>'+
                                '<li><a href="login.php">Login</a></li>'+
                                '<li><a href="signup.php">SignUp</a></li>'+
                            '</ul>'+
                        '</div>'+
                        '<div class="blank2"></div>'+
                        '<div class="blank3"></div>'+
                        '<div class="midbar">'+
                        '</div>'+
                        '<div class="blank4"></div>'+
                        '<div class="blank5"></div>'+
                        '<div class="navigatbar">'+
                            '<div class="logoname">'+
                                '<h5>'+
                                    '<font>Sublabus</font>Beauties'+
                                '</h5>'+
                            '</div>'+
                            '<div class="menu-icon">'+
                                '<i id="bar" class="fas fa-bars" onclick="handleClicked1()"></i>'+
                                '<i id="time" class="fas fa-times" onclick="handleClicked2()"></i>'+
                            '</div>'+
                            '<div id="navitem" class="navitem">'+
                                '<ul>'+
                                    '<li><a href="index.php"></href=>Home</a></li>'+
                                    '<li class="service"><a>Products</a>'+
                                        '<div class="submenu-2">'+
                                            '<ul>'+
                                                '<li><a href="foundations.php">Foundations</a></li>'+
                                                '<li><a href="eyeshadows.php">Eye Shadows</a></li>'+
                                                '<li><a href="gliturs.php">Gliters</a></li>'+
                                                '<li><a href="">Listicks</a></li>'+
                                                '<li><a href="">Neil Polish</a></li>'+
                                                '<li><a href="">Eye Lash</a></li>'+
                                                '<li><a href="">Palatte</a></li>'+
                                            '</ul>'+
                                        '</div>'+
                                    '</li>'+
                                    '<li><a href="foundations.php">Foundations</a></li>'+
                                    '<li><a href="palatte.php">Palatte</a></li>'+
                                    '<li><a href="#">Account</a></li>'+
                                    '<li><a href="#">About Us</a></li>'+
                                    '<li><a href="upload.php">Contact Us</a></li>'+
                                '</ul>'+
                            '</div>'+
                        '</div>'+
                        '<div class="blank6"></div>'+
                    '</div>';

    let ul = document.querySelector(".whole-headerbar");
    ul.appendChild(elem1);
}
