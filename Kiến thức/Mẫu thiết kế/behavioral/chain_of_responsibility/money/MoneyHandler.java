package behavioral.chain_of_responsibility.money;

//Cau A
public class MoneyHandler implements IMoneyHandler{
    private IMoneyHandler nextHandler;
    private int denom;

    public MoneyHandler(int denom) {
        this.denom = denom;
    }

    @Override
    public void capCaoHon(IMoneyHandler handler) {
        this.nextHandler = handler;
    }

    @Override
    public void handleRequest(int amount) {
        if(amount >= denom) {
            int num = amount / denom;
            int remainder = amount % denom;
            System.out.println(num + " tờ mệnh giá " + denom);
            if(remainder > 0) {
                nextHandler.handleRequest(remainder);
            }
        } else {
            nextHandler.handleRequest(amount);
        }
    }
}
