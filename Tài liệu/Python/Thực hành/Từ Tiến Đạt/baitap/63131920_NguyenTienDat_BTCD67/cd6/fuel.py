def main():
  text = input()
  if check_fuel(text) == 0:
    print("E")
  elif check_fuel(text) == 1:
    print("F")
  else:
    print(check_fuel(text))
def check_fuel(fuel):
  x, y = map(int,(fuel.split('/')))
  res = '%.0f' % (x/y * 100)
  if(int(res) <= 1):
    return 0
  elif(int(res) > 99):
    return 1
  else:
    return res + "%"
if __name__ == "__main__":
  main()