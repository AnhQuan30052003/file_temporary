package creational.factory.pizzaexample.PizzaProduct.ChicagoStylePizza;


import creational.factory.pizzaexample.PizzaProduct.Pizza;

/**
 * @author Nitin
 */
public class ChicagoStyleClamPizza extends Pizza {

    public ChicagoStyleClamPizza() {
        name = "Chicago style Clam Pizza";
        dough = "Thick crust";
        sauce = "White garlic sauce";
        toppings.add("Clams");
        toppings.add("cheese");
    }
}
