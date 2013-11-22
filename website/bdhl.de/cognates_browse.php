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
    <h2> <a href="cognates.php">Cognates</a></h2>   
<ul>
    <li><a class="inactive" href="cognates.php">About</a></li>
    <li><a class="active" href="cognates_browse.php">Browse</a></li>
    <li><a class="inactive" href="cognates_sources.php">Sources</a></li>
</ul>

 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">    
	 <!-- SIDEBAR cognates -->
<?php if(isset($_POST['html']))
{
    include("cognates/html/".$_POST['html'].'.html');
}
else if(isset($_POST['qlc']))
{
?>
<h2>Browse the Benchmark Database for Cognate Detection</h2>
<br>
<br>
<?php 
    echo '<b>Source of file "<a style="color:black;" href="cognate_sources.php#'.$_POST['qlc'].'">'.$_POST['qlc'].'.qlc</a>" <a href="javascript:history.go(-1)">[BACK]</a>';
    echo "<pre><code>";
    include("cognates/qlc/".$_POST['qlc'].'.qlc');
    echo "</code></pre>";
}
else
{
?>
<h2> Browse the Benchmark Database for Cognate Detection</h2>
<br>
<br>
In this section, we offer a collection of datasets containing manually edited cognate judgments. 
For details on the datasets, see the descriptions below, but also our page on the <a href="cognates_sources.php">sources</a> of the data on cognate judgments, where all datasets are described in more detail. The data is divided into two parts: 
<br><br>
<ul>
<li>
    one <a href="#general">general part</a> providing a collection of six very diverse datasets covering five different language families,
    </li>
<li> 
    one <a href="#specific">specific part</a> providing a collection of varying datasets that can be used to investigate specific aspects of the performance of cognate detection methods.
    </li></ul>
<br>
Please follow <a href="cognates_download.php">this link</a> in order to download the raw data of the general and the specific part.

<br><br>
<h3><a style="color:black;" name="general">General Benchmark</a></h3>
<br><br>
This benchmark is intended to serve as a general benchmark to test the performance of cognate detection methods. It offers sufficiently large datasets taken from a wide variety of different language families.
<br><br>
<table border=2>
<tr>
<td><b>Name</b></td>
<td><b>Size</b></td>
<td><b>Description</b></td>
<td>
<div id="popup"><b>Browse</b>
<div id="text">View all cognate sets in an automatically conducted aligned format.</div></div></td>
<td>
<div id="popup"><b>Source</b>
<div id="text">View the raw source of the data.</div></div></td>
</tr>
<tr>
<td><a href="cognates_sources.php#BAI">BAI</a></td>
<td>1028 Words in 9 Bai dialects</td>
<td>Dataset contains cognate judgments for 9 different Bai dialect varieties, taken from <a href="http://lingulist.de/evobib/evobib.php?key=Wang2006">Wang (2006)</a>.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="BAI" name="html" />
<input type="submit" value="BROWSE" /></form>
</td><td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="BAI" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#IEL">IEL</a></td>
<td>4393 Words in 20 Indo-European languages</td>
<td>Original data stems from the <a href="http://ielex.mpi.nl/">Indo-European lexical cognacy database</a> and was kindly provided by Michael Dunn. The phonetic entries were automatically cleaned (removing of brackets and replacement of very narrow phonetic transcriptions by broader ones) and tokenized. 
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="IEL" name="html" />
<input type="submit" value="BROWSE" /></form>
</td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="IEL" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#JAP">JAP</a></td>
<td>1985 words in 10 Japanese dialects</td>
<td>Data was taken from <a href="http://lingulist.de/evobib/evobib.php?key=Shiro1973">Shirō (1973)</a>, with slight modifications of the original phonetic transcriptions.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="JAP" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="JAP" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#OUG">OUG</a></td>
<td>2055 words in 20 Uralic languages</td>
<td>Data was taken from the <a href="http://starling.rinet.ru/new100/main.htm">Global Lexicostatistical Database</a> with slight modifications of the original phonetic transcriptions.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="OUG" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="OUG" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#PAN">PAN</a></td>
<td>4358 words in 20 Austronesian languages</td>
<td>
Data stems from the <a href="http://language.psy.auckland.ac.nz/austronesian/">Austronesian Basic Vocabulary Database</a> and was kindly provided by Simon Greenhill. Lexical entries were automatically cleaned and converted to IPA.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="PAN" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="PAN" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#SIN">SIN</a></td>
<td>2789 words in 15 Chinese dialects</td>
<td>
Data was taken from the <i>Xiàndài Hànyǔ Fāngyán Yīnkù</i> (Phonetic database of Chinese dialects, <a href="http://lingulist.de/evobib/evobib.php?key=Hou2004">Hóu (2004)</a>), with slight modifications of the phonetic transcriptions.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="SIN" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="SIN" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>
</table>
<br><br>
<h3><a style="color:black;" name="specific">Specific Benchmark</a></h3>
<br><br>
The specific benchmark offers datasets that can be used to test specific characteristics of automatic cognate detection methods. For example, the dataset by <a href="http://lingulist.de/evobib/evobib.php?key=Kessler2001">Kessler (2001)</a> is useful to test whether an algorithm can distinguish related from unrelated languages. The dataset compiled from the <a href="http://lingweb.eva.mpg.de/ids/">Intercontinental Dictionary Series</a> can be used to test to which degree the size of the sample may influence the performance of an algorithm, and the four datasets based on data provided by the <a href="http://starling.rinet.ru/babel.php?lan=en">Tower of Babel</a> project can be used to test the impact of genetic distance on the accurracy of cognate detection methods.
<br><br>
<table border=2>
<tr>
<td><b>Name</b></td>
<td><b>Size</b></td>
<td><b>Description</b></td>
<td>
<div id="popup"><b>Browse</b>
<div id="text">View all cognate sets in an automatically conducted aligned format.</div></div></td>
<td>
<div id="popup"><b>Source</b>
<div id="text">View the raw source of the data.</div></div></td>
</tr>
<tr>
<td><a href="cognates_sources.php#GER">GER</a></td>
<td>814 words in 7 Germanic languages</td>
<td>
Data stems from the <a href="http://starling.rinet.ru/babel.php?lan=en">Tower of Babel</a> database. Phonetic transcriptions were added, since the original data did only contain orthographies.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="GER" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="GER" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#IDS">IDS</a></td>
<td>2429 words in 4 Indo-European languages</td>
<td>
Data stems from the <a href="http://lingweb.eva.mpg.de/ids/">Intercontinental Dictionary Series</a>.
Phonetic transcriptions and cognate judgments were added.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="IDS" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="IDS" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#KSL">KSL</a></td>
<td>1400 words in 7 different languages (partially unrelated)</td>
<td>
Data was taken from 
<a href="http://lingulist.de/evobib/evobib.php?key=Kessler2001">Kessler (2001)</a>.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="KSL" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="KSL" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#PIE">PIE</a></td>
<td>2172 words in 19 Indo-European languages</td>
<td>
Data stems from the <a href="http://starling.rinet.ru/babel.php?lan=en">Tower of Babel</a> database. Phonetic transcriptions were added, since the original data did only contain orthographies.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="PIE" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="PIE" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#ROM">ROM</a></td>
<td>589 words in 5 Romance languages</td>
<td>
Data stems from the <a href="http://starling.rinet.ru/babel.php?lan=en">Tower of Babel</a> database. Phonetic transcriptions were added, since the original data did only contain orthographies.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="ROM" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="ROM" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>

<tr>
<td><a href="cognates_sources.php#SLV">SLV</a></td>
<td>454 words in 4 Slavic languages</td>
<td>
Data stems from the <a href="http://starling.rinet.ru/babel.php?lan=en">Tower of Babel</a> database. Phonetic transcriptions were added, since the original data did only contain orthographies.
</td>
<td>
<form action="cognates_browse.php" method="post">
<input type="hidden" value="SLV" name="html" />
<input type="submit" value="BROWSE" /></form></td><td>

<form action="cognates_browse.php" method="post">
<input type="hidden" value="SLV" name="qlc" />
<input type="submit" value="SOURCE" /></form>
</td>
</tr>


</table>
<?php 
}
?>

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
