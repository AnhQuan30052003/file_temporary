package structural.decorator.expression;

public class Nhan extends BieuThucDecorator{
    float toanHang;

    public Nhan(BieuThuc bieuThuc,float toanHang) {
        super(bieuThuc);
        this.toanHang=toanHang;
    }

    @Override
    public float giaTri() {
        return bieuThuc.giaTri()*toanHang;
    }

    @Override
    public String bieuThuc() {
        return super.bieuThuc()+" * "+this.toanHang;
    }
}
