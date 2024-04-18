package behavioral.chain_of_responsibility.money;

//CauB
public interface IMoneyHandlerFactory {
    IMoneyHandler create(int maxDenom);

}
