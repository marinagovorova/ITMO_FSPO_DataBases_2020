<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Montserrat, sans-serif';
$font_size = '15px';
$border = '1px solid';
?>


table{
  width: 70%;
}
 th, td{
    font-family: <?=$font_family?>;
    font-size: <?=$font_size?>;
    color: #00000;
    border: 1px solid;
    padding-bottom: 0;
    vertical-align: top;
}
tablee {
margin: 8px;
}

tht {
font-family: <?=$font_family?>;
font-size: <?=$font_size?>;
color: #00000;
padding: 10px  10px 6px;
margin: 0 5 0;
border-collapse: separate;
}

tdt {
font-family: <?=$font_family?>;
font-size: 16px;
color: #00000;
padding: 2px  10px 6px;
border-collapse: separate;
}

th {
  padding-right: 45px;
  text-align: right;
  width: 20%;
}
td {
  width: 15%;
}
alltable{
  margin: 20px 30px 0px 0px;
}


.simple-little-table {
font-family:Arial, Helvetica, sans-serif;
text-align: center;
color:#666;
font-size:12px;
text-shadow: 1px 1px 0px #fff;
background:#eaebec;
margin: auto;
border:#ccc 1px solid;
border-collapse:separate;

-moz-border-radius:3px;
-webkit-border-radius:3px;
border-radius:3px;

-moz-box-shadow: 0 1px 2px #d1d1d1;
-webkit-box-shadow: 0 1px 2px #d1d1d1;
box-shadow: 0 1px 2px #d1d1d1;
}

.simple-little-table th {
font-weight:bold;
padding:21px 25px 22px 25px;
border-top:1px solid #fafafa;
border-bottom:1px solid #e0e0e0;

background: #ededed;
background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
background: -moz-linear-gradient(top, #ededed, #ebebeb);
}
.simple-little-table th:first-child{
text-align: left;
padding-left:20px;
}
.simple-little-table tr:first-child th:first-child{
-moz-border-radius-topleft:3px;
-webkit-border-top-left-radius:3px;
border-top-left-radius:3px;
}
.simple-little-table tr:first-child th:last-child{
-moz-border-radius-topright:3px;
-webkit-border-top-right-radius:3px;
border-top-right-radius:3px;
}
.simple-little-table tr{
text-align: center;
padding-left:20px;
}
.simple-little-table tr td:first-child{
text-align: left;
padding-left:20px;
border-left: 0;
}
.simple-little-table tr td {
padding:18px;
border-top: 1px solid #ffffff;
border-bottom:1px solid #e0e0e0;
border-left: 1px solid #e0e0e0;

background: #fafafa;
background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
.simple-little-table tr:nth-child(even) td{
background: #f6f6f6;
background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
background: -moz-linear-gradient(top, #f8f8f8, #f6f6f6);
}
.simple-little-table tr:last-child td{
border-bottom:0;
}
.simple-little-table tr:last-child td:first-child{
-moz-border-radius-bottomleft:3px;
-webkit-border-bottom-left-radius:3px;
border-bottom-left-radius:3px;
}
.simple-little-table tr:last-child td:last-child{
-moz-border-radius-bottomright:3px;
-webkit-border-bottom-right-radius:3px;
border-bottom-right-radius:3px;
}
.simple-little-table tr:hover td{
background: #f2f2f2;
background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}

.simple-little-table a:link {
color: #666;
font-weight: bold;
text-decoration:none;
}
.simple-little-table a:visited {
color: #999999;
font-weight:bold;
text-decoration:none;
}
.simple-little-table a:active,
.simple-little-table a:hover {
color: #bd5a35;
text-decoration:underline;
}