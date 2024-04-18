package behavioral.stratery.TinhToan;

import behavioral.stratery.duck_example.Duck;
import behavioral.stratery.duck_example.VitQuay;

public class Main {
    public static void main(String[] args) {
        Context math = new Context();
        math.setTinhToan(new Cong());
        System.out.println(math.tinh(5f,6f));
        math.setTinhToan(new Nhan());
        System.out.println(math.tinh(5f,6f));
    }
}
