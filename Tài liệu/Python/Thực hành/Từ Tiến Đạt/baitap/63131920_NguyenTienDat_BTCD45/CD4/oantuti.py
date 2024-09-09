# Bua keo bao
import random
import os
os.system('cls')
def enemy():
  eneChoice = random.randint(1,3)
  return eneChoice
def player():
  while True:
    print("Moi ban chon:")
    playerChoice = int(input("1.Bua\n2.Keo\n3.Bao\n"))
    if playerChoice < 1 and playerChoice > 3:
      continue
    else: return playerChoice
def sol():
  enemy_count = 0
  player_count = 0
  while True:
    if player_count == 3 or enemy_count == 3:
      return
    else:
      ene = enemy()
      play = player()
      match ene:
        case 1:
          print("Doi thu da chon Bua")
        case 2:
          print("Doi thu da chon Keo")
        case 3:
          print("Doi thu da chon Bao")
      match play:
        case 1:
          print("Ban da chon Bua")
        case 2:
          print("Ban da chon Keo")
        case 3:
          print("Ban da chon Bao")
      if play == ene:
        continue
      elif (play == 1 and ene == 2) or (play == 2 and ene == 3) or (play == 3 and ene == 1):
        player_count += 1
        print(f"Ban da thang lan {player_count}")
        if player_count == 3:
          print("Ban da chien thang chung cuoc")
      else:
        enemy_count += 1
        print(f"Doi thu da thang lan {enemy_count}")
        if enemy_count == 3:
          print("Doi thu da chien thang chung cuoc")
def main():
  print("Chao mung ban den voi Bua Keo Bao")
  while True:
    sol()
    match input("Ban co muon choi tiep khong(Y/N)").lower():
      case 'n':
        break
      case _:
        continue
if __name__ == '__main__':
  main()