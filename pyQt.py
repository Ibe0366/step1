# /user/bin/pyrhon3
# -*- coding: utf-8 -*-

import sys
from PyQt5.QtWidgets import (QApplication, QWidget, QPushButton, QTableWidgetItem, QTableWidget)
import logging

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
        #ヘッダーを作成
        horHeaders = ['対象サイトのURL', '商品名', '現在価格', '希望価格']
        self.setHorizontalHeaderLabels(horHeaders)
        #テーブルにデータをセット
        for n in range(len(self.data)):
            print("n=%d" % n)
            for m in range(len(self.data[n])):
                print("m=%d" % m)
                newitem = QTableWidgetItem(data[n][m])
                self.setItem(m, n, newitem)




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

    table = tableTest01(data, 3, 4)
    table.show()
    window.show()

    sys.exit(app.exec_())

