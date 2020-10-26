<?php
  include_once ('mail.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenechukwu | Frontend Dev</title>
    <!-- typed library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
    <!--font awesome library-->
    <link rel="stylesheet" href="css/all.css">
    <!--owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="scrollBtnTop">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#projects" class="menu-btn">Projects</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contacts</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!---- home section ---->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-wrapper">
                <div class="home-content">
                    <div class="text-1">Hello, my name is</div>
                    <div class="text-2">Kenechukwu Nwobodo</div>
                    <div class="text-3">And I'm a <span class="typing"></span></div>
                    <a href="#contact">Hire me</a>
                </div>
                <div class="home-img">
                    <img src="assets/image1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--x-- home section --x-->

   <!---- about section ---->
   <section class="about" id="about">
       <div class="max-width">
           <h2 class="title">About me</h2>
           <div class="about-content">
               <div class="colum left">
                   <img src="assets/image1.jpg" alt="">
               </div>
               <div class="column right">
                   <div class="text">I'm Kene and I'm a <span class="typing-2">Developer</span></div>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos distinctio aliquid sapiente ab reiciendis suscipit eligendi ipsam, quisquam voluptatum debitis fugiat. Rem debitis deleniti itaque quasi nemo totam accusamus dolores culpa beatae corrupti nisi laudantium voluptas alias excepturi officia iusto odio adipisci corporis fugiat deserunt, nesciunt tempora eligendi minus nulla. Nostrum soluta facilis, nesciunt minus provident obcaecati quibusdam exercitationem accusantium ipsa asperiores aspernatur natus nobis fuga voluptatem similique ex officiis sint sequi deleniti quae quo, aut eaque. Doloribus necessitatibus voluptatum optio sint corrupti, recusandae adipisci blanditiis neque similique! Modi fugiat veniam dicta harum, qui suscipit id facilis nostrum minima obcaecati quaerat maxime aut dolorem! Dicta, nisi id. Et quas illum sunt debitis modi quidem magni provident non. Deserunt, labore voluptates similique inventore eaque facilis aspernatur reiciendis est numquam eum in nihil! Molestias minima soluta iste quae deserunt enim quibusdam alias magnam, in delectus ipsum odio consequuntur! Nihil perferendis sit unde possimus exercitationem tempora similique modi numquam, facere adipisci neque ipsum temporibus excepturi eaque hic illo pariatur fugit ex minima est eveniet veniam id! Odio dolorem beatae distinctio quo saepe iusto tempore? Architecto deleniti alias quisquam, porro quia soluta voluptatum nostrum ut! Fugit voluptatum accusantium, quia vel quaerat tempora nostrum excepturi.</p> 
                   <a href="#">Download CV</a>
                </div>
           </div>
       </div>
   </section>

   <!---- services section ---->
   <section class="services" id="services">
       <div class="max-width">
           <h2 class="title">My services</h2>
           <div class="services-content">
              <div class="card">
                  <div class="box">
                      <i class="fas fa-paint-brush"></i>
                      <div class="text">Web Design</div>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia in doloremque illo repellendus, harum porro.</p>
                    </div>
              </div>
              <div class="card">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <div class="text">Web Development</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia in doloremque illo repellendus, harum porro.</p>
                  </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-chart-line"></i>
                    <div class="text">Chatbot Development</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia in doloremque illo repellendus, harum porro.</p>
                  </div>
             </div>
           </div>
       </div>
   </section>

    <!--x-- about section --x-->

    <!-- skills section -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills and experience</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dicta quas error perspiciatis pariatur similique ad eos accusantium maiores? Dignissimos esse nesciunt, cupiditate temporibus a nulla dolor odio nihil doloremque similique unde, quasi doloribus perspiciatis laborum asperiores culpa officiis corrupti excepturi atque? Cum quia at iure molestiae voluptate cumque minima.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>95%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>90%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>70%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>SASS</span>
                            <span>80%</span>
                        </div>
                        <div class="line sass"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Bootstrap</span>
                            <span>80%</span>
                        </div>
                        <div class="line bs"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>IBM-WATSON</span>
                            <span>90%</span>
                        </div>
                        <div class="line ibm"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Jquery</span>
                            <span>70%</span>
                        </div>
                        <div class="line jquery"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Node</span>
                            <span>70%</span>
                        </div>
                        <div class="line node"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Express</span>
                            <span>70%</span>
                        </div>
                        <div class="line express"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MongoDB</span>
                            <span>80%</span>
                        </div>
                        <div class="line mongodb"></div>
                    </div>
                </div>  
            </div>
        </div>
    </section>


    <!-- projects section -->

    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="project-content">
                <div class="card">
                    <div class="box">
                        <h2>Freelance</h2>
                        <p>HTML + CSS + Jquery</p>
                        <p>Freelancer</p>
                        <span class="span-one"><a href="#"><i class="fas fa-eye"></i></a>Live</span>
                        <span class="span-two"><a href="#"><i class="fab fa-github"></i></a>Code</span>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h2>Jennifer Doe</h2>
                        <p>HTML + CSS + JavaScript</p>
                        <p>Portfolio Site</p>
                        <span class="span-one"><a href="#"><i class="fas fa-eye"></i></a>Live</span>
                        <span class="span-two"><a href="#"><i class="fab fa-github"></i></a>Code</span>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                     <h2>DevConnector</h2>
                        <p>CSS + JavaScript</p>
                        <p>Movie App Landing Page</p>
                        <span class="span-one"><a href="#"><i class="fas fa-eye"></i></a>Live</span>
                        <span class="span-two"><a href="#"><i class="fab fa-github"></i></a>Code</span> 
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <h2>Calculator</h2>
                        <p>Bootstrap + JavaScript </p>
                        <p>Currency Conversion App</p>
                        <span class="span-one"><a href="#"><i class="fas fa-eye"></i></a>Live</span>
                        <span class="span-two"><a href="#"><i class="fab fa-github"></i></a>Code</span> 
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                      <h2>AgedPrompt</h2>
                        <p>SASS+ JavaScript + PHP</p>
                        <p>Futuristic Web App Landing Page</p>
                        <span class="span-one"><a href="#"><i class="fas fa-eye"></i></a>Live</span>
                        <span class="span-two"><a href="#"><i class="fab fa-github"></i></a>Code</span> 
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                     <h2>MovieApp</h2>
                        <p>React</p>
                        <p>Movie Search App</p>
                        <span class="span-one"><a href="#"><i class="fas fa-eye"></i></a>Live</span>
                        <span class="span-two"><a href="#"><i class="fab fa-github"></i></a>Code</span>           
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                     <h2>Blogger</h2>
                        <p>CSS + JavaScript</p>
                        <p>Blog App</p>
                        <span class="span-one"><a href="#"><i class="fas fa-eye"></i></a>Live</span>
                        <span class="span-two"><a href="#"><i class="fab fa-github"></i></a>Code</span>           
                    </div>
                </div>     
                <div class="card">
                    <div class="box">
                    <h2>Clock</h2>
                        <p>CSS + JavaScript</p>
                        <p>Wall Clock</p>
                        <span class="span-one"><a href="#"><i class="fas fa-eye"></i></a>Live</span>
                        <span class="span-two"><a href="#"><i class="fab fa-github"></i></a>Code</span>           
                    </div>      
                   </div>
                <div class="card">
                    <div class="box">
                    <h2>Portfolio</h2>
                        <p>CSS + JavaScript</p>
                        <p>Portfolio Site</p>
                        <span class="span-one"><a href="#"><i class="fas fa-eye"></i></a>Live</span>
                        <span class="span-two"><a href="#"><i class="fab fa-github"></i></a>Code</span>           
                    </div>      
                   </div>
                </div>
            </div>
</section>


    <!-- teams section -->
    
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="assets/image1.jpg" alt="">
                        <div class="text">someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="assets/image1.jpg" alt="">
                        <div class="text">someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="assets/image1.jpg" alt="">
                        <div class="text">someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="assets/image1.jpg" alt="">
                        <div class="text">someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="assets/image1.jpg" alt="">
                        <div class="text">someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="assets/image1.jpg" alt="">
                        <div class="text">someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    
</section>

    <!--contact section-->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in touch</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, totam.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Kenechukwu Nwobodo</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Enugu, Nigeria</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">sample@yahoo.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="mail.php" method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="fullname" placeholder="Name" value="" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" value="" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Subject" value="" required>
                        </div>
                        <div class="field textarea">
                             <textarea name="message" id="" cols="30" rows="10" placeholder="Write your message here..." value="" required></textarea>
                        </div>
                         <?php
                         if(isset($success)){
                             echo '<p>'.$success.'</p>';
                         } elseif(isset($error)){
                            echo '<p>'.$error.'</p>';
                         } 

                        ?>
                        <div class="button">
                            <button type="submit" name="send">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <footer>
        <span>Developed by <a href="#">Kenechukwu</a> <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    
    <!--jquery js-->
    <script src="js/jquery3.5.1.min.js"></script>
    <!--owl carousel-->
    <script src="js/owl.carousel.min.js"></script>
    <!--custom js-->
    <script src="js/script.js"></script>
</body>
</html>