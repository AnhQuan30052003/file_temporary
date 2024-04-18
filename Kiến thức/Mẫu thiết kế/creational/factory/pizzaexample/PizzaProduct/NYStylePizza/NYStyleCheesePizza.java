package creational.factory.pizzaexample.PizzaProduct.NYStylePizza;


import creational.factory.pizzaexample.PizzaProduct.Pizza;

/**
 * @author nitin
 */
public class NYStyleCheesePizza extends Pizza {

    public NYStyleCheesePizza() {
        name = "NY style cheese pizza";
        dough = "thin crust dough";
        sauce = "marinara sauce";

        toppings.add("grated reggiano cheese");
    }
}
