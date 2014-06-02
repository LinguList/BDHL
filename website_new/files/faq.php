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
<p>
<p>In order to exchange, edit, and compare phonetic alignments, different formats are used in the BDPA. 
Basically, we distinguish between formats for <em>pairwise alignments</em> and for <em>multiple
alignments</em>.
For practical reasons, the BDPA uses the alignment
formats generally employed in <a href="http://lingpy.org">LingPy</a>. All formats are 
text-based and can be edited with help of simple text editors.</p> 
<p>The basic format for the 
representation of multiple alignment analyses is the MSA-format. Files in this format have the 
extension <code style="display:inline;color:Green">"msa"</code>. The first line of an MSA file 
serves as an identifier for the dataset from which the alignment was taken. There are no further 
format restrictions and the user can freely decide what to use as an identifier, as long as it does 
not exceed the first line. In the BDPA, we use the names of our subsets 
as dataset identifiers.  The second line is reserved as an identifier for the set of 
aligned sound sequences. The identifier can again be freely chosen by the user. In the BDPA, we 
generally use the meaning of the sound sequences as identifier, but we also add additional 
information, such as the anceestral from (in language families) or the orthography of the 
corresponding word in the standard variety (in dialect datasets). The following lines give the 
phonetic sequences in aligned form, separated by a tab-stop, and preceded by language identifiers 
(ISO-code, language name, dialect location) in the first column of the alignment matrix. The hash 
symbol (<code style="display:inline;color:Green">"#"</code>) is used as a comment character. When placed in the beginning of a line, it indicates 
that the line should be ignored when parsing the file . Inspired from 
alignment formats in bioinformatics, LingPy allows for specific additional lines which can be used 
to annotate the alignments. Instances of metathesis, for example, may be represented by adding a 
line which starts with the keyword <code style="display:inline;color:Green">"SWAPS"</code>, with a plus character (<code style="display:inline;color:Green">"+"</code>) marking the beginning of a 
swapped region, the dash character (<code style="display:inline;color:Green">"-"</code>) its center and another plus character the end. All sites 
which are not affected by swaps contain a dot (<code style="display:inline;color:Green">"."</code>). In the BDPA, 66 out of 
750 multiple alignments contain instances of metathesis and are regularly annotated in the way just 
described.
As an
example, consider the file <a href="data/harry_potter.msa">harry_potter.msa</a>:</p>

<pre id='vimCodeElement'>
<span class="LineNr">1 </span><span class="dataSet">Harry Potter Testset</span>
<span class="LineNr">2 </span><span class="seqId">Woldemort (in different languages)</span>
<span class="LineNr">3 </span><span class="msaTaxa">English</span>     <span class="dolgoGlides">v</span>     <span class="dolgoVowels">o</span>     <span class="dolgoLaterals">l</span>     -     <span class="dolgoDentals">d</span>     <span class="dolgoVowels">e</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">o</span>     <span class="dolgoLaterals">r</span>     <span class="dolgoDentals">t</span>
<span class="LineNr">4 </span><span class="msaTaxa">German.</span>     <span class="dolgoGlides">w</span>     <span class="dolgoVowels">a</span>     <span class="dolgoLaterals">l</span>     -     <span class="dolgoDentals">d</span>     <span class="dolgoVowels">e</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">a</span>     <span class="dolgoLaterals">r</span>     -
<span class="LineNr">5 </span><span class="msaTaxa">Russian</span>     <span class="dolgoGlides">v</span>     -     <span class="dolgoLaterals">l</span>     <span class="dolgoVowels">a</span>     <span class="dolgoDentals">d</span>     <span class="dolgoVowels">i</span>     <span class="dolgoMy">m</span>     <span class="dolgoVowels">i</span>     <span class="dolgoLaterals">r</span>     -
<span class="LineNr">6 </span><span class="swapSites">SWAPS..     .     +     -     +     .     .     .     .     .     .</span>
</pre>

<p>
Basically, the MSA-format can also be used to represent pairwise alignment analyses. However, since each
MSA-file, is a single text-file, we would need 7 197
different text-files to represent all sequence pairs of
our master benchmark for pairwise alignment analyses. Using such a large amount of text-files to represent the rather small amount of information available in pairwise alignments is not only impractical as
a shared digital resource, but also very inefficient for
computation.
</p>
<p>
In order to deal with large amounts of pairwise alignments in one and the same text-file, LingPy offers
an additional format for pairwise alignment analyses.
This format is called PSA-format, and files in the format have the extension <code style="display:inline;color:Green">"psa"</code>. As for the MSA-format,
the first line of a PSA-file is reserved for an identifier that refers to the dataset from which the data
was taken. The sequence pairs themselves are given
in triplets, with a sequence identifier in the first line
of a triplet (containing the meaning, or orthographical
information) and the
two sequences in the second and third line contain the alignment
matrix with the language identifiers being placed in
the first column. All triplets (sequence pair identifier
and two sequences) are separated by one empty line. As an example, consider the file <a href="data/harry_potter.psa">harry_potter.psa</a>:</p>
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
<p>In the BDPA, the pairwise benchmarks, as described above, are provided in
PSA-format. Additionally, we extracted all possible
pairwise alignments inherent in our master set of 750
multiple alignments and offer them for download in
PSA-format. You can download both MSA and PSA files for each subset from <a href="sources.php">here</a>.</p>

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
