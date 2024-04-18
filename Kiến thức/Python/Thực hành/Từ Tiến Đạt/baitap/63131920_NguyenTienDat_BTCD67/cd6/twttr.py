def shorten(word):
  res = " "
  for i in word:
    if i.lower() not in "aouie":
      res += i
  return res.strip()
def main():
  text = input("Nhap vao 1 chuoi:")
  print(shorten(text))
if __name__ == '__main__':
  main()