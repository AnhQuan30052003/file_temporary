package creational.builder.Library;

public class BookTitle {
    String tuaDe,tacGia;
    int soTrang;

    @Override
    public String toString() {
        return "tuaDe='" + tuaDe + '\'' +
                "\ntacGia='" + tacGia + '\'' +
                "\nsoTrang=" + soTrang ;
    }


    public BookTitle(String tuaDe, String tacGia, int soTrang) {
        this.tuaDe = tuaDe;
        this.tacGia = tacGia;
        this.soTrang = soTrang;
    }
}
