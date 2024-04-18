package creational.factory.pizzaexample.PizzaStoreCreate;


import creational.factory.pizzaexample.PizzaProduct.NYStylePizza.NYStyleCheesePizza;
import creational.factory.pizzaexample.PizzaProduct.NYStylePizza.NYStyleClamPizza;
import creational.factory.pizzaexample.PizzaProduct.NYStylePizza.NYStyleVeggiePizza;
import creational.factory.pizzaexample.PizzaProduct.Pizza;

/**
 * @author Nitin
 */
public class NYStylePizzaStore extends PizzaStore {

    @Override
    Pizza createPizza(String type) {
        if (type.equals("cheese")) {
            return new NYStyleCheesePizza();
        } else if (type.equals("clam")) {
            return new NYStyleClamPizza();
        } else if (type.equals("veggie")) {
            return new NYStyleVeggiePizza();
        } else {
            return null;
        }
    }
}
