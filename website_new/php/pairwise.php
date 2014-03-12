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
    <h2><a href="pairwise.php">Browse</a></h2>   
<ul>
    <li><a class="active" href="pairwise.php">Pairwise</a></li>
    <li><a class="inactive" href="multiple.php">Multiple</a></li>
</ul>

 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">    
	 <!-- SIDEBAR alignments -->
<?php if(isset($_POST["select"])){
    if($_POST["select"] == "covington"){
	include("align/pairwise/covington.html");
    }
    else if($_POST["select"] == "global"){
	include("align/pairwise/global.html");
    }
    else if($_POST["select"] == "tone"){
	include("align/pairwise/tone.html");
    }

    }
    else{
?>
<h3>Browse Pairwise Alignments in BDPA</h3>
<br>
<br>
In this section we offer a collection of manually edited pairwise alignments. For details on the dataset, see the descriptions 
in the table below.
<br><br>
<table border=2>
<tr>
<td><b>Name</b></td>
<td><b>Size</b></td>
<td colspan="2" width=60%><b>Description</b></td>
</tr>
<form action="pairwise.php" method="post">
<tr>
<td>Covington</td>
<td>82 alignments</td>
<td>Dataset by <a href="http://lingulist.de/evobib/evobib.php?key=Covington1996">Covington (1996)</a>, here in a slightly modified form containing plain IPA transcriptions instead of the original hybrid format.</td>
<td><input type="hidden" value="covington" name="select" />
<input type="submit" value="BROWSE" /></td></tr></form>

<form action="pairwise.php" method="post">
<tr>
<td>GLOBAL</td>
<td>7197 alignments</td>
<td>Dataset was automatically extracted from our masterset of multiple alignments by selecting the most diverse sequence pairs of all multiple alignments. Parts of this dataset were used in order to test the performance of the SCA alignment algorithm (<a href="http://lingulist.de/evobib/evobib.php?key=List2012a">List 2012</a>).</td>
<td><input type="hidden" value="global" name="select" />
<input type="submit" value="BROWSE" /></td></tr></form>

<form action="pairwise.php" method="post">
<tr>
<td>TONAL</td>
<td>1088 alignments</td>
<td>Dataset was automatically extracted from our masterset by selecting the most diverse sequence pairs of all multiple alignments consisting of tone languages. In contrast to the GLOBAL dataset above, this dataset contains only phonetic sequences from tone languages (Chinese, Bai).</td>
<td><input type="hidden" value="tone" name="select" />
<input type="submit" value="BROWSE" /></td></tr>
</form>
</table>


<?php } ?>
	

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
