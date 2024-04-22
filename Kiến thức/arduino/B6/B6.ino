const int red = 2, green = 4;
unsigned int long timeRed = 0, timeGreen = 0;

void setup()
{
  pinMode(red, OUTPUT);
  pinMode(green, OUTPUT);
  Serial.begin(9600);
}

void loop()
{
  if (timeRed == 0 && timeGreen == 0) {
    digitalWrite(red, HIGH);
    digitalWrite(green, HIGH);
  }

  if (millis() - timeRed >= 500) {
    digitalWrite(red, !digitalRead(red));
    timeRed = millis();
  }
  

  if (millis() - timeGreen >= 1000) {
    digitalWrite(green, !digitalRead(green));
    timeGreen = millis();
  }

  Serial.println(millis());
}
