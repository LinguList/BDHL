# author   : Johann-Mattis List
# email    : mattis.list@uni-marburg.de
# created  : 2013-08-29 20:52
# modified : 2014-03-03 16:08
"""
Script converts raw msa data to nice html output.
"""

__author__="Johann-Mattis List"
__date__="2014-03-03"


from lingpyd import *
from lingpyd.convert.plot import *
from lingpyd.convert.html import msa2html
from glob import glob
import os
import re

# make initial preparations
os.system('rm ../website_new/bdhl.de/align/multiple/msa/*.msa')
os.system('rm ../website_new/bdhl.de/align/multiple/msq/*.msq')
os.system('rm ../website_new/bdhl.de/align/multiple/long/*.html')
os.system('rm ../website_new/bdhl.de/align/multiple/short/*.html')

os.system('rm phonalign/multiple/msq/*')

# set up the replacmement dictionary for the datasets
datar = dict([
        ('AnDial',  'Andean'),
        ('GermDial','Germanic'),
        ('tppsr',   'French'),
        ('OugDial', 'Ob-Ugrian'),
        ('BaiDial', 'Bai'),
        ('BulDial', 'Bulgarian'),
        ('DutDial', 'Dutch'),
        ('NorDial', 'Norwegian'),
        ('RomDial', 'Romance'),
        ('SinDial', 'Sinitic'),
        ('slav',    'Slavic'),
        ('JAP',     'Japanese'),

        ])

# get the infiles 
infiles = glob('raw_data/*.msa')

# get the replacement lists
lngr = csv2dict('templates/st_list.txt')
seqr = csv2dict('templates/st_seqs.txt')
pids = csv2dict('templates/pids.txt')

# store data for writing it to file
dbase = {}
dlang = {}

swap_count = 0
idx = 0
badt = []
# iterate over files
for f in sorted(infiles,key=lambda x:x.lower()):
    
    print(f)
    m = MSA(f)
    
    # check for errors in msa files
    for i,line in enumerate(m.alm_matrix):
        if '' in line or ' ' in line:
            print("[!] Erroneous coding in file {0} on line {1}".format(
                    f,
                    i+3
                    ))
            input()
    for i,seq in enumerate(m.seqs):
        if seq.startswith('_'):
            print("[i] Erroneous coding in file {0} on line {1}".format(
                    f,
                    i+3
                    ))
            input()

    # try to calculate the percentage identity
    try:
        mpid = pids[f][0]
    except:
        mpid = int(100 * m.get_pid(2) + 0.5)
        pids[f] = mpid
        outX = open('templates/pids.txt','a')
        outX.write(f+'\t'+str(mpid)+'\n')
        outX.close()

    # get the dataset name and try to change it
    mdset = m.dataset.split(' ')[0]
    if mdset in datar:
        m.dataset = datar[mdset]
        mdset = m.dataset
    else:
        m.dataset = mdset

    # change name of input file
    m.infile = 'phonalign_{0}'.format(idx+1)

    # change names of taxa
    for i,t in enumerate(m.taxa):
        try:
            newt = lngr[t][0]
        except KeyError:
            try:
                newt = lngr[m.dataset+'_'+t][0]
            except KeyError:
                newt = t
                badt += [t]
                
        m.taxa[i] = newt

    # change the sequence identifiers, here it is important to first check
    # whether there are more than two unique sequences (otherwise it's just a
    # pairwise alignemnt and no fun at all
    if len(m.uniseqs) > 2:
        # get the number of sequences
        seqnum = len(m.alm_matrix)

        # get the number of unique seqs
        sequnique = len(m.uniseqs)

        # change the identifier
        mseqid = m.seq_id.split(',')[0]
        try:
            newseqid = seqr[mseqid][0]
        except KeyError:
            try:
                newseqid = seqr[m.dataset + '_'+mseqid][0]
            except KeyError:
                newseqid = mseqid
        m.seq_id = newseqid.replace('"','&quot;')

        # prohibit to make a swapindex on tone languages
        if hasattr(m, 'swaps'): 
            if m.dataset in ['Bai','Sinitic']:
                m.swaps = []
            else:
                if m.swaps:
                    swap_count += 1
        else:
            m.swaps = []

        # write temporary msa for html-conversion
        # output full msa
        m.output('msa',sorted_seqs='tree',unique_seqs=False)
        msa2html(m.infile+'.msa',filename='../website_new/bdhl.de/align/multiple/html/'+m.infile+'.html',template='templates/msa.html',
                compact=True)
        os.system('rm '+m.infile+'.msa')

        try:
            os.mkdir('subsets/'+m.dataset)
        except:
            pass
        m.output('msa',filename='subsets/'+m.dataset+'/'+m.infile)
 
        # set swap-flag to true if this is a swap sequence
        if m.swaps:
            mswap = 1
        else:
            mswap = 0
        
        # store metadata in the metadata dictionary
        dbase[idx+1] = (
                m.infile,
                m.dataset,
                m.seq_id,
                mpid,
                seqnum,
                sequnique,
                ';'.join(m.taxa),
                mswap
                )

        # change sequence identifiers
        m.seq_id = m.seq_id.replace('&quot;','"')
        m.seq_id = m.seq_id.replace('</i>','*')
        m.seq_id = m.seq_id.replace('&lt;','<')
        m.seq_id = m.seq_id.replace('<i id="form">','*')
        #m.seq_id = re.sub(r'\s+',r' ',m.seq_id)
        #m.seq_id = re.sub((' *','*')

        # write msas to file
        m.output(
                'msa',
                filename='../website_new/bdhl.de/align/multiple/msa/phonalign_{0}'.format(idx+1),
                unique_seqs=False
                )
        m.output(
                'msq',
                filename='../website_new/bdhl.de/align/multiple/msq/phonalign_{0}'.format(idx+1),
                unique_seqs=False
                )

        # store the occurrences of taxa in the taxa dictionary
        for t in m.taxa:
            try:
                dlang[t] += [idx+1]
            except KeyError:
                dlang[t] = [idx+1]


        # increase the index
        idx += 1

# write the stuff to file
out = open('msa_taxa.csv','w')
for k,v in dlang.items():
    out.write('{0}\t{1}\n'.format(
        k,
        ','.join([str(x) for x in v])
        )
        )
out.close()
out = open('msa_data.csv','w')
for k,v in dbase.items():
    out.write('{0}\t{1}\t{2}\t{3}\t{4}\t{5}\t{6}\t{7}\n'.format(
        k,
        v[0],
        v[1],
        v[2],
        v[3],
        v[4],
        v[5],
        v[6]
        )
        )
out.close()

import sqlite3
conn = sqlite3.connect('../website_new/bdhl.de/data/data.sqlite3')
cursor = conn.cursor()
try:
    cursor.execute('drop table alignments;')
except:
    pass

cursor.execute('create table alignments(id int, file text, dataset text, sequence tex, pid int, seqnum int, uniques int, taxa text,swap int);')

for k,v in sorted(dbase.items(), key=lambda x:x[0]):

    cursor.execute(
            'insert into alignments values(?,?,?,?,?,?,?,?,?);',
            tuple([k]+list(v))
            )

conn.commit()

for t in sorted(set(badt)): print(t)
