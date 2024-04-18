import inflect
p = inflect.engine()
mylist = []
while True:
  try:
    text = input()
    mylist.append(text)
  except EOFError:
    break
if len(mylist) == 1:
  print(f"Adieu, adieu, to {mylist[0]}")
else:
  print(f"Adieu, adieu, to {p.join(mylist)}")