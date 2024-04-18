package bt_java.bt2;

import bt_java.bt1.NhanVien;

import java.util.ArrayList;
import java.util.List;

public class QuanLyNhanVien implements IQuanLy {
    List<NhanVien> nhanVienList = new ArrayList<>();
    @Override
    public void them(NhanVien nv) {
        nhanVienList.add(nv);
    }

    @Override
    public void inDS() {
        for(NhanVien nv :nhanVienList ){
            System.out.println(nv.getThongTin()+"\n");
        }
    }
}
