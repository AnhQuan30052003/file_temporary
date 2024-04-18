package behavioral.observer.tigia;

public class NhaDauTuA implements TiGia.ITheoDoiTiGia {
    TiGia tiGia;

    public NhaDauTuA(TiGia tiGia) {
        this.tiGia = tiGia;
        tiGia.attach(this);
    }
    public void huyDangKy(){
        tiGia.detach(this);
    }

    @Override
    public void Update(float delta) {
        if(delta>0)
            System.out.println("Nha dau tu A: Ban ra");
        else
            System.out.println("Nha dau tu A: Mua vao");
    }
}
