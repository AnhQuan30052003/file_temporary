import sys
import random
import os
os.system('cls')
from pyfiglet import Figlet
figlet = Figlet()
if len(sys.argv) == 1:
  text = input()
  random_font = random.choice(figlet.getFonts())
  f = Figlet(font = random_font)
  print(f.renderText(text))
elif len(sys.argv) == 2:
  sys.exit("invalid usage")
elif len(sys.argv) == 3:
  if(sys.argv[1] == '-f' or sys.argv[1] == '-font'):
    if(sys.argv[2] in figlet.getFonts()):
      text = input()
      c = Figlet(font = sys.argv[2])
      print(c.renderText(text))
    else:
      sys.exit("Invalid usage")
