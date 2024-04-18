package behavioral.observer.streamdata;


public class MonHoc{
    private String tenMonHoc;
    private int soTinChi;
    private String giangVien;

    public MonHoc( String tenMonHoc, int soTinChi, String giangVien) {
        this.tenMonHoc = tenMonHoc;
        this.soTinChi = soTinChi;
        this.giangVien = giangVien;
    }

    @Override
    public String toString() {
        return "\n\ttenMonHoc = " + tenMonHoc +
                "\n\tsoTinChi = " + soTinChi +
                "\n\tgiangVien = " + giangVien;
    }
}
