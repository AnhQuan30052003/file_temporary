package bt_java.bt5;


import java.util.ArrayList;
import java.util.List;

public class QLDS implements IQLDS{
    List<CaNhan> dsCaNhan = new ArrayList<>();

    @Override
    public int them(CaNhan p) {
        dsCaNhan.add(p);
        return 1;
    }

    @Override
    public int xoa(String ten) {
        for (int i =0;i<dsCaNhan.size();i++){
            if(dsCaNhan.get(i).getHoTen().equalsIgnoreCase(ten)){
                dsCaNhan.remove(i);
                return 1;
            }
        }
        return 0;
    }

    @Override
    public void inDs() {

    }
}
