<!-- SIDEBAR alignments -->
<!-- Following diff stuff taken with modifications from:  http://www.web-toolbox.net -->

<?php
/* connect the database */
$dsn = "sqlite:data/data.sqlite3";
$conn = new PDO ($dsn); ?>

<?php 

if(isset($_POST["query"]) || isset($_GET["dataset"]) || isset($_GET["pid"])){

    if(isset($_POST["query"])){
    // set the query string
    $qstring = "select * from alignments where ";

    if($_POST["dataset"] == ""){
	$qstring = $qstring.'dataset like "%" and ';
    }
    else{
	$qstring = $qstring.'dataset like "'.$_POST["dataset"].'" and ';
    }
    if($_POST["sequence"] == ""){
	$qstring = $qstring.'sequence like "%" and ';
    }
    else{
	$qstring = $qstring.'sequence like "%'.$_POST["sequence"].'%" and ';
    }
    if($_POST["taxa"] == ""){
	$qstring = $qstring.'taxa like "%" and ';
    }
    else{
	$qstring = $qstring.'taxa like "%'.$_POST["taxa"].'%" and ';
    }

    if(is_numeric($_POST["pidup"])){
	$qstring = $qstring.'pid <= '.$_POST["pidup"].' and ';
    }
    else{
	$qstring = $qstring.'pid <= 100 and ';
    }
    if(is_numeric($_POST["piddown"])){
	$qstring = $qstring.'pid >= '.$_POST["piddown"].';';
    }
    else{
	$qstring = $qstring.'pid >= 0;';
    }    
    }
    else
    {
	$qstring = 'select * from alignments where file like "%"';
	if(isset($_GET["dataset"])){
	    $qstring = $qstring.' and dataset like "'.$_GET["dataset"].'";';
	}
	else if(isset($_GET["pid"])){
	    $qstring = $qstring.' and pid = '.$_GET["pid"].';';
	}
    }
    
    // carry out the query
    $query = $conn->query($qstring);
    $results = array();
    $next_result = $query->fetch();
    $check = $next_result;
    while($check['id'] != ''){
	$results[] = $next_result;
	$next_result = $query->fetch();
	$check = $next_result;
    }
    

    // check for results, if value greater one, display, else pass
    if (count($results) >= 1){
	$filenumber = count($results);
	if($filenumber == 1){$filestring = $filenumber." file";}
	else{$filestring = $filenumber." files";}
?>
    <h2>Browse Multiple Alignments in BDPA</h2>

<br>

<b>Found <?php echo $filestring; ?> matching your query:</b><br>
<table border=2>
<tr>
<td><b>ID</b></td>
<td><b>FILE</b></td>
<td><b>Subset</b></td>
<td><b>Concept</b></td>
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

	    echo "<tr><td>".$result["id"]."</td><td>".$result["file"]."</td>";
	    echo "<td>".$result["dataset"]."</td>";
	    echo "<td>".$result["sequence"]."</td>";
	    echo "<td>".$result["pid"]."</td>";
?>
<form action="multiple.php" method="post">
    <td><input type="hidden" name="msa" value="align/multiple/html/<?php echo $result["file"]?>.html" />
	<input type="submit" value="HTML" /></td>
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
<h2>Browse Multiple Alignments in BDPA</h2>
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
    echo '<h2>Browse Multiple Alignments in BDPA</h2><br><b>Source of file "';
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

<h2>Browse Multiple Alignments in BDPA</h2>
<br>


Our multiple alignment benchmark database contains a total of 750 manually corrected
multiple alignments taken from 12 different sources. In order to browse the data, use the interface below. 
For a download of the complete dataset, please follow <a href="align_download.php">this link</a>. For a detailed description of the sources from which the data was taken, please follow <a href="align_sources.php">this link</a>.
<br><br>

<b>Browse the data:</b>
<form action="multiple.php" method="post">
<table border=2>
<tr><td>
<table border=2>
<!--<tr>
<td>File</td>
<td><input type="text" name="file" id="file" style="width:300px"></td>
</tr>-->
<tr>
<td><div id="popup"><label for="family">Subset (Family)</label>
<div id="text">Our data is divided into different subsets which were in most cases compiled by one single author. These subsets can correspond to both language families or dialectal varieties. Therefore, the subsets do not always correspond to a language family in the strict sense.</div></div>
</td>
<td><input type="text" name="dataset" id="family" style="width:300px"></td>
</tr>
<tr>
<td><div id="popup"><label for="sequence">Concept</label> 
<div id="text">The word "concept" may be misleading in this context, since not all words in a given multiple sequence alignment necessarily denote the same concept. Nevertheless, it is often possible to assign a common concept to a given MSA, and it is a convenient way to search for specific subsets of the data.</div></div>
</td>
<td ><input type="text" name="sequence" id="sequence" style="width:300px"></td>
</tr>
<tr>
<td><div id="popup">Percentage Identity
<div id="text"><p> Percentage Identity is a standard measure for the diversity of a given multiple sequence alignment (MSA). There are different ways to measure the PID of a given MSA. Here we used the most common approach which divides the number of identical positions in an alignment by the sum of the number of aligned positions and the number of internal gap positions. See <a href="http://lingulist.de/evobib/evobib.php?key=Raghava2006">Raghava & Barton (2006)</a> for details.</p> </div></div>
</td>
<td>Less than <input type="text" name="pidup" id="pidup" style="width:40px">
and more than <input type="text" name="piddown" id="piddown" style="width:40px">
</td>
</tr>
<tr>
<td><div id="popup">Taxon (Language)
<div id="text">Use this field to narrow down the number of alignments to browse by typing in the name of the language in which you are interested.</div></div>
</td>
<td><input type="text" name="taxa" id="taxa" style="width:300px"></td>
</tr>
<input type="hidden" value="notimportant" name="query">
</table></td>
<td> <input type="submit" value="SUBMIT"></td></tr></table>
</form?>

<?php 
} 
?>


