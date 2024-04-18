package structural.composite.mail;

public class Main {
    public static void main(String[] args) {
        Profile member1 = new Member("John Doe", "0912345678", "Sale", "johndoe@company.com");
        Profile member2 = new Member("Jane ngu", "0923456789", "Sale", "janedoe@company.com");
        Profile member3 = new Member("Peter Smith", "0934567890", "IT", "petersmith@company.com");
        Profile saleDepartment = new Group("Sale");
        Profile iTechnology = new Group("IT");
        Profile company = new Group("Company");
        saleDepartment.add(member1);
        saleDepartment.add(member2);
        iTechnology.add(member3);
        company.add(saleDepartment);
        company.add(iTechnology);
        company.sendEmail("","Thông báo", true);
    }
}
