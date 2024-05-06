const int pinRed = 12, pinGreen = 8, pinButton = 2;

void setup() {
  Serial.begin(9600);
  pinMode(pinRed, OUTPUT);
  pinMode(pinGreen, OUTPUT);
  pinMode(pinButton, INPUT_PULLUP);
  attachInterrupt(digitalPinToInterrupt(pinButton), xanh, CHANGE);
}

void loop() {
  Serial.println(digitalRead(pinButton));
  digitalWrite(pinRed, HIGH);
  delay(500);
  digitalWrite(pinRed, LOW);
  delay(500);
}

void xanh() {
  digitalWrite(pinGreen, !digitalRead(pinGreen));
}
