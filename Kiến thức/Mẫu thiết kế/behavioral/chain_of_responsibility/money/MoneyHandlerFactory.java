package behavioral.chain_of_responsibility.money;

//cau B
public class MoneyHandlerFactory implements IMoneyHandlerFactory{
    @Override
    public IMoneyHandler create(int maxDenom) {
        IMoneyHandler money500 = new MoneyHandler(500);
        IMoneyHandler money100 = new MoneyHandler(100);
        IMoneyHandler money50 = new MoneyHandler(50);
        IMoneyHandler money10 = new MoneyHandler(10);
        IMoneyHandler money1 = new MoneyHandler(1);

        money500.capCaoHon(money100);
        money100.capCaoHon(money50);
        money50.capCaoHon(money10);
        money10.capCaoHon(money1);


        /*if (maxDenom >= 500) {
            money500.capCaoHon(money100);
            money100.capCaoHon(money50);
        }
        if (maxDenom >= 100) {
            money100.capCaoHon(money50);
            money50.capCaoHon(money10);
        }
        if (maxDenom >= 50) {
            money50.capCaoHon(money10);
            money10.capCaoHon(money1);
        }
        if (maxDenom >= 10) {
            money10.capCaoHon(money1);
        }
*/
        switch (maxDenom){
            case 500: return money500;
            case 100: return money100;
            case 50:return money50;
            case 10:return money10;
        }
      /*  if (maxDenom >= 500) return money500;
        if (maxDenom >= 100) return money100;
        if (maxDenom >= 50) return money50;
        if (maxDenom >= 10) return money10;
        return money1;*/
        return money1;
    }
}
