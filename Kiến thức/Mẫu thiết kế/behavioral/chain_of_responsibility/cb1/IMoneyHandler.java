package behavioral.chain_of_responsibility.cb1;

public interface IMoneyHandler {
    IMoneyHandler capCaoHon (IMoneyHandler moneyHandler);
    void handleMoney(int amount,int denomination);
    int getSotien();
}
