    package com.example.restapi.controller;

    import com.example.restapi.model.Lokasi;
    import com.example.restapi.service.LokasiService;
    import org.springframework.beans.factory.annotation.Autowired;
    import org.springframework.http.ResponseEntity;
    import org.springframework.web.bind.annotation.*;

    import java.util.List;
    import java.util.Optional;

    @RestController
    @RequestMapping("/api/lokasi")
    public class LokasiController {

        @Autowired
        private LokasiService lokasiService;

        @GetMapping
        public List<Lokasi> getAllLokasi() {
            return lokasiService.findAll();
        }

        @GetMapping("/{id}")
        public ResponseEntity<Lokasi> getLokasiById(@PathVariable Long id) {
            Optional<Lokasi> lokasi = lokasiService.findById(id);
            return lokasi.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
        }

        @PostMapping
        public ResponseEntity<Lokasi> createLokasi(@RequestBody Lokasi lokasi) {
            Lokasi savedLokasi = lokasiService.save(lokasi);
            return ResponseEntity.ok(savedLokasi);
        }

        @PutMapping("/{id}")
        public ResponseEntity<Lokasi> updateLokasi(@PathVariable Long id, @RequestBody Lokasi lokasi) {
            if (!lokasiService.findById(id).isPresent()) {
                return ResponseEntity.notFound().build();
            }
            lokasi.setId(id);
            return ResponseEntity.ok(lokasiService.save(lokasi));
        }

        @DeleteMapping("/{id}")
        public ResponseEntity<Void> deleteLokasi(@PathVariable Long id) {
            if (!lokasiService.findById(id).isPresent()) {
                return ResponseEntity.notFound().build();
            }
            lokasiService.deleteById(id);
            return ResponseEntity.noContent().build();
        }
    }
