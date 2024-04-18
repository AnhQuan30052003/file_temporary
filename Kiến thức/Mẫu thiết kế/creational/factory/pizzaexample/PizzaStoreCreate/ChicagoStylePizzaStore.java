package creational.factory.pizzaexample.PizzaStoreCreate;


import creational.factory.pizzaexample.PizzaProduct.ChicagoStylePizza.ChicagoStyleCheesePizza;
import creational.factory.pizzaexample.PizzaProduct.ChicagoStylePizza.ChicagoStyleClamPizza;
import creational.factory.pizzaexample.PizzaProduct.ChicagoStylePizza.ChicagoStyleVeggiePizza;
import creational.factory.pizzaexample.PizzaProduct.Pizza;

/**
 * @author Nitin
 */
public class ChicagoStylePizzaStore extends PizzaStore{

    @Override
    Pizza createPizza(String type) {
        if (type.equals("cheese")) {
            return new ChicagoStyleCheesePizza();
        } else if (type.equals("clam")) {
            return new ChicagoStyleClamPizza();
        } else if (type.equals("veggie")) {
            return new ChicagoStyleVeggiePizza();
        } else {
            return null;
        }
    }

}
