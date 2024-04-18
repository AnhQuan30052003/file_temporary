package behavioral.observer.streamdata;

public interface Listener<T> {
    void onEvent(T event);
}
