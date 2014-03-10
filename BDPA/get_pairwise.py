# author   : Johann-Mattis List
# email    : mattis.list@uni-marburg.de
# created  : 2014-03-10 11:21
# modified : 2014-03-10 11:21
"""
Get all pairwise alignments for each msa file.
"""

__author__="Johann-Mattis List"
__date__="2014-03-10"

from glob import glob
from lingpyd import *
import os


os.system('rm psa_out/*/*.psa')
os.system('rm psa_out/*.zip')
os.system('rm psa_out/*/*/*')

files = glob('msa/*.msa')

dsets = []
for f in sorted(files):
    print(f)
    msa = MSA(f)
    
    try:
        os.mkdir('psa_out/'+msa.dataset+'/msa')
        os.mkdir('psa_out/'+msa.dataset+'/msq')
        os.mkdir('psa_out/'+msa.dataset+'/psa')
        os.mkdir('psa_out/'+msa.dataset+'/psq')
    except:
        pass

    msa.output('msa', filename='psa_out/'+msa.dataset+'/msa/'+f.split('/')[-1].replace('.msa',''))
    msa.output('msq', filename='psa_out/'+msa.dataset+'/msq/'+f.split('/')[-1].replace('.msa',''))
    msa.output('psa', filename='psa_out/'+msa.dataset+'/psa/'+f.split('/')[-1].replace('.msa',''))
    msa.output('psq', filename='psa_out/'+msa.dataset+'/psq/'+f.split('/')[-1].replace('.msa',''))


    msa.output('msa', filename='psa_out/multiple/msa/'+f.split('/')[-1].replace('.msa',''))
    msa.output('msq', filename='psa_out/multiple/msq/'+f.split('/')[-1].replace('.msa',''))


    dsets += [msa.dataset]

dsets += ['multiple']

tmp = open('psa_out/README.md').read()

for s in set(dsets):
    
    with open('psa_out/{0}/README.md'.format(s), 'w') as f:
        if s == 'multiple':
            dataset = 'complete collection of all sources'
        else:
            dataset = s
        f.write(tmp.format(source=dataset, today=rc('timestamp').split(' ')[0]))
        
    os.system('cd psa_out; zip {0} {1}/*/*'.format(s.lower(),s))
    os.system('cd psa_out; zip {0} {1}/README.md'.format(s.lower(), s))
    os.system('rm psa_out/{0}/*/*'.format(s))

