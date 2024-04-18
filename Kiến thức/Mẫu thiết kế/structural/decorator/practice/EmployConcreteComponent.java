package structural.decorator.practice;

import java.util.Date;

public class EmployConcreteComponent implements EmployeeComponent{
    private String name;

    public EmployConcreteComponent(String name) {
        this.name = name;
    }

    @Override
    public String getName() {
        return name;
    }

    @Override
    public void join(Date joinDate) {
        System.out.println(this.getName() + " joined on " + formatDate(joinDate));
    }

    @Override
    public void terminate(Date terminateDate) {
        System.out.println(this.getName() + " terminated on " + formatDate(terminateDate));
    }

    @Override
    public void doTask() {
        System.out.println("Concac");
    }
}
