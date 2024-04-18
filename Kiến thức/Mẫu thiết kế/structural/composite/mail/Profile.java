package structural.composite.mail;


public abstract class Profile {
    public abstract void add(Profile member);
    public abstract void remove(Profile member);
    public abstract void sendEmail(String prefix,String subject, boolean isEnd);
}
