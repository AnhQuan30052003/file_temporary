package structural.adapter.example;

public class Adapter implements EuropeanSocket {
    private AmericanSocket americanSocket;

    public Adapter(AmericanSocket americanSocket) {
        this.americanSocket = americanSocket;
    }

    @Override
    public void provideElectricity() {
        System.out.println("Adapter: Chuyển đổi từ ổ cắm Mỹ sang ổ cắm châu Âu.");
        americanSocket.plugIn();
    }
}