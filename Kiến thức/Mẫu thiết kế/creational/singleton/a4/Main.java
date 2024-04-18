package creational.singleton.a4;

public class Main {
    public static void main(String[] args) {
        User vu=new User("vu");
        User vu1=new User("vu vu");
        User vu2=new User("vu vu vu");
        vu.vote(Candidate.BIDEN);
        vu.vote(Candidate.TRUMP);
        /*vu1.vote(Candidate.TRUMP);
        vu2.vote(Candidate.BIDEN);*/
        vu.getvoted();
    }
}
