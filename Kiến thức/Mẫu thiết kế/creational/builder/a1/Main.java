package creational.builder.a1;

public class Main {
    public static void main(String[] args) {
        // cách 1 dùng builder
        HoaDon hd=new HoaDon.Builder()
                .setheader("sd","12/5/2032","cas")
                .addCTHD("vu",2,4000,0.6f)
                .setheader("asd","12/6/2032","vu ngu").build();
        //cách 2 không dùng builder
        //HoaDon hd = new HoaDon("sd","12/5/2032","cas");
        //hd.addCTHD("vu",2,4000,0.6f)

        System.out.println(hd.toString());
    }
}
