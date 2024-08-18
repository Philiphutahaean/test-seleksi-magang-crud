package com.example.restapi.service;

import com.example.restapi.model.Proyek;
import com.example.restapi.repository.ProyekRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class ProyekService {

    @Autowired
    private ProyekRepository proyekRepository;

    public List<Proyek> findAll() {
        return proyekRepository.findAll();
    }

    public Optional<Proyek> findById(Long id) {
        return proyekRepository.findById(id);
    }

    public Proyek save(Proyek proyek) {
        return proyekRepository.save(proyek);
    }

    public void deleteById(Long id) {
        proyekRepository.deleteById(id);
    }
}
