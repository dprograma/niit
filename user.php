<!DOCTYPE html>
<html>
<head>
	<title>User Area</title>
</head>
<body>
<?php
	require('header.php');
?>
<main>
	<section>
		<article><p style="font-style: 28px; font-weight: bold;"><u>User Area</u></p><p>ONLINE WEB DESIGN TUTORIAL FOR WORDPRESS WEBSITE AND BLOG</p><small><p>
If you have anything to sell or showcase; if you are a business man or woman, artist, composer, trader, 
artiste, writer , be it a small, medium or big-time business or you have something gin mind you want to
show the world or it could be that you want to become a blogger like Linda Ikeji, you may be wondering,
you may be wondering how you could get your business online so it could reach a wide set of people and
to give your work a more professional look. You don’t really need to pay a humongous amount of money
trying to pay web developers to help you build a website if you could do it yourself. 
Learn To Do It Your Self With 
1. Video tutorial  
2. Step-by-step lecture guide
Training Are As Follows 
1. beginner web designing 
2. intermediary web designing
3. Advanced web designing – e-commerce website (like Konga.com, Dealdey.com, Jumia.com)
4. android app development  
1. Beginner Web Design (No Programing Skills Required)
Here you will learn how to. 
a. Create free blogs or website on a free WordPress account e.g. Www.mywebsite.worpress.com
b. Video tutorials to guide you through the steps 
c. Lecture guide (in pdf format) for step-wise instructions on how to design
d. WhatsApp group for online lectures and Q&A
e. How to customize your free website or blog with themes and plugins 
2. Intermediate Web Designing (No Programming Skills Required)
a. Video tutorials to guide you through the steps  
b. Lecture guide (in pdf format) for step-wise instructions on how to design
c. WhatsApp group for online lectures and Q&A
d. Learn how to get your own domain e.g. Www.mydomain.com
e. Learn to create a self –hosted website
f. Learn how to host a domain on a hosting company
g. Learn how to install WordPress from you cpanel
h. Learn how to own your free email (professional) e.g. Info@mydoamin.com and attach it to your 
other email accounts like Gmail.
i. Learn how to use themes, plugins to customize website for a professional look. 
3. Advanced Web Design (No Programming Skill Required)
a. Video tutorials to guide you through the steps  
b. Lecture guide (in pdf format) for step-wise instructions on how to design
c. WhatsApp group for online lectures and Q&A
d. Learn how to get your own domain e.g. Www.mydomain.com
e. Learn to create a self –hosted website
f. Learn how to host a domain on a hosting company
g. Learn how to install WordPress from you cpanel </p></small>
<p>&nbsp;</p>
<small><p>Android App Design (No Programming Skill Required) 
a. Convert you r blog website or e-shop/sop into an android app
b. How to install android SDK on you pc
c. Generate signed APK (android app)
d. How to open an account with google PlayStore
e. How to publish you r app in google PlayStore 
f. Free software foe development (Java SDK & android SDK)
g. Video tutorial and lecture guide in pdf format
h. WhatsApp group discussion for Q&A 

Requirement
1. Smart phone. e.g. android phone 
2. A computer. e.g. laptop or desktop
3. Data on your phone </p></small>
</article>
	</section>
	<aside><?php
		require('config.php');
		$sql = "SELECT * FROM usertable WHERE id = '" . $_SESSION['num'] . "' ";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($query);
	?>
		<img class = "profileimage" src="images/<?php echo $row['image']; ?>"></aside>
</main>
<?php
	require('footer.php');
?>
</body>
</html>