package behavioral.chain_of_responsibility.money;

//CauA
public interface IMoneyHandler {
    void capCaoHon(IMoneyHandler handler);
    void handleRequest(int amount);
}
