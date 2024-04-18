package behavioral.template.entityDB_t;

public class SinhVienDB extends EntityDB<SinhVien>{
    @Override
    protected int getKey(SinhVien sv) {
        return sv.getId();
    }
}
