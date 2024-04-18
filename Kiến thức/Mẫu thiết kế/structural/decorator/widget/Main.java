package structural.decorator.widget;

public class Main {
    public static void main(String[] args) {
        Text text = new Text("Vu ngu");
        Widget center = new Center(text);
        Widget button = new Button(center);
        button.show();
    }
}
