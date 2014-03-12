<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>BDPA</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="description" content="benchmarks for quantitative historical linguistics">
<meta name="keywords" content="linguistics, historical linguistics,benchmark,database,phonetic alignment">
<meta NAME="resource-type" CONTENT="linguistics,historical linguistics,benchmark database,phonetic alignment">
<meta name="distribution" CONTENT="global">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<link rel="icon" href="pics/align.png" type="image/png">  
<link rel="stylesheet" href="css/bdhl.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<link rel="stylesheet" href="css/msa.css" type="text/css" />
    
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>   
<script src="js/concepts.js"></script>
<script src="js/lingulist.js"></script>
<script src="js/msa.js"></script>
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
</script>
<script type="text/javascript"
  src="https://c328740.ssl.cf1.rackcdn.com/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
</head>
<body id="home">



<div id="wrapper">
  <div id="header">
  <a href="http://alignments.lingpy.org/"><img id="logo" src="pics/align.png" height="50px" alt="logo" title="BDPA" /></a>
  <div id="mainnav">
    <ul id="nav">
    <li>
	<a href="main.php">HOME</a>
    </li>
    <li>
      <a href="intro.php">About</a>
      <ul id="home">
	<li><a href="intro.php">Introduction</a></li>
	<li><a href="faq.php">FAQ</a></li>
      </ul>
    </li>
    <li>
      <a href="pairwise.php">Browse</a>
      <ul id="browse">
	<li><a href="pairwise.php">Pairwise</a></li>
	<li><a href="multiple.php">Multiple</a></li>
      </ul>
    </li>
    <li>
      <a href="sources.php">Sources</a>
    </li>
    <li>
      <a href="download.php">Download</a>
    </li>
  </ul>
 </div><!--end mainnav-->
 </div><!-- end header -->  
 <div id="subnav">
    <h2> <a href="intro.php">About</a></h2>   
<ul>
    <li><a class="active" href="intro.php">Introduction</a></li>
    <li><a class="inactive" href="faq.php">FAQ</a></li>
</ul>

 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">    
	 <!-- SIDEBAR about -->
<h3>Introduction to the BDPA</h3>
<br><br>
<!--<div class="sidebar">
<p><b><u>Contents:</u></b></p><br>
<ul>
    <li><a style="color:black;" href="about.php#alignments">Alignment Analyses</a></li>
    <li><a style="color:black;" href="about.php#introduction">A Benchmark Database for Phonetic Alignments</a></li>
    <li><a style="color:black;" href="about.php#formats">Basic Formats for Alignment Analyses</a></li>
    <li><a href="alignments.php#"></a></li>
    <li><a href="alignments.php#"></a></li>
</div>

</ul>-->

<!--<table>
<tr>
  <td style="background-color:#ffa600;width:100px"><b>Release:</b></td>
  <td> 1.0 </td>
  <td></td>
</tr>
<tr>
  <td style="background-color:#ffa600;width:100px"><b>Date:</b></td>
  <td> ?, ?</td>
  <td></td>
</tr>
<tr>
  <td style="background-color:#ffa600;width:100px"><b>Author:</b></td>
  <td> Johann-Mattis List, Jelena Prokić </td>
  <td></td>
</tr>
</table>
<br><br>-->

<p>With the "Benchmark Database for Phonetic Alignments" (BDPA), we present a new data resource for historical linguistics and dialectology which offers collections of cognate words from different language varieties. In contrast to other resources which concentrate on questions of cognacy and lexical change, the BDPA represents the data in form of pairwise and multiple <i>alignments</i>. An alignment is a matrix representation of two or more sequences in which corresponding segments in the sequences are placed in the same column, with empty cells resulting from non-matching segments being filled by <i>gap</i> symbols. Currently, the BDPA offers a total of 750 multiple alignments, covering eight language families, more than 500 different language varieties, and more than 50 000 words. </p>
<br>
<p>In the last two decades, automatic alignment analyses of phonetic strings have become an
important tool in quantitative language comparison. Phonetic alignment plays a crucial role in the
identification of regular sound correspondences and deeper genealogical relations between and
within language families. Surprisingly, up to today, there are no easily accessible benchmarks for
phonetic alignment analyses. Here we present a publicly available benchmark database of
manually edited phonetic alignments which is designed as a platform to test the performance of
automatic alignment algorithms. The database consists of a great variety of alignments drawn from
a number of different sources. The data is arranged in a such way that typical problems
encountered in phonetic alignment analyses (metathesis, splits and mergers of sounds, diversity of
phonetic strings) are represented and can be directly tested.</p>
<br><br>
<table>
<tr>
  <td style="background-color:#ffa600;width:100px"><b>Release:</b></td>
  <td> 1.0 </td>
  <td></td>
</tr>
<tr>
  <td style="background-color:#ffa600;width:100px"><b>Date:</b></td>
  <td> ?, ?</td>
  <td></td>
</tr>
<tr>
  <td style="background-color:#ffa600;width:100px"><b>Editors:</b></td>
  <td> Johann-Mattis List, Jelena Prokić </td>
  <td></td>
</tr>
</table>

 </div>
 </div>
 <div id="footer">
<table>
<tr><td>
<div class="footer_left">
<a href="http://www.hhu.de/"><img width="120px" src="http://www.hhu.de/home/fileadmin/images/uni_duesseldorf_logo.gif" alt="HHUD" /></a>
 </div></td>
 <td><div class="footer_left">
<a href="http://www.bmbf.de/"><img width="120px" src="http://www.bmbf.de/_img/common/BMBF_Logo.png" alt="BMBF" /></a>
 </div></td>
<td><div class="footer_center">
 <p>Last updated on Mar. 12, 2014, 10:11 CET</p>
 <p>
This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>.</p><br>
<p>
   <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US"><img
		alt="Creative Commons License" style="border-width:0;width:80px;"
		src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a> </p>
</div></td>
<td><div class="footer_right">
<a href="http://erc.europa.eu/"><img width="80px" src="http://quanthistling.info/theme/qhl/images/logo_erc.png" alt="ERC" /></a>


</div></td>
<td><div class="footer_right">
<a href="http://www.uni-marburg.de/"><img width="120px" src="http://www.uni-marburg.de/bilder/logo_uni1.gif" alt="PUD" /></a>

</div></td></tr></table>
 </div><!-- end footer -->

</div><!-- end wrapper-->
</body>
</html>
