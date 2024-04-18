package bt_java.bt2;

import bt_java.bt1.NhanVien;

public class brumbrum {
    public static void main(String[] args) {
        QuanLyNhanVien NV = new QuanLyNhanVien();
        //hanVien nv1 = new NhanVien("Trọng ngu",12.3f,"gầm cầu",20000,500);
        NV.them(new NhanVien("Trọng ngu", 12.3f, "gầm cầu", 20000, 500));
    }
}
