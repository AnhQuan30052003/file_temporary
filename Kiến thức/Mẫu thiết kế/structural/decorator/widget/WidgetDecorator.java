package structural.decorator.widget;

public abstract class WidgetDecorator extends Widget{
    Widget child;

    public WidgetDecorator(Widget child) {
        this.child = child;
    }
}
