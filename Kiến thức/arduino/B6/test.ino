const int led = 2, button = 15;
bool ledRight = false;

void setup() {
  pinMode(led, OUTPUT);
  pinMode(button,INPUT_PULLUP);
}

void loop() {
  if (digitalRead(button) == LOW) {
    digitalWrite(led, !digitalRead(led));
  }
  delay(500);
}