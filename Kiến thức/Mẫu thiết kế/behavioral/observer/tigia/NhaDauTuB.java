package behavioral.observer.tigia;

public class NhaDauTuB implements TiGia.ITheoDoiTiGia {
    TiGia tiGia;

    public NhaDauTuB(TiGia tiGia) {
        this.tiGia = tiGia;
        tiGia.attach(this);
    }
    public void huyDangKy(){
        this.tiGia.detach(this);
    }

    @Override
    public void Update(float delta) {
        if(delta>0)
            System.out.println("Nha dau tu B: Mua vao");
        else
            System.out.println("Nha dau tu B: Ban ra");
    }
}
