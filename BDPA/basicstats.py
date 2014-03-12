# author   : Johann-Mattis List
# email    : mattis.list@uni-marburg.de
# created  : 2014-03-12 10:38
# modified : 2014-03-12 10:38
"""
<++>
"""

__author__="Johann-Mattis List"
__date__="2014-03-12"

from lingpy import *
from glob import glob

files = glob('../website_new/bdhl.de/align/multiple/msa/*.msa')

taxa = []
words = []

for f in files:
    msa = MSA(f)

    taxa += [t.strip('.') for t in msa.taxa]
    words += [w for w in msa.seqs]
    for t in msa.taxa:
        if t.lower() == t:
            print(msa.dataset, f.split('/')[-1],t)

print(len(set(taxa)))
print(len(words),len(set(words)))


