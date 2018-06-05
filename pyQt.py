# /user/bin/pyrhon3
# -*- coding: utf-8 -*-
from bs4 import BeautifulSoup
import urllib.request as req
import csv
import sys
from PyQt5.QtWidgets import (QApplication, QWidget, QPushButton, QTableWidgetItem, QTableWidget, QMainWindow)

data = []

class tableTest01(QTableWidget):
    """   テーブルを形成する関数  """
    def __init__(self, data, *args):
        QTableWidget.__init__(self, *args)
        self.data = data
        self.setdata()
        self.resizeColumnsToContents()
        self.resizeRowsToContents()

    def setdata(self):
        #  ヘッダーを作成
        horHeaders = ['対象サイトのURL', '商品名', '現在価格', '希望価格']
        self.setHorizontalHeaderLabels(horHeaders)
        #  テーブルにデータをセット
        for n in range(len(self.data)):
            print("n=%d" % n)
            for m in range(len(self.data[n])):
                print("m=%d" % m)
                newitem = QTableWidgetItem(data[n][m])
                self.setItem(m, n, newitem)



def startScrapy():
    try:
        f = open('sample.csv')
        lines2 = f.readlines()
        f.close()
        pa = []

        # 取得
        for line in lines2:
            url = "https://www.suruga-ya.jp/product/detail/" + line
            res = req.urlopen(url)
            soup = BeautifulSoup(res, 'html.parser')
            title1 = soup.select('#item_title')
            if len(title1) > 0 :
                for i in title1:
                    pt = i.get_text().replace('\n', '')
            else:
                pt = 'Nothing Product Name'
            p_list = soup.select('#price')
            if len(p_list) > 0 :
                for x in p_list:
                    pl = x.get_text().replace('\n', '').replace('\r', '')
            else:
                pl = 'Nothing Product Price'
            pa += [line, pt, pl, 0]
            print(pa)
        return pa
    except:
        print("失敗")

if __name__ == '__main__':
    app = QApplication(sys.argv)
    """ 大枠 """
    window = QWidget()
    window.resize(500, 500)
    window.setStyleSheet('background-color: #F2F2F2;')

    """ ボタン """
    button = QPushButton('スクレイピングを開始', window) # button
    button.resize(255, 72)
    button.setStyleSheet("background-color:#F2FBEF; margin-top:25px; margin-left:25px; font-wight:bold; font-family:'Meiryo'; letter-spacing: 10px;")
    button.clicked.connect(startScrapy)



    window.show()

    sys.exit(app.exec_())