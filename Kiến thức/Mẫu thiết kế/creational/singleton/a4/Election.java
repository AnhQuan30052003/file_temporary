package creational.singleton.a4;

import java.util.ArrayList;
import java.util.List;

public class Election {

    private static Election election;
    int trump=0,biden=0;
    List<String> votedUser = new ArrayList<>();

    protected Election() {
    }

    public static Election getInstance() {
        if (election == null)
            election = new Election();
        return election;
    }
    public void vote(Candidate c, String n){
        for(String voted : votedUser){
            if(voted.equals(n))
                return;
        }
        if(c!=null){
           if(c.equals(Candidate.BIDEN)){
               biden++;
           }
           if(c.equals(Candidate.TRUMP)){
               trump++;
           }
           votedUser.add(n);
        }
    }
}

