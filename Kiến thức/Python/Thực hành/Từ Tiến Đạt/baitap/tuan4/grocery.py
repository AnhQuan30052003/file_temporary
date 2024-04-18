import os
os.system("cls")
item = []
count = []
while True:
  try:
      text = input("Nhap mon do:").upper()
      if text not in item:
        item.append(text)
        count.append(1)
      else:
        for i in range(0, len(item)):
          if text in item:
            count[i]+=1
            break
  except EOFError:
    break
  else:
    continue
item.sort()
for i in range(0, len(item)):
  print(f"{count[i]} {item[i]}")

