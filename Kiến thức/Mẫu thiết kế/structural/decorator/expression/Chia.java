package structural.decorator.expression;

public class Chia extends BieuThucDecorator{
    //bieu thuc decorator la noi luu tru cac bieu thuc truoc
    float toanHang;

    public Chia(BieuThuc bieuThuc,float toanHang) {
        super(bieuThuc);
        this.toanHang=toanHang;
    }

    @Override
    public float giaTri() {
        return bieuThuc.giaTri()/toanHang;
    }

    @Override
    public String bieuThuc() {
        return super.bieuThuc()+" / "+this.toanHang;
    }
}
