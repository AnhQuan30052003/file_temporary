def value(greeting):
  if greeting[:5] == "hello":
    return 0
  elif greeting[:1] == "h" and greeting[:5] != "hello":
    return 20
  else:
    return 100
def main():
  text = input("nhap loi chao: ").lower().strip()
  if value(text) == 0:
    print("$0")
  elif value(text) == 20:
    print("$20")
  else:
    print("$100")
if __name__ == '__main__':
  main()
  
