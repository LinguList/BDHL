<!-- SIDEBAR cognates -->
<h2>Benchmark Database for Cognate Detection (BDCD)</h2>
<br>
<div class="sidebar">
<p><b><u>Contents:</u></b></p><br>
<ul>
<li><a style="color:black;" href="cognates.php#cd">Cognate Detection</a></li>
<li><a style="color:black;" href="cognates.php#benchmark">A Benchmark Database for Cognate Detection</a></li>
<li><a style="color:black;" href="cognates.php#formats">Basic Formats for Cognate Detection</a></li>
</ul></div>
<br>
<h3><a style="color:black;" name="cd">Cognate Detection</a></h3>
<br>
Cognate detection is here understood as the specific task to identify etymologically related words in linguistics datasets.
Given a multilingual wordlist, where entries are semantically aligned, a method for automatic cognate detection tries to correctly identify those words which go back to a common ancestor. 
The task can be stated differently, be it in a stronger, or a weaker form. A stronger formulation of the problem, for example, would discard the condition that the words from different languages can be semantically aligned. A weaker form could state that the words do not necessarily need to be cognates, but only historically related (including borrowings, but excluding chance similarities). Cognate detection is an important task in historical linguistics, since many quantitative approaches rely on the correct identification of cognate sets (which is usually done before quantitative methods are applied).
Automatic methods for cognate detection could help us a great deal here, since there are many languages that have not yet been as exhaustively studied as the Indo-European languages, and it is difficult and time-consuming to apply the traditional method for cognate detection on large datasets.
<br>
<br>
<h3><a style="color:black;" name="benchmark">A Benchmark Database for Cognate Detection</a></h3>
<br>
<p>
The testing of algorithms that deal with the problem of automatic cognate detection requires gold standard databases of known cognate relations between words. Here, we present a benchmark database for cognate detection, consisting of
a large number of datasets that cover a very diverse range of languages and language families.
In contrast to publicly available databases that offer manually edited cognate judgments on different language families, the collection of datasets in the BDHL is exclusively based on IPA transcriptions that are further provided in tokenized form, in order to ease the application of automatic methods.</p>
 
<p>The data offered here was compiled during the time when I worked on my PhD at the Heinrich Heine University Düsseldorf. When compiling and preparing the data, I tried to avoid to change the cognate judgments given in the original datasources in order to maintain a certain objectivit. My own work on the data was thus mostly restricted to the editing of the lexical entries which often had to be either cleaned or directly transcribed. </p>
<br><br>
<ul>
<li>If you want to download the data, please follow <a href="cognates_download.php">this link</a>.</li>
<li>If you want to browse the data, please follow <a href="cognates_browse.php">this link</a>.</li>
<li>If you want to check out the sources of the data, please follow <a href="cognates_sources.php">this link</a>.</li></ul>
<br><br>
<h3><a style="color:black;" name="formats">Basic Formats for Cognate Detection</a></h3>
<br>
<p>
In order to display cognate judgments over a given set of languages, we use a simple CSV-format which can be further specificied by certain constructs. We call this format "QLC"-format and give it the extension "qlc". 
Basically, this format is a simple tab-delimited text file in which the header specifies all entry types in a given dataset:
</p>
<pre><code style="font-size:80%">ID   CONCEPT     COUNTERPART   IPA         DOCULECT     COGID
1    hand        Hand          hant        German       1
2    hand        hand          hænd        English      1
3    hand        рука          ruka        Russian      2
4    hand        рука          ruka        Ukrainian    2
5    leg         Bein          bain        German       3
6    leg         leg           lɛg         English      4
7    leg         нога          noga        Russian      5
8    leg         нога          noga        Ukrainian    5
9    Woldemort   Waldemar      valdemar    German       6
10   Woldemort   Woldemort     wɔldemɔrt   English      6
11   Woldemort   Владимир      vladimir    Russian      6
12   Woldemort   Володимир     volodimir   Ukrainian    6
9    Harry       Harald        haralt      German       7
10   Harry       Harry         hæri        English      7
11   Harry       Гарри         gari        Russian      7
12   Harry       Гаррi         gari        Ukrainian    7</code></pre>

<p>The format can be further extended by adding key-value pairs in the lines before the header, such
as, for example, information regarding the author, the data, or general notes:</p>

<pre><code style="font-size:80%">@author: Potter, Harry
@date: 2012-11-07
@note: Be careful with this data, it might have been charmed...
#
ID   CONCEPT     COUNTERPART   IPA         DOCULECT     COGID
1    hand        Hand          hant        German       1
2    hand        hand          hænd        English      1
3    hand        рука          ruka        Russian      2
...  ...         ...           ...         ...          ...</code></pre>
<p>This format is, of course, rather redundant, but it allows to display multiple entry-types for
language data. Furthermore, the data can be easily extended. Thus, one can add multiple alignments,
using the standard formats for multiple alignments, as described in our <a href="alignments.php#formats">alignments</a> section,
by enclosing them in specific HTML-tags and placing them before the real data:</p>
<pre><code style="font-size:80%">@author: Potter, Harry
@date: 2012-11-07
@note: Be careful with this data, it might have been charmed...
#
&lt;msa id=&quot;6&quot; ref=&quot;cogid&quot;&gt;
     Harry Potter Testset
     Woldemort (in different languages)
     English     w    o    l    -    d    e    m    o    r    t
     German.     w    a    l    -    d    e    m    a    r    -
     Russian     v    -    l    a    d    i    m    i    r    -
     Ukrainian   v    o    l    o    d    y    m    y    r    -
&lt;/msa&gt;
#
ID   CONCEPT     COUNTERPART   IPA         DOCULECT     COGID
1    hand        Hand          hant        German       1
2    hand        hand          hænd        English      1
3    hand        рука          ruka        Russian      2
...  ...         ...           ...         ...          ...</code></pre>
<p>As can be seen from the examples, cognate judgments are displayed with help of a specific ID, the "CognateID" (or "COGID"). Whenever two words are given the same cognate ID, they are judged to be cognate. Negative cognate IDs 
can be further used in order to mark that a given entry has been borrowed.</p>

