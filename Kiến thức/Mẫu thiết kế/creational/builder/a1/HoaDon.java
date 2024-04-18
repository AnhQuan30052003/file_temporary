package creational.builder.a1;

import java.util.ArrayList;
import java.util.List;

public class HoaDon {
    private HoaDonHeader hoaDonHeader;
    List<CTHD> ct ;
    public HoaDon(Builder builder){
        this.hoaDonHeader=builder.hoaDonHeader;
        this.ct=builder.ct;
    }

    @Override
    public String toString() {
        return "HoaDon{" +
                "hoaDonHeader=" + hoaDonHeader +
                ", ct=" + ct +
                '}';
    }



    public static class Builder{
        private HoaDonHeader hoaDonHeader;
        List<CTHD> ct = new ArrayList<>();
        Builder setheader(String m,String d, String t){
            hoaDonHeader = new HoaDonHeader(m,t,d);
            return this;
        }
        Builder addCTHD(String sp,int sl,int dg,float ck){
            ct.add(new CTHD(sp,sl,dg,ck));
            return this;
        }
        public HoaDon build(){
            return new HoaDon(this);
        }

    }
}
