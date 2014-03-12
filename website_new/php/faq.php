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
    <li><a class="inactive" href="intro.php">Introduction</a></li>
    <li><a class="active" href="faq.php">FAQ</a></li>
</ul>

 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">    
	 <!-- SIDEBAR about -->
<h3>Frequently Asked Questions</h3>
<br><br>
<br>
<ul>
<li><a href="faq.php#alignments">What are alignments?</a></li>
<li><a href="faq.php#formats">What formats do you use to display and share the alignments?</a></li>
<li><a href="faq.php#cite">How do I cite the BDPA?</a></li>
<li><a href="faq.php#sources">Which sources did you use?</a></li>
<!--<li><a href="faq.php#script">Is there a way convert the multiple alignments into pairwise alignments?</a></li>-->
<li><a href="faq.php#contact">Whom should I contact if I have additional questions or want to contribute?</a></li>
<!--<li><a href="faq.php#"></a></li>
<li><a href="faq.php#"></a></li>
<li><a href="faq.php#"></a></li>-->

</ul>
<br>

<h3><a style="color:black" name="alignments">Alignment Analyses</a></h3>
<br>
<i>Alignment analyses</i> are the most common way to compare sequences. Given that phonetic
sequences are the basic comparanda in both historical linguistics and dialectology, it is therefore
straightforward to assume that alignment analyses play a crucial role in both disciplines. Without
alignments, i.e., without the explicit matching of sounds, neither could regular sound
correspondences be detected nor could cognacy between words or genetic relationship between
languages be proven. However, although language comparison is always based on an implicit alignment
of words, it is rarely explicitly visualized or termed as such, and in the rare cases where scholars
explicitly use alignments to visualize correspondence patterns in words, it merely serves
illustrational purposes.
<br><br>
<h3><a style="color:black" name="formats">Basic Formats for Alignments Analyses</a></h3>
<br>
<p>In order to exchange, edit, and compare phonetic alignments, different formats are used in the BDPA. 
We distinguish between formats for pairwise alignments and for multiple
alignments. Both formats are further divided into an input and output format.</p><br>
<p>Formats for pairwise alignments include input format used to store unaligned
pairs of phonetic sequences (PSQ format) and output format which stores aligned and
manually corrected pairwise alignments (PSA format). The PSQ files have the extension <tt class="docutils literal">psq</tt>. 
The first line of a PSQ-file contains information
regarding the dataset. The sequence pairs are given in triplets, with a sequence identifier in the
first line of a triplet (containing the meaning, or orthographical information) and the two
sequences in the second and third line, whereas the first column of each sequence line contains the
name of the language variety and the second column the sequence in IPA format. All triplets are divided by one
empty line. As an example, consider the file <a href="data/harry_potter.psq">harry_potter.psq</a>:</p>

<pre id='vimCodeElement'>
<span class="LineNr"> 1 </span><span class="dataSet">Harry Potter Testset</span>
<span class="LineNr"> 2 </span><span class="seqId">Woldemort in German and Russian</span>
<span class="LineNr"> 3 </span><span class="msaTaxa">German</span>      <span class="dolgoGlides">w</span> <span class="dolgoVowels">a</span> <span class="dolgoLaterals">l</span> d <span class="dolgoVowels">e</span> <span class="dolgoMy">m</span> <span class="dolgoVowels">a</span> <span class="dolgoLaterals">r</span>
<span class="LineNr"> 4 </span><span class="msaTaxa">Russian</span>     <span class="dolgoGlides">v</span> <span class="dolgoLaterals">l</span> <span class="dolgoVowels">a</span> d <span class="dolgoVowels">i</span> <span class="dolgoMy">m</span> <span class="dolgoVowels">i</span> <span class="dolgoLaterals">r</span>
<span class="LineNr"> 5 </span>
<span class="LineNr"> 6 </span><span class="seqId">Woldemort in English and Russian</span>
<span class="LineNr"> 7 </span><span class="msaTaxa">English</span>     <span class="dolgoGlides">w</span> <span class="dolgoVowels">o</span> <span class="dolgoLaterals">l</span> d <span class="dolgoVowels">e</span> <span class="dolgoMy">m</span> <span class="dolgoVowels">o</span> <span class="dolgoLaterals">r</span> t
<span class="LineNr"> 8 </span><span class="msaTaxa">Russian</span>     <span class="dolgoGlides">v</span> <span class="dolgoLaterals">l</span> <span class="dolgoVowels">a</span> d <span class="dolgoVowels">i</span> <span class="dolgoMy">m</span> <span class="dolgoVowels">i</span> <span class="dolgoLaterals">r</span>
<span class="LineNr"> 9 </span>
<span class="LineNr">10 </span><span class="seqId">Woldemort in English and German</span>
<span class="LineNr">11 </span><span class="msaTaxa">English</span>     <span class="dolgoGlides">w</span> <span class="dolgoVowels">o</span> <span class="dolgoLaterals">l</span> d <span class="dolgoVowels">e</span> <span class="dolgoMy">m</span> <span class="dolgoVowels">o</span> <span class="dolgoLaterals">r</span> t
<span class="LineNr">12 </span><span class="msaTaxa">German</span>      <span class="dolgoGlides">w</span> <span class="dolgoVowels">a</span> <span class="dolgoLaterals">l</span> d <span class="dolgoVowels">e</span> <span class="dolgoMy">m</span> <span class="dolgoVowels">a</span> <span class="dolgoLaterals">r</span>
</pre>
<p>The output counterpart of the PSQ-format is the PSA-format. It is a specific format for text files
containing already aligned sequence pairs. Files in this format have the extension <tt class="docutils literal">psa</tt>. The
first line of a PSA-file contains information regarding the dataset. The sequence pairs are given in
triplets, with a sequence identifier in the first line of a triplet (containing the meaning, or
orthographical information) and the aligned sequences in the second and third line, whith the name
of the language variety in the first column and all aligned segments in the following columns, separated by
tabstops. All triplets are divided by one empty line. As an example, consider the file
<a href="data/harry_potter.psa">harry_potter.psa</a>:</p>

<pre id='vimCodeElement'>
<span class="LineNr"> 1 </span><span class="dataSet">Harry Potter Testset</span>
<span class="LineNr"> 2 </span><span class="seqId">Woldemort in German and Russian</span>
<span class="LineNr"> 3 </span><span class="msaTaxa">German.</span>     <span class="dolgoGlides">w</span>     <span class="dolgoVowels">a</span>     <span class="dolgoLaterals">l</span>     -     d     <span class="dolgoVowels">e</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">a</span>     <span class="dolgoLaterals">r</span>
<span class="LineNr"> 4 </span><span class="msaTaxa">Russian</span>     <span class="dolgoGlides">v</span>     -     <span class="dolgoLaterals">l</span>     <span class="dolgoVowels">a</span>     d     <span class="dolgoVowels">i</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">i</span>     <span class="dolgoLaterals">r</span>
<span class="LineNr"> 5 </span>
<span class="LineNr"> 6 </span><span class="seqId">Woldemort in English and Russian</span>
<span class="LineNr"> 7 </span><span class="msaTaxa">English</span>     <span class="dolgoGlides">w</span>     <span class="dolgoVowels">o</span>     <span class="dolgoLaterals">l</span>     -     d     <span class="dolgoVowels">e</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">o</span>     <span class="dolgoLaterals">r</span>     t
<span class="LineNr"> 8 </span><span class="msaTaxa">Russian</span>     <span class="dolgoGlides">v</span>     -     <span class="dolgoLaterals">l</span>     <span class="dolgoVowels">a</span>     d     <span class="dolgoVowels">i</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">i</span>     <span class="dolgoLaterals">r</span>     -
<span class="LineNr"> 9 </span>
<span class="LineNr">10 </span><span class="seqId">Woldemort in English and German</span>
<span class="LineNr">11 </span><span class="msaTaxa">English</span>     <span class="dolgoGlides">w</span>     <span class="dolgoVowels">o</span>     <span class="dolgoLaterals">l</span>     d     <span class="dolgoVowels">e</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">o</span>     <span class="dolgoLaterals">r</span>     t
<span class="LineNr">12 </span><span class="msaTaxa">German.</span>     <span class="dolgoGlides">w</span>     <span class="dolgoVowels">a</span>     <span class="dolgoLaterals">l</span>     d     <span class="dolgoVowels">e</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">a</span>     <span class="dolgoLaterals">r</span>     -
<span class="LineNr">13 </span>
</pre>
<p>Input format for multiple alignments is the so-called MSQ-format and it contains multiple unaligned sequences.
Files in this
format have the extension <tt class="docutils literal">msq</tt>. The first line of an msq-file contains information regarding
the dataset. The second line contains information regarding the sequence (meaning, identifier), and
the following lines contain the name of the language variety in the first column and the sequences in IPA format
in the second column, separated by a tabstop. As an example, consider the file <a href="data/harry_potter.msq">harry_potter.msq</a>:</p>

<pre id='vimCodeElement'>
<span class="LineNr">1 </span><span class="dataSet">Harry Potter Testset</span>
<span class="LineNr">2 </span><span class="seqId">Woldemort (in different languages)</span>
<span class="LineNr">3 </span><span class="msaTaxa">English</span>     <span class="dolgoGlides">v</span> <span class="dolgoVowels">o</span> <span class="dolgoLaterals">l</span> <span class="dolgoDentals">d</span> <span class="dolgoVowels">e</span> <span class="dolgoMy">m</span> <span class="dolgoVowels">o</span> <span class="dolgoLaterals">r</span> <span class="dolgoDentals">t</span>
<span class="LineNr">4 </span><span class="msaTaxa">German</span>      <span class="dolgoGlides">w</span> <span class="dolgoVowels">a</span> <span class="dolgoLaterals">l</span> <span class="dolgoDentals">d</span> <span class="dolgoVowels">e</span> <span class="dolgoMy">m</span> <span class="dolgoVowels">a</span> <span class="dolgoLaterals">r</span>
<span class="LineNr">5 </span><span class="msaTaxa">Russian</span>     <span class="dolgoGlides">v</span> <span class="dolgoLaterals">l</span> <span class="dolgoVowels">a</span> <span class="dolgoDentals">d</span> <span class="dolgoVowels">i</span> <span class="dolgoMy">m</span> <span class="dolgoVowels">i</span> <span class="dolgoLaterals">r</span>
</pre>
<p>The MSA-format is an output format for multiple alignments which contains already aligned and manually checked multiple sequence. Files
in this format have the extension <tt class="docutils literal">msa</tt>. The first line of a MSA-file contains information
regarding the dataset. The second line contains information regarding the sequence (its meaning, the
protoform corresponding to the cognate set, etc.). The aligned sequences are given in the following
lines, whereas the language varieties are given in the first column and the aligned segments in the following
columns. Additionally, there may be a specific line indicating the presence of swaps and a specific
line indicating highly consistent positions (local peaks) in the MSA. The line for swaps starts with the
headword SWAPS whereas a plus character (+) marks the beginning of a swapped region, the dash
character (-) its center and another plus character the end. All sites which are not affected by
swaps contain a dot. The line for local peaks starts with the headword LOCAL. All positions which are
highly consistent are marked with an asterisk (*), all other positions are marked with a dot (.). As an
example, consider the file <a href="data/harry_potter.msa">harry_potter.msa</a>:</p>

<pre id='vimCodeElement'>
<span class="LineNr">1 </span><span class="dataSet">Harry Potter Testset</span>
<span class="LineNr">2 </span><span class="seqId">Woldemort (in different languages)</span>
<span class="LineNr">3 </span><span class="msaTaxa">English</span>     <span class="dolgoGlides">v</span>     <span class="dolgoVowels">o</span>     <span class="dolgoLaterals">l</span>     -     <span class="dolgoDentals">d</span>     <span class="dolgoVowels">e</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">o</span>     <span class="dolgoLaterals">r</span>     <span class="dolgoDentals">t</span>
<span class="LineNr">4 </span><span class="msaTaxa">German.</span>     <span class="dolgoGlides">w</span>     <span class="dolgoVowels">a</span>     <span class="dolgoLaterals">l</span>     -     <span class="dolgoDentals">d</span>     <span class="dolgoVowels">e</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">a</span>     <span class="dolgoLaterals">r</span>     -
<span class="LineNr">5 </span><span class="msaTaxa">Russian</span>     <span class="dolgoGlides">v</span>     -     <span class="dolgoLaterals">l</span>     <span class="dolgoVowels">a</span>     <span class="dolgoDentals">d</span>     <span class="dolgoVowels">i</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">i</span>     <span class="dolgoLaterals">r</span>     -
<span class="LineNr">6 </span><span class="swapSites">SWAPS..     .     +     -     +     .     .     .     .     .     .</span>
<span class="LineNr">7 </span><span class="localPeaks">LOCAL.      *     *     *     .     *     *     *     *     *     .</span>
</pre>
<br>
<h3><a style="color:black" name="cite">Citing BDPA</a></h3>
<br>
<p>If you use this database, please cite it as:<br><br>
<ul><li>List, J.-M. and Prokić, J. (2014): <i>Benchmark Database for Phonetic alignments</i>. URL: <a href="http://alignments.lingpy.org">http://alignments.lingpy.org</a></li></ul></p>
<p>Please make sure that you also cite all individual <a href="sources.php">sources</a> of BDPA which you are using. For example, if you use the alignments of the <a href="sources.php#Bai">Bai</a> dialects in BDPA, you should quote both original sources from which they were taken, namely:
<br><br>
<ul>
<li>Wang, F. (2006): <i>Comparison of languages in contact. The distillation method and the case of Bai</i>. Taipei: INstitue of Linguistics Academia Sinica.</li>
<li>Allen, B. (2007): <i>Bai dialect survey.</i> SIL International. ULR: <a href="http://www.sil.org/silesr/2007/silesr2007-012.pdf">http://www.sil.org/silesr/2007/silesr2007-012.pdf</a></li></ul>
<br>
<!--<h3><a style="color:blacl" name="scripts">Converting Multiple to Pairwise Alignments</a></h3>
<br>
<font color="red">ADD github GIST</font>
<br>-->
<h3><a style="color:black" name="sources">Sources</a></h3>
<br>
All the sources we used to create the alignments can be found <a href="sources.php">here</a>.
<br><br>
<h3><a style="color:black" name="contact">Contact</a></h3>
<br>
For technical questions regarding the data, please contact
<a href="mailto:mattis.list@uni-marburg.de">Johann-Mattis List</a> (Philipps-Universität Marburg) or
<a href="mailto:prokic@uni-marburg.de">Jelena Prokić</a> (Philipps-Universität Marburg).
<br>

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
