package com.example.restapi.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import jakarta.persistence.Column;
import java.time.LocalDateTime;
import java.util.Set;

@Entity
@Table(name = "proyek")
public class Proyek {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @Column(name = "nama_proyek", nullable = false)
    private String namaProyek;

    @Column(nullable = false)
    private String client;

    @Column(name = "tgl_mulai", nullable = false)
    private LocalDateTime tglMulai;

    @Column(name = "tgl_selesai", nullable = false)
    private LocalDateTime tglSelesai;

    @Column(name = "pimpinan_proyek", nullable = false)
    private String pimpinanProyek;

    @Column(nullable = true)
    private String keterangan;

    @OneToMany(mappedBy = "proyek")
    private Set<ProyekLokasi> proyekLokasi;

    // Constructors
    public Proyek() {}

    public Proyek(String namaProyek, String client, LocalDateTime tglMulai, LocalDateTime tglSelesai, String pimpinanProyek, String keterangan) {
        this.namaProyek = namaProyek;
        this.client = client;
        this.tglMulai = tglMulai;
        this.tglSelesai = tglSelesai;
        this.pimpinanProyek = pimpinanProyek;
        this.keterangan = keterangan;
    }

    // Getters and Setters
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getNamaProyek() {
        return namaProyek;
    }

    public void setNamaProyek(String namaProyek) {
        this.namaProyek = namaProyek;
    }

    public String getClient() {
        return client;
    }

    public void setClient(String client) {
        this.client = client;
    }

    public LocalDateTime getTglMulai() {
        return tglMulai;
    }

    public void setTglMulai(LocalDateTime tglMulai) {
        this.tglMulai = tglMulai;
    }

    public LocalDateTime getTglSelesai() {
        return tglSelesai;
    }

    public void setTglSelesai(LocalDateTime tglSelesai) {
        this.tglSelesai = tglSelesai;
    }

    public String getPimpinanProyek() {
        return pimpinanProyek;
    }

    public void setPimpinanProyek(String pimpinanProyek) {
        this.pimpinanProyek = pimpinanProyek;
    }

    public String getKeterangan() {
        return keterangan;
    }

    public void setKeterangan(String keterangan) {
        this.keterangan = keterangan;
    }

    public Set<ProyekLokasi> getProyekLokasi() {
        return proyekLokasi;
    }

    public void setProyekLokasi(Set<ProyekLokasi> proyekLokasi) {
        this.proyekLokasi = proyekLokasi;
    }
}
