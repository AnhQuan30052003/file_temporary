package creational.singleton.a4;


public class User {
    String name;
    Election s = Election.getInstance();

    public User(String name) {
        this.name = name;
    }

    public void vote(Candidate c){
        s.vote(c,name);
    }
    public void getvoted(){
        System.out.println("số lần vote của "+Candidate.BIDEN+" : "+s.biden);
        System.out.println("số lần vote của "+Candidate.TRUMP+" : "+s.trump);
    }
}
