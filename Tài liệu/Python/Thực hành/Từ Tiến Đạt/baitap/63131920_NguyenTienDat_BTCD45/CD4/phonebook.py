import os
os.system("cls")
phonebook = {}
def add():
  name = input("Nhap ten: ").title()
  if name not in phonebook:
    phone_number = input("Nhap so dien thoai: ")
    phonebook.update({name: phone_number})
    print("Da them thanh cong")
  else:
    print("Ten da co trong danh ba")

def search():
    name = input("Nhập tên cần tìm: ").title()
    if name in phonebook:
        print(f"Số điện thoại của {name}: {phonebook[name]}")
    else:
        print(f"{name} không tồn tại trong danh bạ.")
def edit():
  name = input("Nhap ten nguoi muon sua: ").title()
  temp = phonebook[name]
  if name in phonebook:
    choice = int(input("Ban muon sua\n1.Ten\n2.SDT\n"))
    if choice == 1:
      del phonebook[name]
      new_name = input("Nhap lai ten moi: ").title()
      phonebook.update({new_name: temp})
    elif choice == 2:
      phone_number = input("Nhap so dien thoai: ")
      phonebook.update({name: phone_number})
    print("Da sua thanh cong")
  else:
    print("Ten khong co trong danh ba")
def delete():
  name = input("Nhap ten nguoi muon xoa: ").title()
  veri = input("Xac nhan xoa?(Y/N").lower()
  if veri == "y":
    del phonebook[name]
    print("Da xoa thanh cong")
  else:
    print("Da huy thao tac")

def print_phonebook():
  print("---------DANH BA--------")
  for key in phonebook:
    text = "{0}: {1}"
    print(text.format(key, phonebook[key]))
def main():
  while True:
    print("\n--- MENU DANH BẠ ĐIỆN THOẠI ---")
    print("1. Thêm mục")
    print("2. Tìm kiếm")
    print("3. Xóa mục")
    print("4. Sửa mục")
    print("5. Thoát")
    choice = int(input("Chọn một tùy chọn (1/2/3/4/5): "))
    match choice:
      case 1:
        add()
        print_phonebook()
        continue
      case 2:
        search()
        continue
      case 3:
        delete()
        print_phonebook()
        continue
      case 4:
        edit()
        print_phonebook()
        continue
      case 5:
        break
      case _:
        print("Lựa chọn không hợp lệ")
if __name__ == '__main__':
  main()