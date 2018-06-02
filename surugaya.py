from bs4 import BeautifulSoup
import urllib.request as req
import csv

f = open('url.txt') 
lines2 = f.readlines() 
f.close()


with open('price.csv', 'w') as _file:
	writer = csv.writer(_file, lineterminator='\n')



	for line in lines2: 

		url = "https://www.suruga-ya.jp/product/detail/" + line
		res = req.urlopen(url)
		soup = BeautifulSoup(res, 'html.parser')

		title1 = soup.find('h2', id='item_title')
		writer.writerow([title1])

		p_list = soup.find('p', id="price")
		writer.writerow([p_list])

	print