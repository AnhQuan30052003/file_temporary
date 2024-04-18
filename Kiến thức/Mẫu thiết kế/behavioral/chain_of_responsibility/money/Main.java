package behavioral.chain_of_responsibility.money;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Nhập mệnh giá (500, 100, 50, 10, 1): ");
        int menhGia = scanner.nextInt();
        System.out.println("Nhập số tiền ");
        int amount= scanner.nextInt();

        IMoneyHandlerFactory factory = new MoneyHandlerFactory();
        IMoneyHandler handler = factory.create(menhGia);
        handler.handleRequest(amount);
    }
}
