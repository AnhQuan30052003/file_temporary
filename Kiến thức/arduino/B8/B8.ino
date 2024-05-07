// Xây dựng sketch với 3 led xanh đỏ vàng. yêu cầu: led xanh sáng/tắt với mỗi 3s, đền đỏ sáng khi có gọi ngắt 0, đèn vàng sáng khi gọi ngắt 1.
const int pinGreen = 13, pinRed = 11, pinYellow = 9;
const int btnRed = 3, btnYellow = 2;
const int timeDelay = 1500;

void setup() {
  Serial.begin(9600);
  pinMode(pinGreen, OUTPUT);
  pinMode(pinRed, OUTPUT);
  pinMode(pinYellow, OUTPUT);
  pinMode(btnRed, INPUT_PULLUP);
  pinMode(btnYellow, INPUT_PULLUP);
  attachInterrupt(digitalPinToInterrupt(btnRed), statusRed, FALLING);
  attachInterrupt(digitalPinToInterrupt(btnYellow), statusYellow, FALLING);
}

void loop() {
  digitalWrite(pinGreen, HIGH);
  delay(timeDelay);
  digitalWrite(pinGreen, LOW);
  delay(timeDelay);
}

void statusRed() {
  Serial.println("Da click !");
  digitalWrite(pinRed, !digitalRead(pinRed));
}

void statusYellow() {
  digitalWrite(pinYellow, !digitalRead(pinYellow));
}