// Slaver //

const int ledRed = 5, ledGreen = 6;

void setup() {
  Serial.begin(9600);
  pinMode(ledRed, OUTPUT);
  pinMode(ledGreen, OUTPUT);
}

void loop() {}

void serialEvent() {
  int getTMP = Serial.parseInt();
  digitalWrite(ledGreen, HIGH);
  if (getTMP > 35) {
    digitalWrite(ledRed, HIGH);
  }
  else {
    digitalWrite(ledRed, LOW);
  }
}