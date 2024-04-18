package behavioral.observer.topic;

public abstract class Member implements IReceiveTopic{
    Topic topic;

    public Member(Topic topic) {
        this.topic = topic;
        topic.attach(this);
    }
    public void huyDangKy(){
        topic.detach(this);
    }
}
