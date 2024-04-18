package structural.decorator.widget;

public class Center extends WidgetDecorator {
    public Center(Widget child) {
        super(child);
    }

    @Override
    public void show() {
        System.out.println("<center>");
        child.show();
        System.out.println("</center>");
    }
}
