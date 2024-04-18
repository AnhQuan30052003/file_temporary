package bt_java.bt1;

public class brumbrum {
    public static void main(String[] args) {
        NhanVien vungu = new NhanVien();
        System.out.println(vungu.getThongTin());
        System.out.println("Tiền thưởng "+vungu.tinhThuong()+"\n");
        NhanVien vunguso2 = new NhanVien("Trọng ngu",12.3f,"gầm cầu",20000,500);
        System.out.println(vunguso2.getThongTin());
        System.out.println("Tiền thưởng "+vunguso2.tinhThuong());

    }
}
