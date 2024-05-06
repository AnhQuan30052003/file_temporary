// Xây dựng sketch với 3 led xanh đỏ vàng. yêu cầu: led xanh sáng/tắt với mỗi 3s, đền đỏ sáng khi có gọi ngắt 0, đèn vàng sáng khi gọi ngắt 1.
const int pinGreen = 13, pinRed = 11, pinYellow = 9;
const int btnRed = 5, btnYellow = 2;

void setup() {
  pinMode(pinGreen, OUTPUT);
  pinMode(pinRed, INPUT_PULLUP);
  pinMode(pinYellow, INPUT_PULLUP);
  attachInterrupt(digitalPinToInterrupt(pinRed), statusRed, FALLING);
  attachInterrupt(digitalPinToInterrupt(pinYellow), statusYellow, FALLING);
}

void loop() {
  digitalWrite(pinGreen, HIGH);
  delay(1500);
  digitalWrite(pinGreen, LOW);
  delay(1500);
}

void statusRed() {
  digitalWrite(pinRed, !digitalRead(pinRed));
}

void statusYellow() {
  digitalWrite(pinYellow, !digitalRead(pinYellow));
}