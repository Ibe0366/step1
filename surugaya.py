from bs4 import BeautifulSoup
import urllib.request as req
import csv

f = open('url.txt') 
lines2 = f.readlines() 
f.close()

from bs4 import BeautifulSoup
import urllib.request as req
import csv

f = open('url.txt') 
lines2 = f.readlines() 
f.close()


# 取得
for line in lines2: 
	url = "https://www.suruga-ya.jp/product/detail/" + line
	res = req.urlopen(url)
	soup = BeautifulSoup(res, 'html.parser')
	title1 = soup.find('h2', id='item_title')
	p_list = soup.find('p', id="price")

# CSV 書き出し
with open('price.csv', 'w') as _file:
	writer = csv.writer(_file, lineterminator='\n' , "utf8")
	writer.writerow([title1])
	writer.writerow([p_list])