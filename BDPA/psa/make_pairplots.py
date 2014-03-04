# author   : Johann-Mattis List
# email    : mattis.list@uni-marburg.de
# created  : 2014-03-04 14:03
# modified : 2014-03-04 14:03
"""
Create html-plots from pairwise alignment data.
"""

__author__="Johann-Mattis List"
__date__="2014-03-04"


from glob import glob
from lingpyd import *
from lingpyd.convert.html import psa2html

for f in glob('*.psa'):

    psa2html(f, template='psa.html', css='psa.css')
    
