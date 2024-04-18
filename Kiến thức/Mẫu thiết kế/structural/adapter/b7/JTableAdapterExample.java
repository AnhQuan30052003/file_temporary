package structural.adapter.b7;

import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import java.util.ArrayList;

// Định nghĩa giao diện IDataToTableModelAdapter
interface IDataToTableModelAdapter {
    DefaultTableModel adaptDataToTableModel(ArrayList<String> data);
}

// Lớp Adapter để chuyển đổi ArrayList thành DefaultTableModel
class DataToTableModelAdapter implements IDataToTableModelAdapter {
    @Override
    public DefaultTableModel adaptDataToTableModel(ArrayList<String> data) {
        // Tạo một DefaultTableModel
        DefaultTableModel model = new DefaultTableModel();

        // Thêm cột vào model
        model.addColumn("Dữ liệu");

        // Thêm dữ liệu từ ArrayList vào model
        for (String item : data) {
            model.addRow(new Object[]{item});
        }

        return model;
    }
}

public class JTableAdapterExample {
    public static void main(String[] args) {
        // Dữ liệu mẫu (ArrayList)
        ArrayList<String> data = new ArrayList<>();
        data.add("Dòng 1");
        data.add("Dòng 2");
        data.add("Dòng 3");

        // Tạo Adapter
        IDataToTableModelAdapter adapter = new DataToTableModelAdapter();

        // Sử dụng Adapter để chuyển đổi dữ liệu thành DefaultTableModel
        DefaultTableModel tableModel = adapter.adaptDataToTableModel(data);

        // Tạo JTable và thiết lập model
        JTable table = new JTable(tableModel);

        // Tạo một JFrame để hiển thị JTable
        JFrame frame = new JFrame("JTable Adapter Example");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.add(new JScrollPane(table));
        frame.pack();
        frame.setVisible(true);
    }
}
