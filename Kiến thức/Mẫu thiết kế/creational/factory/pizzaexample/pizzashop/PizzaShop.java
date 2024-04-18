package creational.factory.pizzaexample.pizzashop;


import creational.factory.pizzaexample.PizzaProduct.Pizza;
import creational.factory.pizzaexample.PizzaStoreCreate.NYStylePizzaStore;
import creational.factory.pizzaexample.PizzaStoreCreate.PizzaStore;

/**
 * @author nitin
 */
public class PizzaShop {

    public static void main(String[] args) {
        PizzaStore nyStore = new NYStylePizzaStore();
        Pizza pizza = nyStore.orderPizza("cheese");
        System.out.println("You ordered a " + pizza.getName());
    }

}
