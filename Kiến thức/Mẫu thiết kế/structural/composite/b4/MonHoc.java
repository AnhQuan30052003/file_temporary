package structural.composite.b4;

public class MonHoc extends KeHoachHocTap {
    String name;
    int soTC;
    int hocPhi;

    public MonHoc(String name, int soTC, int hocPhi) {
        this.name=name;
        this.soTC = soTC;
        this.hocPhi = hocPhi;
    }

    @Override
    public void add(KeHoachHocTap k) {

    }

    @Override
    public void remove(KeHoachHocTap k) {

    }

    @Override
    public int getHocPhi() {
        return soTC*hocPhi;
    }

    @Override
    public int getSoTC() {
        return soTC;
    }

    @Override
    public void print() {
        System.out.println(name);
    }

}
