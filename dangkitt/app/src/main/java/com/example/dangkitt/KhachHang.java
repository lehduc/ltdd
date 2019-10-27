package com.example.dangkitt;

import java.lang.reflect.Constructor;

public class KhachHang {
    private int MaKH;
    private String TenKH;
    private String DienThoai;
    private String Email;
    private String DiaChi;
    private String GioiTinh;

    public KhachHang(int maKH, String teKH, String maTKhau, String dienThoai, String email, String diaChi, String gioiTinh) {
    }

    public KhachHang(int maKH, String tenKH, String dienThoai, String email, String diaChi, String gioiTinh) {
        MaKH = maKH;
        TenKH = tenKH;
        DienThoai = dienThoai;
        Email = email;
        DiaChi = diaChi;
        GioiTinh = gioiTinh;
    }

    public int getMaKH() {
        return MaKH;
    }

    public void setMaKH(int maKH) {
        MaKH = maKH;
    }

    public String getTenKH() {
        return TenKH;
    }

    public void setTenKH(String tenKH) {
        TenKH = tenKH;
    }

    public String getDienThoai() {
        return DienThoai;
    }

    public void setDienThoai(String dienThoai) {
        DienThoai = dienThoai;
    }

    public String getEmail() {
        return Email;
    }

    public void setEmail(String email) {
        Email = email;
    }

    public String getDiaChi() {
        return DiaChi;
    }

    public void setDiaChi(String diaChi) {
        DiaChi = diaChi;
    }

    public String getGioiTinh() {
        return GioiTinh;
    }

    public void setGioiTinh(String gioiTinh) {
        GioiTinh = gioiTinh;
    }

}
