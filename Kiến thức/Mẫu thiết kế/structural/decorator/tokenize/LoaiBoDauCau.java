package structural.decorator.tokenize;

import java.util.ArrayList;
import java.util.Arrays;

public class LoaiBoDauCau extends TokenizeDecorator {
    ArrayList<String> dauCau = new ArrayList<>(Arrays.asList(",", ".", ";", "'", "?", "!"));
    public LoaiBoDauCau(ITokenize iTokenize) {
        super(iTokenize);
    }
    @Override
    public String[] tokenize() {
        String[] st=super.tokenize();
/*        for (int i = 0; i < st.length; i++) {
            st[i] = st[i].replaceAll("[.,;!]", "");
        }*/
        for (int i = 0; i < st.length; i++) {
            if (st[i].length() > 0) {
                String dau = st[i].substring(st[i].length() - 1);
                if (dauCau.contains(dau)) {
                    st[i] = st[i].substring(0, st[i].length() - 1);
                }
            }
        }
        return st;
    }
}
