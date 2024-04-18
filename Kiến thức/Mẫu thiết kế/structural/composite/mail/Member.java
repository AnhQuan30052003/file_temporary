package structural.composite.mail;

public class Member extends Profile {
    private String name;
    private String phoneNumber;
    private String department;
    private String email;

    public Member(String name, String phoneNumber, String department, String email) {
        this.name = name;
        this.phoneNumber = phoneNumber;
        this.department = department;
        this.email = email;
    }

    @Override
    public void add(Profile member) {

    }

    @Override
    public void remove(Profile member) {

    }
    @Override
    public void sendEmail(String prefix,String subject, boolean isEnd) {
        System.out.println(prefix + (isEnd ? "└── " : "├── ") + "Gửi email tới "+email+ ":" +subject);
    }


}
