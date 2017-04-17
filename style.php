@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700|Merriweather+Sans:800);


*, *:after, *:before { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
.clearfix:before, .clearfix:after { content: ''; display: table; }
.clearfix:after { clear: both; }

body {
	position: relative;
	background: #fff;
	
	font-size: 100%;
	line-height: 1.25;
	font-weight: 400;
	font-family: 'Lato', Arial, sans-serif;
}



a, button {
	color: #553445;
	text-decoration: none;
	outline: none;
}

#formDiv{
position:relative;
width:850px;
background:#fef0e3;
border-radius:3px;
padding:5px;
margin:20px 0px 10px 280px;
border:1px solid #e75854;
}

#formSearch input[type="submit"]{
background-color:#e75854;
color:#fff
}

#divLoading{
position:absolute;
top:8px;
left:620px;
}

#selectDiv{
position:absolute;
top:8px;
left:370px;
}



#divPageData{
margin-left:
280px;
}
ul{border:0; margin:0; padding:0;}

#pagination-flickr li{
border:0; margin:0; padding:0;
font-size:11px;
list-style:none;
border-radius:5px;
}
#pagination-flickr li a{
border-radius:5px;
}

#pagination-flickr a{
border:solid 1px #DDDDDD;
margin-right:2px;
background-color:#e75854;
}

#pagination-flickr .previous-off,
#pagination-flickr .next-off {
color:#666666;
display:block;
float:left;
font-weight:bold;
padding:3px 4px;
}

#pagination-flickr .next a,
#pagination-flickr .previous a {
font-weight:bold;
border:solid 1px #FFFFFF;
}

#pagination-flickr .active{
color:#ff0084;
font-weight:bold;
display:block;
float:left;
padding:4px 6px;
}

#pagination-flickr a:link,
#pagination-flickr a:visited {
color:#fff;
display:block;
float:left;
padding:3px 6px;
text-decoration:none;
}

#pagination-flickr a:hover{
border:solid 1px #666666;
}

#addDiv{
position:absolute;
top:5px;
left:820px;
}
