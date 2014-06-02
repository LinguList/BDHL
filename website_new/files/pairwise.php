<!-- SIDEBAR alignments -->
<?php 
if(isset($_POST["select"]) or isset($_GET['select'])){
  if(isset($_GET['select']))
  {
    $_POST['select'] = $_GET['select'];
  }
?>  
<h3>Browse Pairwise Alignments in BDPA</h3>
<br><b>
<?php
  echo 'Plot of file <a href="pairwise.php?file='.$_POST['select'].'">&quot;'.$_POST['select'].'.psa&quot;</a>';
?>
&nbsp;<a href="javascript:history.go(-1)">[BACK]</a></b><br>
<?php
  if($_POST["select"] == "covington")
  {
	  include("align/pairwise/covington.html");
  }
  else if($_POST["select"] == "global")
  {
    include("align/pairwise/global.html");
  }
  else if($_POST["select"] == "tone")
  {
    include("align/pairwise/tone.html");
  }
}
else if(isset($_GET['file']))
{
?>
<h3>Browse Pairwise Alignments in BDPA</h3>
<br><b>
<?php
  echo 'Source of file <a href="pairwise.php?select='.$_GET['file'].'">&quot;'.$_GET['file'].'.psa&quot;</a>';
?>
&nbsp;<a href="javascript:history.go(-1)">[BACK]</a></b><br>
<?php
  echo '<pre><code>';
  include('align/pairwise/'.$_GET['file'].'.psa');
  echo '</code></pre>';
}
else
{
?>
<h3>Browse Pairwise Alignments in BDPA</h3>
<br>
<br>
In this section we offer a collection of manually edited pairwise alignments. For details on the dataset, see the descriptions 
in the table below.
<br><br>
<table border=2>
<tr>
<th>Name</th>
<th>Size</th>
<th colspan="1" width=50%>Description</th>
<th>HTML</th>
<th>PSA</th>
</tr>
<tr>
<td valign="top">Covington</td>
<td valign="top">82 alignments</td>
<td valign="top">Dataset by <a href="http://lingulist.de/evobib/evobib.php?key=Covington1996">Covington (1996)</a>, here in a slightly modified form containing plain IPA transcriptions instead of the original hybrid format.</td>
<td valign="top">
<form action="pairwise.php" method="post">
<input type="hidden" value="covington" name="select" />
<input type="submit" value="HTML" />
</form>
</td>
<td valign="top">
<form action="pairwise.php?file=covington" method="post">
<input type="submit" value="PSA" />
</form>
</td></tr>
<tr>
<td valign="top">GLOBAL</td>
<td valign="top">7197 alignments</td>
<td valign="top">Dataset was automatically extracted from our masterset of multiple alignments by selecting the most diverse sequence pairs of all multiple alignments. Parts of this dataset were used in order to test the performance of the SCA alignment algorithm (<a href="http://lingulist.de/evobib/evobib.php?key=List2012a">List 2012</a>).</td>
<td valign="top">
  <form action="pairwise.php" method="post">
    <input type="hidden" value="global" name="select" />
    <input type="submit" value="HTML" />
  </form>
</td>
<td valign="top">
  <form action="pairwise.php?file=global" method="post">
    <input type="submit" value="PSA" />
  </form>
</td></tr>
<tr>
<td valign="top">TONE</td>
<td valign="top">1088 alignments</td>
<td valign="top">Dataset was automatically extracted from our masterset by selecting the most diverse sequence pairs of all multiple alignments consisting of tone languages. In contrast to the GLOBAL dataset above, this dataset contains only phonetic sequences from tone languages (Chinese, Bai).</td>
<td valign="top">
  <form action="pairwise.php" method="post">
    <input type="hidden" value="tone" name="select" />
    <input type="submit" value="HTML" />
  </form>
</td>
<td valign="top">
  <form action="pairwise.php?file=tone" method="post">
    <input type="submit" value="PSA" />
  </form>
</td></tr>
</table>


<?php } ?>
	
