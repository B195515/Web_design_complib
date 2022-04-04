#!/localdisk/anaconda3/bin/python
import sys
# get sys package for file arguments etc
import pymysql
import numpy as np
import scipy.stats as sp
import matplotlib.pyplot as plt
import io

# Command for making connection to db
con = pymysql.connect(host='localhost', user='s2255686', passwd='qeenreen', db='s2255686')
cur = con.cursor()
if(len(sys.argv) != 4) :
  print("Usage: histog.py col name where ; Nparams = ",sys.argv)
  sys.exit(-1)

# Sets up arguments as input for the histogram
col1 = sys.argv[1]
col2 = sys.argv[3]
xname = sys.argv[2]
sql = f"SELECT {col1} FROM Compounds where {col2}"

# Execute sql command to retrieve data cur.()
cur.execute(sql)
nrows = cur.rowcount
ds = cur.fetchall()
ads = np.array(ds)
num_bins = 20

# Construct histogram
n, bins, patches = plt.hist(ads, num_bins, density=0, facecolor='blue', alpha=0.5)
plt.xlabel(xname)
plt.ylabel('N')
# Saves the figure to the internal buffer
image = io.BytesIO()
plt.savefig(image,format='png')

# Unformatted write of buffer
sys.stdout.buffer.write(image.getvalue())
#plt.show()
con.close()
