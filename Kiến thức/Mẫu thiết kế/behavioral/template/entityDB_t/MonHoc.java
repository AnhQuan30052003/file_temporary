package behavioral.template.entityDB_t;

public class MonHoc extends MyObject {
    private String tenMonHoc;
    private int soTinChi;
    private String giangVien;

    public MonHoc(int maMonHoc, String tenMonHoc, int soTinChi, String giangVien) {
        super(maMonHoc);
        this.tenMonHoc = tenMonHoc;
        this.soTinChi = soTinChi;
        this.giangVien = giangVien;
    }

    @Override
    public String toString() {
        return "maMonHoc = " + super.getId() +
                "\ntenMonHoc = " + tenMonHoc +
                "\nsoTinChi = " + soTinChi +
                "\ngiangVien = " + giangVien;
    }
}
