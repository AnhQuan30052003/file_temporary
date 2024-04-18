package bt_java.a6;


import java.util.ArrayList;
import java.util.Dictionary;
import java.util.Hashtable;
import java.util.List;

public class DataAccess {
    private static Dictionary<String,DataAccess> dataAccessObject = new Hashtable<>();
    List<SanPham> list = new ArrayList<>();

    protected DataAccess() {
    }

    // Methods
    public static DataAccess Instance(String tag) {
        if (dataAccessObject.get(tag) == null){
            DataAccess d =new DataAccess();
            dataAccessObject.put(tag,d);
        }
        return dataAccessObject.get(tag);
    }
    public void themSanPham(SanPham sp) {
        list.add(sp);
    }

    public void xoaSanPham(String maSanPham) {
        list.removeIf(sp -> sp.getMaSanPham().equals(maSanPham));
    }

    public void capNhatSanPham(SanPham spMoi) {
        for (int i = 0; i < list.size(); i++) {
            if (list.get(i).getMaSanPham().equals(spMoi.getMaSanPham())) {
                list.set(i, spMoi);
                break;
            }
        }
    }
    public void print(){
        for(SanPham i:list){
            System.out.println(i.toString());
        }
    }
}
