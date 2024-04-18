#bai 1: fuel
while True:
  try:
    x, y = map(int,(input().split('/')))
    res = '%.0f' % (x/y * 100)
    if(int(res) <= 1):
      print("E")
    elif(int(res) > 99):
      print("F")
    else:
      print(res + "%")
  except (ValueError, ZeroDivisionError):
    print("Nhap sai gia tri, moi nhap lai")
    continue
  else:
    break

