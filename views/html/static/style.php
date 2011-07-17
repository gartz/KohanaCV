<?php defined('SYSPATH') or die('No direct script access.'); ?>

<style type="text/css">
table { border-collapse:collapse; border-spacing:0; empty-cells:show }
td, th { vertical-align:top; font-size:12pt;}
h1, h2, h3, h4, h5, h6 { clear:both }
ol, ul { margin:0; padding:0;}
li { list-style: none; margin:0; padding:0;}
<!-- "li span.odfLiEnd" - IE 7 issue-->
li span. { clear: both; line-height:0; width:0; height:0; margin:0; padding:0; }
span.footnodeNumber { padding-right:1em; }
span.annotation_style_by_filter { font-size:95%; font-family:Arial; background-color:#fff000;  margin:0; border:0; padding:0;  }
* { margin:0;}
.Heading_20_1 { color:#345a8a; font-size:16pt; font-family:Calibri; writing-mode:lr-tb; margin-top:0.3335in; font-weight:bold; }
.P1 { color:#00000a; font-size:12pt; font-family:Liberation Serif; writing-mode:lr-tb; }
.P2 { color:#00000a; font-size:12pt; font-family:Liberation Serif; writing-mode:lr-tb; text-align:right ! important; }
.P3 { color:#00000a; font-size:12pt; font-family:Liberation Serif; writing-mode:lr-tb; margin-bottom:19px; text-indent:0in; }
.P4 { color:#000000; font-size:12pt; font-style:italic; font-family:Liberation Serif; writing-mode:lr-tb; margin-left:2.7563in; margin-right:0in; text-indent:0in; }
.P5_borderStart { border-left-style:none; border-right-style:none; border-top-style:none; color:#17365d; font-size:26pt; font-weight:bold; letter-spacing:0.0035in; margin-top:0in; padding:0in; text-align:center ! important; font-family:Calibri; writing-mode:lr-tb; padding-bottom:0.2083in;  border-bottom-style:none; }
.P5 { border-left-style:none; border-right-style:none; color:#17365d; font-size:26pt; font-weight:bold; letter-spacing:0.0035in; padding:0in; text-align:center ! important; font-family:Calibri; writing-mode:lr-tb; padding-bottom:0.2083in; padding-top:0in;  border-top-style:none; border-bottom-style:none; }
.P5_borderEnd { border-bottom-width:0.0351cm; border-bottom-style:solid; border-bottom-color:#4f81bd; border-left-style:none; border-right-style:none; color:#17365d; font-size:26pt; font-weight:bold; letter-spacing:0.0035in; margin-bottom:0.2083in; padding:0in; text-align:center ! important; font-family:Calibri; writing-mode:lr-tb; padding-top:0in;  border-top-style:none;}
.P6 { color:#00000a; font-size:12pt; margin-left:0.5in; margin-right:0in; text-indent:0in; font-family:Liberation Serif; writing-mode:lr-tb; }
.P7 { color:#00000a; font-size:12pt; margin-left:0.5in; margin-right:0in; text-indent:0in; font-family:Liberation Serif; writing-mode:lr-tb; }
.Subtitle { color:#4f81bd; font-size:14pt; font-family:Calibri; writing-mode:lr-tb; text-align:center ! important; letter-spacing:0.0102in; font-style:italic; }
.Internet_20_link { color:#000080; text-decoration:underline; }
.T2 { color:#000000; font-family:Arial; }
.T3 { color:#000000; font-family:Arial; font-style:italic; }
.T4 { color:#000000; font-family:Helvetica; font-weight:bold; }
.T5 { color:#000000; font-family:Helvetica; font-style:italic; }
<!-- ODF styles with no properties representable as CSS -->
.ListLabel_20_1 .ListLabel_20_2 .ListLabel_20_3 .T1 { }
@media all
{
      body { max-width:8.5in;margin-top:1in; margin-bottom:1in; margin-left:1.25in; margin-right:1.25in; min-width: 600px; }
      #menu { display: block; background-color: #999999; font: menu; left: 0; padding: 12px; position: fixed; top: 0; width: 100%; height: 25px; }
      #menu>ul>li { margin: 6px; }
      #menu a { text-decoration: none; }
      #menu ul li { float: left; }
      #menu a>li { background-color: #cccccc; color: #000000; padding: 3px; text-align: center; width: 100px; border-radius: 10px 10px 10px 10px; box-shadow: 3px 3px 3px #666666; margin-right: 6px; }
      #menu a>li:hover { background-color: #efff00; }
      #menu a>li:active { background-color: #efff00; margin: 3px; box-shadow: 0px 0px 0px #666666; }
}
@media handheld, (max-width:750px)
{
      #menu { display: none; }
      body { margin: 10px; }
}
@media print
{
      #menu { display: none; }
      body { margin: 0px; }
}
</style>