package behavioral.chain_of_responsibility.veso;

public class Main {
    public static void main(String[] args) {
        IDoVeSo giaiDacBiet = new GiaiThuong("Giải đặc biệt",new String[]{"848688"});
        IDoVeSo giaiNhat = new GiaiThuong("Giải nhất",new String[]{"81171"});
        IDoVeSo giaiNhi = new GiaiThuong("Giải nhì",new String[]{"24984"});
        IDoVeSo giaiBa = new GiaiThuong("Giải ba",new String[]{"69030","65815"});
        IDoVeSo giaiTu = new GiaiThuong("Giải tư",new String[]{"03184", "60843", "05923", "11367", "02679", "18854", "79640"
        });
        IDoVeSo giaiNam = new GiaiThuong("Giải năm",new String[]{"1552"});
        IDoVeSo giaiSau = new GiaiThuong("Giải sáu",new String[]{"7223", "9213", "3475"});

        IDoVeSo giaiBay = new GiaiThuong("Giải bảy",new String[]{"497"});
        IDoVeSo giaiTam = new GiaiThuong("Giải tám",new String[]{"60"});
        IDoVeSo trat = new Trat();
        giaiDacBiet.SetSuccessor(giaiNhat)
                .SetSuccessor(giaiNhi)
                .SetSuccessor(giaiBa)
                .SetSuccessor(giaiTu)
                .SetSuccessor(giaiNam)
                .SetSuccessor(giaiSau)
                .SetSuccessor(giaiBay)
                .SetSuccessor(giaiTam)
                .SetSuccessor(trat);
        System.out.println(giaiDacBiet.result("603184"));
    }
}
