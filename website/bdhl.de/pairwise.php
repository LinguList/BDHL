<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>BDHL</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="description" content="benchmarks for quantitative historical linguistics">
<meta name="keywords" content="linguistics, historical linguistics,benchmark,database,phonetic alignment">
<meta NAME="resource-type" CONTENT="linguistics,historical linguistics,benchmark database,phonetic alignment">
<meta name="distribution" CONTENT="global">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<link rel="icon" href="pics/favicon.png" type="image/png">  
<link rel="stylesheet" href="css/bdhl.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>   
<script src="js/concepts.js"></script>
<script src="js/lingulist.js"></script>
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
  <a href="http://quanthistling.info/bdhl/"><img id="logo" src="pics/favicon.png" width="60px" alt="logo" title="CLiPs" /></a>
  <div id="mainnav">
    <ul id="nav">
    <li>
      <a href="about.php">About</a>
      <ul id="home">
	<li><a href="about.php">About</a></li>
	<li><a href="faq.php">FAQ</a></li>
	<li><a href="contact.php">Contact</a></li>
      </ul>
    </li>
    <li>
      <a href="alignments.php">Alignments</a>
      <ul id="alignments">
	<li><a href="alignments.php">About</a></li>
	<li><a href="pairwise.php">Pairwise</a></li>
	<li><a href="multiple.php">Multiple</a></li>
	<li><a href="align_sources.php">Sources</a></li>
      </ul>
    </li>
    <li>
      <a href="cognates.php">Cognates</a>
      <ul id="cognates">
	<li><a href="cognates.php">About</a></li>
	<li><a href="cognates_browse.php">Browse</a></li>
	<li><a href="cognates_sources.php">Sources</a></li>
      </ul>
    </li>
    <li>
      <a href="proto.php">Reconstruction</a>
      <ul id="proto">
	<li><a href="proto.php">About</a></li>
	<li><a href="proto_sources.php">Sources</a></li>
	<li><a href="proto_browse.php">Browse</a></li>
      </ul>
    </li>
    <li>
      <a href="download.php">Download</a>
      <ul id="download">
	<li><a href="align_download.php">Alignments</a></li>
	<li><a href="cognates_download.php">Cognates</a></li>
	<li><a href="proto_download.php">Reconstructions</a></li>
      </ul>
    </li>
  </ul>
 </div><!--end mainnav-->
 </div><!-- end header -->  
 <div id="subnav">
    <h2><a href="alignments.php">Alignments</a></h2>   
<ul>
    <li><a class="inactive" href="alignments.php">About</a></li>
    <li><a class="active" href="pairwise.php">Pairwise</a></li>
    <li><a class="inactive" href="multiple.php">Multiple</a></li>
    <li><a class="inactive" href="align_sources.php">Sources</a></li>
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
<h2>Browse Pairwise Alignments in BDPA</h2>
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
<td>82 Sequences</td>
<td>Dataset by <a href="http://lingulist.de/evobib/evobib.php?key=Covington1996">Covington (1996)</a>, here in a slightly modified form containing plain IPA transcriptions instead of the original hybrid format.</td>
<td><input type="hidden" value="covington" name="select" />
<input type="submit" value="BROWSE" /></td></tr></form>

<form action="pairwise.php" method="post">
<tr>
<td>GLOBAL</td>
<td>7126 Sequences</td>
<td>Dataset was automatically extracted from our masterset of multiple alignments by selecting the most diverse sequence pairs of all multiple alignments. Parts of this dataset were used in order to test the performance of the SCA alignment algorithm (<a href="http://lingulist.de/evobib/evobib.php?key=List2012b">List 2012</a>).</td>
<td><input type="hidden" value="global" name="select" />
<input type="submit" value="BROWSE" /></td></tr></form>

<form action="pairwise.php" method="post">
<tr>
<td>TONAL</td>
<td>1089 Sequences</td>
<td>Dataset was automatically extracted from our masterset by selecting the most diverse sequence pairs of all multiple alignments consisting of tone languages. In contrast to the GLOBAL dataset above, this dataset contains only phonetic sequences from tone languages (Chinese, Bai).</td>
<td><input type="hidden" value="tone" name="select" />
<input type="submit" value="BROWSE" /></td></tr>
</form>
</table>


<?php } ?>
	

 </div>
 </div>
 <div id="footer">
 <p>Last updated on Nov. 22, 2013, 14:13 CET</p>
 <p>
This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>.</p><br>
<p>
   <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US"><img
		alt="Creative Commons License" style="border-width:0;width:80px;"
		src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a> </p>
 
 </div><!-- end footer -->

</div><!-- end wrapper-->
</body>
</html>
