<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
	<script type="text/javascript">
 function hire()

	{
	alert("Unable to Hire.This person is currently busy Because of board exam");
}


	</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
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
               
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

 
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Suraj Gautam</div>
                <div class="text-3">And I'm a Developer</span></div>
               <input type="submit"  value="Hire me" onclick="hire();">
            </div>
          </div>
      </div>
    </section>

  
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Suraj and I'm a <span class="typing-2"></span></div>
                    <p>I am always goal-oriented and worked independently . I have exercised MY position for your fullest satisfaction and has met your expectations in every view.I 	always able to cope with severe workloads.
					I am strong work ethic, very friendly and easygoing personality and collaborating with me is great fun.</p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>


    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>I will optimally implement your processes and simply digitize your business. Hire me as your  website developer for tailor-made experience for your website visitors. Skilled and experienced in many front end languages such as HTML, CSS, and Javascript.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>I will program your online shop according to your business model. Technology has to support your business. Create your online store and I provide 24*7 technical support, and maintenance for your online store during migration, integration, upgradation and other similar processes.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Your website should reach your target group and create new customers with simple yet striking user interface. Create remarkable first impression with creative design for websites and other web applications.
						<br>
						<br></p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

 
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I employ the latest web tools and technologies to design an engaging and interactive  website for your business. Very often, blogs are filled with a lot of content and must be cleanly structured in order to make the navigation easier for the visitor. Bug-free coding and optimization services to keep your WordPress website running 24*7 for optimum experience.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>You will find Thousads of website developers having equivalent professional skills and expertise. But what I feel makes me different from the rest is my unique approach!</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Suraj Gautam</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Kapilvastu, Nepal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">surajgautam1111@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form class="contact-form" action="#" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text"name="name" class="fullname" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="text" name="email" class="email-input" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" class="subject" name="subject" placeholder="Subject">
                        </div>
                        <div class="field textarea">
                            <textarea class="message" name="message" cols="30" rows="10" placeholder="Message.."></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<?php
$conn=mysqli_connect("localhost","root","","information");

if(isset($_POST['submit']))
{
	 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];

	
$query=mysqli_query($conn,"insert into message(name,email,subject,message)
                                         values('$name','$email','$subject','$message')");
if($query==true)

{
	
	echo "<center><h2>Message sent</h2></center>";
}
else
{
	echo"<center><h2>Unable to sent message</h2></center>";
}
	
											
}?>

    <footer>
        <span>Created By Suraj Gautam | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
