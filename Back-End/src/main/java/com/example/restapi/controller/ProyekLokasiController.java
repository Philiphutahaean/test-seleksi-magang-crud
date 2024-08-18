package com.example.restapi.controller;

import com.example.restapi.model.ProyekLokasi;
import com.example.restapi.model.ProyekLokasiId;
import com.example.restapi.service.ProyekLokasiService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/api/proyek-lokasi")
public class ProyekLokasiController {

    @Autowired
    private ProyekLokasiService proyekLokasiService;

    @GetMapping
    public List<ProyekLokasi> getAllProyekLokasi() {
        return proyekLokasiService.findAll();
    }

    @GetMapping("/{id}")
    public ResponseEntity<ProyekLokasi> getProyekLokasiById(@PathVariable("id") ProyekLokasiId id) {
        Optional<ProyekLokasi> proyekLokasi = proyekLokasiService.findById(id);
        return proyekLokasi.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
    }

    @PostMapping
    public ProyekLokasi createProyekLokasi(@RequestBody ProyekLokasi proyekLokasi) {
        return proyekLokasiService.save(proyekLokasi);
    }

    @PutMapping("/{id}")
    public ResponseEntity<ProyekLokasi> updateProyekLokasi(@PathVariable("id") ProyekLokasiId id, @RequestBody ProyekLokasi proyekLokasi) {
        if (!proyekLokasiService.findById(id).isPresent()) {
            return ResponseEntity.notFound().build();
        }
        proyekLokasi.setId(id);
        return ResponseEntity.ok(proyekLokasiService.save(proyekLokasi));
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProyekLokasi(@PathVariable("id") ProyekLokasiId id) {
        if (!proyekLokasiService.findById(id).isPresent()) {
            return ResponseEntity.notFound().build();
        }
        proyekLokasiService.deleteById(id);
        return ResponseEntity.noContent().build();
    }
}
