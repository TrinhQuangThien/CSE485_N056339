<?php
    header("Content-type: text/css; charset: UTF-8");
?>

body{
	background-color: #555357;
}

.navbar{
	border-bottom: 2px solid #dacb46;
}

.navbar-light .navbar-nav .nav-link{
	font-size: 14px;
	color: rgb(243, 237, 237);
	text-transform: capitalize;
}

.navbar-light .navbar-nav .nav-link:hover{
	color: tomato;
}

.nav-item{
	padding: 0px 15px;
	font-weight: bold;
}


.form-inline{
	margin-left: 70px;
}

.form-control[type=text] {
	position: relative;
	background-repeat: no-repeat;
	background-image: url('../imgs/search_icon.png');
}

.form-control:focus{
	border: 1px solid orangered;
	box-shadow: none;
}

#livesearch{
	position: absolute;
	margin-top: 50px;
	background-color: #343a40;
	z-index: 1;
}

#livesearch>a{
	color: pink;
}

#livesearch>a:hover{
	color: hotpink;
	text-decoration: none;
}

.buttonl{
	color: #212529;
  	background-color: #ffc107;
  	border-color: #ffc107;
  	border-radius: 0.25rem;
  	cursor: pointer;
}
.buttonl:hover{
	color: #212529;
  	background-color: #e0a800;
  	border-color: #d39e00;
}

.buttong{
	color: #fff;
  	background-color: #dc3545;
  	border-color: #dc3545;
  	border-radius: 0.25rem;
  	margin-left: 5px;
  	cursor: pointer;
}
.buttong:hover{
	color: #fff;
  	background-color: #c82333;
 	border-color: #bd2130;
}
#logout{
	width: auto;
	background-color: #343a40;
}

#user{
	color: #ff80b3;
}
#user:hover{
	color: #ff4d94;
	text-decoration: underline;
}

.dropdown{
	position: relative;
	display: inline-block;
}
/*sub-menu*/
.dropdown-content{
	left: 23px;
  	right: auto;
	display: none;
	position: absolute;
	z-index: 1;
	list-style: none;
	background-color: #343a40;
}

.dropdown-item{
	color: rgb(243, 237, 237);
}

.dropdown:hover .dropdown-content{
	display: block;
}

#navbarSupportedContent{
	padding-left: 40px;
}

.center{
	display: block;
    margin-left: auto;
    margin-right: auto;

}
.caption{
	text-align: center;
}

.carousel{
	border-top: 2px solid #dacb46;
	border-bottom: 2px solid #dacb46;
}

.card{
	text-align: -webkit-match-parent;
}

#single-home{
	display: block;
	text-rendering: optimizeLegibility;
}
.MovieList{
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	display: flex;
	flex-wrap: wrap;

}
.TPost{
	border: 1px solid #999;
	background-color: #1b1b1b;
	box-sizing: border-box;
	width: 167.5px;
	height: 280px;
	margin: 5px;
	padding: 5px 10px;
	text-overflow: ellipsis;
	
}
.card-img-top{
	border-bottom-left-radius: calc(0.25rem - 1px);
	border-bottom-right-radius: calc(0.25rem - 1px);
}

.card-block{
	height: 72px;
	text-overflow: ellipsis;
	overflow: hidden;
}
.card-title{
	margin-bottom: 2px;
	font-size: 15px;
	color: #46e1ff;
}

.card-text:last-child{
	color: #fff;
	font-size: 13px;
}

.header-film{
	font-family: cursive;
	color: #dacb46;
	text-transform: uppercase;
}

.list-top-film{
	position: relative;
	list-style-type: none;
	overflow: hidden;
	width: auto;
	margin: 0px;
	padding: 0px;
}

.list-top-film-item{
	clear: both;
	min-height: 164px;
	height: auto;
	border-bottom: 1px solid #333;
	padding: 12px 8px;
}

.list-top-film-item-thumb{
	float: left;
	width: 110px;
	height: 140px;
	border: 2px solid #999;
	background-repeat: no-repeat;
	background-size: cover;
	border-radius: 0.25rem;
}

.list-top-film-item-info{
	text-overflow: ellipsis;
	overflow: hidden;
	display: block;
	float: left;
	width: 180px;
	padding-left: 15px;
}

.title-film{
	display: block;
	color: #46e1ff;
	font-size: 16px;
}

.time-film{
	display: block;
	color: #fff;
	font-size: 13px;
}

.view-film{
	color: #fff;
	font-size: 13px;
}

.scrollbar {
	margin-top: 5px;
	margin-left: 0px;
	float: left;
	height: 570px;
	width: 350px;
	background: #4F4E52;
	overflow-y: scroll;
	margin-bottom: 25px;
}
.force-overflow {
	min-height: 450px;
	background-color: #1a1a1a;
}

.scrollbar-primary::-webkit-scrollbar {
	width: 12px;
	background-color: #666560; 
	border: 2px solid #1a1a1a;
}

.scrollbar-primary::-webkit-scrollbar-thumb {
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
	background-color: #969388; 
}

.page-list{
	padding: 20px 5px;
}

.py-3{
	background-color: #131313;
	border-top: 2px solid #dacb46;
}

#changepass{
	margin: 100px 0 0 550px;
}
.pass{	
	padding-top: 8px;
}
