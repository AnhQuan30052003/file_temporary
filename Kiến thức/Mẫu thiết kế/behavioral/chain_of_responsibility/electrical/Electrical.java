package behavioral.chain_of_responsibility.electrical;

public class Electrical implements IElectrical{
    int kWhStart,kWhEnd;
    float gia;
    IElectrical keTiep;

    public Electrical(int kWhStart, int kWhEnd, float gia) {
        this.kWhStart = kWhStart;
        this.kWhEnd = kWhEnd;
        this.gia = gia;
    }

    @Override
    public IElectrical capCaoHon(IElectrical electrical) {
        keTiep=electrical;
        return keTiep;
    }

    @Override
    public float xuLyDien(int soKW) {
        if(kWhEnd>=soKW){
            return (float)(soKW-kWhStart)*gia;
        }else {
            return (float) (kWhEnd-kWhStart)*gia + keTiep.xuLyDien(soKW);
        }
    }
}
