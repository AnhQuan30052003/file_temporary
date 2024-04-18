package behavioral.observer.streamdata;

import java.util.ArrayList;
import java.util.List;

public class QLMH { //my data access
    private List<MonHoc> courses = new ArrayList<>();
    private Stream<MonHoc> stream;

    public QLMH(Stream<MonHoc> stream) {
        this.stream = stream;
    }

    public void addCourse(MonHoc course) {
        courses.add(course);
        stream.addEvent(course);
    }
}
