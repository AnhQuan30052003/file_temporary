package behavioral.observer.streamdata;

import java.util.ArrayList;
import java.util.List;

public class Stream<T> {
    private List<Listener<T>> listeners = new ArrayList<>();

    public void addEvent(T event) {
        for (Listener<T> listener : listeners) {
            listener.onEvent(event);
        }
    }

    public void addListen(Listener<T> listener) {
        listeners.add(listener);
    }
    public void detachListen(Listener<T> listener) {
        listeners.remove(listener);
    }

}
