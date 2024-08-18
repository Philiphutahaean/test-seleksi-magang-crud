package com.example.restapi.controller;

import com.example.restapi.model.Proyek;
import com.example.restapi.service.ProyekService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/api/proyek")
public class ProyekController {

    @Autowired
    private ProyekService proyekService;

    @GetMapping
    public List<Proyek> getAllProyek() {
        return proyekService.findAll();
    }

    @GetMapping("/{id}")
    public ResponseEntity<Proyek> getProyekById(@PathVariable Long id) {
        Optional<Proyek> proyek = proyekService.findById(id);
        return proyek.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
    }

    @PostMapping
    public Proyek createProyek(@RequestBody Proyek proyek) {
        return proyekService.save(proyek);
    }

    @PutMapping("/{id}")
    public ResponseEntity<Proyek> updateProyek(@PathVariable Long id, @RequestBody Proyek proyek) {
        if (!proyekService.findById(id).isPresent()) {
            return ResponseEntity.notFound().build();
        }
        proyek.setId(id);
        return ResponseEntity.ok(proyekService.save(proyek));
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProyek(@PathVariable Long id) {
        if (!proyekService.findById(id).isPresent()) {
            return ResponseEntity.notFound().build();
        }
        proyekService.deleteById(id);
        return ResponseEntity.noContent().build();
    }
}
