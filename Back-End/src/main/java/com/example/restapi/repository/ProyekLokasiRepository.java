package com.example.restapi.repository;

import com.example.restapi.model.ProyekLokasi;
import com.example.restapi.model.ProyekLokasiId;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProyekLokasiRepository extends JpaRepository<ProyekLokasi, ProyekLokasiId> {
}
