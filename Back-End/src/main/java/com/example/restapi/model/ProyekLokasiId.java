package com.example.restapi.model;

import java.io.Serializable;
import java.util.Objects;

public class ProyekLokasiId implements Serializable {

    private Long proyek;
    private Long lokasi;

    public ProyekLokasiId() {}

    public ProyekLokasiId(Long proyek, Long lokasi) {
        this.proyek = proyek;
        this.lokasi = lokasi;
    }

    public Long getProyek() {
        return proyek;
    }

    public void setProyek(Long proyek) {
        this.proyek = proyek;
    }

    public Long getLokasi() {
        return lokasi;
    }

    public void setLokasi(Long lokasi) {
        this.lokasi = lokasi;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        ProyekLokasiId that = (ProyekLokasiId) o;
        return Objects.equals(proyek, that.proyek) &&
               Objects.equals(lokasi, that.lokasi);
    }

    @Override
    public int hashCode() {
        return Objects.hash(proyek, lokasi);
    }
}
