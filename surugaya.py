from bs4 import BeautifulSoup
import urllib.request as req
import csv

f = open('url.txt') 
lines2 = f.readlines() 
f.close()

pa = []

# 取得
for line in lines2: 
	url = "https://www.suruga-ya.jp/product/detail/" + line
	res = req.urlopen(url)
	soup = BeautifulSoup(res, 'html.parser')

	title1 = soup.select('#item_title')

	for i in title1:
	    pt = i.get_text().replace('\n', '').replace('\r', '')


	p_list = soup.select('#price')

	for i in p_list:
	    pl = i.get_text().replace('\n', '').replace('\r', '')

	pa += [pt, pl]
	

	# CSV 書き出し
with open('price.csv', 'w', encoding='utf-8') as _file:
	writer = csv.writer(_file, lineterminator='\n')
	writer.writerow(pa)


