package creational.factory.example;

public class Client {
    public static void main(String[] args) {
        BankFactory bankFactory= new BankFactory();
        Bank bank = bankFactory.getBank(BankType.TPBANK);
        System.out.println(bank.getBankName()); // TPBank
    }
}
