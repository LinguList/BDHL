<!-- SIDEBAR alignments -->
<!-- Following diff stuff taken with modifications from:  http://www.web-toolbox.net -->

<?php
/* connect the database */
$dsn = "sqlite:data/data.sqlite3";
$conn = new PDO ($dsn); ?>

<?php 

if(isset($_GET["query"]) || isset($_GET["dataset"]) || isset($_GET["pid"]))
{
  //if(isset($_GET["query"]))
  //{
    // set the query string
    $qstring = "select * from alignments where ";

    if($_GET["dataset"] == "")
    {
	    $qstring = $qstring.'dataset like "%" and ';
    }
    else
    {
  	  $qstring = $qstring.'dataset like "'.$_GET["dataset"].'" and ';
    }
    if($_GET["sequence"] == "")
    {
	    $qstring = $qstring.'sequence like "%" and ';
    }
    else
    {
	    $qstring = $qstring.'sequence like "%'.$_GET["sequence"].'%" and ';
    }
    if($_GET["taxa"] == "")
    {
	    $qstring = $qstring.'taxa like "%" and ';
    }
    else
    {
	    $qstring = $qstring.'taxa like "%'.$_GET["taxa"].'%" and ';
    }
    if(is_numeric($_GET["pidup"]))
    {
	    $qstring = $qstring.'pid <= '.$_GET["pidup"].' and ';
    }
    else
    {
	    $qstring = $qstring.'pid <= 100 and ';
    }
    if(is_numeric($_GET["piddown"]))
    {
	    $qstring = $qstring.'pid >= '.$_GET["piddown"].' and ';
    }
    else
    {
	    $qstring = $qstring.'pid >= 0 and ';
    }
    if(is_numeric($_GET['pid']))
    {
      $qstring = $qstring.' pid = '.$_GET['pid'].' and ';
    }
    if(isset($_GET['swap']))
    {
      $qstring = $qstring.'swap == 1;';
    }
    else
    {
      $qstring = $qstring.'swap < 2;';
    }
  //}
  /*else
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
  }*/  
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
<div id="text">The MSA format is the basic machine-readable format for multiple sequence alignments. For a closer description of this format, see <a href="faq.php#formats">this link</a>.</div></div>
</td>
<!--<td><div id="popup"><b>MSQ</b>
<div id="text">The MSQ format is the basic machine-readable format for unaligned sets of multiple sequences. For a closer description of this format, see <a href="http://lingpy.org/tutorial/formats.html#multiple-alignments-msq-and-msa">this link</a>.</div></div>
</td>-->
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
<form action="multiple.php" method="get">
  <td>
    <input type="hidden" name="msa" value="<?php echo $result["file"]?>.html" />
    <input type="submit" value="HTML" />
  </td>
</form>
<form action="multiple.php" method="get">
    <td><input type="hidden" name="msa_source" value="<?php echo $result["file"]?>.msa" />
	<input type="submit" value="MSA" /></td>
	<input type="hidden" name="filename" value="<?php echo $result["file"]; ?>.msa" />
</form>
<?php } ?>
</table>
<?php 
    }
    else{
?>
<h3>Browse Multiple Alignments in BDPA</h3>
<br>

<form action="multiple.php" method="get">
<label for="back"><b><font color="red">No results found for your query.</font><b></label>
<input type="submit" value="NEW QUERY" name="back"/></form> 
<br>
<br>
<?php
        //echo "<p align=left><font color=red><b>No results found for your query.</b></font></p>";
    }
}
else if(isset($_POST["msa_source"]) or isset($_GET["msa_source"])){
  if(isset($_GET['msa_source']))
  {
    $_POST['msa_source'] = $_GET['msa_source'];
    $_POST['filename'] = $_GET['msa_source'];
  }
  echo '<h3>Browse Multiple Alignments in BDPA</h3><br><b>Source of file "';
  echo $_POST["filename"].'":</b> ';
  echo '<a href="javascript:history.go(-1)">[BACK]</a>';
  echo "<pre><code>";
  include("align/multiple/msa/".$_POST["msa_source"]);
  echo "</code></pre>";
}
else if(isset($_POST["msa"]) or isset($_GET['msa'])){
  if(isset($_GET['msa'])){$_POST['msa'] = $_GET['msa'];}
  include('align/multiple/html/'.$_POST["msa"]);
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
<form action="multiple.php" method="get">
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


