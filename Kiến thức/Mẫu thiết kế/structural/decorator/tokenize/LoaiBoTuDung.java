package structural.decorator.tokenize;

import java.util.*;

public class LoaiBoTuDung extends TokenizeDecorator {
    private static final List<String> stopWords = new ArrayList<>(Arrays.asList("và", "hoặc", "thì", "mà", "là"));

    public LoaiBoTuDung(ITokenize iTokenize) {
        super(iTokenize);
    }

    @Override
    public String[] tokenize() {
       /* return Arrays.stream(super.tokenize(text))
                .filter(word -> !stopWords.contains(word))
                .toArray(String[]::new);*/
      /*  ArrayList<String> dsTu= new ArrayList<>();
        dsTu.addAll(Arrays.asList(super.tokenize()));
        dsTu.removeAll(Arrays.asList(stopWords));
        return dsTu.toArray(new String[0]);*/
        return Arrays.stream(super.tokenize())
                .filter(word -> !stopWords.contains(word))
                .toArray(String[]::new);
    }
}