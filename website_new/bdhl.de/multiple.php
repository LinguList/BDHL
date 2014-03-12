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
    <li><a class="inactive" href="pairwise.php">Pairwise</a></li>
    <li><a class="active" href="multiple.php">Multiple</a></li>
</ul>

 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">    
	 <!-- SIDEBAR alignments -->
<!-- Following diff stuff taken with modifications from:  http://www.web-toolbox.net -->

<?php
/* connect the database */
$dsn = "sqlite:data/data.sqlite3";
$conn = new PDO ($dsn); ?>

<?php 

if(isset($_POST["query"]) || isset($_GET["dataset"]) || isset($_GET["pid"]))
{
  if(isset($_POST["query"]))
  {
    // set the query string
    $qstring = "select * from alignments where ";

    if($_POST["dataset"] == "")
    {
	    $qstring = $qstring.'dataset like "%" and ';
    }
    else
    {
  	  $qstring = $qstring.'dataset like "'.$_POST["dataset"].'" and ';
    }
    if($_POST["sequence"] == "")
    {
	    $qstring = $qstring.'sequence like "%" and ';
    }
    else
    {
	    $qstring = $qstring.'sequence like "%'.$_POST["sequence"].'%" and ';
    }
    if($_POST["taxa"] == "")
    {
	    $qstring = $qstring.'taxa like "%" and ';
    }
    else
    {
	    $qstring = $qstring.'taxa like "%'.$_POST["taxa"].'%" and ';
    }
    if(is_numeric($_POST["pidup"]))
    {
	    $qstring = $qstring.'pid <= '.$_POST["pidup"].' and ';
    }
    else
    {
	    $qstring = $qstring.'pid <= 100 and ';
    }
    if(is_numeric($_POST["piddown"]))
    {
	    $qstring = $qstring.'pid >= '.$_POST["piddown"].' and ';
    }
    else
    {
	    $qstring = $qstring.'pid >= 0 and ';
    }
    if(isset($_POST['swap']))
    {
      $qstring = $qstring.'swap == 1;';
    }
    else
    {
      $qstring = $qstring.'swap < 2;';
    }
  }
  else
  {
	  $qstring = 'select * from alignments where file like "%"';
    if(isset($_GET["dataset"]))
    {
	    $qstring = $qstring.' and dataset like "'.$_GET["dataset"].'";';
	  }
    else if(isset($_GET["pid"]))
    {
	    $qstring = $qstring.' and pid = '.$_GET["pid"].';';
	  }
  }  
  // carry out the query
  $query = $conn->query($qstring);
  $results = array();
  $next_result = $query->fetch();
  $check = $next_result;
  while($check['id'] != '')
  {
	  $results[] = $next_result;
	  $next_result = $query->fetch();
	  $check = $next_result;
  }
  
  // check for results, if value greater one, display, else pass
  if (count($results) >= 1)
  {
	  $filenumber = count($results);
    if($filenumber == 1)
    {
      $filestring = $filenumber." file";
    }
	else
  {
    $filestring = $filenumber." files";
  }
?>
<h3>Browse Multiple Alignments in BDPA</h3>
<br>
<b>Found <?php echo $filestring; ?> matching your query:</b><br>
<table border=2>
<tr>
<td><b>ID</b></td>
<td><b>FILE</b></td>
<td><b>Subset</b></td>
<td><b>Label</b></td>
<td><div id="popup"><b>PID</b>
<div id="text"> Percentage Identity is a standard measure for the diversity of a given multiple sequence alignment (MSA). There are different ways to measure the PID of a given MSA. Here we used the most common approach which divides the number of identical positions in an alignment by the sum of the number of aligned positions and the number of internal gap positions. See <a href="http://lingulist.de/evobib/evobib.php?key=Raghava2006">Raghava & Barton (2006)</a> for details. </div></div>
</td>
<td>
<div id="popup"><b>HTML</b>
<div id="text">The HTML visualization of multiple sequence alignments colors phonetic segments depending on their sound class. This format is useful for inspecting and evaluating a given alignment analysis.</div></div>
</td>
<td><div id="popup"><b>MSA</b>
<div id="text">The MSA format is the basic machine-readable format for multiple sequence alignments. For a closer description of this format, see <a href="http://lingpy.org/tutorial/formats.html#multiple-alignments-msq-and-msa">this link</a>.</div></div>
</td>
<td><div id="popup"><b>MSQ</b>
<div id="text">The MSQ format is the basic machine-readable format for unaligned sets of multiple sequences. For a closer description of this format, see <a href="http://lingpy.org/tutorial/formats.html#multiple-alignments-msq-and-msa">this link</a>.</div></div>
</td>
</tr>

<?php
// start the for-loop
foreach($results as &$result){
	    
	// clean the sequence id
	$result['sequence'] = preg_replace("{\\\}","",$result["sequence"]);
  
  if($result['swap'] == 1)
  {
    echo '<tr class="swap">';
  }
  else
  {
    echo "<tr>";
  }
  echo "<td>".$result["id"]."</td><td>".$result["file"]."</td>";
  echo "<td>".$result["dataset"]."</td>";
  echo "<td>".$result['sequence']."</td>";
	echo "<td>".$result["pid"]."</td>";
?>
<form action="multiple.php" method="post">
  <td>
    <input type="hidden" name="msa" value="align/multiple/html/<?php echo $result["file"]?>.html" />
    <input type="submit" value="HTML" />
  </td>
</form>
<form action="multiple.php" method="post">
    <td><input type="hidden" name="msa_source" value="align/multiple/msa/<?php echo $result["file"]?>.msa" />
	<input type="submit" value="MSA" /></td>
	<input type="hidden" name="filename" value="<?php echo $result["file"]; ?>.msa" />
</form>
<form action="multiple.php" method="post">
    <td><input type="hidden" name="msa_source" value="align/multiple/msq/<?php echo $result["file"]?>.msq" />
	<input type="hidden" name="filename" value="<?php echo $result["file"]; ?>.msq" />
	<input type="submit" value="MSQ" /></td></tr>
</form>
<?php } ?>
</table>
<?php 
    }
    else{
?>
<h3>Browse Multiple Alignments in BDPA</h3>
<br>

<form action="multiple.php" method="post">
<label for="back"><b><font color="red">No results found for your query.</font><b></label>
<input type="submit" value="NEW QUERY" name="back"/></form> 
<br>
<br>
<?php
        //echo "<p align=left><font color=red><b>No results found for your query.</b></font></p>";
    }
}
else if(isset($_POST["msa_source"])){
    echo '<h3>Browse Multiple Alignments in BDPA</h3><br><b>Source of file "';
    echo $_POST["filename"].'":</b> ';
    echo '<a href="javascript:history.go(-1)">[BACK]</a>';
    echo "<pre><code>";
    include($_POST["msa_source"]);
    echo "</code></pre>";
}
else if(isset($_POST["msa"])){
    include($_POST["msa"]);
}
else{
?>

<h3>Browse Multiple Alignments in BDPA</h3>
<br>


Our multiple alignment benchmark database contains a total of 750 sets of manually corrected
multiple alignments taken from 12 different sources. In order to browse the data, use the interface below. 
You can also <a href="download.php">download</a> the whole data or data of the individual <a href="sources.php">sources</a> we used.
<br><br>

<b>Browse the data:</b>
<form action="multiple.php" method="post">
<table class="browse">
  <tr>
    <td>
      <div id="popup">
        <label for="family">Subset (Family)</label>
        <div id="text">Our data is divided into different subsets which were in most cases compiled by one single author. These subsets can correspond to both language families or dialectal varieties. Therefore, the subsets do not always correspond to a language family in the strict sense.
        </div>
      </div>
    </td>
    <td colspan=2>
      <input type="text" name="dataset" id="family" style="width:300px">
    </td>
  </tr>
  <tr>
    <td>
      <div id="popup">
        <label for="sequence">Concept</label> 
        <div id="text">The word "concept" may be misleading in this context, since not all words in a given multiple sequence alignment necessarily denote the same concept. Nevertheless, it is often possible to assign a common concept to a given MSA, and it is a convenient way to search for specific subsets of the data.
        </div>
      </div>
    </td>
    <td colspan=2>
      <input type="text" name="sequence" id="sequence" style="width:300px">
    </td>
  </tr>
  <tr>
    <td>
      <div id="popup">Percentage Identity
        <div id="text"><p> Percentage Identity is a standard measure for the diversity of a given multiple sequence alignment (MSA). There are different ways to measure the PID of a given MSA. Here we used the most common approach which divides the number of identical positions in an alignment by the sum of the number of aligned positions and the number of internal gap positions. See <a href="http://lingulist.de/evobib/evobib.php?key=Raghava2006">Raghava & Barton (2006)</a> for details.</p> 
        </div>
      </div>
    </td>
    <td colspan=2>Less than 
      <input type="text" name="pidup" id="pidup" style="width:40px">
      and more than 
      <input type="text" name="piddown" id="piddown" style="width:40px">
    </td>
  </tr>
  <tr>
    <td>
      <div id="popup">Variety (Language)
        <div id="text">
          Use this field to narrow down the number of alignments to browse by typing in the name of the language in which you are interested.
        </div>
      </div>
    </td>
    <td colspan=2>
      <input type="text" name="taxa" id="taxa" style="width:300px">
    </td>
  </tr>
  <tr>
    <td>
      <div id="popup">Metathesis:
        <div id="text">
          Check this box if you want to select only those alignments in which metathesis occurs.
        </div>
      </div>
    </td>
    <td style="width:200px;text-align:center">
      <input type="checkbox" name="swap" id="swap" value="1" />
    </td>
    <input type="hidden" value="notimportant" name="query">
    <td style="text-align:center">
      <input type="submit" value="SUBMIT">
    </td>
  </tr>
</table>
</form>

<?php 
} 
?>



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
