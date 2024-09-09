import random
def number():
  while True:
    n = int(input("Level: "))
    if (n <= 0):
      continue
    else:
      return n
def main():
  randnum = random.randint(1,number())
  while True:
    guess = int(input("Guessing number: "))
    if (guess <= 0):
      continue
    elif(guess < randnum):
      print("Too small!")
      continue
    elif(guess > randnum):
      print("Too large!")
      continue
    else:
      print("Just right!")
      break
main()
  