package com.example.restapi.service;

import com.example.restapi.model.Lokasi;
import com.example.restapi.repository.LokasiRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class LokasiService {

    @Autowired
    private LokasiRepository lokasiRepository;

    public List<Lokasi> findAll() {
        return lokasiRepository.findAll();
    }

    public Optional<Lokasi> findById(Long id) {
        return lokasiRepository.findById(id);
    }

    public Lokasi save(Lokasi lokasi) {
        return lokasiRepository.save(lokasi);
    }

    public void deleteById(Long id) {
        lokasiRepository.deleteById(id);
    }
}
