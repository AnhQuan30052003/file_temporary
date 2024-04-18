package creational.factory.pizzaexample.PizzaProduct.ChicagoStylePizza;


import creational.factory.pizzaexample.PizzaProduct.Pizza;

/**
 * @author Nitin
 */
public class ChicagoStyleVeggiePizza extends Pizza {

    public ChicagoStyleVeggiePizza() {
        name = "Chicago style Veggie Pizza";
        dough = "thick Crust";
        sauce = "Maggie sauce";
        toppings.add("Shredded mozzarella");
        toppings.add("cheese");
        toppings.add("onion");
        toppings.add("big mushrooms");
    }
}
