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
	
