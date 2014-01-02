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
    <li><a class="inactive" href="pairwise.php">Pairwise</a></li>
    <li><a class="inactive" href="multiple.php">Multiple</a></li>
    <li><a class="active" href="align_sources.php">Sources</a></li>
</ul>

 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">    
	 <!-- SIDEBAR alignments -->
<h2>The Sources of the Benchmark Database for Phonetic Alignments</h2>
<br>
The following table gives an overview over the sources in our database. 
Click on the links in the table in order to view a more detailed description of the sources.
<br><br>
<?php include('statistics.html'); ?>
<br>
<br>
<h3><a style="color:black" name="Andean">Andean</a></h3>
<br>
The data comes from the <a href="http://www.arch.cam.ac.uk/~pah1003/quechua/Eng/Cpv/">Sounds of the Andean Languages</a> project (2001-2004) at the university of Sheffield, UK. Main contributor was Paul Heggarty, who conducted the field work and provided the sound recordings and the phonetic transcriptions which are available on the project website. For our benchmark database, we used 76 cognate sets distributed over 21 varieties of Quechua and Aymara. 

<br><br>
<ul><li><b>Original data:</b> <a href="http://www.arch.cam.ac.uk/~pah1003/quechua/Eng/Cpv/">http://www.arch.cam.ac.uk/~pah1003/quechua/Eng/Cpv/</a></li>
<li><b>Compiled by:</b> Paul Heggarty</li>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/Andean.zip">Andean.zip</a></li>
<!-- <li><b>How to Quote:</b> List, Johann-Mattis (2013): Multiple alignments of Andean languages. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>
<br>
<h3><a style="color:black" name="Bai">Bai</a></h3>
<br>
The data on the Bai dialects is a compilation of the two independently conducted studies by <a href="http://lingulist.de/evobib/evobib.php?Wang2006"</a>Wang (2006)</a> and <a href="http://lingulist.de/evobib/evobib.php?Allen2007"</a>Bryan Allen (2007)</a>. From these sources, 90 cognate sets distributed over 17 language varieties were extracted.
<br><br>
<ul><li><b>Original data:</b> <a href="http://lingulist.de/evobib/evobib.php?Wang2006"</a>Wang (2006)</a>, <a href="http://lingulist.de/evobib/evobib.php?Allen2007"</a>Allen (2007)</a></li>
<li><b>Compiled by:</b> Feng Wang and Bryan Allen</li>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/Bai.zip">Bai.zip</a></li>
<!-- <li><b>How to Quote:</b> List, Johann-Mattis (2013): Multiple alignments of Bai dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>


<br>
<h3><a style="color:black" name="Bulgarian">Bulgarian</a></h3>
<br>
Bulgarian dialect data comes from the Buldialect project 
(<a href="http://www.jelenaprokic.eu/buldialect">Buldialect - Measuring Linguistic
Unity and Diversity in Europe</a>, 2006-2010).
This was a joint project between the Eberhard-Karls University Tübingen, the University of
Groningen
and the Bulgarian Academy of Sciences. Bulgarian data in the BDHL contains
the phonetic
transcriptions of 152 words collected at 197 sites distributed all over
Bulgaria.
The data was collected in a such way that it represents the most important
phonetic
features described in the traditional literature on Bulgarian dialects.
<br><br>
<ul><li><b>Original data:</b> <a href="http://www.jelenaprokic.eu/buldialect">http://www.jelenaprokic.eu/buldialect</a></li>
<li><b>Aligned by:</b> Jelena Prokić</li>
<li><b>Download:</b> <a href="data/Bulgarian.zip">Bulgarian.zip</a></li>
<!-- <li><b>How to Quote:</b> Prokić, Jelena (2013): Multiple alignments of Bulgarian dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>
<br>
<h3><a style="color:black" name="Dutch">Dutch</a></h3><br>
Dutch dialect data comes from the <a 
href="http://www.meertens.knaw.nl/mand/database/">Goeman-Taeldeman-Van Reenen</a> project
(GTRP, 1980-1995)
at the <a href="http://www.meertens.knaw.nl/cms/">Maartens Institute</a>
in the Netherlands. Our benchmark data
contains aligned transcriptions of 50 words from the GTRP collected at 62
places.
<br><br>
<ul>
<li><b>Original data:</b> <a href="http://www.meertens.knaw.nl/mand/database/">http://www.meertens.knaw.nl/mand/database/</a></li>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/Dutch.zip">Dutch.zip</a></li>
<!-- <li><b>How to quote:</b> List, Johann-Mattis (2013): Dutch dialect alignments. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>
<br>
<h3><a style="color:black" name="French">French</a></h3>
<br>
The data on French dialects comprises a small excerpt of 76 cognate sets distributed over 60 dialect 
varieties taken from the "Tableaux phonétiques des patois suisses romands".  The data was partially 
digitized at the Heinrich Heine University Düsseldorf under the supervision of Hans Geisler. Our 
collection is based on a simplified conversion of the original phonetic orthography into IPA. 
<br><br>
<ul>
<li><b>Original data:</b> <a href="http://lingulist.de/evobib/evobib.php?key=Gauchat1925">Gauchat et al. (1925)</a></li>
<li><b>Digitized by:</b> Hans Geisler</b>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/French.zip">French.zip</a></li>
<!-- <li><b>How to quote:</b> List, Johann-Mattis (2013): Multiple alignments of French dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>
<br>
<h3><a style="color:black" name="Germanic">Germanic</a></h3>
<br>
The data was taken from the <a href="http://www.languagesandpeoples.com/">Languages & Origins in Europe</a> project at the McDonald Institute for Archaeological Research (2006-2009). The project website offers sound files and phonetic transcriptions of different European language families (Germanic, Romance, Slavic). For our benchmark database we used 111 cognate sets distributed over 45 language varieties (English dialects and Germanic languages) in an IPA transcription that was slightly simplified according to the original.  
<br><br>
<ul>
<li><b>Original data:</b> <a href="http://www.languagesandpeoples.com/">http://www.languagesandpeoples.com/</a></li>
<li><b>Compiled by:</b> Paul Heggarty</b>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/Germanic.zip">Germanic.zip</a></li>
<!-- <li><b>How to quote:</b> List, Johann-Mattis (2013): Multiple alignments of French dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>
<br>
<h3><a style="color:black" name="Japanese">Japanese</a></h3>
<br>
Data was taken from <a href="http://lingulist.de/evobib/evobib.php?key=Shiro1973">Shirō (1973)</a>. 
The data was digitized by three students from Heinrich Heine University Düsseldorf during a
course on historical linguistics. Here, it is given in a form in which the original phonetic transcriptions were slightly modified in order
to be in concordance with IPA standard.
<br><br>
<ul>
<li><b>Original data:</b> <a href="http://lingulist.de/evobib/evobib.php?key=Shiro1975">Shiro (1975)</a></li>
<li><b>Digitized by:</b> Mathias Dickmanns, Sayako Maike Oetzel, and Karl Vogt </b></li>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/Japanese.zip">Japanese.zip</a></li>
<!-- <li><b>How to quote:</b> List, Johann-Mattis (2013): Multiple alignments of French dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>

<br>
<h3><a style="color:black" name="Norwegian">Norwegian</a></h3>
<br>
Norwegian dialect data comes from the project conducted at the Department
of Linguistics
of the Norwegian University of Science and Technology (NTNU) in Trondheim
in
which dialect speakers were asked to read the fable "The North Wind and the
Sun" in their native dialect.
All recordings were phonetically transcribed and can be found at
<a href="http://www.ling.hf.ntnu.no/nos/">http://www.ling.hf.ntnu.no/nos/</a>. 
Our benchmark database contains transcriptions
of 51 manually extracted cognates recorded from 51 speakers.
<br><br>
<ul>
<li><b>Original data:</b><a href="http://www.ling.hf.ntnu.no/nos/">http://www.ling.hf.ntnu.no/nos/</a></li>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/Norwegian.zip">Norwegian.zip</a></li>
<!-- <li><b>How to quote:</b> List, Johann-Mattis (2013): Multiple alignments of Norwegian dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>
<br>
<h3><a style="color:black" name="Ob-Ugrian">Ob-Ugrian</a></h3>
<br>
The data on this subset of the benchmark database comes from the <a href="http://starling.rinet.ru/new100/main.htm">Global Lexicostatistical Database</a>. It consists of 48 cognate sets distributed over 21 Ob-Ugrian (Uralic) languages. 
The data was digitized and compiled from different sources by M. Zhivlov (March 2011).
<br><br>
<ul>
<li><b>Original data:</b><a href="http://starling.rinet.ru/cgi-bin/main.cgi?root=new100&encoding=utf-eng">http://starling.rinet.ru/cgi-bin/main.cgi?root=new100&encoding=utf-eng</a></li>
<li><b>Compiled by:</b> M. Zhivlov</li>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/Ob-Ugrian.zip">Ob-Ugrian.zip</a></li>
<!-- <li><b>How to quote:</b> List, Johann-Mattis (2013): Multiple alignments of Norwegian dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>

<br>
<h3><a style="color:black" name="Romance">Romance</a></h3>
<br>
The data was taken from the <a href="http://www.languagesandpeoples.com/">Languages & Origins in Europe</a> project at the McDonald Institute for Archaeological Research (2006-2009). The project website offers sound files and phonetic transcriptions of different European language families (Germanic, Romance, Slavic). For our benchmark database we used 30 cognate sets distributed over 8 language varieties in an IPA transcription that was slightly simplified compared to the original.  
<br><br>
<ul>
<li><b>Original data:</b> <a href="http://www.languagesandpeoples.com/">http://www.languagesandpeoples.com/</a></li>
<li><b>Compiled by:</b> Paul Heggarty</b>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/Germanic.zip">Germanic.zip</a></li>
<!-- <li><b>How to quote:</b> List, Johann-Mattis (2013): Multiple alignments of French dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>

<br>
<h3><a style="color:black" name="Sinitic">Sinitic</a></h3>
<br>
The data of this subset on Chinese dialects was taken from the <i>Xiàndài Hànyǔ Fāngyán Yīnkù</i> (Phonetic database of Chinese dialects, <a href="http://lingulist.de/evobib/evobib.php?key=Hou2004">Hóu (2004)</a>). The original data consists of sound recordings and phonetic transcriptions for 180 concepts translated into 40 Chinese dialect varieties. For the benchmark database, we took but a small 
set of 20 cognate sets with slightly modified IPA transcriptions.
<br><br>
<ul>
<li><b>Original data:</b> <a href="http://lingulist.de/evobib/evobib.php?key=Hou2004">Hóu (2004)</a></li>
<li><b>Aligned by:</b> Johann-Mattis List</li>
<li><b>Download:</b> <a href="data/Sinitic.zip">Sinitic.zip</a></li>
<!-- <li><b>How to quote:</b> List, Johann-Mattis (2013): Multiple alignments of French dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>

<br>
<h3><a style="color:black" name="Slavic">Slavic</a></h3>
<br>
This is but a small collection of 20 cognate sets distributed over 5 Slavic languages. The cognate sets were selected by consulting <a href="http://lingulist.de/evobib/evobib.php?key=Derksen2008">Derksen (2008)</a>. The phonetic transcriptions for the language varieties were taken from standard resources on the languages.
<br><br>
<ul>
<li><b>Original data:</b> <a href="http://lingulist.de/evobib/evobib.php?key=Derksen2008">Derksen (2008)</a></li>
<li><b>Compiled by:</b> Jelena Prokić and Johann-Mattis List</li>
<li><b>Aligned by:</b> Johann-Mattis List and Jelena Prokić</li>
<li><b>Download:</b> <a href="data/Slavic.zip">Slavic.zip</a></li>
<!-- <li><b>How to quote:</b> List, Johann-Mattis (2013): Multiple alignments of French dialects. In: List, Johann-Mattis and Prokić, Jelena (eds.) <i>Benchmark Database for Phonetic Alignments</i>. URL: http://www.quanthistling.info/bdhl/alignments.php.</li> -->
</ul>



 </div>
 </div>
 <div id="footer">
 <p>Last updated on Jan. 02, 2014, 12:38 CET</p>
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
