// Xây dựng Sketch voiws PIR Motion sensor + Module Relay cho bóng 9V Mỗi 1s kiểm tra có người duy chuyển trong phạm vi quét của Sensor không, nếu có bật đèn.
// Nếu trạng thái đang bật đèn mỗi 5s nếu không phát hiện người di chuyển bên trong vùng quét tắt đèn

const int light = 2, PIR = 3, timeTurnOff = 5000;
unsigned int time = 0;

void setup() {
  pinMode(light, OUTPUT);
  Serial.begin(9600);
}

void loop() {
  if (digitalRead(PIR)) {
    time = millis();
    digitalWrite(light, HIGH);
  }

  if (digitalRead(light) && (millis() - time) >= timeTurnOff) {
    digitalWrite(light, LOW);
  }

  delay(1000);
}
