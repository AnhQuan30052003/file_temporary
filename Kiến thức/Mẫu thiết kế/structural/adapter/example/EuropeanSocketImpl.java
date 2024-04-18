package structural.adapter.example;

public class EuropeanSocketImpl implements EuropeanSocket {
    @Override
    public void provideElectricity() {
        System.out.println("Đang cung cấp điện từ ổ cắm châu Âu.");
    }
}