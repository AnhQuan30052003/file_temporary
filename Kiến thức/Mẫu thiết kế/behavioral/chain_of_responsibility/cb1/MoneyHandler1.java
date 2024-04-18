package behavioral.chain_of_responsibility.cb1;

public class MoneyHandler1 implements IMoneyHandler{
    int sotien;

    public MoneyHandler1(int sotien) {
        this.sotien = sotien;
    }

    @Override
    public IMoneyHandler capCaoHon(IMoneyHandler moneyHandler) {
        return null;
    }

    @Override
    public void handleMoney (int amount,int denomination) {
        if (amount >= sotien) {
            System.out.println(amount + " tờ mệnh giá 1");
        }
    }

    @Override
    public int getSotien() {
        return sotien;
    }
}
