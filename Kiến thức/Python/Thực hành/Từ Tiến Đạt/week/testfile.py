global res
def doc_file():
  try:
      with open('data.txt') as rf:
          content = int(rf.read())
          if content % 5 == 0:
              return str(content // 5)
          elif content % 5 == 1:
              return str((content // 5 - 1) + 2)
          elif content % 5 == 2:
              return str((content // 5) + 1)
  except TypeError:
    print("Gia tri khong hop le")
with open('kq.txt', "w") as wf:
    print("Da luu ket qua vao file kq.txt")
    wf.write(doc_file())
    