package structural.adapter.example;

public class Main {
    public static void main(String[] args) {
        EuropeanSocket europeanSocket = new EuropeanSocketImpl();
        AmericanSocket americanSocket = new AmericanSocket();

        // europeanSocket.provideElectricity(); // Không hoạt động với ổ cắm Mỹ

        // Sử dụng adapter để chuyển đổi
        Adapter adapter = new Adapter(americanSocket);
        adapter.provideElectricity(); // Sử dụng ổ cắm châu Âu thông qua adapter
    }

}

