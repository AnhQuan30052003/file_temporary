package behavioral.observer.tigia;

import java.util.ArrayList;
import java.util.List;

public class TiGia {
    List<ITheoDoiTiGia> observers = new ArrayList<>();
    public void attach(ITheoDoiTiGia observer){
        if(!observers.contains(observer))
            observers.add(observer);
    }

    public void detach(ITheoDoiTiGia observer){
        if(observers.contains(observer))
            observers.remove(observer);
    }
    public void notifyTiGia(float delta){
        for(var obs:observers){
            obs.Update(delta);
        }
    }
    public static interface ITheoDoiTiGia{
        void Update(float delta);
    }
}
