package com.example.dangkitt;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import java.util.List;

public class KhachHangAdapter extends BaseAdapter {

    private Context context;
    private int layout;
    private List<KhachHang> KhachHangList;

    public KhachHangAdapter(Context context, int layout, List<KhachHang> khachHangList) {
        this.context = context;
        this.layout = layout;
        this.KhachHangList = khachHangList;
    }

    @Override
    public int getCount() {
        return KhachHangList.size();
    }

    @Override
    public Object getItem(int position) {
        return null;
    }

    @Override
    public long getItemId(int position) {
        return 0;
    }

    private class Viewholder{
        TextView txtTenKH, txtDienThoai, txtDiaChi;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        Viewholder holder;
        //anh xa
        if (convertView == null){
            holder = new Viewholder();
            LayoutInflater inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            convertView = inflater.inflate(layout, null);
            holder.txtTenKH = (TextView) convertView.findViewById(R.id.txtTenKHCustom);
            holder.txtDienThoai = (TextView) convertView.findViewById(R.id.txtDienThoaiCustom);
            holder.txtDiaChi = (TextView) convertView.findViewById(R.id.txtDiaChiCustom);
            convertView.setTag(holder);
        } else {
            holder = (Viewholder) convertView.getTag();
        }

        KhachHang khachHang = KhachHangList.get(position);
        //do du lieu ra
        holder.txtTenKH.setText(KhachHang.getTenKH());
        holder.txtDienThoai.setText(KhachHang.getDienThoai());
        holder.txtDiaChi.setText(KhachHang.getDiaChi());

        return convertView;
    }
}
