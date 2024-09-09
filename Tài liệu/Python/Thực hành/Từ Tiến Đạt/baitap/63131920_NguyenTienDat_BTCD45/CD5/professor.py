import random
def main():
  level = get_level()
  score = cnt_round(level)
  print("Score: ",score)

def get_level():
  while True:
    try:
      level = int(input("Choose level(1/2/3): "))
      if level in [1, 2 , 3]:
        break
    except:
      pass
  return level
def generate_integer(level):
  if level == 1:  
    x = random.randint(0, 9)
    y = random.randint(0, 9)
  elif level == 2:
    x = random.randint(10, 99)
    y = random.randint(10, 99)
  else:
    x = random.randint(100, 999)
    y = random.randint(100, 999)
  return x, y
def solv(x, y):
  cnt_error = 3
  while (cnt_error != 0):
    try:
      res = int(input(f"{x} + {y} = "))
      if res == (x+y):
        return True
      else:
        print("EEE")
        cnt_error -= 1 
    except ValueError:
      print("EEE")
      cnt_error -= 1 
  print(f"{x} + {y} = {x+y}")
  return False
def cnt_round(level):
  round = 10
  score = 0
  while(round != 0):
    x, y = generate_integer(level)
    respond = solv(x,y)
    if respond == True:
      score += 1
    round -= 1
  return score

if __name__ == "__main__":
 main()
