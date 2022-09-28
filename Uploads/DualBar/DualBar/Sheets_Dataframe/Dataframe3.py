import matplotlib
import matplotlib.colors as cl
import matplotlib.patches as mpatches
import matplotlib.pyplot as plt
import numpy as np
import pandas as pd

def DualBars(inDf, inNameI, inValI1, inValI2, inLabel1, inLabel2 ):
	widthFactor = 0.4
	cList = [['#9FB2D4','#7590C1'],['#EF8490','#E84E60']]
	labels = [inLabel1, inLabel2]
	vals = [inDf[inDf.columns[inValI1]], inDf[inDf.columns[inValI2]] ]
	names = inDf[inDf.columns[inNameI]]
	plt.rc('xtick', labelsize=8)
	plt.rc('ytick', labelsize=7)
	hList = []
	x_pos = np.arange(len(names))
	plt.xticks(x_pos, names, horizontalalignment='right',rotation=45)
	for i in range(2):
		cRGB = [cl.to_rgb(col) for col in cList[i]]
		cmap = matplotlib.colors.LinearSegmentedColormap.from_list("", cRGB)
		bars = plt.bar(x_pos, vals[i])
		ax = bars[0].axes
		lim = ax.get_xlim()+ax.get_ylim()
		for bar in bars:
			bar.set_facecolor("none")
			w, h = bar.get_width()* widthFactor, bar.get_height() 
			x,y = bar.get_xy()
			if i==1:x+=w;
			grad = np.linspace(y, y + h, 256).reshape(256, 1)
			ax.imshow(grad, extent=[x,x+w,y,y+h], aspect="auto", zorder=0, cmap=cmap)
		ax.axis(lim)
		hList.append(mpatches.Patch(color=cmap(.1), label=labels[i]))
	plt.legend(handles=hList, prop={'size': 8})

dfIn=pd.read_csv("C:\\Row64\\CTO\\Phase 04\\GalleryBrowser_02\\build\\Recipes\\Import_Export\\LoadCsv\\dogs.csv")
df=dfIn.copy(deep=True)
DualBars(df,0,1,2,"Average Weight (lbs)","Average Height (inches)")