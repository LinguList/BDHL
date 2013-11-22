# author   : Johann-Mattis List
# email    : mattis.list@uni-marburg.de
# created  : 2013-11-22 14:07
# modified : 2013-11-22 14:07
"""
Create html-plots of input data.
"""

__author__="Johann-Mattis List"
__date__="2013-11-22"

from lingpy import *
from glob import glob

files = glob('*.qlc')
for f in files:
    alm = Alignments(f)
    alm.align()
    alm.output('html')

