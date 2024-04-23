// Xây dựng sketch máy tính CASIO với yêu cầu:
// - Cho phép người dùng nhập vào 2 số tự nhiên a, b
// - Nhập vào phép tính với: A = +; B = -; C = *; D = / 
// - LCD: dòng 01 hiển thị số a, b cùng phép tính vừa nhập, vd: 5 + 7 dòng 02 hiển thị kết quả phép tính, vd: = 12
// - Phím thăng (#) dùng để xóa tất cả các hiển trị trên màn hình LCD
// - Phía sao (*) dùng để hiển thị kết quả sau khi nhập xong a, b và phép toán.

#include<LiquidCrystal_I2C.h>
#include <Keypad.h>

LiquidCrystal_I2C lcd(32, 16, 2);

const byte ROWS = 4, COLS = 4; 
byte rowPins[ROWS] = {9, 8, 7, 6}; 
byte colPins[COLS] = {5, 4, 3, 2}; 

const char hexaKeys[ROWS][COLS] = {
  {'1', '2', '3', 'A'},
  {'4', '5', '6', 'B'},
  {'7', '8', '9', 'C'},
  {'*', '0', '#', 'D'}
};

Keypad customKeypad = Keypad(makeKeymap(hexaKeys), rowPins, colPins, ROWS, COLS);

int _temp = 0, cursorCol = 0;
char temp[10] = {};

int a, b, result;
char calc;

void setup() {
  lcd.init();
  Serial.begin(9600);
  lcd.setCursor(0, 0);
  lcd.print("Input...");
  delay(500);
  lcd.clear();
}
  
void loop(){
  char keyPress = customKeypad.getKey();
  if (keyPress){
    if (keyPress >= '1' && keyPress <= '9') {
      temp[_temp] = keyPress;
      _temp += 1;

      lcd.setCursor(cursorCol, 0);
      lcd.print(keyPress);
      cursorCol += 1;
    }
    else if (keyPress >= 'A' && keyPress <= 'D') {
      a = atoi(temp);      
      clearTemp();

      switch(keyPress) {
        case 'B': { calc = '-'; break; }
        case 'C': { calc = '*'; break; }
        case 'D': { calc = '/'; break; }
        default: calc = '+';
      }

      lcd.setCursor(cursorCol, 0);
      lcd.print(calc);
      cursorCol += 1;

      Serial.print("a = ");
      Serial.println(a);
    }
    else if (keyPress == '#') {
      lcd.clear();
      clearTemp();
      cursorCol = 0;
    }
    else if (keyPress == '*') {
      b = atoi(temp);

      switch(calc) {
        case '-': { result = a - b; break; }
        case '*': { result = a * b; break; }
        case '/': { result = a / b; break; }
        default: result = a + b;
      }
      lcd.setCursor(0, 1);
      lcd.print(result);

      Serial.print("b = ");
      Serial.println(b);

      Serial.print("Ket qua: ");
      Serial.println(result);
    }
  }
}

void clearTemp() {
  for (int i = 0; i < _temp; i++) {
    temp[i] = ' ';
  }
  _temp = 0;
}