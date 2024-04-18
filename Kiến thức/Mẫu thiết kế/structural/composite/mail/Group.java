package structural.composite.mail;

import java.util.ArrayList;
import java.util.List;

public class Group extends Profile {
    private String departmentName;
    List<Profile> companies =new ArrayList<>();
    public Group(String departmentName) {
        this.departmentName = departmentName;
    }

    @Override
    public void add(Profile member) {
        companies.add(member);
    }

    @Override
    public void remove(Profile member) {
        companies.remove(member);
    }

    @Override
    public void sendEmail(String prefix,String subject, boolean isEnd) {
        System.out.println(prefix + (isEnd ? "└── " : "├── ") + "Group: " + departmentName);
        // nếu mà có hơn 2 nút thì sẽ in "    " : "│   "
        for (int i = 0; i < companies.size() - 1; i++) {
            companies.get(i).sendEmail(prefix + (isEnd ? "    " : "│   "), subject,false);
        }
        if (companies.size() > 0) {
            companies.get(companies.size() - 1).sendEmail(prefix + (isEnd ?"    " : "│   "),subject, true);
        }

    }

}
