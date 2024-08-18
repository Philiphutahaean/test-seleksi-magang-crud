package com.example.restapi.model;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import java.util.Set;

@Entity
@Table(name = "lokasi")
public class Lokasi {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
     @Column(name = "nama_lokasi", nullable = false)
    private String namaLokasi;

    @Column(nullable = false)
    private String negara;

    @Column(nullable = false)
    private String provinsi;

    @Column(nullable = false)
    private String kota;

    @OneToMany(mappedBy = "lokasi")
    private Set<ProyekLokasi> proyekLokasi;

		public void setId(Long id) {
			this.id = id;
		}

    public Long getId() {
      return id;
  }
  
  
  public String getNamaLokasi() {
      return namaLokasi;
  }
  
  public void setNamaLokasi(String namaLokasi) {
      this.namaLokasi = namaLokasi;
  }
  
  public String getNegara() {
      return negara;
  }
  
  public void setNegara(String negara) {
      this.negara = negara;
  }
  
  public String getProvinsi() {
      return provinsi;
  }
  
  public void setProvinsi(String provinsi) {
      this.provinsi = provinsi;
  }
  
  public String getKota() {
      return kota;
  }
  
  public void setKota(String kota) {
      this.kota = kota;
  }
  
}
