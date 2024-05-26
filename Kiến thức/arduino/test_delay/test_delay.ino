const int pinRed = 13;

void setup() {
  pinMode(pinRed, OUTPUT);
}

void loop() {
  digitalWrite(pinRed, HIGH);
  delayMicroseconds(1000000);
  digitalWrite(pinRed, LOW);
  delayMicroseconds(1000000);
}
