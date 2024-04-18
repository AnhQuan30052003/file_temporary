package behavioral.observer.topic;

public class TinTuc {
    int id;
    String noiDung;

    public TinTuc(int id, String noiDung) {
        this.id = id;
        this.noiDung = noiDung;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNoiDung() {
        return noiDung;
    }

    public void setNoiDung(String noiDung) {
        this.noiDung = noiDung;
    }
}
