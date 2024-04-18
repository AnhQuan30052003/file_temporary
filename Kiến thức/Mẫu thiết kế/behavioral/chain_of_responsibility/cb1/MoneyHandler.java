package behavioral.chain_of_responsibility.cb1;

public class MoneyHandler implements IMoneyHandler{

    IMoneyHandler capCaoHon;
    int sotien;

    public MoneyHandler(int sotien) {
        this.sotien = sotien;
    }

    public IMoneyHandler getCapCaoHon() {
        return capCaoHon;
    }
    @Override
    public int getSotien() {
        return sotien;
    }


    @Override
    public IMoneyHandler capCaoHon(IMoneyHandler moneyHandler) {
        capCaoHon=moneyHandler;
        return moneyHandler;
    }

    @Override
    public void handleMoney(int amount, int denomination) {
        if (denomination == sotien) {
            if (amount >= sotien) {
                int count = amount / sotien;
                int remaining = amount % sotien;
                System.out.println(count + " tờ mệnh giá " + sotien);
                if (remaining > 0) {
                    denomination=capCaoHon.getSotien();
                    capCaoHon.handleMoney(remaining, denomination);
                }
            } else {
                capCaoHon.handleMoney(amount, denomination);
            }
        } else {
            capCaoHon.handleMoney(amount, denomination);
        }
    }
}
