// 1. Xây dựng sketch điều khiển đèn led xanh/đỏ đang nối trực tiếp với Board Slaver thông qua cổng Serial từ board Master với yêu cầu.
// Master được nối với cảm biến nhiệt TMP35, nếu nhiệt độ > 35 gửi lệnh điều khiển bật xanh đỏ ngược lại đèn xanh
// 2. Cho phép người dùng nhập hai số a, b từ Serial Monitor, thực hiện phép tính + và in ra kết quả trên màn hình Serial IDE.

// Master //
const int pinTMP = A0;

void setup() {
  Serial.begin(9600);
}

void loop() {
  sendTemperature();
  // sumTwoNumbers();
}

// Gửi nhiệt đồ qua Slaver
void sendTemperature() {
  int valueTMP = analogRead(pinTMP);
  Serial.write(valueTMP);
}

// Nhập hai số và tính tổng
// void sumTwoNumbers() {
//   int a, b;
//   Serial.println("----------------------");
//   Serial.println("Nhap a: ");
//   while(Serial.available() == 0) {}
//   a = Serial.parseInt();

//   Serial.println("Nhap b: ");
//   while(Serial.available() == 0) {}
//   b = Serial.parseInt();

//   Serial.print("Ta co: ");
//   Serial.print(a);
//   Serial.print(" + ");
//   Serial.print(b);
//   Serial.print(" = ");
//   Serial.print(a + b);
// }

