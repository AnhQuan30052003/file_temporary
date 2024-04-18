import sys
import requests
import json
import os
os.system('cls')
if len(sys.argv) < 2:
  sys.exit("Missing command-line argument")
else:
  try:
    n = float(sys.argv[1])
  except ValueError:
    sys.exit("Command-line arguments is not a number")
  r = requests.get('https://api.coindesk.com/v1/bpi/currentprice.json')
  data = r.json()
  price = data["bpi"]["USD"]["rate"]
  price = price.replace(",", "")
  price = float(price)
  print(f"${ '%.4f' % (float(price) * n)}")
