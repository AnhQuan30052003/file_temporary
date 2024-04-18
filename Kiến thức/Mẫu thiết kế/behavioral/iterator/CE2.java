package behavioral.iterator;

import behavioral.iterator.ce1.MonHoc;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;
import java.util.function.Consumer;

public class CE2 {
    public static void inDS(Iterator<MonHoc> iterator){
        while (iterator.hasNext()) {
            MonHoc m = iterator.next();
            System.out.println("Ten mon hoc: "+m.getName());
            System.out.println("So TC: "+m.getSoTC()+"\n");
        }
    }
    public static void inDS2(Iterator<MonHoc> iterator, Consumer<MonHoc> consumer){
        while (iterator.hasNext()) {
            MonHoc m = iterator.next();
            consumer.accept(m);
        }

    }
    public static void inDS3(Iterator<MonHoc> iterator, Consumer<MonHoc> consumer){
        while (iterator.hasNext()) {
            iterator.forEachRemaining(consumer);
        }

    }

    public static void main(String[] args) {
        List<MonHoc> list = new ArrayList<>();
        list.add(new MonHoc("Vũ ngu",3,500));
        list.add(new MonHoc("Ma thuật",3,100));
        list.add(new MonHoc("Trọng ngu",3,100));
        list.add(new MonHoc("131231231",3,100));
        Iterator<MonHoc> iterator =list.iterator();
        inDS(iterator);
        inDS2(iterator, new Consumer<MonHoc>() {
            @Override
            public void accept(MonHoc monHoc) {
                System.out.println("Ten mon hoc: "+monHoc.getName());
                System.out.println("So TC: "+monHoc.getSoTC()+"\n");
            }
        });
        inDS3(iterator, new Consumer<MonHoc>() {
            @Override
            public void accept(MonHoc monHoc) {
                System.out.println("Ten mon hoc: "+monHoc.getName());
                System.out.println("So TC: "+monHoc.getSoTC()+"\n");
            }
        });

       /* ArrayCollection63 collection63 = new ArrayCollection63();
        Iz\+terator63 iterator63 = collection63.createIterator();
        whil e (!iterator63.isDone()){
            System.out.println(iterator63.next());
        }*/
    }
}
