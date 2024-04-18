package structural.decorator.widget;

public class Button extends WidgetDecorator{
    public Button(Widget child) {
        super(child);
    }

    @Override
    public void show() {
        System.out.println("<Button>");
        child.show();
        System.out.println("</Button>");
    }
}
