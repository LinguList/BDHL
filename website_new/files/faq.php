<!-- SIDEBAR about -->
<h2>Frequently Asked Questions</h2>
<br><br>
<br>
<ul>
<li><a href="faq.php#alignments">What are alignments?</a></li>
<li><a href="faq.php#formats">What formats do you use to display and share the alignments?</a></li>
<li><a href="faq.php#cite">How do I cite the BDPA?</a></li>
<li><a href="faq.php#sources">Which sources did you use?</a></li>
<li><a href="faq.php#script">Is there a way convert the multiple alignments into pairwise alignments?</a></li>
<li><a href="faq.php#contact">Whom should I contact if I have additional questions or want to contribute?</a></li>
<!--<li><a href="faq.php#"></a></li>
<li><a href="faq.php#"></a></li>
<li><a href="faq.php#"></a></li>-->

</ul>
<br>

<h2><a style="color:black" name="alignments">Alignment Analyses</a></h2>
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
<h2><a style="color:black" name="formats">Basic Formats for Alignments Analyses</a></h2>
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
<h2><a style="color:black" name="cite">Citing BDPA</a></h2>
<br>
<p>If you use this database, please cite it as:<br><br>
<ul><li>List, J.-M. and Prokić, J. (2014): <i>Benchmark Database for Phonetic alignments</i>. URL: <a href="http://alignments.lingpy.org">http://alignments.lingpy.org</a></li></ul></p>
<p>Please make sure that you also cite all individual <a href="sources.php">sources</a> of BDPA which you are using. For example, if you use the alignments of the <a href="sources.php#Bai">Bai</a> dialects in BDPA, you should quote both original sources from which they were taken, namely:
<br><br>
<ul>
<li>Wang, F. (2006): <i>Comparison of languages in contact. The distillation method and the case of Bai</i>. Taipei: INstitue of Linguistics Academia Sinica.</li>
<li>Allen, B. (2007): <i>Bai dialect survey.</i> SIL International. ULR: <a href="http://www.sil.org/silesr/2007/silesr2007-012.pdf">http://www.sil.org/silesr/2007/silesr2007-012.pdf</a></li></ul>
<br>
<h2><a style="color:blacl" name="scripts">Converting Multiple to Pairwise Alignments</a></h2>
<br>
<font color="red">ADD github GIST</font>
<br>
<h2><a style="color:black" name="sources">Sources</a></h2>
<br>
All the sources we used to create the alignments can be found <a href="sources.php">here</a>.
<br><br>
<h2><a style="color:black" name="contact">Contact</a></h2>
<br>
For technical questions regarding the data, please contact
<a href="mailto:mattis.list@uni-marburg.de">Johann-Mattis List</a> (Philipps-Universität Marburg) or
<a href="mailto:prokic@uni-marburg.de">Jelena Prokić</a> (Philipps-Universität Marburg).
<br>
