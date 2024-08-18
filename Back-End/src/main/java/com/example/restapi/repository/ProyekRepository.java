package com.example.restapi.repository;

import com.example.restapi.model.Proyek;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProyekRepository extends JpaRepository<Proyek, Long> {
}
