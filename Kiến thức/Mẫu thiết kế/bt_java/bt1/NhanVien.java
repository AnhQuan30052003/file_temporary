package bt_java.bt1;

public class NhanVien {
    private String ten,diachi;
    private float tuoi;
    private double luong;
    private int giolam;

    public NhanVien() {
        ten="vungu";
        tuoi= 18.5F;
        diachi="thung rac";
        luong=5000;
        giolam=10;
    }
    public NhanVien(String ten, float tuoi, String diachi, double luong, int giolam) {
        this.ten = ten;
        this.tuoi = tuoi;
        this.diachi = diachi;
        this.luong = luong;
        this.giolam = giolam;
    }

    public String getTen() {
        return ten;
    }

    public void setTen(String ten) {
        this.ten = ten;
    }

    public float getTuoi() {
        return tuoi;
    }

    public void setTuoi(float tuoi) {
        this.tuoi = tuoi;
    }

    public String getDiachi() {
        return diachi;
    }

    public void setDiachi(String diachi) {
        this.diachi = diachi;
    }

    public double getLuong() {
        return luong;
    }

    public void setLuong(double luong) {
        this.luong = luong;
    }

    public int getGiolam() {
        return giolam;
    }

    public void setGiolam(int giolam) {
        this.giolam = giolam;
    }
    public String getThongTin(){
        return ten+"\n"+String.valueOf(tuoi)+"\n"+diachi+"\n"+String.valueOf(luong)+"\n"+String.valueOf(giolam);
    }
    public double tinhThuong(){
        if(giolam>=200)
            return Math.round(luong*0.2f);
        else if(giolam<200&&giolam>=100)
            return Math.round(luong*0.1f);
        else
            return 0;
    }
}
