<!DOCTYPE html>
<html>


<head>
<title>index</title>
<style>
  body {
    /* background: url(./6b1.jpg); */
    background-color:rgb(73, 3, 70) ;
    background-size:cover;
  }
  
</style>

</head>

<body text="#FFFFFF">
<nav>
  <h2><a href="index.html" class="form__link">Online Fitness</a></h2>
  <div class="search-box">
      <img width="30" src="./images/search.png">
      <input type="text" placeholder="Search">
  </div>
  <li><a href="index.html"><b>Trang ch?</b></a></li>
  
  <li class="dropdown">
      <a class="dropbtn"><b>�?a di?m mua b�n</b></a>
      <div class="dropdown-content">
        <a href="https://shopee.vn/"><b>Shopee</b></a>
        <a href="https://www.lazada.vn/"><b>Lazada</b></a>
        <a href="https://tiki.vn/"><b>Tiki</b></a>
      </div>
    </li>
    
  <li><a href="/dangnhap/login.php"><b>�ang nh?p</b></a></li>

  <li><a href="/dangky/register.php"><b>�ang k�</b></a></li>
    
    
    
</nav>

<style>

@charset "utf-8";


:root {
    --body-color: #a40ab3;
    --nav-color: rgb(126, 5, 120);
    --bg-color: #fff;
}
nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: var(--nav-color);
    padding: 5px 2%;
    position: sticky;
    top: 0;
    z-index: 100;
    height: 100;
    list-style-type:none
}

.nav-left {
    display: flex;
    align-items: center;
     /* padding: 100%;  */
}

.nav-right {
    padding-right: 20px;
    margin-left: 50%;
    display: flex;
    align-items: center;
}

.nav-left {
    margin-left: 30%;
    padding-right: 2px;
}

.nav-left ul li {
    list-style: none;
    display: inline-block;
}




.search-box {
    background: #efefef;
    padding-left: 10px!important;
    width: 350px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    padding: 0 15px;
    margin-left: 1%;
}

.search-box img {
    width: 25px;
}

.search-box input {
    width: 100%;
    background: transparent;
    padding: 15px;
    outline: none;
    border: 0;
}



ul {
list-style-type:none ;
margin:0;
padding: 100px;
overflow: hidden;
background-color: gray;
}
li {
float:right;
}

li a, .dropbtn {
display: :inline-block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
padding-left: 5!important;
border-radius: 20px;
display: flex;
align-items: center;
margin-left:0;
}
li a:hover, .dropdown:hover .dropbtn {
background-color: rgb(78, 3, 85);
}
li.dropdown {
display: inline-block;
}
.dropdown-content {
display: none;
position: absolute;
background-color: cornsilk;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
color: black;
padding 12px 16px;
text-decoration: none;
display: block;
text-align: left;
}

.dropdown-content a:hover {background-color: blanchedalmond;}

.dropdown:hover .dropdown-content {
display: block;
}
.form__link {
    text-decoration: none;
    color: white;
}



.container {
    width: 940px;
    margin-left: auto;
    margin-right: auto;
    background-color: rgb(177, 38, 38);
}
.content-area {
    border-top: 3px solid black;
    border-bottom: 3px solid black;
}
.main-area {
    width:33%;
    float:left;
    i
}
.ks {
    width:33%;
    float:right;
}
.sidebar {
    width: 33%;
    float: left;
}

.fix{
    clear: both;
}
.group:before,
.group::after {
    content: "";
    display: table;
}
.group::after {
    clear:both
}
.group {
    zoom:1;
}
.can {
    /* padding: 1rem 5rem; */
    width: cover ;
    height: cover;
    overflow: hidden;
    border: 1px solid none;
}
.can img {
    width: 100%;
    height: 100%;
    transition-duration: 0.5s;
        -webkit-transition-duration: 0.5s; 
        -moz-transition-duration: 0.5s; 
        -o-transition-duration: 0.5s;
        -ms-transition-duration: 0.5s;
}
.can img:hover {
    transform: scale(1.2);
        -webkit-transform: scale(1.2); 
        -moz-transform: scale(1.2); 
        -o-transform: scale(1.2);
        -ms-transform: scale(1.2);
    cursor: pointer; 
}
.can1 { 
    padding: 1rem 1rem;

}
</style>



</body>
</html>