#! /usr/bin/env python
# *-* coding:utf-8 *-*
import os
from lingpyd import *

from glob import glob
from random import randint
from numpy import array

infs = glob('../website_new/bdhl.de/align/multiple/msa/*.msa')
out1 = open('psa_gold.psa','w')
out1.write('PairwiseGoldStandard\n')
out2 = open('psa_tone.psa','w')
out2.write('PairwiseGoldStandardTone\n')


scores = []
lib = 0
count = 0
tcount = 0
for inf in sorted(infs):
    print(inf.split('/')[-1])
    msa = MSA(inf, unique_seqs=True)
    msa.infile=inf.split('/')[-1]
    msa.get_pairwise_alignments(new_calc=False)
    
    itms = [k for k in msa.alignments.items()]
    alms = [k[0] for k in itms]
    vals = [k[1][2] for k in itms]
    
    idxs = []
    z = 0    
    check = set()

    l = len(vals)
    if 'Sinitic' in msa.dataset or 'Bai' in msa.dataset:
        limit = 10
    elif 'Bulgarian' in msa.dataset:
        limit = 10
    else:
        limit = 10

    print("...extracting sequences...")
    while z < limit:
        idx = vals.index(min(vals))
        if vals[idx] == 100:
            break
        wert = vals[idx]
        vals[idx] = 100
        if wert != 0:
            b = msa.alignments[alms[idx]]
            almA,almB,score = b
            almAB = ''.join(almA)+'/'+''.join(almB)
            almCD = ''.join(almB)+'/'+''.join(almA)
            if almAB not in check:
                idxs.append(idx)
                check.add(almAB)
                check.add(almCD)
                z += 1
            else:
                pass
        else:
            b = msa.alignments[alms[idx]]
            almA,almB,score = b
            if len(almA) == len([K for K in almA if K != '-'])+len([K for K in
                almB if K != '-']):
                pass
            else:
                almAB = ''.join(almA)+'/'+''.join(almB)
                almCD = ''.join(almB)+'/'+''.join(almA)
                if almAB not in check:
                    idxs.append(idx)
                    check.add(almAB)
                    check.add(almCD)
                    z += 1
                else:
                    pass
    print("...done...")

    
    if 'Sinitic' in msa.dataset or 'Bai' in msa.dataset:
        tcount += len(idxs)
        sin = True
    else:
        sin = False
        count += len(idxs)
    
    for x in idxs:
        b = msa.alignments[alms[x]]
        a = alms[x]
        
        letitbe = False
        almA,almB,score = b
        zips = [(A[0],A[1]) for A in zip(almA,almB) if A != ('-','-')]
        almA = [K[0] for K in zips]
        almB = [K[1] for K in zips]
        if sum([1 for X in almA if X == '-']) + sum([1 for X in almB if X ==
            '-']) == len(almA):
            letitbe = True
            lib += 1
            
        taxA,taxB = msa.taxa[a[0]],msa.taxa[a[1]]
        if sin and not letitbe:
            out2.write(msa.seq_id+',('+msa.infile+'/'+msa.dataset+')\n')
            out2.write(taxA+'\t')
            out2.write('\t'.join(almA)+'\n')
            out2.write(taxB+'\t')
            out2.write('\t'.join(almB)+'\n')
            out2.write('#'+str(score)+'\n\n')
            out1.write(msa.seq_id+',('+msa.infile+'/'+msa.dataset+')\n')
            out1.write(taxA+'\t')
            out1.write('\t'.join(almA)+'\n')
            out1.write(taxB+'\t')
            out1.write('\t'.join(almB)+'\n')
            out1.write('#'+str(score)+'\n\n')
        elif not sin and not letitbe:
            out1.write(msa.seq_id+',('+msa.infile+'/'+msa.dataset+')\n')
            out1.write(taxA+'\t')
            out1.write('\t'.join(almA)+'\n')
            out1.write(taxB+'\t')
            out1.write('\t'.join(almB)+'\n')
            out1.write('#'+str(score)+'\n\n')
        
        if not letitbe:
            scores.append(score)

out1.close()
out2.close()

#from matplotlib import pyplot as plt
#import matplotlib as mp
#mp.rcParams['font.size'] = 16.0
#print array(scores).mean()
#print len(scores)
#
#plt.clf()
#h = plt.hist(scores,color='gray',edgecolor='black')
#plt.xlabel('Percantage Identity')
#plt.ylabel('Number of Pairs')
#plt.savefig('pairwise_pid.pdf')
#plt.clf()

p = PSA('psa_gold.psa')
p.output('psa',filename="global")
p.output('psq',filename="global")
p = PSA('psa_tone.psa')
p.output('psa',filename="tone")
p.output('psq',filename="tone")


print(tcount,count,tcount+count,tcount / float(tcount + count),lib)
