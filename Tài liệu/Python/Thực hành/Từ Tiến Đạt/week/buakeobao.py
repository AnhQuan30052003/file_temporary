# Bua keo bao
import random
def emergy():
  emerChoice = random.choice(["Bua", "Keo", "Bao"]).lower()
  return emerChoice
def player():
  playerChoice = input("Bua, Keo, Bao:").lower()
  return playerChoice
def sol():
  emer = emergy()
  play = player()
  print("Emergy's Choice:",emer)
  print("Player's Choice:", play)
  if play == emer:
    print("Draw")
  elif (play == "bua" and emer =="keo") or (play == "keo" and emer == "bao") or (play == "bao" and emer == "bua"):
    print("Player Win")
  else: print("Emergy Win")
def main():
  print("Chao mung ban den voi Bua Keo Bao")
  while True:
    sol()
    match input("Ban co muon choi tiep khong(Y/N)").lower():
      case 'n':
        break
      case _:
        continue
main()