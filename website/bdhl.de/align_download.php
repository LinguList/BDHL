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
    <h2> <a href="download.php">Download</a></h2>   
<ul>
    <li><a class="inactive" href="align_download.php">Alignments</a></li>
    <li><a class="inactive" href="cognates_download.php">Cognates</a></li>
    <li><a class="inactive" href="proto_download.php">Reconstruction</a></li>
</ul>

 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">    
	 <!-- SIDEBAR download -->
<h2>Download the Datasets for Phonetic Alignments</h2>
<br>
The phonetic alignment data is available in different formats and variants. In all cases, we offer 
the raw, unedited files, and the edited, benchmark files. The formats we use are those which are 
also
traditionally used in the <a href="http://lingpy.org">LingPy</a> library for automatic tasks in 
quantitative historical linguistics, and a closer desription of the nature of these formats can be found <a href="http://lingpy.org/tutorial/formats.html#basic-formats-for-phonetic-alignments">here</a>.
<br><br>
<h3>Pairwise Phonetic Alignment Benchmark</h3><br>
For pairwise alignments, we offer three different gold standards:<br><br>
<ul>
<li> <a href="http://lingulist.de/evobib/evobib.php?key=Covington1996">Covington's (1996)</a> original benchmark dataset, </li>
<li> our master benchmark containing the most diverse 7126 sequence pairs automatically chosen from our multiple alignment benchmark in two flavors, as <i>global</i> and <i>local</i> alignments </li>
<li> a benchmark containing a selection of the most diverse 1089 sequence pairs automatically drawn from those languages in our multiple alignment benchmark that are <i>tone</i> languages, again, both in a <i>global</i> and in a <i>local</i> variant.
</ul>
<br>
All files can be downloaded from <a href="data/pairwise.zip">this link</a>.
<br><br>
<h3>Multiple Phonetic Alignments</h3><br>
For multiple alignments, we offer a large gold standard masterset of 750 files. We provide the files again in both raw and edited format. This masterset can be subdivided into several small datasets according to different criteria, such as
<br><br>
<ul>
<li> the language family from which the data is taken, or </li>
<li> the diversity of the phonetic sequences that occur in the alignments. </li>
</ul>
All files can be downloaded from <a href="data/multiple.zip">this link</a>.

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
