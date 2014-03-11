# author   : Johann-Mattis List
# email    : mattis.list@uni-marburg.de
# created  : 2014-03-11 15:50
# modified : 2014-03-11 15:50
"""
<++>
"""

__author__="Johann-Mattis List"
__date__="2014-03-11"


from lingpy import csv2list
import sqlite3


vals = csv2list('msa_taxa.csv')

conn = sqlite3.connect('../website_new/bdhl.de/data/data.sqlite3')
cursor = conn.cursor()
try:
    cursor.execute('drop table alignments;')
except:
    pass

cursor.execute('create table alignments(id int, file text, dataset text, sequence tex, pid int, seqnum int, uniques int, taxa text);')

for line in vals:

    cursor.execute(
            'insert into alignments values(?,?,?,?,?,?,?,?);',
            tuple(line)
            )

conn.commit()


