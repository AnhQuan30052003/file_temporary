package structural.composite.b3;

public class Main {
    public static void main(String[] args) {
        // Tạo thư mục gốc
        Folder data = new Folder("Data (D:)", "2023-10-12");

        // Tạo các thư mục con
        Folder taiLieu = new Folder("TaiLieu", "2023-10-12");
        Folder lapTrinhJava = new Folder("Lap Trinh Java", "2023-10-12");
        Folder lapTrinhThietBiDiDong = new Folder("LapTrinhThietBiDiDong", "2023-10-12");

        // Tạo các tệp
        File creationalPattern = new File("CreationalPattern.pptx", "2023-10-12");
        File structuralPattern = new File("StructuralPattern.pptx", "2023-10-12");
        File lapTrinhJavaCoBan = new File("LapTrinhJavaCoBan.docx", "2023-10-12");
        File lapTrinhJavaNangCao = new File("LapTrinhJavaNangCao.pdf", "2023-10-12");
        File ngonNguLapTrinhC = new File("NgonNguLapTrinhC.pdf", "2023-10-12");
        File coBan = new File("CoBan.pptx", "2023-10-12");
        File nangCao = new File("NangCao.pptx", "2023-10-12");

        // Thêm các thư mục và tệp vào cây thư mục
        data.addItem(taiLieu);
        taiLieu.addItem(creationalPattern);
        taiLieu.addItem(structuralPattern);
        taiLieu.addItem(lapTrinhJava);
        lapTrinhJava.addItem(lapTrinhJavaCoBan);
        lapTrinhJava.addItem(lapTrinhJavaNangCao);
        lapTrinhJava.addItem(ngonNguLapTrinhC);
        taiLieu.addItem(lapTrinhThietBiDiDong);
        lapTrinhThietBiDiDong.addItem(coBan);
        lapTrinhThietBiDiDong.addItem(nangCao);

        // In cây thư mục
        data.getStringTreeFolder("",true);
        data.getPath();
    }
}