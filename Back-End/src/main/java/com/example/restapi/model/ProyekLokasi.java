package com.example.restapi.model;

import java.util.Objects;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.IdClass;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.Table;
import java.io.Serializable;

@Entity
@Table(name = "proyek_lokasi")
@IdClass(ProyekLokasiId.class)
public class ProyekLokasi implements Serializable {

    @Id
    @ManyToOne
    @JoinColumn(name = "proyek_id", referencedColumnName = "id", insertable = false, updatable = false)
    private Proyek proyek;

    @Id
    @ManyToOne
    @JoinColumn(name = "lokasi_id", referencedColumnName = "id", insertable = false, updatable = false)
    private Lokasi lokasi;

    // Constructors
    public ProyekLokasi() {}

    public ProyekLokasi(Proyek proyek, Lokasi lokasi) {
        this.proyek = proyek;
        this.lokasi = lokasi;
    }

    // Getters and Setters
    public Proyek getProyek() {
        return proyek;
    }

    public void setProyek(Proyek proyek) {
        this.proyek = proyek;
    }

    public Lokasi getLokasi() {
        return lokasi;
    }

    public void setLokasi(Lokasi lokasi) {
        this.lokasi = lokasi;
    }

    // Equals and HashCode
    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        ProyekLokasi that = (ProyekLokasi) o;
        return proyek.equals(that.proyek) && lokasi.equals(that.lokasi);
    }

    @Override
    public int hashCode() {
        return Objects.hash(proyek, lokasi);
    }

    public void setId(ProyekLokasiId id) {

      throw new UnsupportedOperationException("Unimplemented method 'setId'");
    }
}
