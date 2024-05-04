<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin: 0;}
ul.topnav li a {
  display: flex;
  align-items: center;
  color: gray;
  font-size: 65%;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a i {
  margin-right: 5px;
}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #transparent;
}
ul.topnav li {float: right;}
ul.topnav li a:hover:not(.active) {background-color: transparent;}
ul.topnav li a.active {background-color: #04AA6D;}
ul.topnav li.right {float: right;}
ul.topnav li a i {
  margin-right: 5px;
}
@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
</style>
</head>
<body>

<ul class="topnav">
<li><a href="http://127.0.0.1:8000/Contact"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
<li><a href="http://127.0.0.1:8000/Help"><i class="fa fa-question-circle"></i> Help</a></li>
<li><a href="http://127.0.0.1:8000/About"><i class="fa fa-info-circle "></i>About </a></li>

</ul>

</body>
</html>